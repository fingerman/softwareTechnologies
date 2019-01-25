<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cfde5eceda8896ae37b1674366bae4ebf270eeb2d53de84bb87562a1d9c32b75 extends Twig_Template
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
        $__internal_e87de4c02caf6be133c84b9e54a8ca15f0cbb7b3ffb13d50c15cd7120d8f39a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e87de4c02caf6be133c84b9e54a8ca15f0cbb7b3ffb13d50c15cd7120d8f39a8->enter($__internal_e87de4c02caf6be133c84b9e54a8ca15f0cbb7b3ffb13d50c15cd7120d8f39a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_81f8a7125c692426ff51d1ae64276728f3016af544c80006e1afb7a7f30614fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f8a7125c692426ff51d1ae64276728f3016af544c80006e1afb7a7f30614fe->enter($__internal_81f8a7125c692426ff51d1ae64276728f3016af544c80006e1afb7a7f30614fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e87de4c02caf6be133c84b9e54a8ca15f0cbb7b3ffb13d50c15cd7120d8f39a8->leave($__internal_e87de4c02caf6be133c84b9e54a8ca15f0cbb7b3ffb13d50c15cd7120d8f39a8_prof);

        
        $__internal_81f8a7125c692426ff51d1ae64276728f3016af544c80006e1afb7a7f30614fe->leave($__internal_81f8a7125c692426ff51d1ae64276728f3016af544c80006e1afb7a7f30614fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
