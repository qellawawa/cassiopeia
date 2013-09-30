<?php

/* CassioEvalBundle:Example/Form:forms.html.twig */
class __TwigTemplate_b576ddffab6a2ca9d993002d945c3200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EvalBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EvalBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["section"] = "examples";
        // line 51
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 52
        $context["article_link"] = "http://showmethecode.es/php/symfony/symfony2-embeber-formularios-con-relaciones/";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
        <div class=\"span12\">
            <ul>
                <li>OneToOne (Usuario con perfil)
                    <ul>
                        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("examples_forms_one_to_one_create");
        echo "\">Crear Usuario</a></li>
                        <li>Editar Usuario
                            <ul>
                                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "                                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("examples_forms_one_to_one_edit", array("username" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))), "html", null, true);
            echo "\">Editar ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "profile"), "name"), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                            </ul>
                        </li>
                    </ul>
                </li>
                <li>OneToMany (Usuario con direcciones)
                    <ul>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("examples_forms_one_to_many_create");
        echo "\">Crear Usuario</a></li>
                        <li>Editar Usuario
                            <ul>
                                ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 27
            echo "                                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("examples_forms_one_to_many_edit", array("username" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))), "html", null, true);
            echo "\">Editar ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                            </ul>
                        </li>
                    </ul>
                </li>
                <li>OneToOne y OnetToMany (Usuario con perfil y direcciones)
                    <ul>
                        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("examples_forms_user_create");
        echo "\">Crear Usuario</a></li>
                        <li>Editar Usuario
                            <ul>
                                ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            echo "                                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("examples_forms_user_edit", array("username" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))), "html", null, true);
            echo "\">Editar ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("examples_forms_users_edit");
        echo "\">Editar Usuarios</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CassioEvalBundle:Example/Form:forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 45,  175 => 113,  172 => 112,  237 => 139,  233 => 138,  226 => 135,  205 => 117,  184 => 99,  126 => 45,  118 => 41,  110 => 36,  76 => 22,  58 => 14,  104 => 49,  100 => 48,  23 => 1,  213 => 80,  210 => 79,  207 => 78,  202 => 60,  195 => 36,  134 => 7,  90 => 61,  84 => 24,  65 => 17,  53 => 11,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 136,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 115,  159 => 61,  143 => 56,  135 => 53,  119 => 76,  102 => 35,  71 => 20,  67 => 20,  63 => 19,  59 => 14,  38 => 6,  28 => 3,  26 => 3,  201 => 92,  196 => 90,  183 => 116,  171 => 23,  166 => 20,  163 => 19,  158 => 67,  156 => 40,  151 => 94,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 70,  91 => 27,  62 => 23,  49 => 10,  94 => 29,  89 => 20,  85 => 43,  75 => 17,  68 => 19,  56 => 13,  24 => 4,  87 => 26,  31 => 3,  25 => 3,  21 => 2,  19 => 1,  93 => 30,  88 => 44,  78 => 36,  46 => 10,  44 => 11,  27 => 51,  79 => 26,  72 => 22,  69 => 21,  47 => 9,  40 => 9,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 6,  123 => 41,  120 => 40,  115 => 43,  111 => 72,  108 => 38,  101 => 32,  98 => 32,  96 => 31,  83 => 27,  74 => 55,  66 => 24,  55 => 13,  52 => 12,  50 => 14,  43 => 10,  41 => 8,  35 => 150,  32 => 127,  29 => 52,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 32,  187 => 84,  182 => 66,  176 => 25,  173 => 24,  168 => 72,  164 => 59,  162 => 57,  154 => 19,  149 => 17,  147 => 58,  144 => 15,  141 => 48,  133 => 55,  130 => 76,  125 => 83,  122 => 43,  116 => 41,  112 => 39,  109 => 34,  106 => 35,  103 => 69,  99 => 31,  95 => 50,  92 => 46,  86 => 28,  82 => 22,  80 => 23,  73 => 23,  64 => 18,  60 => 15,  57 => 12,  54 => 15,  51 => 14,  48 => 11,  45 => 9,  42 => 8,  39 => 7,  36 => 5,  33 => 5,  30 => 5,);
    }
}
