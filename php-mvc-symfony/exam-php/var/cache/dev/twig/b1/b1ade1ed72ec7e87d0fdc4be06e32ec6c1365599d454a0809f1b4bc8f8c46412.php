<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9d475fb8f7d7590877abafd14afacceec090b441375fed86176457c377d87a5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_86f520fa9e06273eff88a8a129361ddecce35d8f5052251690b84408ba862a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f520fa9e06273eff88a8a129361ddecce35d8f5052251690b84408ba862a09->enter($__internal_86f520fa9e06273eff88a8a129361ddecce35d8f5052251690b84408ba862a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8fdea1a9d3f0755da8b76d9241701131c7215150a183cf3c6a79338552f5fdb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdea1a9d3f0755da8b76d9241701131c7215150a183cf3c6a79338552f5fdb7->enter($__internal_8fdea1a9d3f0755da8b76d9241701131c7215150a183cf3c6a79338552f5fdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86f520fa9e06273eff88a8a129361ddecce35d8f5052251690b84408ba862a09->leave($__internal_86f520fa9e06273eff88a8a129361ddecce35d8f5052251690b84408ba862a09_prof);

        
        $__internal_8fdea1a9d3f0755da8b76d9241701131c7215150a183cf3c6a79338552f5fdb7->leave($__internal_8fdea1a9d3f0755da8b76d9241701131c7215150a183cf3c6a79338552f5fdb7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71400fc470410c7f22773473a87061b30e7dbd3efaef1b7b745198f07c8784e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71400fc470410c7f22773473a87061b30e7dbd3efaef1b7b745198f07c8784e7->enter($__internal_71400fc470410c7f22773473a87061b30e7dbd3efaef1b7b745198f07c8784e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_38419d320c1cb59facac2123472a0a5e39dae4cc1ff7c0df436de01dab4295f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38419d320c1cb59facac2123472a0a5e39dae4cc1ff7c0df436de01dab4295f8->enter($__internal_38419d320c1cb59facac2123472a0a5e39dae4cc1ff7c0df436de01dab4295f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_38419d320c1cb59facac2123472a0a5e39dae4cc1ff7c0df436de01dab4295f8->leave($__internal_38419d320c1cb59facac2123472a0a5e39dae4cc1ff7c0df436de01dab4295f8_prof);

        
        $__internal_71400fc470410c7f22773473a87061b30e7dbd3efaef1b7b745198f07c8784e7->leave($__internal_71400fc470410c7f22773473a87061b30e7dbd3efaef1b7b745198f07c8784e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e795e88ba2c5ccdad10c274131d0cd177f4d2a227f3d5a2fd8cd658f0c11f495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e795e88ba2c5ccdad10c274131d0cd177f4d2a227f3d5a2fd8cd658f0c11f495->enter($__internal_e795e88ba2c5ccdad10c274131d0cd177f4d2a227f3d5a2fd8cd658f0c11f495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3bd7e7f11d01522fa3518f5e3ce5fddd490cff4fa19f74e373c6e100d1b2ca29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd7e7f11d01522fa3518f5e3ce5fddd490cff4fa19f74e373c6e100d1b2ca29->enter($__internal_3bd7e7f11d01522fa3518f5e3ce5fddd490cff4fa19f74e373c6e100d1b2ca29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3bd7e7f11d01522fa3518f5e3ce5fddd490cff4fa19f74e373c6e100d1b2ca29->leave($__internal_3bd7e7f11d01522fa3518f5e3ce5fddd490cff4fa19f74e373c6e100d1b2ca29_prof);

        
        $__internal_e795e88ba2c5ccdad10c274131d0cd177f4d2a227f3d5a2fd8cd658f0c11f495->leave($__internal_e795e88ba2c5ccdad10c274131d0cd177f4d2a227f3d5a2fd8cd658f0c11f495_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
