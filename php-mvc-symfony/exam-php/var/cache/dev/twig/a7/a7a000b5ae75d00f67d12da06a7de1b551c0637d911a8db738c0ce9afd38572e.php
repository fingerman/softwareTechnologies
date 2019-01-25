<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e4cdfb6cc83c59090c82f77816c237694f97bb202e4656d04f174aca8b7958db extends Twig_Template
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
        $__internal_c7aeebeebfb922b85c418e42f0879b51622ac2acfc968327fd8e6ee19c2a5d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7aeebeebfb922b85c418e42f0879b51622ac2acfc968327fd8e6ee19c2a5d08->enter($__internal_c7aeebeebfb922b85c418e42f0879b51622ac2acfc968327fd8e6ee19c2a5d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e691fed6ebff613298e06b99099c0711f546abb05ca547f66bf93a4385e4c3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e691fed6ebff613298e06b99099c0711f546abb05ca547f66bf93a4385e4c3d7->enter($__internal_e691fed6ebff613298e06b99099c0711f546abb05ca547f66bf93a4385e4c3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c7aeebeebfb922b85c418e42f0879b51622ac2acfc968327fd8e6ee19c2a5d08->leave($__internal_c7aeebeebfb922b85c418e42f0879b51622ac2acfc968327fd8e6ee19c2a5d08_prof);

        
        $__internal_e691fed6ebff613298e06b99099c0711f546abb05ca547f66bf93a4385e4c3d7->leave($__internal_e691fed6ebff613298e06b99099c0711f546abb05ca547f66bf93a4385e4c3d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
