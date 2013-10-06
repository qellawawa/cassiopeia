<?php

/* CassioEvalBundle::layout.html.twig */
class __TwigTemplate_7a288c0d111d9f0a9d324f53c6642d94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["section"] = ((array_key_exists("section", $context)) ? ((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section"))) : ("homepage"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
    }

    public function block_navbar($context, array $blocks = array())
    {
        // line 5
        echo "        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\"><a>LIST  </a></div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "CassioEvalBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  34 => 4,  26 => 2,  31 => 3,  28 => 2,);
    }
}
