<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f4246ef443ace8d843686cc2b3e4557b6a20284a1b1cce143e25265565eb4edf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6945976a14aa39c157da3680c397acddf357e57bdee8f5f69f8f503c02eef63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6945976a14aa39c157da3680c397acddf357e57bdee8f5f69f8f503c02eef63b->enter($__internal_6945976a14aa39c157da3680c397acddf357e57bdee8f5f69f8f503c02eef63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_79e3fd14109467a6d6bf0e2fe4d126c84d2fcc4ed82f183bc1648442f9140c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e3fd14109467a6d6bf0e2fe4d126c84d2fcc4ed82f183bc1648442f9140c6f->enter($__internal_79e3fd14109467a6d6bf0e2fe4d126c84d2fcc4ed82f183bc1648442f9140c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6945976a14aa39c157da3680c397acddf357e57bdee8f5f69f8f503c02eef63b->leave($__internal_6945976a14aa39c157da3680c397acddf357e57bdee8f5f69f8f503c02eef63b_prof);

        
        $__internal_79e3fd14109467a6d6bf0e2fe4d126c84d2fcc4ed82f183bc1648442f9140c6f->leave($__internal_79e3fd14109467a6d6bf0e2fe4d126c84d2fcc4ed82f183bc1648442f9140c6f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5bc85c2ea03bec71cb4e54cf41c428645db6dfb486569a709d2a9335760b4cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc85c2ea03bec71cb4e54cf41c428645db6dfb486569a709d2a9335760b4cee->enter($__internal_5bc85c2ea03bec71cb4e54cf41c428645db6dfb486569a709d2a9335760b4cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_305ee23dc1c2647c3e6917c0b7a007f43308f463e9c6eb7ef0b86d36bc26dc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305ee23dc1c2647c3e6917c0b7a007f43308f463e9c6eb7ef0b86d36bc26dc97->enter($__internal_305ee23dc1c2647c3e6917c0b7a007f43308f463e9c6eb7ef0b86d36bc26dc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_305ee23dc1c2647c3e6917c0b7a007f43308f463e9c6eb7ef0b86d36bc26dc97->leave($__internal_305ee23dc1c2647c3e6917c0b7a007f43308f463e9c6eb7ef0b86d36bc26dc97_prof);

        
        $__internal_5bc85c2ea03bec71cb4e54cf41c428645db6dfb486569a709d2a9335760b4cee->leave($__internal_5bc85c2ea03bec71cb4e54cf41c428645db6dfb486569a709d2a9335760b4cee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
