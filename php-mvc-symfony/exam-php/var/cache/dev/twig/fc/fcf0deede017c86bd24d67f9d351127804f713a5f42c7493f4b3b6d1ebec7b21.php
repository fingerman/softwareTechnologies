<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_8f2d9ae057f0cfd2b48075d80c12d22c2107139cac04d734afac7555a37e4d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_fa3dfee75ff28f409da0b4453de332f601652391060ab343dbb5a5d314ae364a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3dfee75ff28f409da0b4453de332f601652391060ab343dbb5a5d314ae364a->enter($__internal_fa3dfee75ff28f409da0b4453de332f601652391060ab343dbb5a5d314ae364a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_812fea60c13f04d1ac95762b1f45e9d4d26314f1de1596e8187aa52be3ef79b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812fea60c13f04d1ac95762b1f45e9d4d26314f1de1596e8187aa52be3ef79b8->enter($__internal_812fea60c13f04d1ac95762b1f45e9d4d26314f1de1596e8187aa52be3ef79b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa3dfee75ff28f409da0b4453de332f601652391060ab343dbb5a5d314ae364a->leave($__internal_fa3dfee75ff28f409da0b4453de332f601652391060ab343dbb5a5d314ae364a_prof);

        
        $__internal_812fea60c13f04d1ac95762b1f45e9d4d26314f1de1596e8187aa52be3ef79b8->leave($__internal_812fea60c13f04d1ac95762b1f45e9d4d26314f1de1596e8187aa52be3ef79b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_513f561d555f0a7ae879446563d4dbaec943e5aebb1d6581531667d5772bae57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_513f561d555f0a7ae879446563d4dbaec943e5aebb1d6581531667d5772bae57->enter($__internal_513f561d555f0a7ae879446563d4dbaec943e5aebb1d6581531667d5772bae57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49ed88b300ad9c5a5315440d925d134a39afb4969836c91cedf8379f9c65cce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ed88b300ad9c5a5315440d925d134a39afb4969836c91cedf8379f9c65cce6->enter($__internal_49ed88b300ad9c5a5315440d925d134a39afb4969836c91cedf8379f9c65cce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_49ed88b300ad9c5a5315440d925d134a39afb4969836c91cedf8379f9c65cce6->leave($__internal_49ed88b300ad9c5a5315440d925d134a39afb4969836c91cedf8379f9c65cce6_prof);

        
        $__internal_513f561d555f0a7ae879446563d4dbaec943e5aebb1d6581531667d5772bae57->leave($__internal_513f561d555f0a7ae879446563d4dbaec943e5aebb1d6581531667d5772bae57_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_894f38ea6621fb1dd8cc76533828117d06e4db82efaf13cb3033cd3b33e7ba0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894f38ea6621fb1dd8cc76533828117d06e4db82efaf13cb3033cd3b33e7ba0f->enter($__internal_894f38ea6621fb1dd8cc76533828117d06e4db82efaf13cb3033cd3b33e7ba0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2a44b1592494bf29dabed572b264799f57e462b9fd5c552d8a33563b00ea41d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a44b1592494bf29dabed572b264799f57e462b9fd5c552d8a33563b00ea41d6->enter($__internal_2a44b1592494bf29dabed572b264799f57e462b9fd5c552d8a33563b00ea41d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2a44b1592494bf29dabed572b264799f57e462b9fd5c552d8a33563b00ea41d6->leave($__internal_2a44b1592494bf29dabed572b264799f57e462b9fd5c552d8a33563b00ea41d6_prof);

        
        $__internal_894f38ea6621fb1dd8cc76533828117d06e4db82efaf13cb3033cd3b33e7ba0f->leave($__internal_894f38ea6621fb1dd8cc76533828117d06e4db82efaf13cb3033cd3b33e7ba0f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98563c68dafc3b4f4e0800b0d3d6fcbb9d129ff2fb22cc7f2be103ce070679ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98563c68dafc3b4f4e0800b0d3d6fcbb9d129ff2fb22cc7f2be103ce070679ec->enter($__internal_98563c68dafc3b4f4e0800b0d3d6fcbb9d129ff2fb22cc7f2be103ce070679ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ace8646f0dd5193854d57104a8728a953b6aa464d384b4a85731e4f596fe4177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace8646f0dd5193854d57104a8728a953b6aa464d384b4a85731e4f596fe4177->enter($__internal_ace8646f0dd5193854d57104a8728a953b6aa464d384b4a85731e4f596fe4177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ace8646f0dd5193854d57104a8728a953b6aa464d384b4a85731e4f596fe4177->leave($__internal_ace8646f0dd5193854d57104a8728a953b6aa464d384b4a85731e4f596fe4177_prof);

        
        $__internal_98563c68dafc3b4f4e0800b0d3d6fcbb9d129ff2fb22cc7f2be103ce070679ec->leave($__internal_98563c68dafc3b4f4e0800b0d3d6fcbb9d129ff2fb22cc7f2be103ce070679ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
