<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_bf8ed3c6a725e6de382e0ac4e9cf0050be09b5da19eb771f08b5505dcd0fb67f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dcc00383c5591bb2c196e206e67c9bb922459e67cb1441c0679c583c2c85866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dcc00383c5591bb2c196e206e67c9bb922459e67cb1441c0679c583c2c85866->enter($__internal_0dcc00383c5591bb2c196e206e67c9bb922459e67cb1441c0679c583c2c85866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_ddcccdc230aba35a9ffcc474324ccc6d4177c77f8b5ddbbc60d1f83791ab7d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddcccdc230aba35a9ffcc474324ccc6d4177c77f8b5ddbbc60d1f83791ab7d9f->enter($__internal_ddcccdc230aba35a9ffcc474324ccc6d4177c77f8b5ddbbc60d1f83791ab7d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dcc00383c5591bb2c196e206e67c9bb922459e67cb1441c0679c583c2c85866->leave($__internal_0dcc00383c5591bb2c196e206e67c9bb922459e67cb1441c0679c583c2c85866_prof);

        
        $__internal_ddcccdc230aba35a9ffcc474324ccc6d4177c77f8b5ddbbc60d1f83791ab7d9f->leave($__internal_ddcccdc230aba35a9ffcc474324ccc6d4177c77f8b5ddbbc60d1f83791ab7d9f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aabff7a33f6bb39f820953e17303a5d15ef59687c45550fc35b49c44763a7fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aabff7a33f6bb39f820953e17303a5d15ef59687c45550fc35b49c44763a7fc9->enter($__internal_aabff7a33f6bb39f820953e17303a5d15ef59687c45550fc35b49c44763a7fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a75451a0672230bcf819b8ac66d76499f7fd0ee33f182b334834b794953bbf37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75451a0672230bcf819b8ac66d76499f7fd0ee33f182b334834b794953bbf37->enter($__internal_a75451a0672230bcf819b8ac66d76499f7fd0ee33f182b334834b794953bbf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a75451a0672230bcf819b8ac66d76499f7fd0ee33f182b334834b794953bbf37->leave($__internal_a75451a0672230bcf819b8ac66d76499f7fd0ee33f182b334834b794953bbf37_prof);

        
        $__internal_aabff7a33f6bb39f820953e17303a5d15ef59687c45550fc35b49c44763a7fc9->leave($__internal_aabff7a33f6bb39f820953e17303a5d15ef59687c45550fc35b49c44763a7fc9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f35fd672de1490d844f492a555bce0eed59a40b50df232b71a9eae13617fa0dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35fd672de1490d844f492a555bce0eed59a40b50df232b71a9eae13617fa0dd->enter($__internal_f35fd672de1490d844f492a555bce0eed59a40b50df232b71a9eae13617fa0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f00cb45bb2c2b5d55acc674ec631675ab028e0ac2f2a25a83e1509d60ce25428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00cb45bb2c2b5d55acc674ec631675ab028e0ac2f2a25a83e1509d60ce25428->enter($__internal_f00cb45bb2c2b5d55acc674ec631675ab028e0ac2f2a25a83e1509d60ce25428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f00cb45bb2c2b5d55acc674ec631675ab028e0ac2f2a25a83e1509d60ce25428->leave($__internal_f00cb45bb2c2b5d55acc674ec631675ab028e0ac2f2a25a83e1509d60ce25428_prof);

        
        $__internal_f35fd672de1490d844f492a555bce0eed59a40b50df232b71a9eae13617fa0dd->leave($__internal_f35fd672de1490d844f492a555bce0eed59a40b50df232b71a9eae13617fa0dd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
