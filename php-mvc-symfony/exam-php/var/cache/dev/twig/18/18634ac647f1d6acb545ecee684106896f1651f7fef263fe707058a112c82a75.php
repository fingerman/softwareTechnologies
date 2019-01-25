<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f7fdca09f08d6aa76a8d11998759e2d61ba6bd61a992516eb13196f8db50ba09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_004baa7f0827be570dc3aac5c8922364115fc84131befc8afc6a42a6a3bd0353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004baa7f0827be570dc3aac5c8922364115fc84131befc8afc6a42a6a3bd0353->enter($__internal_004baa7f0827be570dc3aac5c8922364115fc84131befc8afc6a42a6a3bd0353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_37d47c0a353ce34e79c0cc4e0bc5b8b02c500d875bb019815dbe337f9c28536e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d47c0a353ce34e79c0cc4e0bc5b8b02c500d875bb019815dbe337f9c28536e->enter($__internal_37d47c0a353ce34e79c0cc4e0bc5b8b02c500d875bb019815dbe337f9c28536e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_004baa7f0827be570dc3aac5c8922364115fc84131befc8afc6a42a6a3bd0353->leave($__internal_004baa7f0827be570dc3aac5c8922364115fc84131befc8afc6a42a6a3bd0353_prof);

        
        $__internal_37d47c0a353ce34e79c0cc4e0bc5b8b02c500d875bb019815dbe337f9c28536e->leave($__internal_37d47c0a353ce34e79c0cc4e0bc5b8b02c500d875bb019815dbe337f9c28536e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51f7ecbf08b3318da4360b494174ee8b5c835f54c07eb619893da9487114754c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f7ecbf08b3318da4360b494174ee8b5c835f54c07eb619893da9487114754c->enter($__internal_51f7ecbf08b3318da4360b494174ee8b5c835f54c07eb619893da9487114754c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_82d72d222128baa7c98d29f25b7e58d619790e01eb46587382a5c5106f9fc5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d72d222128baa7c98d29f25b7e58d619790e01eb46587382a5c5106f9fc5b7->enter($__internal_82d72d222128baa7c98d29f25b7e58d619790e01eb46587382a5c5106f9fc5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_82d72d222128baa7c98d29f25b7e58d619790e01eb46587382a5c5106f9fc5b7->leave($__internal_82d72d222128baa7c98d29f25b7e58d619790e01eb46587382a5c5106f9fc5b7_prof);

        
        $__internal_51f7ecbf08b3318da4360b494174ee8b5c835f54c07eb619893da9487114754c->leave($__internal_51f7ecbf08b3318da4360b494174ee8b5c835f54c07eb619893da9487114754c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5da6e2d3068cf5c30ee63c00d3855a84f8b74115ffcf595bd4dc3d73090d3bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da6e2d3068cf5c30ee63c00d3855a84f8b74115ffcf595bd4dc3d73090d3bce->enter($__internal_5da6e2d3068cf5c30ee63c00d3855a84f8b74115ffcf595bd4dc3d73090d3bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_454070408a912e50302b1a849c1f4d16990d179e789e7260f8aebb334d244f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454070408a912e50302b1a849c1f4d16990d179e789e7260f8aebb334d244f2c->enter($__internal_454070408a912e50302b1a849c1f4d16990d179e789e7260f8aebb334d244f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_454070408a912e50302b1a849c1f4d16990d179e789e7260f8aebb334d244f2c->leave($__internal_454070408a912e50302b1a849c1f4d16990d179e789e7260f8aebb334d244f2c_prof);

        
        $__internal_5da6e2d3068cf5c30ee63c00d3855a84f8b74115ffcf595bd4dc3d73090d3bce->leave($__internal_5da6e2d3068cf5c30ee63c00d3855a84f8b74115ffcf595bd4dc3d73090d3bce_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
