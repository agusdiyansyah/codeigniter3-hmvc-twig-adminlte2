<?php
/**
 * Part of CodeIgniter Simple and Secure Twig
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/codeigniter-ss-twig
 */

// If you don't use Composer, uncomment below

require_once APPPATH . 'third_party/Twig/Autoloader.php';
Twig_Autoloader::register();


class Twig
{
	private $config = [];

	public $base = "";
	public $extention = ".html";
	public $debug = false;
	public $cache = true;

	public $defaultParams = array();
	public $params = array();

	private $functions_asis = array('base_url', 'site_url');
	private $functions_safe = array('form_open', 'form_close', 'form_error', 'set_value', 'form_hidden');

	/**
	 * @var bool Whether functions are added or not
	 */
	private $functions_added = FALSE;

	/**
	 * @var Twig_Environment
	 */
	private $twig;

	/**
	 * @var Twig_Loader_Filesystem
	 */
	private $loader;

	public function __construct($params = [])
	{
		// default config
		$this->config = array(
			'paths' => [VIEWPATH],
			'cache' => APPPATH . 'cache/twig',
		);

		$this->config = array_merge($this->config, $params);

		if (isset($params['functions']))
		{
			$this->functions_asis = array_unique(
				array_merge($this->functions_asis, $params['functions'])
			);
		}
		if (isset($params['functions_safe']))
		{
			$this->functions_safe = array_unique(
				array_merge($this->functions_safe, $params['functions_safe'])
			);
		}
	}

	public function cache ($bol = false) {
		if ($bol) {
			$this->cache = true;
		}
		return $this;
	}

	protected function resetTwig()
	{
		$this->twig = null;
		$this->createTwig();
	}

	protected function createTwig()
	{
		// $this->twig is singleton
		if ($this->twig !== null)
		{
			return;
		}

		// if (ENVIRONMENT === 'production')
		// {
		// 	$debug = FALSE;
		// }
		// else
		// {
		// 	$debug = TRUE;
		// }

		if ($this->loader === null)
		{
			$this->loader = new \Twig_Loader_Filesystem($this->config['paths']);
		}

		$config = array(
			'debug'      => $this->debug,
			'autoescape' => TRUE,
			'auto_reload' => TRUE,
		);

		if ($this->cache) {
			$config += array("cache" => $this->config['cache']);
		}

		$twig = new \Twig_Environment($this->loader, $config);


		if ($this->debug)
		{
			$twig->addExtension(new \Twig_Extension_Debug());
		}

		$this->twig = $twig;
	}

	public function addPath ($path = "", $namespace = "") {
		if ($this->loader === null)
		{
			$this->loader = new \Twig_Loader_Filesystem($this->config['paths']);
		}
		if (!empty($path)) {
			if (empty($namespace)) {
				$this->loader->prependPath($path);
			} else {
				$this->loader->prependPath($path, $namespace);
			}

		}
		return $this;
	}

	protected function setLoader($loader)
	{
		$this->loader = $loader;
		return $this;
	}

	/**
	 * Registers a Global
	 *
	 * @param string $name  The global name
	 * @param mixed  $value The global value
	 */
	public function addGlobal($name, $value)
	{
		$this->createTwig();
		$this->twig->addGlobal($name, $value);
	}

	/**
	 * Renders Twig Template and Set Output
	 *
	 * @param string $view   Template filename without `.twig`
	 * @param array  $params Array of parameters to pass to the template
	 */
	public function display($view, $params = [])
	{
		$CI =& get_instance();
		$CI->output->set_output($this->render($view, $params));
	}

	/**
	 * Renders Twig Template and Returns as String
	 *
	 * @param string $view   Template filename without `.twig`
	 * @param array  $params Array of parameters to pass to the template
	 * @return string
	 */
	public function render($view, $params = array())
	{
		$this->createTwig();
		// We call addFunctions() here, because we must call addFunctions()
		// after loading CodeIgniter functions in a controller.
		$this->addFunctions();

		$md5filter = new \Twig_SimpleFilter("md5", function($str){
			return md5($str);
		});

		$this->twig->addFilter($md5filter);

		// $lexer = new \Twig_Lexer($this->twig, array(
		// 	'tag_block' => array('{{', '}}'),
        //     'tag_variable' => array('{', '}')
		// ));
		//
		// $this->twig->setLexer($lexer);

		// $view = $view . '.twig';
		$var = array (
			"BASE" => $this->base
		);
		$data = $var + $this->params + $this->defaultParams + $params;
		echo $this->twig->render($view.$this->extention, $data);
		return true;
		// return $this->twig->render($view, $params);
	}

	private function params ($params) {
		$this->params = $params;
		return $this;
	}

	protected function addFunctions()
	{
		// Runs only once
		if ($this->functions_added)
		{
			return;
		}

		// as is functions
		foreach ($this->functions_asis as $function)
		{
			if (function_exists($function))
			{
				$this->twig->addFunction(
					new \Twig_SimpleFunction(
						$function,
						$function
					)
				);
			}
		}

		// safe functions
		foreach ($this->functions_safe as $function)
		{
			if (function_exists($function))
			{
				$this->twig->addFunction(
					new \Twig_SimpleFunction(
						$function,
						$function,
						['is_safe' => ['html']]
					)
				);
			}
		}

		// customized functions
		if (function_exists('anchor'))
		{
			$this->twig->addFunction(
				new \Twig_SimpleFunction(
					'anchor',
					[$this, 'safe_anchor'],
					['is_safe' => ['html']]
				)
			);
		}

		$this->functions_added = TRUE;
	}

	/**
	 * @param string $uri
	 * @param string $title
	 * @param array  $attributes [changed] only array is acceptable
	 * @return string
	 */
	public function safe_anchor($uri = '', $title = '', $attributes = [])
	{
		$uri = html_escape($uri);
		$title = html_escape($title);

		$new_attr = [];
		foreach ($attributes as $key => $val)
		{
			$new_attr[html_escape($key)] = html_escape($val);
		}

		return anchor($uri, $title, $new_attr);
	}

	/**
	 * @return \Twig_Environment
	 */
	public function getTwig()
	{
		$this->createTwig();
		return $this->twig;
	}
}
