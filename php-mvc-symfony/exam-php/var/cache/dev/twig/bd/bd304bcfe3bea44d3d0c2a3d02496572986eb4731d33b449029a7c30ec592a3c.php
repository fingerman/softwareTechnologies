<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0c39bf28106ec40a6cda8d0cfe2deb2242aa93632b434fa34c3b9fde99e68652 extends Twig_Template
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
        $__internal_bbba29496a9b15dbb96ba4431c4ea95efdb582c8c2f801b14ac1b4d9a26795eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbba29496a9b15dbb96ba4431c4ea95efdb582c8c2f801b14ac1b4d9a26795eb->enter($__internal_bbba29496a9b15dbb96ba4431c4ea95efdb582c8c2f801b14ac1b4d9a26795eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_531416f6fb95e9dcfe5ca59112e985c7779f53d6694cb384822dc358f7d7939c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531416f6fb95e9dcfe5ca59112e985c7779f53d6694cb384822dc358f7d7939c->enter($__internal_531416f6fb95e9dcfe5ca59112e985c7779f53d6694cb384822dc358f7d7939c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_bbba29496a9b15dbb96ba4431c4ea95efdb582c8c2f801b14ac1b4d9a26795eb->leave($__internal_bbba29496a9b15dbb96ba4431c4ea95efdb582c8c2f801b14ac1b4d9a26795eb_prof);

        
        $__internal_531416f6fb95e9dcfe5ca59112e985c7779f53d6694cb384822dc358f7d7939c->leave($__internal_531416f6fb95e9dcfe5ca59112e985c7779f53d6694cb384822dc358f7d7939c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
