<?php

/* CassioEvalBundle:Default:forms.html.twig */
class __TwigTemplate_38a29645de3426596cdc2458100c583c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CassioEvalBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CassioEvalBundle::layout.html.twig";
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
        return "CassioEvalBundle:Default:forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 45,  123 => 41,  112 => 39,  108 => 38,  102 => 35,  94 => 29,  83 => 27,  79 => 26,  73 => 23,  65 => 17,  54 => 15,  50 => 14,  44 => 11,  37 => 6,  34 => 5,  29 => 52,  27 => 51,  25 => 3,);
    }
}
