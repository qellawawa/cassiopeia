<?php

/* CassioEvalBundle:Example/Form:edit_one_to_many.html.twig */
class __TwigTemplate_67d96bde0adf19b75070cafd4c78d264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MainBundle::layout.html.twig");

        $this->blocks = array(
            '_user_addresses_addresses_entry_row' => array($this, 'block__user_addresses_addresses_entry_row'),
            '_user_addresses_addresses_entry_label' => array($this, 'block__user_addresses_addresses_entry_label'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 5
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 127
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 128
        $context["article_link"] = "http://showmethecode.es/php/symfony/symfony2-embeber-formularios-con-relaciones/";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block__user_addresses_addresses_entry_row($context, array $blocks = array())
    {
        // line 8
        ob_start();
        // line 9
        echo "    <div class=\"span3 well address\">
        <button type=\"button\" class=\"close\">&times;</button>
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 18
    public function block__user_addresses_addresses_entry_label($context, array $blocks = array())
    {
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

        function addTagForm(collectionHolder) {
            // Get the data-prototype explained earlier
            var prototype = collectionHolder.data('prototype');

            // get the new index
            var index = collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a address\" link li
            var \$newFormLi = \$('<div></div>').append(newForm);
            collectionHolder.append(\$newFormLi);
        }

        // Get the div that holds the collection of addresses
        var collectionHolder = \$('div.addresses');

        // setup an \"add a address\" link
        var \$newLinkLi = \$('<a href=\"#\" class=\"btn btn-mini btn-info add_address_link\"><i class=\"icon-plus icon-white\"></i> Añadir una dirección</a>');

        \$(function(){

            // add the \"add a address\" anchor and li to the addresses div
            collectionHolder.parent().append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            collectionHolder.data('index', collectionHolder.find(':input').length);

            \$newLinkLi.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new address form (see next code block)
                addTagForm(collectionHolder);
            });


            \$(document).on('change', '.country_selector', function(){
                var \$this = \$(this);
                var data = {
                    country_id: \$this.val()
                };

                \$.ajax({
                    type: 'post',
                    url: '";
        // line 76
        echo $this->env->getExtension('routing')->getPath("select_provinces");
        echo "',
                    data: data,
                    success: function(data) {
                        var \$address = \$this.closest('.address');
                        \$address.find('.province_selector').html(data);
                        \$address.find('.city_selector').html(\"<option>Ciudad</option>\");
                    }
                });
            });

            \$(document).on('change', '.province_selector', function(){
                var \$this = \$(this);
                var data = {
                    province_id: \$this.val()
                };

                \$.ajax({
                    type: 'post',
                    url: '";
        // line 94
        echo $this->env->getExtension('routing')->getPath("select_cities");
        echo "',
                    data: data,
                    success: function(data) {
                        var \$address = \$this.closest('.address');
                        \$address.find('.city_selector').html(data);
                    }
                });
            });

            \$(document).on('click', '.close', function(){
                \$(this).closest('.address').fadeOut(500, function() {
                    \$(this).remove();
                });
            });
        });
    </script>
";
    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        // line 113
        echo "    <div class=\"row\">
        <div class=\"span12\">
            <form action=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("examples_forms_one_to_many_edit", array("username" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))), "html", null, true);
        echo "\" method=\"POST\" novalidate>
                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn btn-success\">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CassioEvalBundle:Example/Form:edit_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 113,  172 => 112,  104 => 49,  100 => 48,  53 => 17,  58 => 13,  34 => 128,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 115,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 32,  67 => 20,  63 => 15,  59 => 14,  201 => 92,  196 => 90,  183 => 116,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 94,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 10,  94 => 28,  89 => 20,  85 => 43,  75 => 17,  68 => 14,  56 => 13,  87 => 26,  28 => 3,  38 => 6,  25 => 3,  21 => 2,  24 => 3,  31 => 4,  26 => 3,  19 => 1,  93 => 28,  88 => 44,  78 => 36,  46 => 10,  44 => 9,  27 => 18,  79 => 18,  72 => 22,  69 => 21,  47 => 11,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 50,  101 => 32,  98 => 31,  96 => 47,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 12,  50 => 14,  43 => 10,  41 => 8,  35 => 5,  32 => 127,  29 => 19,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 76,  125 => 44,  122 => 43,  116 => 41,  112 => 51,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 50,  92 => 46,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 18,  60 => 6,  57 => 12,  54 => 13,  51 => 14,  48 => 11,  45 => 9,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 5,);
    }
}
