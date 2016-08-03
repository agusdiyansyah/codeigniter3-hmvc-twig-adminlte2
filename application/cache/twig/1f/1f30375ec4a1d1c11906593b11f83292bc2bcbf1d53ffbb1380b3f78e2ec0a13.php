<?php

/* template/master.html */
class __TwigTemplate_5c8022e8f1727f7423d210f5748d9cd917fcdb1594b9ee8260f9db09efc14bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["vendor"] = ((isset($context["BASE"]) ? $context["BASE"] : null) . "gudang/vendor/");
        // line 2
        $context["css"] = ((isset($context["BASE"]) ? $context["BASE"] : null) . "gudang/admin/css/");
        // line 3
        $context["js"] = ((isset($context["BASE"]) ? $context["BASE"] : null) . "gudang/admin/js/");
        // line 4
        $context["img"] = ((isset($context["BASE"]) ? $context["BASE"] : null) . "gudang/admin/img/");
        // line 5
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>

        <!-- Meta -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

        <!-- Css Autoload -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["vendor"]) ? $context["vendor"] : null), "html", null, true);
        echo "bootstrap/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">

        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["css"]) ? $context["css"] : null), "html", null, true);
        echo "skins/_all-skins.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["css"]) ? $context["css"] : null), "html", null, true);
        echo "AdminLTE.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["css"]) ? $context["css"] : null), "html", null, true);
        echo "master.css\">

        ";
        // line 25
        $this->displayBlock('css', $context, $blocks);
        // line 27
        echo "    </head>
    <body class=\"hold-transition skin-blue sidebar-mini\">

        <div class=\"wrapper\">

            <header class=\"main-header\">

                <!-- Logo -->
                <a href=\"index2.html\" class=\"logo\">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class=\"logo-mini\"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class=\"logo-lg\"><b>Admin</b>LTE</span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                ";
        // line 43
        $this->loadTemplate("template/navbar.html", "template/master.html", 43)->display($context);
        // line 44
        echo "            </header>
            <!-- Left side column. contains the logo and sidebar -->
            ";
        // line 46
        $this->loadTemplate("template/sidebar-left.html", "template/master.html", 46)->display($context);
        // line 47
        echo "
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo "
                        <small>";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["subpage"]) ? $context["subpage"] : null), "html", null, true);
        echo "</small>
                    </h1>
                    <!-- <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                        <li class=\"active\">Dashboard</li>
                    </ol> -->
                </section>

                <!-- Main content -->
                <section class=\"content\">
                    ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class=\"main-footer\">
                <div class=\"pull-right hidden-xs\">
                    <b>Version</b> 2.3.5
                </div>
                <strong>Copyright &copy; 2014-2016 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights
                reserved.
            </footer>

            <!-- Control Sidebar -->
            ";
        // line 80
        $this->loadTemplate("template/sidebar-right.html", "template/master.html", 80)->display($context);
        // line 81
        echo "            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
           <div class=\"control-sidebar-bg\"></div>

       </div>
       <!-- ./wrapper -->

       <!-- jQuery 2.2.3 -->
       <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["vendor"]) ? $context["vendor"] : null), "html", null, true);
        echo "jQuery/jquery-2.2.3.min.js\"></script>
       <!-- Bootstrap 3.3.6 -->
       <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["vendor"]) ? $context["vendor"] : null), "html", null, true);
        echo "bootstrap/js/bootstrap.min.js\"></script>
       <!-- FastClick -->
       <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["vendor"]) ? $context["vendor"] : null), "html", null, true);
        echo "fastclick/fastclick.js\"></script>
       <!-- AdminLTE App -->
       <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
        echo "app.min.js\"></script>

       <!-- SlimScroll 1.3.0 -->
       <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["vendor"]) ? $context["vendor"] : null), "html", null, true);
        echo "slimScroll/jquery.slimscroll.min.js\"></script>
       ";
        // line 100
        $this->displayBlock('js', $context, $blocks);
        // line 102
        echo "   </body>

</html>
";
    }

    // line 25
    public function block_css($context, array $blocks = array())
    {
        // line 26
        echo "        ";
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
        echo "                    ";
    }

    // line 100
    public function block_js($context, array $blocks = array())
    {
        // line 101
        echo "       ";
    }

    public function getTemplateName()
    {
        return "template/master.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 101,  199 => 100,  195 => 65,  192 => 64,  188 => 26,  185 => 25,  178 => 102,  176 => 100,  172 => 99,  166 => 96,  161 => 94,  156 => 92,  151 => 90,  140 => 81,  138 => 80,  122 => 66,  120 => 64,  107 => 54,  103 => 53,  95 => 47,  93 => 46,  89 => 44,  87 => 43,  69 => 27,  67 => 25,  62 => 23,  58 => 22,  54 => 21,  47 => 17,  38 => 11,  30 => 5,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set vendor = BASE~"gudang/vendor/" %}*/
/* {% set css = BASE~"gudang/admin/css/" %}*/
/* {% set js = BASE~"gudang/admin/js/" %}*/
/* {% set img = BASE~"gudang/admin/img/" %}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <title>{{title}}</title>*/
/* */
/*         <!-- Meta -->*/
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/* */
/*         <!-- Css Autoload -->*/
/*         <link rel="stylesheet" href="{{ vendor }}bootstrap/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">*/
/* */
/*         <link rel="stylesheet" href="{{ css }}skins/_all-skins.min.css">*/
/*         <link rel="stylesheet" href="{{ css }}AdminLTE.min.css">*/
/*         <link rel="stylesheet" href="{{ css }}master.css">*/
/* */
/*         {% block css %}*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body class="hold-transition skin-blue sidebar-mini">*/
/* */
/*         <div class="wrapper">*/
/* */
/*             <header class="main-header">*/
/* */
/*                 <!-- Logo -->*/
/*                 <a href="index2.html" class="logo">*/
/*                     <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*                     <span class="logo-mini"><b>A</b>LT</span>*/
/*                     <!-- logo for regular state and mobile devices -->*/
/*                     <span class="logo-lg"><b>Admin</b>LTE</span>*/
/*                 </a>*/
/* */
/*                 <!-- Header Navbar: style can be found in header.less -->*/
/*                 {% include "template/navbar.html" %}*/
/*             </header>*/
/*             <!-- Left side column. contains the logo and sidebar -->*/
/*             {% include "template/sidebar-left.html" %}*/
/* */
/*             <!-- Content Wrapper. Contains page content -->*/
/*             <div class="content-wrapper">*/
/*                 <!-- Content Header (Page header) -->*/
/*                 <section class="content-header">*/
/*                     <h1>*/
/*                         {{page}}*/
/*                         <small>{{subpage}}</small>*/
/*                     </h1>*/
/*                     <!-- <ol class="breadcrumb">*/
/*                         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*                         <li class="active">Dashboard</li>*/
/*                     </ol> -->*/
/*                 </section>*/
/* */
/*                 <!-- Main content -->*/
/*                 <section class="content">*/
/*                     {% block content %}*/
/*                     {% endblock %}*/
/*                 </section>*/
/*                 <!-- /.content -->*/
/*             </div>*/
/*             <!-- /.content-wrapper -->*/
/* */
/*             <footer class="main-footer">*/
/*                 <div class="pull-right hidden-xs">*/
/*                     <b>Version</b> 2.3.5*/
/*                 </div>*/
/*                 <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights*/
/*                 reserved.*/
/*             </footer>*/
/* */
/*             <!-- Control Sidebar -->*/
/*             {% include "template/sidebar-right.html" %}*/
/*             <!-- /.control-sidebar -->*/
/*             <!-- Add the sidebar's background. This div must be placed*/
/*            immediately after the control sidebar -->*/
/*            <div class="control-sidebar-bg"></div>*/
/* */
/*        </div>*/
/*        <!-- ./wrapper -->*/
/* */
/*        <!-- jQuery 2.2.3 -->*/
/*        <script src="{{ vendor }}jQuery/jquery-2.2.3.min.js"></script>*/
/*        <!-- Bootstrap 3.3.6 -->*/
/*        <script src="{{ vendor }}bootstrap/js/bootstrap.min.js"></script>*/
/*        <!-- FastClick -->*/
/*        <script src="{{ vendor }}fastclick/fastclick.js"></script>*/
/*        <!-- AdminLTE App -->*/
/*        <script src="{{ js }}app.min.js"></script>*/
/* */
/*        <!-- SlimScroll 1.3.0 -->*/
/*        <script src="{{ vendor }}slimScroll/jquery.slimscroll.min.js"></script>*/
/*        {% block js %}*/
/*        {% endblock %}*/
/*    </body>*/
/* */
/* </html>*/
/* */
