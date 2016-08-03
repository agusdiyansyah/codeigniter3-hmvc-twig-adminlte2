<?php

/* template/navbar-messages-menu.html */
class __TwigTemplate_56ce5ab5aeddac9d7f42f2a1da1172b73c0a3d576560c35a011efe97a1f60ebf extends Twig_Template
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
        echo "<li class=\"dropdown messages-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-envelope-o\"></i>
        <span class=\"label label-success\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navbarMessages"]) ? $context["navbarMessages"] : null), "totalAllData", array(), "array"), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">You have ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navbarMessages"]) ? $context["navbarMessages"] : null), "totalAllData", array(), "array"), "html", null, true);
        echo " messages</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["navbarMessages"]) ? $context["navbarMessages"] : null), "showData", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 12
            echo "                <!-- start message -->
                <li>
                    <a href=\"#\">
                        <div class=\"pull-left\">
                            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, ((isset($context["img"]) ? $context["img"] : null) . $this->getAttribute($context["data"], "photo", array())), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">
                        </div>
                        <h4>
                            ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "from", array()), "html", null, true);
            echo "
                            <small>
                                <i class=\"fa fa-clock-o\"></i> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "time", array()), "html", null, true);
            echo "
                            </small>
                        </h4>
                        <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "msg", array()), "html", null, true);
            echo "</p>
                    </a>
                </li>
                <!-- end message -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
    </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "template/navbar-messages-menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  64 => 24,  58 => 21,  53 => 19,  47 => 16,  41 => 12,  37 => 11,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <li class="dropdown messages-menu">*/
/*     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*         <i class="fa fa-envelope-o"></i>*/
/*         <span class="label label-success">{{navbarMessages['totalAllData']}}</span>*/
/*     </a>*/
/*     <ul class="dropdown-menu">*/
/*         <li class="header">You have {{navbarMessages['totalAllData']}} messages</li>*/
/*         <li>*/
/*             <!-- inner menu: contains the actual data -->*/
/*             <ul class="menu">*/
/*                 {%for data in navbarMessages['showData']%}*/
/*                 <!-- start message -->*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         <div class="pull-left">*/
/*                             <img src="{{ img~data.photo }}" class="img-circle" alt="User Image">*/
/*                         </div>*/
/*                         <h4>*/
/*                             {{data.from}}*/
/*                             <small>*/
/*                                 <i class="fa fa-clock-o"></i> {{data.time}}*/
/*                             </small>*/
/*                         </h4>*/
/*                         <p>{{data.msg}}</p>*/
/*                     </a>*/
/*                 </li>*/
/*                 <!-- end message -->*/
/*                 {%endfor%}*/
/*             </ul>*/
/*         </li>*/
/*         <li class="footer"><a href="#">See All Messages</a></li>*/
/*     </ul>*/
/* </li>*/
/* */
