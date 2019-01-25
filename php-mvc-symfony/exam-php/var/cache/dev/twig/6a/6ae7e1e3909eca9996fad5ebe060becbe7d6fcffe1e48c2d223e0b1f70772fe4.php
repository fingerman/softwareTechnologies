<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_7e875c9975089864147605890b01a9989ca6ef02de594216107a6776af943e2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d575bb69f05d2681f97c950ffbe1a5955d00fa42d088c176ea048fb9318763f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d575bb69f05d2681f97c950ffbe1a5955d00fa42d088c176ea048fb9318763f->enter($__internal_3d575bb69f05d2681f97c950ffbe1a5955d00fa42d088c176ea048fb9318763f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_4124e68c02d2a2b85f61dffb4132556341ebbbdd415c989a90f30be0657973b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4124e68c02d2a2b85f61dffb4132556341ebbbdd415c989a90f30be0657973b2->enter($__internal_4124e68c02d2a2b85f61dffb4132556341ebbbdd415c989a90f30be0657973b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d575bb69f05d2681f97c950ffbe1a5955d00fa42d088c176ea048fb9318763f->leave($__internal_3d575bb69f05d2681f97c950ffbe1a5955d00fa42d088c176ea048fb9318763f_prof);

        
        $__internal_4124e68c02d2a2b85f61dffb4132556341ebbbdd415c989a90f30be0657973b2->leave($__internal_4124e68c02d2a2b85f61dffb4132556341ebbbdd415c989a90f30be0657973b2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ed56056a423ba989c7c5bde5618d7987aa1fe93341b55a2d34cf1494bb4f63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed56056a423ba989c7c5bde5618d7987aa1fe93341b55a2d34cf1494bb4f63a->enter($__internal_3ed56056a423ba989c7c5bde5618d7987aa1fe93341b55a2d34cf1494bb4f63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3edc10ec890ef462b8ebce2794d08502a99c463f72c0365e0efb182a097facac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edc10ec890ef462b8ebce2794d08502a99c463f72c0365e0efb182a097facac->enter($__internal_3edc10ec890ef462b8ebce2794d08502a99c463f72c0365e0efb182a097facac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3edc10ec890ef462b8ebce2794d08502a99c463f72c0365e0efb182a097facac->leave($__internal_3edc10ec890ef462b8ebce2794d08502a99c463f72c0365e0efb182a097facac_prof);

        
        $__internal_3ed56056a423ba989c7c5bde5618d7987aa1fe93341b55a2d34cf1494bb4f63a->leave($__internal_3ed56056a423ba989c7c5bde5618d7987aa1fe93341b55a2d34cf1494bb4f63a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
