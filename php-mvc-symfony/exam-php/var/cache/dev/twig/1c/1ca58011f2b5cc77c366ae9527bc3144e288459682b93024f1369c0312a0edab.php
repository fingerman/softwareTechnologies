<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_365e6b620cf4f2458f9e03ea7062824336c4a84d858078d48da2b19f75a4921e extends Twig_Template
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
        $__internal_de2ccb1df6b0678c9eaaee01817e678737ef503519b308ee8df2cbbb6654f530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2ccb1df6b0678c9eaaee01817e678737ef503519b308ee8df2cbbb6654f530->enter($__internal_de2ccb1df6b0678c9eaaee01817e678737ef503519b308ee8df2cbbb6654f530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_e3f9ee6a410e9b50d7e945519dc34b0685388d66d8fc01b84c96ad8bcdc57068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f9ee6a410e9b50d7e945519dc34b0685388d66d8fc01b84c96ad8bcdc57068->enter($__internal_e3f9ee6a410e9b50d7e945519dc34b0685388d66d8fc01b84c96ad8bcdc57068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_de2ccb1df6b0678c9eaaee01817e678737ef503519b308ee8df2cbbb6654f530->leave($__internal_de2ccb1df6b0678c9eaaee01817e678737ef503519b308ee8df2cbbb6654f530_prof);

        
        $__internal_e3f9ee6a410e9b50d7e945519dc34b0685388d66d8fc01b84c96ad8bcdc57068->leave($__internal_e3f9ee6a410e9b50d7e945519dc34b0685388d66d8fc01b84c96ad8bcdc57068_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
