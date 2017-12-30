<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3d59978feb4c5fbc7212a218d3188b6d5cfc152c49032a326e06210124915501 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bed072b97e4c3b6ab60d90a5e405ba25a0e0295ddc421b6eac8a4d5b924c1c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed072b97e4c3b6ab60d90a5e405ba25a0e0295ddc421b6eac8a4d5b924c1c8c->enter($__internal_bed072b97e4c3b6ab60d90a5e405ba25a0e0295ddc421b6eac8a4d5b924c1c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bed072b97e4c3b6ab60d90a5e405ba25a0e0295ddc421b6eac8a4d5b924c1c8c->leave($__internal_bed072b97e4c3b6ab60d90a5e405ba25a0e0295ddc421b6eac8a4d5b924c1c8c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b63f7b679e945a4e04b221e9b0993b7e0b7838da2e70834d5a1e8374ab1520f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63f7b679e945a4e04b221e9b0993b7e0b7838da2e70834d5a1e8374ab1520f6->enter($__internal_b63f7b679e945a4e04b221e9b0993b7e0b7838da2e70834d5a1e8374ab1520f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b63f7b679e945a4e04b221e9b0993b7e0b7838da2e70834d5a1e8374ab1520f6->leave($__internal_b63f7b679e945a4e04b221e9b0993b7e0b7838da2e70834d5a1e8374ab1520f6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa3cada0b3fee1bfb9cb7ae63a449d940ba6227646c0e3eb46b65e69436de697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3cada0b3fee1bfb9cb7ae63a449d940ba6227646c0e3eb46b65e69436de697->enter($__internal_fa3cada0b3fee1bfb9cb7ae63a449d940ba6227646c0e3eb46b65e69436de697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa3cada0b3fee1bfb9cb7ae63a449d940ba6227646c0e3eb46b65e69436de697->leave($__internal_fa3cada0b3fee1bfb9cb7ae63a449d940ba6227646c0e3eb46b65e69436de697_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4b81e191c3fc147babf9c81b60b786d0562f40a541d10480bfb920200fcbaac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b81e191c3fc147babf9c81b60b786d0562f40a541d10480bfb920200fcbaac->enter($__internal_a4b81e191c3fc147babf9c81b60b786d0562f40a541d10480bfb920200fcbaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a4b81e191c3fc147babf9c81b60b786d0562f40a541d10480bfb920200fcbaac->leave($__internal_a4b81e191c3fc147babf9c81b60b786d0562f40a541d10480bfb920200fcbaac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
