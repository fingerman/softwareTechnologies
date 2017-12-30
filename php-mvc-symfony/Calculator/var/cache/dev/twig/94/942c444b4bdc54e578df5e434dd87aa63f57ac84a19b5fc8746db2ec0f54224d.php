<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ce291ef8114492e2c7d19ec6e3570588844f85382654961dc9b34b80fa08ca53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b5b78afeea4095acbf6396543970cf782ac7c7c55992ddf995aaa2ec89ea286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5b78afeea4095acbf6396543970cf782ac7c7c55992ddf995aaa2ec89ea286->enter($__internal_8b5b78afeea4095acbf6396543970cf782ac7c7c55992ddf995aaa2ec89ea286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b5b78afeea4095acbf6396543970cf782ac7c7c55992ddf995aaa2ec89ea286->leave($__internal_8b5b78afeea4095acbf6396543970cf782ac7c7c55992ddf995aaa2ec89ea286_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_844ed9224b2f3ad6f711bcfec1a6ca16741b892ab670dc361dbaac57b14c862b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844ed9224b2f3ad6f711bcfec1a6ca16741b892ab670dc361dbaac57b14c862b->enter($__internal_844ed9224b2f3ad6f711bcfec1a6ca16741b892ab670dc361dbaac57b14c862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_844ed9224b2f3ad6f711bcfec1a6ca16741b892ab670dc361dbaac57b14c862b->leave($__internal_844ed9224b2f3ad6f711bcfec1a6ca16741b892ab670dc361dbaac57b14c862b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4086ea5cb9c8c1b5181bee19ebcc1219460b111cbe40ad7af4e5e0b45dbb8f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4086ea5cb9c8c1b5181bee19ebcc1219460b111cbe40ad7af4e5e0b45dbb8f0f->enter($__internal_4086ea5cb9c8c1b5181bee19ebcc1219460b111cbe40ad7af4e5e0b45dbb8f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4086ea5cb9c8c1b5181bee19ebcc1219460b111cbe40ad7af4e5e0b45dbb8f0f->leave($__internal_4086ea5cb9c8c1b5181bee19ebcc1219460b111cbe40ad7af4e5e0b45dbb8f0f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f2ea24bf06aecb126bdc1c8884ab94a426244e1e72a2b0edb4bd2a87e77d15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2ea24bf06aecb126bdc1c8884ab94a426244e1e72a2b0edb4bd2a87e77d15d->enter($__internal_5f2ea24bf06aecb126bdc1c8884ab94a426244e1e72a2b0edb4bd2a87e77d15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5f2ea24bf06aecb126bdc1c8884ab94a426244e1e72a2b0edb4bd2a87e77d15d->leave($__internal_5f2ea24bf06aecb126bdc1c8884ab94a426244e1e72a2b0edb4bd2a87e77d15d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
