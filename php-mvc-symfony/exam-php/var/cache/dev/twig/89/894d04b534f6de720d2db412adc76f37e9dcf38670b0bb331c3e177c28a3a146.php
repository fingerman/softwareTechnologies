<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ed4bc1980f0fd307bb25eee723a75fb860db2c88ca27a34fbf168cd736277e2c extends Twig_Template
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
        $__internal_866149d29ecab440a1d11f0597dda79743992e887c2f89605c8f1e4aebd77885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866149d29ecab440a1d11f0597dda79743992e887c2f89605c8f1e4aebd77885->enter($__internal_866149d29ecab440a1d11f0597dda79743992e887c2f89605c8f1e4aebd77885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_a26f9d642b48f6def0f1f708dde2c03ec12a42f07a49a88a6d222d90ab2735bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26f9d642b48f6def0f1f708dde2c03ec12a42f07a49a88a6d222d90ab2735bc->enter($__internal_a26f9d642b48f6def0f1f708dde2c03ec12a42f07a49a88a6d222d90ab2735bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_866149d29ecab440a1d11f0597dda79743992e887c2f89605c8f1e4aebd77885->leave($__internal_866149d29ecab440a1d11f0597dda79743992e887c2f89605c8f1e4aebd77885_prof);

        
        $__internal_a26f9d642b48f6def0f1f708dde2c03ec12a42f07a49a88a6d222d90ab2735bc->leave($__internal_a26f9d642b48f6def0f1f708dde2c03ec12a42f07a49a88a6d222d90ab2735bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
