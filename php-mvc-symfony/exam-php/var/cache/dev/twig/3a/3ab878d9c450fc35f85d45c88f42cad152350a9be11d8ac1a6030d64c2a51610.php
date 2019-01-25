<?php

/* base.html.twig */
class __TwigTemplate_e3896824a4e50256d5691fe384d28f95c406a11740c322338a283a5eba4389a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2b70c0f0b96bc094a127e0240fad37793899bcf10537522698cd0049594465d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b70c0f0b96bc094a127e0240fad37793899bcf10537522698cd0049594465d->enter($__internal_e2b70c0f0b96bc094a127e0240fad37793899bcf10537522698cd0049594465d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_08f8f18580029c93cf7f09bd154106e7d2cab88806f145204b4a49b8dedc0dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f8f18580029c93cf7f09bd154106e7d2cab88806f145204b4a49b8dedc0dc5->enter($__internal_08f8f18580029c93cf7f09bd154106e7d2cab88806f145204b4a49b8dedc0dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">
";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "</body>
</html>
";
        
        $__internal_e2b70c0f0b96bc094a127e0240fad37793899bcf10537522698cd0049594465d->leave($__internal_e2b70c0f0b96bc094a127e0240fad37793899bcf10537522698cd0049594465d_prof);

        
        $__internal_08f8f18580029c93cf7f09bd154106e7d2cab88806f145204b4a49b8dedc0dc5->leave($__internal_08f8f18580029c93cf7f09bd154106e7d2cab88806f145204b4a49b8dedc0dc5_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_57060405680379cc63535a17b49201d53ca07f5dd5d97dc45a1ad39435c11cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57060405680379cc63535a17b49201d53ca07f5dd5d97dc45a1ad39435c11cff->enter($__internal_57060405680379cc63535a17b49201d53ca07f5dd5d97dc45a1ad39435c11cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e06001185a95e3abc53920cce3bde5462503d2ce7e3027f3c6ffeb4592a7c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e06001185a95e3abc53920cce3bde5462503d2ce7e3027f3c6ffeb4592a7c4b->enter($__internal_7e06001185a95e3abc53920cce3bde5462503d2ce7e3027f3c6ffeb4592a7c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project Rider";
        
        $__internal_7e06001185a95e3abc53920cce3bde5462503d2ce7e3027f3c6ffeb4592a7c4b->leave($__internal_7e06001185a95e3abc53920cce3bde5462503d2ce7e3027f3c6ffeb4592a7c4b_prof);

        
        $__internal_57060405680379cc63535a17b49201d53ca07f5dd5d97dc45a1ad39435c11cff->leave($__internal_57060405680379cc63535a17b49201d53ca07f5dd5d97dc45a1ad39435c11cff_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c3f8037ddb75b91ec1b7a471ca461cdf8373d897aeb77d31d59ed0fb3ff7f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3f8037ddb75b91ec1b7a471ca461cdf8373d897aeb77d31d59ed0fb3ff7f4d->enter($__internal_4c3f8037ddb75b91ec1b7a471ca461cdf8373d897aeb77d31d59ed0fb3ff7f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_39f594c093589ec4e1384d4d494a1179c65eb854a06c499d138fec5b016c8443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f594c093589ec4e1384d4d494a1179c65eb854a06c499d138fec5b016c8443->enter($__internal_39f594c093589ec4e1384d4d494a1179c65eb854a06c499d138fec5b016c8443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/create-style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_39f594c093589ec4e1384d4d494a1179c65eb854a06c499d138fec5b016c8443->leave($__internal_39f594c093589ec4e1384d4d494a1179c65eb854a06c499d138fec5b016c8443_prof);

        
        $__internal_4c3f8037ddb75b91ec1b7a471ca461cdf8373d897aeb77d31d59ed0fb3ff7f4d->leave($__internal_4c3f8037ddb75b91ec1b7a471ca461cdf8373d897aeb77d31d59ed0fb3ff7f4d_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_eeeab55865bea786f58286d0aff5dc53cb22fd61e65c7bc97da4a957da839a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeeab55865bea786f58286d0aff5dc53cb22fd61e65c7bc97da4a957da839a8a->enter($__internal_eeeab55865bea786f58286d0aff5dc53cb22fd61e65c7bc97da4a957da839a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_ee6396eac7140fd0d4bf7307b64d9ac2f26dea7fe6eea8d0ab2e44025c73c3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6396eac7140fd0d4bf7307b64d9ac2f26dea7fe6eea8d0ab2e44025c73c3f1->enter($__internal_ee6396eac7140fd0d4bf7307b64d9ac2f26dea7fe6eea8d0ab2e44025c73c3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_ee6396eac7140fd0d4bf7307b64d9ac2f26dea7fe6eea8d0ab2e44025c73c3f1->leave($__internal_ee6396eac7140fd0d4bf7307b64d9ac2f26dea7fe6eea8d0ab2e44025c73c3f1_prof);

        
        $__internal_eeeab55865bea786f58286d0aff5dc53cb22fd61e65c7bc97da4a957da839a8a->leave($__internal_eeeab55865bea786f58286d0aff5dc53cb22fd61e65c7bc97da4a957da839a8a_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_f54cd311830038d7545e4e065427046ccf2c94d22ccb4c40c149bd469549651f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54cd311830038d7545e4e065427046ccf2c94d22ccb4c40c149bd469549651f->enter($__internal_f54cd311830038d7545e4e065427046ccf2c94d22ccb4c40c149bd469549651f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e33c6d4f6281804ffb22561edc9bb2741ad4554b6dd35c9da6eb0f4c50ffc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e33c6d4f6281804ffb22561edc9bb2741ad4554b6dd35c9da6eb0f4c50ffc86->enter($__internal_2e33c6d4f6281804ffb22561edc9bb2741ad4554b6dd35c9da6eb0f4c50ffc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_2e33c6d4f6281804ffb22561edc9bb2741ad4554b6dd35c9da6eb0f4c50ffc86->leave($__internal_2e33c6d4f6281804ffb22561edc9bb2741ad4554b6dd35c9da6eb0f4c50ffc86_prof);

        
        $__internal_f54cd311830038d7545e4e065427046ccf2c94d22ccb4c40c149bd469549651f->leave($__internal_f54cd311830038d7545e4e065427046ccf2c94d22ccb4c40c149bd469549651f_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_3c62d1e69a979a42d70ad82dbb1d1f08475180c816da7d3a40a90165d7526069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c62d1e69a979a42d70ad82dbb1d1f08475180c816da7d3a40a90165d7526069->enter($__internal_3c62d1e69a979a42d70ad82dbb1d1f08475180c816da7d3a40a90165d7526069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4edcc984f91167327a02662653de34f725dd58f62e56036d4758e1358986f720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edcc984f91167327a02662653de34f725dd58f62e56036d4758e1358986f720->enter($__internal_4edcc984f91167327a02662653de34f725dd58f62e56036d4758e1358986f720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_4edcc984f91167327a02662653de34f725dd58f62e56036d4758e1358986f720->leave($__internal_4edcc984f91167327a02662653de34f725dd58f62e56036d4758e1358986f720_prof);

        
        $__internal_3c62d1e69a979a42d70ad82dbb1d1f08475180c816da7d3a40a90165d7526069->leave($__internal_3c62d1e69a979a42d70ad82dbb1d1f08475180c816da7d3a40a90165d7526069_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 21,  132 => 20,  115 => 19,  103 => 14,  99 => 13,  94 => 12,  85 => 11,  67 => 10,  55 => 23,  53 => 20,  49 => 19,  42 => 16,  40 => 11,  36 => 10,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Project Rider{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/create-style.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">
{% block body %}
    {% block main %}{% endblock %}
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\app\\Resources\\views\\base.html.twig");
    }
}
