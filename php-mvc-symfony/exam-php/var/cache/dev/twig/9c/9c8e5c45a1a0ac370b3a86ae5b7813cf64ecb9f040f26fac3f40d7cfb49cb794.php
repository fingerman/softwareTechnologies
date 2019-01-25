<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4952a27076e1fdea074c85b10f3313a6f4d4d8e9804f48e4efd9afd0c702bfe8 extends Twig_Template
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
        $__internal_362a78b9a80a3c48a87bb1ee833e97455871e84482519ab68b81b51b967b205c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362a78b9a80a3c48a87bb1ee833e97455871e84482519ab68b81b51b967b205c->enter($__internal_362a78b9a80a3c48a87bb1ee833e97455871e84482519ab68b81b51b967b205c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_fe055d635d8594d2034245a0a16910580fc519aa4aaa26a35b9fdeed1a71a2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe055d635d8594d2034245a0a16910580fc519aa4aaa26a35b9fdeed1a71a2c2->enter($__internal_fe055d635d8594d2034245a0a16910580fc519aa4aaa26a35b9fdeed1a71a2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_362a78b9a80a3c48a87bb1ee833e97455871e84482519ab68b81b51b967b205c->leave($__internal_362a78b9a80a3c48a87bb1ee833e97455871e84482519ab68b81b51b967b205c_prof);

        
        $__internal_fe055d635d8594d2034245a0a16910580fc519aa4aaa26a35b9fdeed1a71a2c2->leave($__internal_fe055d635d8594d2034245a0a16910580fc519aa4aaa26a35b9fdeed1a71a2c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
