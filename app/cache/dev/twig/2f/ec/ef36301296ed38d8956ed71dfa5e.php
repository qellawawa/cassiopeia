<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_2fecef36301296ed38d8956ed71dfa5e extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  38 => 13,  26 => 3,  87 => 20,  55 => 13,  31 => 5,  21 => 2,  92 => 21,  89 => 20,  85 => 19,  75 => 28,  72 => 16,  68 => 14,  41 => 9,  24 => 2,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  168 => 72,  158 => 67,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  115 => 43,  101 => 24,  91 => 35,  86 => 28,  66 => 25,  62 => 24,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  80 => 19,  36 => 7,  32 => 6,  22 => 2,  57 => 16,  43 => 8,  30 => 5,  69 => 25,  64 => 12,  59 => 6,  47 => 12,  42 => 12,  35 => 7,  33 => 6,  23 => 1,  213 => 80,  210 => 79,  207 => 78,  202 => 60,  195 => 36,  189 => 32,  183 => 82,  176 => 25,  173 => 74,  171 => 73,  166 => 71,  163 => 70,  156 => 66,  154 => 19,  151 => 63,  149 => 17,  144 => 15,  134 => 7,  131 => 6,  125 => 83,  119 => 76,  111 => 72,  105 => 40,  103 => 69,  95 => 63,  93 => 9,  90 => 61,  88 => 6,  84 => 58,  78 => 40,  74 => 55,  61 => 52,  56 => 9,  53 => 5,  46 => 14,  40 => 8,  129 => 45,  123 => 47,  112 => 42,  108 => 38,  102 => 35,  94 => 22,  83 => 30,  79 => 29,  73 => 23,  65 => 53,  54 => 21,  50 => 15,  44 => 10,  37 => 6,  34 => 5,  29 => 4,  27 => 4,  25 => 3,);
    }
}
