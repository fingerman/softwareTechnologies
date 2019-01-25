<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_88a1da36d6581a1f8cbbebd82c03bc5b99db32bb3c690060debd6cb7512e66a3 extends Twig_Template
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
        $__internal_f5bf95f58f82a2b51ac45b887abd07c1acadb96607b38af8c93e4e032d629d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5bf95f58f82a2b51ac45b887abd07c1acadb96607b38af8c93e4e032d629d4c->enter($__internal_f5bf95f58f82a2b51ac45b887abd07c1acadb96607b38af8c93e4e032d629d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_61dba2582bb986cdb35c93187ee46dda772ef69cae0e7c1fd5a010956945e3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61dba2582bb986cdb35c93187ee46dda772ef69cae0e7c1fd5a010956945e3ba->enter($__internal_61dba2582bb986cdb35c93187ee46dda772ef69cae0e7c1fd5a010956945e3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f5bf95f58f82a2b51ac45b887abd07c1acadb96607b38af8c93e4e032d629d4c->leave($__internal_f5bf95f58f82a2b51ac45b887abd07c1acadb96607b38af8c93e4e032d629d4c_prof);

        
        $__internal_61dba2582bb986cdb35c93187ee46dda772ef69cae0e7c1fd5a010956945e3ba->leave($__internal_61dba2582bb986cdb35c93187ee46dda772ef69cae0e7c1fd5a010956945e3ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
