<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9b3aa77c4da7542a8080a9e23f73e33665102de677ec648943af608d4dc1cd67 extends Twig_Template
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
        $__internal_21e69e361f7ad92e51c3001f403fa716a995c316c1f370928359096dfa42f6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e69e361f7ad92e51c3001f403fa716a995c316c1f370928359096dfa42f6f4->enter($__internal_21e69e361f7ad92e51c3001f403fa716a995c316c1f370928359096dfa42f6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_34af30437d414eccc01579f8eddbe82efb366fd6d22ad78f24146c0943e45847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34af30437d414eccc01579f8eddbe82efb366fd6d22ad78f24146c0943e45847->enter($__internal_34af30437d414eccc01579f8eddbe82efb366fd6d22ad78f24146c0943e45847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_21e69e361f7ad92e51c3001f403fa716a995c316c1f370928359096dfa42f6f4->leave($__internal_21e69e361f7ad92e51c3001f403fa716a995c316c1f370928359096dfa42f6f4_prof);

        
        $__internal_34af30437d414eccc01579f8eddbe82efb366fd6d22ad78f24146c0943e45847->leave($__internal_34af30437d414eccc01579f8eddbe82efb366fd6d22ad78f24146c0943e45847_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
