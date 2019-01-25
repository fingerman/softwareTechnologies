<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_33727356872726efe1c610ed9d3acd7eed028a45157b20cc4d3ac9278833493f extends Twig_Template
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
        $__internal_3948305a0030a9dd4148e0e1890978dfff0d7479ad9b8a7bdc32a9732e096cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3948305a0030a9dd4148e0e1890978dfff0d7479ad9b8a7bdc32a9732e096cd9->enter($__internal_3948305a0030a9dd4148e0e1890978dfff0d7479ad9b8a7bdc32a9732e096cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ec628439739f4b09cb6f81205176e2d5438360f5c3de557e634880749f216fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec628439739f4b09cb6f81205176e2d5438360f5c3de557e634880749f216fc3->enter($__internal_ec628439739f4b09cb6f81205176e2d5438360f5c3de557e634880749f216fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3948305a0030a9dd4148e0e1890978dfff0d7479ad9b8a7bdc32a9732e096cd9->leave($__internal_3948305a0030a9dd4148e0e1890978dfff0d7479ad9b8a7bdc32a9732e096cd9_prof);

        
        $__internal_ec628439739f4b09cb6f81205176e2d5438360f5c3de557e634880749f216fc3->leave($__internal_ec628439739f4b09cb6f81205176e2d5438360f5c3de557e634880749f216fc3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d298c107c5671e3b1f3c8ea7c34aae9bea08ed02b9ae2638a7bd064162601346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d298c107c5671e3b1f3c8ea7c34aae9bea08ed02b9ae2638a7bd064162601346->enter($__internal_d298c107c5671e3b1f3c8ea7c34aae9bea08ed02b9ae2638a7bd064162601346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7146875b00feca17fd5fdd784365f71b425bf59f1fd705c6f9ee5eccb1636a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7146875b00feca17fd5fdd784365f71b425bf59f1fd705c6f9ee5eccb1636a0b->enter($__internal_7146875b00feca17fd5fdd784365f71b425bf59f1fd705c6f9ee5eccb1636a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7146875b00feca17fd5fdd784365f71b425bf59f1fd705c6f9ee5eccb1636a0b->leave($__internal_7146875b00feca17fd5fdd784365f71b425bf59f1fd705c6f9ee5eccb1636a0b_prof);

        
        $__internal_d298c107c5671e3b1f3c8ea7c34aae9bea08ed02b9ae2638a7bd064162601346->leave($__internal_d298c107c5671e3b1f3c8ea7c34aae9bea08ed02b9ae2638a7bd064162601346_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef7a01d0adfa20c6aae3c197146a7e38732067f4a569302dc2f34efca5436e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7a01d0adfa20c6aae3c197146a7e38732067f4a569302dc2f34efca5436e1e->enter($__internal_ef7a01d0adfa20c6aae3c197146a7e38732067f4a569302dc2f34efca5436e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f5a930efffb47442cf54f79eb535a460658e7ec630547b636a3e6deda3ad032a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a930efffb47442cf54f79eb535a460658e7ec630547b636a3e6deda3ad032a->enter($__internal_f5a930efffb47442cf54f79eb535a460658e7ec630547b636a3e6deda3ad032a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f5a930efffb47442cf54f79eb535a460658e7ec630547b636a3e6deda3ad032a->leave($__internal_f5a930efffb47442cf54f79eb535a460658e7ec630547b636a3e6deda3ad032a_prof);

        
        $__internal_ef7a01d0adfa20c6aae3c197146a7e38732067f4a569302dc2f34efca5436e1e->leave($__internal_ef7a01d0adfa20c6aae3c197146a7e38732067f4a569302dc2f34efca5436e1e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56b9496dca23a492b26322b830edfdb1973d4f6eb252e8d96e8a5b3fa7e888f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b9496dca23a492b26322b830edfdb1973d4f6eb252e8d96e8a5b3fa7e888f8->enter($__internal_56b9496dca23a492b26322b830edfdb1973d4f6eb252e8d96e8a5b3fa7e888f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aee3f82136e34ab9522b41d6ebc9b1c1dab57c14c47a9b556234c3fbc65c8bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee3f82136e34ab9522b41d6ebc9b1c1dab57c14c47a9b556234c3fbc65c8bb3->enter($__internal_aee3f82136e34ab9522b41d6ebc9b1c1dab57c14c47a9b556234c3fbc65c8bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aee3f82136e34ab9522b41d6ebc9b1c1dab57c14c47a9b556234c3fbc65c8bb3->leave($__internal_aee3f82136e34ab9522b41d6ebc9b1c1dab57c14c47a9b556234c3fbc65c8bb3_prof);

        
        $__internal_56b9496dca23a492b26322b830edfdb1973d4f6eb252e8d96e8a5b3fa7e888f8->leave($__internal_56b9496dca23a492b26322b830edfdb1973d4f6eb252e8d96e8a5b3fa7e888f8_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
