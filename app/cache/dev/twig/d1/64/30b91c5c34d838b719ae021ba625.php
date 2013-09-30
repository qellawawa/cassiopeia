<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_d16430b91c5c34d838b719ae021ba625 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  26 => 5,  87 => 20,  55 => 13,  31 => 5,  21 => 2,  92 => 21,  89 => 20,  85 => 19,  75 => 17,  72 => 16,  68 => 14,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  168 => 72,  158 => 67,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  115 => 43,  101 => 24,  91 => 31,  86 => 28,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  80 => 19,  36 => 7,  32 => 12,  22 => 2,  57 => 16,  43 => 8,  30 => 3,  69 => 25,  64 => 12,  59 => 6,  47 => 12,  42 => 14,  35 => 4,  33 => 10,  23 => 1,  213 => 80,  210 => 79,  207 => 78,  202 => 60,  195 => 36,  189 => 32,  183 => 82,  176 => 25,  173 => 74,  171 => 73,  166 => 71,  163 => 70,  156 => 66,  154 => 19,  151 => 63,  149 => 17,  144 => 15,  134 => 7,  131 => 6,  125 => 83,  119 => 76,  111 => 72,  105 => 40,  103 => 69,  95 => 63,  93 => 9,  90 => 61,  88 => 6,  84 => 58,  78 => 40,  74 => 55,  61 => 52,  56 => 9,  53 => 5,  46 => 7,  40 => 8,  129 => 45,  123 => 47,  112 => 42,  108 => 38,  102 => 35,  94 => 22,  83 => 27,  79 => 18,  73 => 23,  65 => 53,  54 => 21,  50 => 8,  44 => 10,  37 => 6,  34 => 5,  29 => 5,  27 => 4,  25 => 3,);
    }
}
