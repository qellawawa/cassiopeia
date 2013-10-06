<?php

/* CassioEvalBundle:Example/Default:examples.html.twig */
class __TwigTemplate_a2ee11ef8730f98dec1562b24a3290b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MainBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["section"] = "examples";
        // line 24
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
        <div class=\"span12\">
            <ul>
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("examples_dependent_selects");
        echo "\">Selects dependientes</a> - <a href=\"http://showmethecode.es/php/symfony/symfony2-selects-dependientes-mediante-eventos/\" title=\"Symfony2: Selects dependientes mediante eventos\">Artículo</a></li>
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("examples_userpassword");
        echo "\">UserPassword Constraint</a> - <a href=\"http://showmethecode.es/php/symfony/userpassword-constraint/\" title=\"Symfony2: UserPassword Constraint\">Artículo</a></li>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("examples_impersonating");
        echo "\">Impersonating</a> - <a href=\"http://showmethecode.es/php/symfony/impersonating-hacerse-pasar-por-otro-usuario-en-symfony2/\" title=\"Symfony2: Impersonating – Hacerse pasar por otro usuario\">Artículo</a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("examples_responses");
        echo "\">Tipos de respuesta</a> - <a href=\"http://showmethecode.es/php/symfony/symfony2-response-responseredirect-jsonresponse-y-streamedresponse/\" title=\"Symfony2: Response, ResponseRedirect, JsonResponse y StreamedResponse\">Artículo</a></li>
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("examples_events");
        echo "\">Eventos</a> - <a href=\"http://showmethecode.es/php/symfony/symfony2-custom-events/\" title=\"Symfony2: Custom Events\">Artículo</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("examples_forms");
        echo "\">Embeber formularios con relaciones</a> - <a href=\"http://showmethecode.es/php/symfony/symfony2-embeber-formularios-con-relaciones/\" title=\"Symfony2: Embeber formularios con Relaciones\">Artículo</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("examples_virtual_forms");
        echo "\">Opción virtual en formularios</a> - <a href=\"http://showmethecode.es/php/symfony/symfony2-opcion-virtual-en-los-formularios/\" title=\"Symfony2: Opción virtual en los formularios\">Artículo</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("examples_query_random_order");
        echo "\">Doctrine2: Ordenar aleatoriamente</a> - <a href=\"http://showmethecode.es/php/doctrine2/doctrine2-ordenar-aleatoriamente/\" title=\"Doctrine2: Ordenar aleatoriamente\">Artículo</a></li>
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("examples_query_subqueries");
        echo "\">Doctrine2: Subconsultas</a> - <a href=\"http://showmethecode.es/php/doctrine2/doctrine2-subconsultas/\" title=\"Doctrine2: Subconsultas\">Artículo</a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("examples_virtual_forms_fish_create");
        echo "\">Form Extensions</a> - <a href=\"http://showmethecode.es/php/symfony/symfony2-form-extensions/\" title=\"Symfony2: Form Extensions\">Artículo</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CassioEvalBundle:Example/Default:examples.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  58 => 13,  104 => 49,  100 => 48,  23 => 1,  213 => 80,  210 => 79,  207 => 78,  202 => 60,  195 => 36,  134 => 7,  90 => 61,  84 => 58,  65 => 53,  53 => 11,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 76,  102 => 32,  71 => 32,  67 => 20,  63 => 19,  59 => 14,  38 => 6,  28 => 60,  26 => 3,  201 => 92,  196 => 90,  183 => 29,  171 => 23,  166 => 20,  163 => 19,  158 => 67,  156 => 40,  151 => 18,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 70,  91 => 27,  62 => 23,  49 => 10,  94 => 28,  89 => 20,  85 => 43,  75 => 17,  68 => 16,  56 => 13,  24 => 4,  87 => 26,  31 => 4,  25 => 3,  21 => 2,  19 => 1,  93 => 62,  88 => 44,  78 => 36,  46 => 10,  44 => 10,  27 => 24,  79 => 18,  72 => 17,  69 => 11,  47 => 11,  40 => 9,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 6,  123 => 78,  120 => 40,  115 => 43,  111 => 72,  108 => 50,  101 => 32,  98 => 31,  96 => 47,  83 => 25,  74 => 55,  66 => 24,  55 => 15,  52 => 12,  50 => 14,  43 => 10,  41 => 8,  35 => 6,  32 => 5,  29 => 22,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 32,  187 => 84,  182 => 66,  176 => 25,  173 => 24,  168 => 72,  164 => 59,  162 => 57,  154 => 19,  149 => 17,  147 => 58,  144 => 15,  141 => 48,  133 => 55,  130 => 41,  125 => 83,  122 => 43,  116 => 41,  112 => 51,  109 => 34,  106 => 36,  103 => 69,  99 => 31,  95 => 50,  92 => 46,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 15,  60 => 14,  57 => 12,  54 => 13,  51 => 14,  48 => 11,  45 => 9,  42 => 9,  39 => 9,  36 => 5,  33 => 6,  30 => 61,);
    }
}
