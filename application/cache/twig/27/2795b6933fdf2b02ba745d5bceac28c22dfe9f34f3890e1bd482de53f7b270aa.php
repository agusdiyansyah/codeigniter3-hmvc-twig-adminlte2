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
            'css' => array($this, 'block_css'),
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
        // line 3
        $context["title"] = "Dashboard";
        // line 4
        $context["page"] = "Agus diyansyah";
        // line 5
        $context["subpage"] = "Admin";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        // line 8
        echo "    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["vendor"]) ? $context["vendor"] : null), "html", null, true);
        echo "jvectormap/jquery-jvectormap-1.2.2.css\">
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
";
    }

    // line 17
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
        return array (  57 => 17,  52 => 14,  49 => 13,  43 => 9,  40 => 8,  37 => 7,  33 => 1,  31 => 5,  29 => 4,  27 => 3,  11 => 1,);
    }
}
/* {% extends "template/master.html" %}*/
/* */
/* {% set title = "Dashboard" %}*/
/* {% set page = "Agus diyansyah" %}*/
/* {% set subpage = "Admin" %}*/
/* */
/* {% block css %}*/
/*     <!-- jvectormap -->*/
/*     <link rel="stylesheet" href="{{ vendor }}jvectormap/jquery-jvectormap-1.2.2.css">*/
/* {% endblock %}*/
/* */
/* */
/* {% block content %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block js %}*/
/* {% endblock %}*/
/* */
