<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_995022e4965d7f25f1ae5af06081534053a384c55c3366a5fabc26bf8e2c9377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43fa692278d4ccb7b87b7863e77d1781edc71dacbdec0114353c73f62da90f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fa692278d4ccb7b87b7863e77d1781edc71dacbdec0114353c73f62da90f0e->enter($__internal_43fa692278d4ccb7b87b7863e77d1781edc71dacbdec0114353c73f62da90f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_03676eee5b9b7e1f180a7568155a338f8ebdc3f4b6af2377e371fea3ef6851e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03676eee5b9b7e1f180a7568155a338f8ebdc3f4b6af2377e371fea3ef6851e4->enter($__internal_03676eee5b9b7e1f180a7568155a338f8ebdc3f4b6af2377e371fea3ef6851e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_43fa692278d4ccb7b87b7863e77d1781edc71dacbdec0114353c73f62da90f0e->leave($__internal_43fa692278d4ccb7b87b7863e77d1781edc71dacbdec0114353c73f62da90f0e_prof);

        
        $__internal_03676eee5b9b7e1f180a7568155a338f8ebdc3f4b6af2377e371fea3ef6851e4->leave($__internal_03676eee5b9b7e1f180a7568155a338f8ebdc3f4b6af2377e371fea3ef6851e4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
