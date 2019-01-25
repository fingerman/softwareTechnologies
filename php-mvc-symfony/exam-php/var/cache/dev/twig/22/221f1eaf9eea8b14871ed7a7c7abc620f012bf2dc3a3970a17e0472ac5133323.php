<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_80066e07492c5b29241911c3f9f6b2aeb9e45816969a125a5eca17b0129371b9 extends Twig_Template
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
        $__internal_81455f2e53d6fd181b0e80f3f94d631adce4eed8002ed4569c73272f52443910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81455f2e53d6fd181b0e80f3f94d631adce4eed8002ed4569c73272f52443910->enter($__internal_81455f2e53d6fd181b0e80f3f94d631adce4eed8002ed4569c73272f52443910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_3f27eaca06309a9ed4421004ed62c99afcad77d3d16cf98359f7bad475b6afc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f27eaca06309a9ed4421004ed62c99afcad77d3d16cf98359f7bad475b6afc5->enter($__internal_3f27eaca06309a9ed4421004ed62c99afcad77d3d16cf98359f7bad475b6afc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_81455f2e53d6fd181b0e80f3f94d631adce4eed8002ed4569c73272f52443910->leave($__internal_81455f2e53d6fd181b0e80f3f94d631adce4eed8002ed4569c73272f52443910_prof);

        
        $__internal_3f27eaca06309a9ed4421004ed62c99afcad77d3d16cf98359f7bad475b6afc5->leave($__internal_3f27eaca06309a9ed4421004ed62c99afcad77d3d16cf98359f7bad475b6afc5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
