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
            'user_info' => array($this, 'block_user_info'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["section"] = ((array_key_exists("section", $context)) ? ((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section"))) : ("homepage"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 44
        echo "
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 49
            echo "                        ";
            $context["session_var"] = ("smtc_" . (isset($context["notice_level"]) ? $context["notice_level"] : $this->getContext($context, "notice_level")));
            // line 50
            echo "                        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "has", array(0 => (isset($context["session_var"]) ? $context["session_var"] : $this->getContext($context, "session_var"))), "method")) {
                // line 51
                echo "                            <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . (isset($context["notice_level"]) ? $context["notice_level"] : $this->getContext($context, "notice_level"))), "html", null, true);
                echo "\">
                                ";
                // line 52
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => (isset($context["session_var"]) ? $context["session_var"] : $this->getContext($context, "session_var"))), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 53
                    echo "                                    <p>";
                    echo (isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash"));
                    echo "</p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                            </div>
                        ";
            }
            // line 57
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                </div>
            </div>
            ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        if (array_key_exists("code", $context)) {
            // line 63
            echo "                <hr>
                <div class=\"row\">
                    <div class=\"span12\">
                        <button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#shomethecode\">
                            Show me the code! <b class=\"caret\"></b>
                        </button>
                        ";
            // line 69
            if (array_key_exists("article_link", $context)) {
                // line 70
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["article_link"]) ? $context["article_link"] : $this->getContext($context, "article_link")), "html", null, true);
                echo "\" class=\"btn btn-primary\">Ir al artículo</a>
                        ";
            }
            // line 72
            echo "                        <div id=\"shomethecode\" class=\"collapse\">";
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
                    </div>
                </div>
            ";
        }
        // line 76
        echo "
            <hr>
            ";
        // line 78
        $this->displayBlock('footer', $context, $blocks);
        // line 83
        echo "
        </div> <!-- /container -->
";
    }

    // line 6
    public function block_navbar($context, array $blocks = array())
    {
        // line 7
        echo "        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <a class=\"brand\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Show me the code!</a>
                    <div class=\"nav-collapse collapse\">
                        ";
        // line 17
        $this->env->loadTemplate("EvalBundle::menu.html.twig")->display(array("section" => (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section"))));
        // line 18
        echo "                    </div><!--/.nav-collapse -->
                    ";
        // line 19
        $this->displayBlock('user_info', $context, $blocks);
        // line 40
        echo "                </div>
            </div>
        </div>
        ";
    }

    // line 19
    public function block_user_info($context, array $blocks = array())
    {
        // line 20
        echo "                        <div class=\"pull-right\">
                            <ul class=\"nav pull-right\">
                                <li class=\"dropdown\">
                                    ";
        // line 23
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 24
            echo "                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "
                                            <b class=\"caret\"></b>
                                        </a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('logout_url')->getLogoutPath("secured_area"), "html", null, true);
            echo "\">Logout</a></li>
                                        </ul>
                                    ";
        } else {
            // line 32
            echo "                                        <a href=\"#\">
                                            Anonymous
                                        </a>
                                    ";
        }
        // line 36
        echo "                                </li>
                            </ul>
                        </div>
                    ";
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        // line 79
        echo "            <footer>
                <p>&copy; Showmethecode.es ";
        // line 80
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
            </footer>
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
        return array (  213 => 80,  210 => 79,  207 => 78,  202 => 60,  195 => 36,  189 => 32,  183 => 29,  176 => 25,  173 => 24,  171 => 23,  166 => 20,  163 => 19,  156 => 40,  154 => 19,  151 => 18,  149 => 17,  144 => 15,  134 => 7,  131 => 6,  125 => 83,  119 => 76,  111 => 72,  105 => 70,  103 => 69,  95 => 63,  93 => 62,  90 => 61,  88 => 60,  84 => 58,  78 => 57,  74 => 55,  61 => 52,  56 => 51,  53 => 50,  46 => 48,  40 => 44,  129 => 45,  123 => 78,  112 => 39,  108 => 38,  102 => 35,  94 => 29,  83 => 27,  79 => 26,  73 => 23,  65 => 53,  54 => 15,  50 => 49,  44 => 11,  37 => 6,  34 => 5,  29 => 3,  27 => 51,  25 => 3,);
    }
}
