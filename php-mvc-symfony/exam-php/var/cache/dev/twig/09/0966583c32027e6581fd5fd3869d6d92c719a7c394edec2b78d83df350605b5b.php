<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d0f7cba7771f43674cd7795c2c95d50753c80dcabcb1af1255fd8a0e0dda0a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b815deef02f0c9fa783898ff408ed6bdf817d7a3a06c0ec9b127d3acc60fc854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b815deef02f0c9fa783898ff408ed6bdf817d7a3a06c0ec9b127d3acc60fc854->enter($__internal_b815deef02f0c9fa783898ff408ed6bdf817d7a3a06c0ec9b127d3acc60fc854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_06254a64e269243ddcc736ac9e4eaf934dc677306f36b52e7bcf3a63deec251c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06254a64e269243ddcc736ac9e4eaf934dc677306f36b52e7bcf3a63deec251c->enter($__internal_06254a64e269243ddcc736ac9e4eaf934dc677306f36b52e7bcf3a63deec251c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b815deef02f0c9fa783898ff408ed6bdf817d7a3a06c0ec9b127d3acc60fc854->leave($__internal_b815deef02f0c9fa783898ff408ed6bdf817d7a3a06c0ec9b127d3acc60fc854_prof);

        
        $__internal_06254a64e269243ddcc736ac9e4eaf934dc677306f36b52e7bcf3a63deec251c->leave($__internal_06254a64e269243ddcc736ac9e4eaf934dc677306f36b52e7bcf3a63deec251c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b284d4d24fc9a786700f0248818f413e813bb6fed8c819dab42deb43f1d4a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b284d4d24fc9a786700f0248818f413e813bb6fed8c819dab42deb43f1d4a8a->enter($__internal_0b284d4d24fc9a786700f0248818f413e813bb6fed8c819dab42deb43f1d4a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6694a06e8803ba6806c2740b547e5b5e19f9412a22445c6b1881615f493cbb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6694a06e8803ba6806c2740b547e5b5e19f9412a22445c6b1881615f493cbb64->enter($__internal_6694a06e8803ba6806c2740b547e5b5e19f9412a22445c6b1881615f493cbb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6694a06e8803ba6806c2740b547e5b5e19f9412a22445c6b1881615f493cbb64->leave($__internal_6694a06e8803ba6806c2740b547e5b5e19f9412a22445c6b1881615f493cbb64_prof);

        
        $__internal_0b284d4d24fc9a786700f0248818f413e813bb6fed8c819dab42deb43f1d4a8a->leave($__internal_0b284d4d24fc9a786700f0248818f413e813bb6fed8c819dab42deb43f1d4a8a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_199151cf77787d036ae5a89ce44771aa6cd7fa215b3df2f6aebc6a3500548715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199151cf77787d036ae5a89ce44771aa6cd7fa215b3df2f6aebc6a3500548715->enter($__internal_199151cf77787d036ae5a89ce44771aa6cd7fa215b3df2f6aebc6a3500548715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e98ee5887efa3b0d51096c86891b15031d3360b6107c7569899902cc92bb1f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98ee5887efa3b0d51096c86891b15031d3360b6107c7569899902cc92bb1f77->enter($__internal_e98ee5887efa3b0d51096c86891b15031d3360b6107c7569899902cc92bb1f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e98ee5887efa3b0d51096c86891b15031d3360b6107c7569899902cc92bb1f77->leave($__internal_e98ee5887efa3b0d51096c86891b15031d3360b6107c7569899902cc92bb1f77_prof);

        
        $__internal_199151cf77787d036ae5a89ce44771aa6cd7fa215b3df2f6aebc6a3500548715->leave($__internal_199151cf77787d036ae5a89ce44771aa6cd7fa215b3df2f6aebc6a3500548715_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e38bb9201b1e6bb55a6fc20e12dde6705f61d866eac5576945fd94a538def6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38bb9201b1e6bb55a6fc20e12dde6705f61d866eac5576945fd94a538def6f5->enter($__internal_e38bb9201b1e6bb55a6fc20e12dde6705f61d866eac5576945fd94a538def6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6881a72c2b85691112faeb260becafbb2214253928db0122f9fd2d4de3c8e0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6881a72c2b85691112faeb260becafbb2214253928db0122f9fd2d4de3c8e0cf->enter($__internal_6881a72c2b85691112faeb260becafbb2214253928db0122f9fd2d4de3c8e0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6881a72c2b85691112faeb260becafbb2214253928db0122f9fd2d4de3c8e0cf->leave($__internal_6881a72c2b85691112faeb260becafbb2214253928db0122f9fd2d4de3c8e0cf_prof);

        
        $__internal_e38bb9201b1e6bb55a6fc20e12dde6705f61d866eac5576945fd94a538def6f5->leave($__internal_e38bb9201b1e6bb55a6fc20e12dde6705f61d866eac5576945fd94a538def6f5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
