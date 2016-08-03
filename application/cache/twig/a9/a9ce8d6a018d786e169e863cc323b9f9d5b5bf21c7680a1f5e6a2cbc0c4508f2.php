<?php

/* hello.html */
class __TwigTemplate_e64bde4385d2d1bb8f653764ea3549f1382bfccb957ec275023159e632b2e1f9 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title></title>
    </head>
    <body>
        <h1>Hello my name is ";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo " i'm ";
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : null), "html", null, true);
        echo " years old.</h1>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 10
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo " is ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "age", array()), "html", null, true);
            echo " years old. <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "2016-12-01", "+1 year +1 day +1 month"), "j F Y"), "html", null, true);
        echo "
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "hello.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  38 => 10,  34 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title></title>*/
/*     </head>*/
/*     <body>*/
/*         <h1>Hello my name is {{name | upper}} i'm {{age}} years old.</h1>*/
/*         {% for data in users %}*/
/*             {{data.name}} is {{data.age}} years old. <br>*/
/*         {% endfor %}*/
/*         {{"2016-12-01" | date_modify("+1 year +1 day +1 month") | date("j F Y")}}*/
/*     </body>*/
/* </html>*/
/* */
