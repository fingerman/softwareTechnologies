<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e0e1bc3be4699194bdddaca7c999b64b9fadae57383229886b5111957a62d778 extends Twig_Template
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
        $__internal_bdad0813acc9cd3c93e3995c10776a73fe48b1674903eb1b06ea9513f315eb49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdad0813acc9cd3c93e3995c10776a73fe48b1674903eb1b06ea9513f315eb49->enter($__internal_bdad0813acc9cd3c93e3995c10776a73fe48b1674903eb1b06ea9513f315eb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_1641221143ad0c6a762e6952d12f4ac51d61019dd2bbcea761667b8dc5f34723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1641221143ad0c6a762e6952d12f4ac51d61019dd2bbcea761667b8dc5f34723->enter($__internal_1641221143ad0c6a762e6952d12f4ac51d61019dd2bbcea761667b8dc5f34723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_bdad0813acc9cd3c93e3995c10776a73fe48b1674903eb1b06ea9513f315eb49->leave($__internal_bdad0813acc9cd3c93e3995c10776a73fe48b1674903eb1b06ea9513f315eb49_prof);

        
        $__internal_1641221143ad0c6a762e6952d12f4ac51d61019dd2bbcea761667b8dc5f34723->leave($__internal_1641221143ad0c6a762e6952d12f4ac51d61019dd2bbcea761667b8dc5f34723_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
