<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_c78a7b4efa0073a3abd285e70342afbb extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  38 => 13,  26 => 3,  87 => 20,  55 => 13,  31 => 5,  21 => 2,  92 => 21,  89 => 20,  85 => 19,  75 => 28,  72 => 16,  68 => 14,  41 => 9,  24 => 2,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  168 => 72,  158 => 67,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  115 => 43,  101 => 24,  91 => 35,  86 => 28,  66 => 25,  62 => 24,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  80 => 19,  36 => 7,  32 => 6,  22 => 2,  57 => 16,  43 => 8,  30 => 5,  69 => 25,  64 => 12,  59 => 6,  47 => 12,  42 => 12,  35 => 7,  33 => 6,  23 => 1,  213 => 80,  210 => 79,  207 => 78,  202 => 60,  195 => 36,  189 => 32,  183 => 82,  176 => 25,  173 => 74,  171 => 73,  166 => 71,  163 => 70,  156 => 66,  154 => 19,  151 => 63,  149 => 17,  144 => 15,  134 => 7,  131 => 6,  125 => 83,  119 => 76,  111 => 72,  105 => 40,  103 => 69,  95 => 63,  93 => 9,  90 => 61,  88 => 6,  84 => 58,  78 => 40,  74 => 55,  61 => 52,  56 => 9,  53 => 5,  46 => 14,  40 => 8,  129 => 45,  123 => 47,  112 => 42,  108 => 38,  102 => 35,  94 => 22,  83 => 30,  79 => 29,  73 => 23,  65 => 53,  54 => 21,  50 => 15,  44 => 10,  37 => 6,  34 => 5,  29 => 4,  27 => 4,  25 => 3,);
    }
}
