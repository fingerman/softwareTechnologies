<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_7eb1ca209e4a6f678007f9191e858357989bf15e9a1f2f6dcfbd7477eac6d2e6 extends Twig_Template
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
        $__internal_c42fae0fad8563b97a0219f7443ae13e2331acfb1e48be959a0cf7c5c7a1c65f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42fae0fad8563b97a0219f7443ae13e2331acfb1e48be959a0cf7c5c7a1c65f->enter($__internal_c42fae0fad8563b97a0219f7443ae13e2331acfb1e48be959a0cf7c5c7a1c65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_bcf3a11d94a07854a2fac1aa8ff79235e0c218c4d3f440cadda55729ae87eac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf3a11d94a07854a2fac1aa8ff79235e0c218c4d3f440cadda55729ae87eac2->enter($__internal_bcf3a11d94a07854a2fac1aa8ff79235e0c218c4d3f440cadda55729ae87eac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c42fae0fad8563b97a0219f7443ae13e2331acfb1e48be959a0cf7c5c7a1c65f->leave($__internal_c42fae0fad8563b97a0219f7443ae13e2331acfb1e48be959a0cf7c5c7a1c65f_prof);

        
        $__internal_bcf3a11d94a07854a2fac1aa8ff79235e0c218c4d3f440cadda55729ae87eac2->leave($__internal_bcf3a11d94a07854a2fac1aa8ff79235e0c218c4d3f440cadda55729ae87eac2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
