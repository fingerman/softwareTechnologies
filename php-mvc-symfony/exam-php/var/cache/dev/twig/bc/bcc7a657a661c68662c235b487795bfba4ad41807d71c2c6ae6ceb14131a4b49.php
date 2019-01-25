<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_e802ae48203caa10df6b965cb2ab99afb4a225515ea7091a202e4b5e6c656afe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcf27b2d91af0433f893c6b097a64dc7aaf0baa4999aff03d5145795c914a3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf27b2d91af0433f893c6b097a64dc7aaf0baa4999aff03d5145795c914a3a8->enter($__internal_fcf27b2d91af0433f893c6b097a64dc7aaf0baa4999aff03d5145795c914a3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_e429a793d4219a7753c798b10a93f657bdf7466c5ecd2700b6be7ce59b4a2365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e429a793d4219a7753c798b10a93f657bdf7466c5ecd2700b6be7ce59b4a2365->enter($__internal_e429a793d4219a7753c798b10a93f657bdf7466c5ecd2700b6be7ce59b4a2365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcf27b2d91af0433f893c6b097a64dc7aaf0baa4999aff03d5145795c914a3a8->leave($__internal_fcf27b2d91af0433f893c6b097a64dc7aaf0baa4999aff03d5145795c914a3a8_prof);

        
        $__internal_e429a793d4219a7753c798b10a93f657bdf7466c5ecd2700b6be7ce59b4a2365->leave($__internal_e429a793d4219a7753c798b10a93f657bdf7466c5ecd2700b6be7ce59b4a2365_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_da3a9c9c7c1d8378f2d93121fe17aa9c6fbc4f029746a37850eb1f30e22628fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3a9c9c7c1d8378f2d93121fe17aa9c6fbc4f029746a37850eb1f30e22628fc->enter($__internal_da3a9c9c7c1d8378f2d93121fe17aa9c6fbc4f029746a37850eb1f30e22628fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3abd625d05dadfb24f078ea6ca13b1f2a89354128aae6b8ff63c55eb3a7f5e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3abd625d05dadfb24f078ea6ca13b1f2a89354128aae6b8ff63c55eb3a7f5e37->enter($__internal_3abd625d05dadfb24f078ea6ca13b1f2a89354128aae6b8ff63c55eb3a7f5e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_3abd625d05dadfb24f078ea6ca13b1f2a89354128aae6b8ff63c55eb3a7f5e37->leave($__internal_3abd625d05dadfb24f078ea6ca13b1f2a89354128aae6b8ff63c55eb3a7f5e37_prof);

        
        $__internal_da3a9c9c7c1d8378f2d93121fe17aa9c6fbc4f029746a37850eb1f30e22628fc->leave($__internal_da3a9c9c7c1d8378f2d93121fe17aa9c6fbc4f029746a37850eb1f30e22628fc_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05686f66876cfd3bd212818110e2392e030758330c1d804c9d926410acf0b893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05686f66876cfd3bd212818110e2392e030758330c1d804c9d926410acf0b893->enter($__internal_05686f66876cfd3bd212818110e2392e030758330c1d804c9d926410acf0b893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_03c32c56e9e5c52983519d3835132f1739f0a25f0897f34a0eb34368af8d63fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c32c56e9e5c52983519d3835132f1739f0a25f0897f34a0eb34368af8d63fa->enter($__internal_03c32c56e9e5c52983519d3835132f1739f0a25f0897f34a0eb34368af8d63fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_03c32c56e9e5c52983519d3835132f1739f0a25f0897f34a0eb34368af8d63fa->leave($__internal_03c32c56e9e5c52983519d3835132f1739f0a25f0897f34a0eb34368af8d63fa_prof);

        
        $__internal_05686f66876cfd3bd212818110e2392e030758330c1d804c9d926410acf0b893->leave($__internal_05686f66876cfd3bd212818110e2392e030758330c1d804c9d926410acf0b893_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
