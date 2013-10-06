<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fde6efcc3ebe88dde9777ee6085dcc72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  43 => 8,  30 => 3,  69 => 11,  64 => 10,  59 => 6,  47 => 12,  42 => 10,  35 => 7,  33 => 4,  23 => 1,  213 => 80,  210 => 79,  207 => 78,  202 => 60,  195 => 36,  189 => 32,  183 => 29,  176 => 25,  173 => 24,  171 => 23,  166 => 20,  163 => 19,  156 => 40,  154 => 19,  151 => 18,  149 => 17,  144 => 15,  134 => 7,  131 => 6,  125 => 83,  119 => 76,  111 => 72,  105 => 70,  103 => 69,  95 => 63,  93 => 62,  90 => 61,  88 => 60,  84 => 58,  78 => 57,  74 => 55,  61 => 52,  56 => 51,  53 => 5,  46 => 48,  40 => 7,  129 => 45,  123 => 78,  112 => 39,  108 => 38,  102 => 35,  94 => 29,  83 => 27,  79 => 26,  73 => 23,  65 => 53,  54 => 11,  50 => 49,  44 => 11,  37 => 6,  34 => 5,  29 => 5,  27 => 51,  25 => 3,);
    }
}
