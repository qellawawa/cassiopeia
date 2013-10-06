<?php

/* CassioEvalBundle:Example/Location:dependentSelects.html.twig */
class __TwigTemplate_a67794c7e7e00ab972f02df90e08e3d7 extends Twig_Template
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
        // line 22
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 23
        $context["article_link"] = "http://showmethecode.es/php/symfony/symfony2-selects-dependientes-mediante-eventos/";
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
        echo $this->env->getExtension('routing')->getPath("examples_dependent_selects_location_new");
        echo "\">Crear Localización</a></li>
                <li>Editar Localización
                    <ul>
                        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 13
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("examples_dependent_selects_location_edit", array("slug" => $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "name"), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                    </ul>
                </li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CassioEvalBundle:Example/Location:dependentSelects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 49,  100 => 48,  23 => 1,  213 => 80,  210 => 79,  207 => 78,  202 => 60,  195 => 36,  134 => 7,  90 => 61,  84 => 58,  65 => 53,  53 => 5,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 52,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 76,  102 => 32,  71 => 32,  67 => 15,  63 => 15,  59 => 6,  38 => 6,  28 => 60,  26 => 3,  201 => 92,  196 => 90,  183 => 29,  171 => 23,  166 => 20,  163 => 19,  158 => 67,  156 => 40,  151 => 18,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 70,  91 => 27,  62 => 23,  49 => 19,  94 => 28,  89 => 20,  85 => 43,  75 => 17,  68 => 14,  56 => 51,  24 => 4,  87 => 25,  31 => 4,  25 => 3,  21 => 2,  19 => 1,  93 => 62,  88 => 44,  78 => 57,  46 => 48,  44 => 11,  27 => 22,  79 => 18,  72 => 16,  69 => 11,  47 => 12,  40 => 44,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 6,  123 => 78,  120 => 40,  115 => 43,  111 => 72,  108 => 50,  101 => 32,  98 => 31,  96 => 47,  83 => 25,  74 => 55,  66 => 24,  55 => 15,  52 => 13,  50 => 49,  43 => 8,  41 => 5,  35 => 5,  32 => 4,  29 => 23,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 32,  187 => 84,  182 => 66,  176 => 25,  173 => 24,  168 => 72,  164 => 59,  162 => 57,  154 => 19,  149 => 17,  147 => 58,  144 => 15,  141 => 48,  133 => 55,  130 => 41,  125 => 83,  122 => 43,  116 => 41,  112 => 51,  109 => 34,  106 => 36,  103 => 69,  99 => 31,  95 => 63,  92 => 46,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 10,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 12,  45 => 17,  42 => 9,  39 => 9,  36 => 5,  33 => 6,  30 => 61,);
    }
}
