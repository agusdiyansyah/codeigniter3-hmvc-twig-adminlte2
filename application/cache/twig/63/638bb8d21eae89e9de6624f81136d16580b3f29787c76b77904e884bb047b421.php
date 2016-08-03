<?php

/* template/navbar.html */
class __TwigTemplate_0595b8e8265ec0454933aefc59bf6443ae4fe0a693245036b4393811e7eef4ef extends Twig_Template
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
        echo "<nav class=\"navbar navbar-fixed-top\">
    <!-- Sidebar toggle button-->
    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
            <!-- Messages: style can be found in dropdown.less-->
            ";
        // line 10
        if (( !twig_test_empty($this->getAttribute((isset($context["navbarMessages"]) ? $context["navbarMessages"] : null), "totalAllData", array(), "array")) &&  !twig_test_empty($this->getAttribute((isset($context["navbarMessages"]) ? $context["navbarMessages"] : null), "showData", array(), "array")))) {
            // line 11
            echo "                ";
            $this->loadTemplate("template/navbar-messages-menu.html", "template/navbar.html", 11)->display($context);
            // line 12
            echo "            ";
        }
        // line 13
        echo "            <!-- Notifications: style can be found in dropdown.less -->
            ";
        // line 14
        if (( !twig_test_empty($this->getAttribute((isset($context["navbarNotifications"]) ? $context["navbarNotifications"] : null), "totalAllData", array(), "array")) &&  !twig_test_empty($this->getAttribute((isset($context["navbarNotifications"]) ? $context["navbarNotifications"] : null), "showData", array(), "array")))) {
            // line 15
            echo "                ";
            $this->loadTemplate("template/navbar-notifications-menu.html", "template/navbar.html", 15)->display($context);
            // line 16
            echo "            ";
        }
        // line 17
        echo "            <!-- Tasks: style can be found in dropdown.less -->
            ";
        // line 18
        if (( !twig_test_empty($this->getAttribute((isset($context["navbarTasks"]) ? $context["navbarTasks"] : null), "totalAllData", array(), "array")) &&  !twig_test_empty($this->getAttribute((isset($context["navbarTasks"]) ? $context["navbarTasks"] : null), "showData", array(), "array")))) {
            // line 19
            echo "                ";
            $this->loadTemplate("template/navbar-tasks-menu.html", "template/navbar.html", 19)->display($context);
            // line 20
            echo "            ";
        }
        // line 21
        echo "            <!-- User Account: style can be found in dropdown.less -->
            <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
        echo "user2-160x160.jpg\" class=\"user-image\" alt=\"User Image\">
                    <span class=\"hidden-xs\">Alexander Pierce</span>
                </a>
                <ul class=\"dropdown-menu\">
                    <!-- User image -->
                    <li class=\"user-header\">
                        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
        echo "user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">

                        <p>
                            Alexander Pierce - Web Developer
                            <small>Member since Nov. 2012</small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class=\"user-body\">
                        <div class=\"row\">
                            <div class=\"col-xs-4 text-center\">
                                <a href=\"#\">Followers</a>
                            </div>
                            <div class=\"col-xs-4 text-center\">
                                <a href=\"#\">Sales</a>
                            </div>
                            <div class=\"col-xs-4 text-center\">
                                <a href=\"#\">Friends</a>
                            </div>
                        </div>
                        <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class=\"user-footer\">
                        <div class=\"pull-left\">
                            <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                        </div>
                        <div class=\"pull-right\">
                            <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
                <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
            </li>
        </ul>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "template/navbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  65 => 24,  60 => 21,  57 => 20,  54 => 19,  52 => 18,  49 => 17,  46 => 16,  43 => 15,  41 => 14,  38 => 13,  35 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }
}
/* <nav class="navbar navbar-fixed-top">*/
/*     <!-- Sidebar toggle button-->*/
/*     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*     </a>*/
/*     <!-- Navbar Right Menu -->*/
/*     <div class="navbar-custom-menu">*/
/*         <ul class="nav navbar-nav">*/
/*             <!-- Messages: style can be found in dropdown.less-->*/
/*             {% if navbarMessages['totalAllData'] is not empty and navbarMessages['showData'] is not empty %}*/
/*                 {% include "template/navbar-messages-menu.html" %}*/
/*             {% endif %}*/
/*             <!-- Notifications: style can be found in dropdown.less -->*/
/*             {% if navbarNotifications['totalAllData'] is not empty and navbarNotifications['showData'] is not empty%}*/
/*                 {% include "template/navbar-notifications-menu.html" %}*/
/*             {% endif %}*/
/*             <!-- Tasks: style can be found in dropdown.less -->*/
/*             {% if navbarTasks['totalAllData'] is not empty and navbarTasks['showData'] is not empty%}*/
/*                 {% include "template/navbar-tasks-menu.html" %}*/
/*             {% endif %}*/
/*             <!-- User Account: style can be found in dropdown.less -->*/
/*             <li class="dropdown user user-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                     <img src="{{ img }}user2-160x160.jpg" class="user-image" alt="User Image">*/
/*                     <span class="hidden-xs">Alexander Pierce</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                     <!-- User image -->*/
/*                     <li class="user-header">*/
/*                         <img src="{{ img }}user2-160x160.jpg" class="img-circle" alt="User Image">*/
/* */
/*                         <p>*/
/*                             Alexander Pierce - Web Developer*/
/*                             <small>Member since Nov. 2012</small>*/
/*                         </p>*/
/*                     </li>*/
/*                     <!-- Menu Body -->*/
/*                     <li class="user-body">*/
/*                         <div class="row">*/
/*                             <div class="col-xs-4 text-center">*/
/*                                 <a href="#">Followers</a>*/
/*                             </div>*/
/*                             <div class="col-xs-4 text-center">*/
/*                                 <a href="#">Sales</a>*/
/*                             </div>*/
/*                             <div class="col-xs-4 text-center">*/
/*                                 <a href="#">Friends</a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- /.row -->*/
/*                     </li>*/
/*                     <!-- Menu Footer-->*/
/*                     <li class="user-footer">*/
/*                         <div class="pull-left">*/
/*                             <a href="#" class="btn btn-default btn-flat">Profile</a>*/
/*                         </div>*/
/*                         <div class="pull-right">*/
/*                             <a href="#" class="btn btn-default btn-flat">Sign out</a>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <!-- Control Sidebar Toggle Button -->*/
/*             <li>*/
/*                 <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </nav>*/
/* */
