<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1f9d97c675f70e9c43c470474d792c83d55c06e4224d44e8a030c5d8ba7b6da0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_31480919cabaea6349bf084cd6a09800ae3123f485a3db6e6a67677063e8b915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31480919cabaea6349bf084cd6a09800ae3123f485a3db6e6a67677063e8b915->enter($__internal_31480919cabaea6349bf084cd6a09800ae3123f485a3db6e6a67677063e8b915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8a2bc057e26c3f5cd40be19f75c0084b263b851842dbd47fdef6587058b45d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2bc057e26c3f5cd40be19f75c0084b263b851842dbd47fdef6587058b45d46->enter($__internal_8a2bc057e26c3f5cd40be19f75c0084b263b851842dbd47fdef6587058b45d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31480919cabaea6349bf084cd6a09800ae3123f485a3db6e6a67677063e8b915->leave($__internal_31480919cabaea6349bf084cd6a09800ae3123f485a3db6e6a67677063e8b915_prof);

        
        $__internal_8a2bc057e26c3f5cd40be19f75c0084b263b851842dbd47fdef6587058b45d46->leave($__internal_8a2bc057e26c3f5cd40be19f75c0084b263b851842dbd47fdef6587058b45d46_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_801f6fd64b5b747d8734fd22ef1d3e0061254f263e5171950699f6787428a3c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801f6fd64b5b747d8734fd22ef1d3e0061254f263e5171950699f6787428a3c9->enter($__internal_801f6fd64b5b747d8734fd22ef1d3e0061254f263e5171950699f6787428a3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2f8ca5ae9acdf632fe31750e475006f0f48b84a58d1adb389434b2d61e5034d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8ca5ae9acdf632fe31750e475006f0f48b84a58d1adb389434b2d61e5034d0->enter($__internal_2f8ca5ae9acdf632fe31750e475006f0f48b84a58d1adb389434b2d61e5034d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2f8ca5ae9acdf632fe31750e475006f0f48b84a58d1adb389434b2d61e5034d0->leave($__internal_2f8ca5ae9acdf632fe31750e475006f0f48b84a58d1adb389434b2d61e5034d0_prof);

        
        $__internal_801f6fd64b5b747d8734fd22ef1d3e0061254f263e5171950699f6787428a3c9->leave($__internal_801f6fd64b5b747d8734fd22ef1d3e0061254f263e5171950699f6787428a3c9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
