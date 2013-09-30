<?php

/* ::base.html.twig */
class __TwigTemplate_595a2553cbd081aa1dfab1ea5bb5f7de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  64 => 10,  59 => 6,  47 => 12,  42 => 10,  35 => 7,  33 => 6,  23 => 1,  213 => 80,  210 => 79,  207 => 78,  202 => 60,  195 => 36,  189 => 32,  183 => 29,  176 => 25,  173 => 24,  171 => 23,  166 => 20,  163 => 19,  156 => 40,  154 => 19,  151 => 18,  149 => 17,  144 => 15,  134 => 7,  131 => 6,  125 => 83,  119 => 76,  111 => 72,  105 => 70,  103 => 69,  95 => 63,  93 => 62,  90 => 61,  88 => 60,  84 => 58,  78 => 57,  74 => 55,  61 => 52,  56 => 51,  53 => 5,  46 => 48,  40 => 44,  129 => 45,  123 => 78,  112 => 39,  108 => 38,  102 => 35,  94 => 29,  83 => 27,  79 => 26,  73 => 23,  65 => 53,  54 => 15,  50 => 49,  44 => 11,  37 => 6,  34 => 5,  29 => 5,  27 => 51,  25 => 3,);
    }
}
