<?php

/* master.html */
class __TwigTemplate_0daec87d481cc87d14b990f4fe7160ef345af0a85e4c29490ab91d6742bfab7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "                agus diyansyah
            ";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "master.html";
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  51 => 12,  46 => 7,  43 => 6,  37 => 15,  35 => 12,  30 => 9,  28 => 6,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>*/
/*             {% block title %}*/
/*                 agus diyansyah*/
/*             {% endblock %}*/
/*         </title>*/
/*     </head>*/
/*     <body>*/
/*         {% block content %}*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */