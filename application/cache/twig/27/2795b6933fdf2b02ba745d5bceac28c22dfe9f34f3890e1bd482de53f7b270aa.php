<?php

/* index.html */
class __TwigTemplate_4e1b27b48089817357d29dd327778740ea0275fe5a48617229311b33553d753d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/master.html", "index.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'pagesubtitle' => array($this, 'block_pagesubtitle'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template/master.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
        // line 7
        echo "    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["vendor"]) ? $context["vendor"] : null), "html", null, true);
        echo "jvectormap/jquery-jvectormap-1.2.2.css\">
";
    }

    // line 11
    public function block_pagetitle($context, array $blocks = array())
    {
    }

    // line 14
    public function block_pagesubtitle($context, array $blocks = array())
    {
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
";
    }

    // line 21
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  63 => 18,  60 => 17,  55 => 14,  50 => 11,  44 => 8,  41 => 7,  38 => 6,  33 => 3,  11 => 1,);
    }
}
/* {% extends "template/master.html" %}*/
/* */
/* {% block title %}*/
/* {% endblock %}*/
/* */
/* {% block css %}*/
/*     <!-- jvectormap -->*/
/*     <link rel="stylesheet" href="{{ vendor }}jvectormap/jquery-jvectormap-1.2.2.css">*/
/* {% endblock %}*/
/* */
/* {% block pagetitle %}*/
/* {% endblock %}*/
/* */
/* {% block pagesubtitle %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block js %}*/
/* {% endblock %}*/
/* */
