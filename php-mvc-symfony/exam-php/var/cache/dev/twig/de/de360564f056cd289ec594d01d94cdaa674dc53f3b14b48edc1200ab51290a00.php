<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_b179d830874389d635a339cc87e3b8d09689ff77a2384be93946df1af0ee330f extends Twig_Template
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
        $__internal_8df546fe127cc7651755c9841d801fa09b4262a3c1848ca98635e60fbcca096f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df546fe127cc7651755c9841d801fa09b4262a3c1848ca98635e60fbcca096f->enter($__internal_8df546fe127cc7651755c9841d801fa09b4262a3c1848ca98635e60fbcca096f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_51f6bdb6380708de2fd61aeac1c735ed39e0b14f30d2556fbfaed06df3a9f30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f6bdb6380708de2fd61aeac1c735ed39e0b14f30d2556fbfaed06df3a9f30d->enter($__internal_51f6bdb6380708de2fd61aeac1c735ed39e0b14f30d2556fbfaed06df3a9f30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8df546fe127cc7651755c9841d801fa09b4262a3c1848ca98635e60fbcca096f->leave($__internal_8df546fe127cc7651755c9841d801fa09b4262a3c1848ca98635e60fbcca096f_prof);

        
        $__internal_51f6bdb6380708de2fd61aeac1c735ed39e0b14f30d2556fbfaed06df3a9f30d->leave($__internal_51f6bdb6380708de2fd61aeac1c735ed39e0b14f30d2556fbfaed06df3a9f30d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
