<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_20216c96a4d302674d1155eb84427ce0bde9502358e4e2a8c8bb1f0a203e2008 extends Twig_Template
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
        $__internal_7b20a2e94448e71be578828567fff3d236aecdac959e2c86908e3095ea161011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b20a2e94448e71be578828567fff3d236aecdac959e2c86908e3095ea161011->enter($__internal_7b20a2e94448e71be578828567fff3d236aecdac959e2c86908e3095ea161011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_9d54b21f3b03d691396daf9599f3d7c71e745de8687c3465d2fd776f8c0a3da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d54b21f3b03d691396daf9599f3d7c71e745de8687c3465d2fd776f8c0a3da5->enter($__internal_9d54b21f3b03d691396daf9599f3d7c71e745de8687c3465d2fd776f8c0a3da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7b20a2e94448e71be578828567fff3d236aecdac959e2c86908e3095ea161011->leave($__internal_7b20a2e94448e71be578828567fff3d236aecdac959e2c86908e3095ea161011_prof);

        
        $__internal_9d54b21f3b03d691396daf9599f3d7c71e745de8687c3465d2fd776f8c0a3da5->leave($__internal_9d54b21f3b03d691396daf9599f3d7c71e745de8687c3465d2fd776f8c0a3da5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
