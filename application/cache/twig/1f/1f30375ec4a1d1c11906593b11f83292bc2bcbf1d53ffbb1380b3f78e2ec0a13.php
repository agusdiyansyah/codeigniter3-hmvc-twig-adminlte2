<?php

/* template/master.html */
class __TwigTemplate_5c8022e8f1727f7423d210f5748d9cd917fcdb1594b9ee8260f9db09efc14bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'webtitle' => array($this, 'block_webtitle'),
            'css' => array($this, 'block_css'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'pagesubtitle' => array($this, 'block_pagesubtitle'),
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
        <title>
            ";
        // line 12
        $this->displayBlock('webtitle', $context, $blocks);
        // line 13
        echo "        </title>

        <!-- Meta -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

        <!-- Css Autoload -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["vendor"]) ? $context["vendor"] : null), "html", null, true);
        echo "bootstrap/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">

        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["css"]) ? $context["css"] : null), "html", null, true);
        echo "skins/_all-skins.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["css"]) ? $context["css"] : null), "html", null, true);
        echo "AdminLTE.min.css\">

        ";
        // line 26
        $this->displayBlock('css', $context, $blocks);
        // line 28
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
        // line 44
        $this->loadTemplate("template/navbar.html", "template/master.html", 44)->display($context);
        // line 45
        echo "            </header>
            <!-- Left side column. contains the logo and sidebar -->
            ";
        // line 47
        $this->loadTemplate("template/sidebar.html", "template/master.html", 47)->display($context);
        // line 48
        echo "
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        ";
        // line 54
        $this->displayBlock('pagetitle', $context, $blocks);
        // line 55
        echo "                        <small>";
        $this->displayBlock('pagesubtitle', $context, $blocks);
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
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 67
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
        // line 81
        $this->loadTemplate("template/sidebar-right.html", "template/master.html", 81)->display($context);
        // line 82
        echo "            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
           <div class=\"control-sidebar-bg\"></div>

       </div>
       <!-- ./wrapper -->

       <!-- jQuery 2.2.3 -->
       <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["vendor"]) ? $context["vendor"] : null), "html", null, true);
        echo "jQuery/jquery-2.2.3.min.js\"></script>
       <!-- Bootstrap 3.3.6 -->
       <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["vendor"]) ? $context["vendor"] : null), "html", null, true);
        echo "bootstrap/js/bootstrap.min.js\"></script>
       <!-- FastClick -->
       <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["vendor"]) ? $context["vendor"] : null), "html", null, true);
        echo "fastclick/fastclick.js\"></script>
       <!-- AdminLTE App -->
       <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
        echo "app.min.js\"></script>

       <!-- SlimScroll 1.3.0 -->
       <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["vendor"]) ? $context["vendor"] : null), "html", null, true);
        echo "slimScroll/jquery.slimscroll.min.js\"></script>

       <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
       <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
        echo "pages/dashboard2.js\"></script>
       <!-- AdminLTE for demo purposes -->
       <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
        echo "demo.js\"></script>
       ";
        // line 106
        $this->displayBlock('js', $context, $blocks);
        // line 108
        echo "   </body>

</html>
";
    }

    // line 12
    public function block_webtitle($context, array $blocks = array())
    {
        echo " agus diyansyah ";
    }

    // line 26
    public function block_css($context, array $blocks = array())
    {
        // line 27
        echo "        ";
    }

    // line 54
    public function block_pagetitle($context, array $blocks = array())
    {
        echo " ";
    }

    // line 55
    public function block_pagesubtitle($context, array $blocks = array())
    {
        echo " ";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "                    ";
    }

    // line 106
    public function block_js($context, array $blocks = array())
    {
        // line 107
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
        return array (  231 => 107,  228 => 106,  224 => 66,  221 => 65,  215 => 55,  209 => 54,  205 => 27,  202 => 26,  196 => 12,  189 => 108,  187 => 106,  183 => 105,  178 => 103,  172 => 100,  166 => 97,  161 => 95,  156 => 93,  151 => 91,  140 => 82,  138 => 81,  122 => 67,  120 => 65,  106 => 55,  104 => 54,  96 => 48,  94 => 47,  90 => 45,  88 => 44,  70 => 28,  68 => 26,  63 => 24,  59 => 23,  52 => 19,  44 => 13,  42 => 12,  33 => 5,  31 => 4,  29 => 3,  27 => 2,  25 => 1,);
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
/*         <title>*/
/*             {% block webtitle %} agus diyansyah {% endblock %}*/
/*         </title>*/
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
/*             {% include "template/sidebar.html" %}*/
/* */
/*             <!-- Content Wrapper. Contains page content -->*/
/*             <div class="content-wrapper">*/
/*                 <!-- Content Header (Page header) -->*/
/*                 <section class="content-header">*/
/*                     <h1>*/
/*                         {% block pagetitle %} {% endblock %}*/
/*                         <small>{% block pagesubtitle %} {% endblock %}</small>*/
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
/* */
/*        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->*/
/*        <script src="{{ js }}pages/dashboard2.js"></script>*/
/*        <!-- AdminLTE for demo purposes -->*/
/*        <script src="{{ js }}demo.js"></script>*/
/*        {% block js %}*/
/*        {% endblock %}*/
/*    </body>*/
/* */
/* </html>*/
/* */
