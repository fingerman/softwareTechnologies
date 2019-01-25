<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_18dedb1163ef54bf0b9efd48e827dc836404e628eaf975eb8e153c85e46827dd extends Twig_Template
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
        $__internal_74dd909d6a4d84851df9260470c32ebf0619fd8d4cc3e1cce6393489469e28b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74dd909d6a4d84851df9260470c32ebf0619fd8d4cc3e1cce6393489469e28b4->enter($__internal_74dd909d6a4d84851df9260470c32ebf0619fd8d4cc3e1cce6393489469e28b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_fe544bc2e35fff7229eb5da28f300271565f430ee7cd79aec4f6d4f06bd2d55e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe544bc2e35fff7229eb5da28f300271565f430ee7cd79aec4f6d4f06bd2d55e->enter($__internal_fe544bc2e35fff7229eb5da28f300271565f430ee7cd79aec4f6d4f06bd2d55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_74dd909d6a4d84851df9260470c32ebf0619fd8d4cc3e1cce6393489469e28b4->leave($__internal_74dd909d6a4d84851df9260470c32ebf0619fd8d4cc3e1cce6393489469e28b4_prof);

        
        $__internal_fe544bc2e35fff7229eb5da28f300271565f430ee7cd79aec4f6d4f06bd2d55e->leave($__internal_fe544bc2e35fff7229eb5da28f300271565f430ee7cd79aec4f6d4f06bd2d55e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
