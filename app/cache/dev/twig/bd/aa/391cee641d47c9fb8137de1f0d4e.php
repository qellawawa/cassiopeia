<?php

/* ::base.html.twig */
class __TwigTemplate_bdaa391cee641d47c9fb8137de1f0d4e extends Twig_Template
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
        return array (  23 => 1,  129 => 43,  65 => 15,  237 => 139,  233 => 138,  226 => 135,  205 => 117,  184 => 99,  126 => 45,  118 => 41,  110 => 36,  84 => 24,  76 => 18,  175 => 113,  172 => 112,  104 => 49,  100 => 48,  53 => 5,  58 => 14,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 136,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 115,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 33,  71 => 20,  67 => 20,  63 => 15,  59 => 6,  201 => 92,  196 => 90,  183 => 116,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 94,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 10,  94 => 27,  89 => 20,  85 => 43,  75 => 17,  68 => 16,  56 => 13,  87 => 26,  28 => 3,  38 => 6,  25 => 3,  21 => 2,  24 => 3,  31 => 3,  26 => 2,  19 => 1,  93 => 30,  88 => 44,  78 => 36,  46 => 10,  44 => 11,  27 => 24,  79 => 24,  72 => 17,  69 => 11,  47 => 12,  40 => 9,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 39,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 32,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 13,  52 => 12,  50 => 12,  43 => 10,  41 => 5,  35 => 7,  32 => 5,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 76,  125 => 44,  122 => 43,  116 => 41,  112 => 37,  109 => 34,  106 => 35,  103 => 32,  99 => 31,  95 => 50,  92 => 46,  86 => 28,  82 => 22,  80 => 23,  73 => 21,  64 => 10,  60 => 14,  57 => 12,  54 => 13,  51 => 14,  48 => 11,  45 => 8,  42 => 10,  39 => 7,  36 => 5,  33 => 6,  30 => 5,);
    }
}
