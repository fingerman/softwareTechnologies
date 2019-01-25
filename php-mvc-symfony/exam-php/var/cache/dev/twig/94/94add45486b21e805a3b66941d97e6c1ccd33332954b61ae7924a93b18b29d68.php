<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e47a7f33666278a95e907e1a9dc0e908d70956eda8ea729d7f3e3eb654ac250f extends Twig_Template
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
        $__internal_56f05fdb94567cdd62527704c68dca8d29f4ac59d1512c6388d02919c52da2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f05fdb94567cdd62527704c68dca8d29f4ac59d1512c6388d02919c52da2c4->enter($__internal_56f05fdb94567cdd62527704c68dca8d29f4ac59d1512c6388d02919c52da2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_170f799eabebbdd106c63eff12bbfb989b62faa2663d8d59ffb6f2800f1ce25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170f799eabebbdd106c63eff12bbfb989b62faa2663d8d59ffb6f2800f1ce25e->enter($__internal_170f799eabebbdd106c63eff12bbfb989b62faa2663d8d59ffb6f2800f1ce25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_56f05fdb94567cdd62527704c68dca8d29f4ac59d1512c6388d02919c52da2c4->leave($__internal_56f05fdb94567cdd62527704c68dca8d29f4ac59d1512c6388d02919c52da2c4_prof);

        
        $__internal_170f799eabebbdd106c63eff12bbfb989b62faa2663d8d59ffb6f2800f1ce25e->leave($__internal_170f799eabebbdd106c63eff12bbfb989b62faa2663d8d59ffb6f2800f1ce25e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
