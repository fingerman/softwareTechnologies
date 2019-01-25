<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_29d9b8a012144ba4266eb3f1e51ab5724e29708edb2bd0e9a04564b53b10bcb5 extends Twig_Template
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
        $__internal_b0d1fdc8a34a59382eab21248b5fddc6db16c8bba1a0ddc92ac3dec52b1e177c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d1fdc8a34a59382eab21248b5fddc6db16c8bba1a0ddc92ac3dec52b1e177c->enter($__internal_b0d1fdc8a34a59382eab21248b5fddc6db16c8bba1a0ddc92ac3dec52b1e177c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_51ec28d7d483f571c16f78835a45b03b3c614004aee18ea691e50d33521f293d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ec28d7d483f571c16f78835a45b03b3c614004aee18ea691e50d33521f293d->enter($__internal_51ec28d7d483f571c16f78835a45b03b3c614004aee18ea691e50d33521f293d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b0d1fdc8a34a59382eab21248b5fddc6db16c8bba1a0ddc92ac3dec52b1e177c->leave($__internal_b0d1fdc8a34a59382eab21248b5fddc6db16c8bba1a0ddc92ac3dec52b1e177c_prof);

        
        $__internal_51ec28d7d483f571c16f78835a45b03b3c614004aee18ea691e50d33521f293d->leave($__internal_51ec28d7d483f571c16f78835a45b03b3c614004aee18ea691e50d33521f293d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
