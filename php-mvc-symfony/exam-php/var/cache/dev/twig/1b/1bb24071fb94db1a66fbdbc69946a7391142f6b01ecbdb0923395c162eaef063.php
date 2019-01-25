<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_76cb0bd9680c7883661e1355acb7c7e173271c238c6f09cbf1f743f1d384ea40 extends Twig_Template
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
        $__internal_8cebab1c20d0d6f1135cad4791939657d0a3f3a95180a4d06618ed429626bc06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cebab1c20d0d6f1135cad4791939657d0a3f3a95180a4d06618ed429626bc06->enter($__internal_8cebab1c20d0d6f1135cad4791939657d0a3f3a95180a4d06618ed429626bc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_1c3642bdeb9464558a0ee0a23df97ed45b2911bcbde8d5a5fd527b82bb93c533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3642bdeb9464558a0ee0a23df97ed45b2911bcbde8d5a5fd527b82bb93c533->enter($__internal_1c3642bdeb9464558a0ee0a23df97ed45b2911bcbde8d5a5fd527b82bb93c533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_8cebab1c20d0d6f1135cad4791939657d0a3f3a95180a4d06618ed429626bc06->leave($__internal_8cebab1c20d0d6f1135cad4791939657d0a3f3a95180a4d06618ed429626bc06_prof);

        
        $__internal_1c3642bdeb9464558a0ee0a23df97ed45b2911bcbde8d5a5fd527b82bb93c533->leave($__internal_1c3642bdeb9464558a0ee0a23df97ed45b2911bcbde8d5a5fd527b82bb93c533_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
