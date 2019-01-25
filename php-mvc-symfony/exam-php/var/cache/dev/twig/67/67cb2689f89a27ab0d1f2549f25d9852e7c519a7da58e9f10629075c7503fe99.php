<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1b42e1ddf6e8daf54f9259d32cd91c1db360d84456bec3fde5d27218bd2bc2ab extends Twig_Template
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
        $__internal_c3b2454391a8c29505edab0da5670056264f12b77b5e109150d61fa7ddfea9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b2454391a8c29505edab0da5670056264f12b77b5e109150d61fa7ddfea9ab->enter($__internal_c3b2454391a8c29505edab0da5670056264f12b77b5e109150d61fa7ddfea9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_8209ddcc7388addaa6281c30beb6c022d9f5879ba9f40968cd225249ebb9a26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8209ddcc7388addaa6281c30beb6c022d9f5879ba9f40968cd225249ebb9a26a->enter($__internal_8209ddcc7388addaa6281c30beb6c022d9f5879ba9f40968cd225249ebb9a26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c3b2454391a8c29505edab0da5670056264f12b77b5e109150d61fa7ddfea9ab->leave($__internal_c3b2454391a8c29505edab0da5670056264f12b77b5e109150d61fa7ddfea9ab_prof);

        
        $__internal_8209ddcc7388addaa6281c30beb6c022d9f5879ba9f40968cd225249ebb9a26a->leave($__internal_8209ddcc7388addaa6281c30beb6c022d9f5879ba9f40968cd225249ebb9a26a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
