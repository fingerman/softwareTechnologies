<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_49ce46171490374f7c700be45355443d552ded1e695eb6f34a49f9f9c80dc03b extends Twig_Template
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
        $__internal_0d77318e7e176e7a0a197b102a5473a3aeadeba0805ac8e8a9d34dd610a0e7bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d77318e7e176e7a0a197b102a5473a3aeadeba0805ac8e8a9d34dd610a0e7bf->enter($__internal_0d77318e7e176e7a0a197b102a5473a3aeadeba0805ac8e8a9d34dd610a0e7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_e25477aa71d294373c6e442167499bc2cb986019b5467504fb0cd9d7d74d005d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25477aa71d294373c6e442167499bc2cb986019b5467504fb0cd9d7d74d005d->enter($__internal_e25477aa71d294373c6e442167499bc2cb986019b5467504fb0cd9d7d74d005d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0d77318e7e176e7a0a197b102a5473a3aeadeba0805ac8e8a9d34dd610a0e7bf->leave($__internal_0d77318e7e176e7a0a197b102a5473a3aeadeba0805ac8e8a9d34dd610a0e7bf_prof);

        
        $__internal_e25477aa71d294373c6e442167499bc2cb986019b5467504fb0cd9d7d74d005d->leave($__internal_e25477aa71d294373c6e442167499bc2cb986019b5467504fb0cd9d7d74d005d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
