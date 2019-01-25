<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_333c399b3bd4125742ce8e295f028aca36bbf84eca188d41204b939f0b729192 extends Twig_Template
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
        $__internal_adbf623bc27b44e3c9de5177fdc08ba85541279339e280bf6359be3f856ef48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adbf623bc27b44e3c9de5177fdc08ba85541279339e280bf6359be3f856ef48b->enter($__internal_adbf623bc27b44e3c9de5177fdc08ba85541279339e280bf6359be3f856ef48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_f0b6c684b499bde9ace1bfb08b75738684d7926a9eb5023565e6e832a311dafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b6c684b499bde9ace1bfb08b75738684d7926a9eb5023565e6e832a311dafb->enter($__internal_f0b6c684b499bde9ace1bfb08b75738684d7926a9eb5023565e6e832a311dafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_adbf623bc27b44e3c9de5177fdc08ba85541279339e280bf6359be3f856ef48b->leave($__internal_adbf623bc27b44e3c9de5177fdc08ba85541279339e280bf6359be3f856ef48b_prof);

        
        $__internal_f0b6c684b499bde9ace1bfb08b75738684d7926a9eb5023565e6e832a311dafb->leave($__internal_f0b6c684b499bde9ace1bfb08b75738684d7926a9eb5023565e6e832a311dafb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
