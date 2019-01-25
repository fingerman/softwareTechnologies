<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_f313131ae50d0e4ff6dad3a418af362e3db9cb99efb172570eb9d9ae5dee963e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3ae899e2258dca22de6b23ff043a5bba17481520a63a57338f814c6d07f0016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ae899e2258dca22de6b23ff043a5bba17481520a63a57338f814c6d07f0016->enter($__internal_f3ae899e2258dca22de6b23ff043a5bba17481520a63a57338f814c6d07f0016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_1b12abf0931825bc8e2ac5103102bf04d67abebecdea1a4fb808c3be048594d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b12abf0931825bc8e2ac5103102bf04d67abebecdea1a4fb808c3be048594d5->enter($__internal_1b12abf0931825bc8e2ac5103102bf04d67abebecdea1a4fb808c3be048594d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3ae899e2258dca22de6b23ff043a5bba17481520a63a57338f814c6d07f0016->leave($__internal_f3ae899e2258dca22de6b23ff043a5bba17481520a63a57338f814c6d07f0016_prof);

        
        $__internal_1b12abf0931825bc8e2ac5103102bf04d67abebecdea1a4fb808c3be048594d5->leave($__internal_1b12abf0931825bc8e2ac5103102bf04d67abebecdea1a4fb808c3be048594d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6ec3ad159ce7162cce34b5a66c9c31383ba4c6a218c77788211ad8b43864c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ec3ad159ce7162cce34b5a66c9c31383ba4c6a218c77788211ad8b43864c42->enter($__internal_b6ec3ad159ce7162cce34b5a66c9c31383ba4c6a218c77788211ad8b43864c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fc117be23118c36d21135fdcf928b3ae7be4f31ee25d98133c42663224cc9593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc117be23118c36d21135fdcf928b3ae7be4f31ee25d98133c42663224cc9593->enter($__internal_fc117be23118c36d21135fdcf928b3ae7be4f31ee25d98133c42663224cc9593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_fc117be23118c36d21135fdcf928b3ae7be4f31ee25d98133c42663224cc9593->leave($__internal_fc117be23118c36d21135fdcf928b3ae7be4f31ee25d98133c42663224cc9593_prof);

        
        $__internal_b6ec3ad159ce7162cce34b5a66c9c31383ba4c6a218c77788211ad8b43864c42->leave($__internal_b6ec3ad159ce7162cce34b5a66c9c31383ba4c6a218c77788211ad8b43864c42_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_badcf220db2c9016b7af82f938d9c4f6b15b1e08032805d263b2e18bba56d840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_badcf220db2c9016b7af82f938d9c4f6b15b1e08032805d263b2e18bba56d840->enter($__internal_badcf220db2c9016b7af82f938d9c4f6b15b1e08032805d263b2e18bba56d840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af6eb744b6920c80aa08890bdd8900615799ca75a63bc1e7fd6aec11f2a81ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6eb744b6920c80aa08890bdd8900615799ca75a63bc1e7fd6aec11f2a81ec2->enter($__internal_af6eb744b6920c80aa08890bdd8900615799ca75a63bc1e7fd6aec11f2a81ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_af6eb744b6920c80aa08890bdd8900615799ca75a63bc1e7fd6aec11f2a81ec2->leave($__internal_af6eb744b6920c80aa08890bdd8900615799ca75a63bc1e7fd6aec11f2a81ec2_prof);

        
        $__internal_badcf220db2c9016b7af82f938d9c4f6b15b1e08032805d263b2e18bba56d840->leave($__internal_badcf220db2c9016b7af82f938d9c4f6b15b1e08032805d263b2e18bba56d840_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
