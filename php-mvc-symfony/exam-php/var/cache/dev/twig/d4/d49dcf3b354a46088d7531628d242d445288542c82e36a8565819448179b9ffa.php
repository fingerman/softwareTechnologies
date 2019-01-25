<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_5d5f0c4efd9121f5fc1122145e1dfce1002b91a600712c16d292ecf50732336e extends Twig_Template
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
        $__internal_df19313daa4d23a39fd2e72cedf0e9c7b180199692c3d624fa4f62f43fd14e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df19313daa4d23a39fd2e72cedf0e9c7b180199692c3d624fa4f62f43fd14e40->enter($__internal_df19313daa4d23a39fd2e72cedf0e9c7b180199692c3d624fa4f62f43fd14e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_c5b2655be4371390607578690a56a3f615f959c15aa6e60c44e981f901c02299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b2655be4371390607578690a56a3f615f959c15aa6e60c44e981f901c02299->enter($__internal_c5b2655be4371390607578690a56a3f615f959c15aa6e60c44e981f901c02299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_df19313daa4d23a39fd2e72cedf0e9c7b180199692c3d624fa4f62f43fd14e40->leave($__internal_df19313daa4d23a39fd2e72cedf0e9c7b180199692c3d624fa4f62f43fd14e40_prof);

        
        $__internal_c5b2655be4371390607578690a56a3f615f959c15aa6e60c44e981f901c02299->leave($__internal_c5b2655be4371390607578690a56a3f615f959c15aa6e60c44e981f901c02299_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
