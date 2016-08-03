<?php

/* template/navbar-tasks-menu.html */
class __TwigTemplate_a14de1c00e5290204fb330a8b2f39a3ef6d7a49acc7a073170db6ebebd6dd9c5 extends Twig_Template
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
        echo "<li class=\"dropdown tasks-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-flag-o\"></i>
        <span class=\"label label-danger\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navbarTasks"]) ? $context["navbarTasks"] : null), "totalAllData", array(), "array"), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">You have ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navbarTasks"]) ? $context["navbarTasks"] : null), "totalAllData", array(), "array"), "html", null, true);
        echo " tasks</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["navbarTasks"]) ? $context["navbarTasks"] : null), "showData", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 12
            echo "                <!-- Task item -->
                <li>
                    <a href=\"#\">
                        <h3>
                            ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "task", array()), "html", null, true);
            echo "
                            <small class=\"pull-right\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "progress", array()), "html", null, true);
            echo "%</small>
                        </h3>
                        <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "progress", array()), "html", null, true);
            echo "%\" role=\"progressbar\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "progress", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                <span class=\"sr-only\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "progress", array()), "html", null, true);
            echo "% Complete</span>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end task item -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </ul>
        </li>
        <li class=\"footer\">
            <a href=\"#\">View all tasks</a>
        </li>
    </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "template/navbar-tasks-menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  63 => 21,  57 => 20,  51 => 17,  47 => 16,  41 => 12,  37 => 11,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <li class="dropdown tasks-menu">*/
/*     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*         <i class="fa fa-flag-o"></i>*/
/*         <span class="label label-danger">{{navbarTasks['totalAllData']}}</span>*/
/*     </a>*/
/*     <ul class="dropdown-menu">*/
/*         <li class="header">You have {{navbarTasks['totalAllData']}} tasks</li>*/
/*         <li>*/
/*             <!-- inner menu: contains the actual data -->*/
/*             <ul class="menu">*/
/*                 {%for data in navbarTasks['showData']%}*/
/*                 <!-- Task item -->*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         <h3>*/
/*                             {{data.task}}*/
/*                             <small class="pull-right">{{data.progress}}%</small>*/
/*                         </h3>*/
/*                         <div class="progress xs">*/
/*                             <div class="progress-bar progress-bar-aqua" style="width: {{data.progress}}%" role="progressbar" aria-valuenow="{{data.progress}}" aria-valuemin="0" aria-valuemax="100">*/
/*                                 <span class="sr-only">{{data.progress}}% Complete</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </a>*/
/*                 </li>*/
/*                 <!-- end task item -->*/
/*                 {%endfor%}*/
/*             </ul>*/
/*         </li>*/
/*         <li class="footer">*/
/*             <a href="#">View all tasks</a>*/
/*         </li>*/
/*     </ul>*/
/* </li>*/
/* */
