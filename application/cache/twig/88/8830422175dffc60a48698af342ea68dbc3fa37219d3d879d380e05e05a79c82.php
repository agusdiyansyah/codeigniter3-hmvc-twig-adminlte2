<?php

/* template/navbar-notifications-menu.html */
class __TwigTemplate_817d9043b74ff41e64291bcaaf9811e0f1be29b743d5522e6d0e7a319327ebb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-bell-o\"></i>
        <span class=\"label label-warning\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navbarNotifications"]) ? $context["navbarNotifications"] : null), "totalAllData", array(), "array"), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">You have ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navbarNotifications"]) ? $context["navbarNotifications"] : null), "totalAllData", array(), "array"), "html", null, true);
        echo " notifications</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["navbarNotifications"]) ? $context["navbarNotifications"] : null), "showData", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 12
            echo "                <li>
                    <a href=\"#\">
                        <i class=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "icon", array()), "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "task", array()), "html", null, true);
            echo "
                    </a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"#\">View all</a></li>
    </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "template/navbar-notifications-menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  45 => 14,  41 => 12,  37 => 11,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <li class="dropdown notifications-menu">*/
/*     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*         <i class="fa fa-bell-o"></i>*/
/*         <span class="label label-warning">{{navbarNotifications['totalAllData']}}</span>*/
/*     </a>*/
/*     <ul class="dropdown-menu">*/
/*         <li class="header">You have {{navbarNotifications['totalAllData']}} notifications</li>*/
/*         <li>*/
/*             <!-- inner menu: contains the actual data -->*/
/*             <ul class="menu">*/
/*                 {%for data in navbarNotifications['showData']%}*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         <i class="{{data.icon}}"></i> {{data.task}}*/
/*                     </a>*/
/*                 </li>*/
/*                 {%endfor%}*/
/*             </ul>*/
/*         </li>*/
/*         <li class="footer"><a href="#">View all</a></li>*/
/*     </ul>*/
/* </li>*/
/* */
