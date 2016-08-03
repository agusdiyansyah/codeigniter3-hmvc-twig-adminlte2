<?php

/* dashboard.html */
class __TwigTemplate_099757d3b5c20f7aab8df096fa11ac6598200cc1da143e447eb4676969676e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/master.html", "dashboard.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        // line 4
        echo "    dashboard
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Hi, my name is ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo " i'm ";
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : null), "html", null, true);
        echo " years old.</h1>
    <ul>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 11
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul>
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
        return array (  61 => 13,  52 => 11,  48 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "template/master.html" %}*/
/* */
/* {% block title %}*/
/*     dashboard*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1>Hi, my name is {{name | upper}} i'm {{age}} years old.</h1>*/
/*     <ul>*/
/*         {% for data in users %}*/
/*             <li>{{ data.name }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
