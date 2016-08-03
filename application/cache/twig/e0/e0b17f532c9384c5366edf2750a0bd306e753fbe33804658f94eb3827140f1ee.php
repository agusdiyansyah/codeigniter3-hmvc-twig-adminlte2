<?php

/* template/sidebar-left.html */
class __TwigTemplate_10012bcb8bad61afb20004afa818f326a8e82fe0719856e957834af4bf91aaec extends Twig_Template
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
        echo "<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
        <!-- Sidebar user panel -->
        <!-- <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
        echo "user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
                <p>Alexander Pierce</p>
                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
        </div> -->
        <!-- search form -->
        <!-- <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                <span class=\"input-group-btn\">
                    <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                    </button>
                </span>
            </div>
        </form> -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
            ";
        // line 27
        if ( !twig_test_empty((isset($context["dataMenu"]) ? $context["dataMenu"] : null))) {
            // line 28
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dataMenu"]) ? $context["dataMenu"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 29
                echo "                    <li class=\"header\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "label", array()), "html", null, true);
                echo "</li>
                    ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "menu", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 31
                    echo "                        <li class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "class", array()), "html", null, true);
                    echo " ";
                    if ( !twig_test_empty($this->getAttribute($context["data"], "submenu", array()))) {
                        echo " treeview ";
                    }
                    echo "\">
                            <a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "link", array()), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "icon", array()), "html", null, true);
                    echo "\"></i> <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
                    echo "</span>
                                ";
                    // line 34
                    if ( !twig_test_empty($this->getAttribute($context["data"], "submenu", array()))) {
                        // line 35
                        echo "                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                ";
                    }
                    // line 39
                    echo "                            </a>
                            ";
                    // line 40
                    if ( !twig_test_empty($this->getAttribute($context["data"], "submenu", array()))) {
                        // line 41
                        echo "                            <ul class=\"treeview-menu\">
                                ";
                        // line 42
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "submenu", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                            // line 43
                            echo "                                    <li class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "class", array()), "html", null, true);
                            echo "\"><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "link", array()), "html", null, true);
                            echo "\"><i class=\"fa fa-circle-o\"></i> ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
                            echo "</a></li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 45
                        echo "                            </ul>
                            ";
                    }
                    // line 47
                    echo "                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            ";
        }
        // line 51
        echo "        </ul>
  </section>
  <!-- /.sidebar -->
</aside>
";
    }

    public function getTemplateName()
    {
        return "template/sidebar-left.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 51,  135 => 50,  129 => 49,  122 => 47,  118 => 45,  105 => 43,  101 => 42,  98 => 41,  96 => 40,  93 => 39,  87 => 35,  85 => 34,  79 => 33,  75 => 32,  66 => 31,  62 => 30,  57 => 29,  52 => 28,  50 => 27,  27 => 7,  19 => 1,);
    }
}
/* <aside class="main-sidebar">*/
/*     <!-- sidebar: style can be found in sidebar.less -->*/
/*     <section class="sidebar">*/
/*         <!-- Sidebar user panel -->*/
/*         <!-- <div class="user-panel">*/
/*             <div class="pull-left image">*/
/*                 <img src="{{ img }}user2-160x160.jpg" class="img-circle" alt="User Image">*/
/*             </div>*/
/*             <div class="pull-left info">*/
/*                 <p>Alexander Pierce</p>*/
/*                 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*             </div>*/
/*         </div> -->*/
/*         <!-- search form -->*/
/*         <!-- <form action="#" method="get" class="sidebar-form">*/
/*             <div class="input-group">*/
/*                 <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*                 <span class="input-group-btn">*/
/*                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>*/
/*                     </button>*/
/*                 </span>*/
/*             </div>*/
/*         </form> -->*/
/*         <!-- /.search form -->*/
/*         <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*         <ul class="sidebar-menu">*/
/*             {%if dataMenu is not empty%}*/
/*                 {%for data in dataMenu%}*/
/*                     <li class="header">{{data.label}}</li>*/
/*                     {%for data in data.menu%}*/
/*                         <li class="{{data.class}} {%if data.submenu is not empty%} treeview {%endif%}">*/
/*                             <a href="{{data.link}}">*/
/*                                 <i class="fa {{data.icon}}"></i> <span>{{data.title}}</span>*/
/*                                 {%if data.submenu is not empty%}*/
/*                                     <span class="pull-right-container">*/
/*                                         <i class="fa fa-angle-left pull-right"></i>*/
/*                                     </span>*/
/*                                 {%endif%}*/
/*                             </a>*/
/*                             {%if data.submenu is not empty%}*/
/*                             <ul class="treeview-menu">*/
/*                                 {%for data in data.submenu%}*/
/*                                     <li class="{{data.class}}"><a href="{{data.link}}"><i class="fa fa-circle-o"></i> {{data.title}}</a></li>*/
/*                                 {%endfor%}*/
/*                             </ul>*/
/*                             {%endif%}*/
/*                         </li>*/
/*                     {%endfor%}*/
/*                 {%endfor%}*/
/*             {%endif%}*/
/*         </ul>*/
/*   </section>*/
/*   <!-- /.sidebar -->*/
/* </aside>*/
/* */
