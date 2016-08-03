<?php

/* dashboard.html */
class __TwigTemplate_50ff66897f51a94d7e83cb74bd7765abe8a4885bbd401f174d540602e87f88ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("../master.html", "dashboard.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "../master.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    dashboard
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>agus diyansyah</h1>
";
    }

    public function getTemplateName()
    {
        return "dashboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "../master.html" %}*/
/* */
/* {% block title %}*/
/*     dashboard*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1>agus diyansyah</h1>*/
/* {% endblock %}*/
/* */
