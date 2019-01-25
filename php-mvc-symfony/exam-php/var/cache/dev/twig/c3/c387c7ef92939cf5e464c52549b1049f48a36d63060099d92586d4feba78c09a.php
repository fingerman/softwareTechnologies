<?php

/* ::base.html.twig */
class __TwigTemplate_663eea4e437d11d65ce2026362a629afabc02efe2744c3ce36d7fed1acef5675 extends Twig_Template
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
        $__internal_22aab906959f5a39c812c5e4d9e5912c3db7f6f808c2fe250d9aa68915cbf8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22aab906959f5a39c812c5e4d9e5912c3db7f6f808c2fe250d9aa68915cbf8cb->enter($__internal_22aab906959f5a39c812c5e4d9e5912c3db7f6f808c2fe250d9aa68915cbf8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_af0334c55014bbcc2130a653c8cbc662b0d92ce4dcce5d65637bca2da9a1046a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0334c55014bbcc2130a653c8cbc662b0d92ce4dcce5d65637bca2da9a1046a->enter($__internal_af0334c55014bbcc2130a653c8cbc662b0d92ce4dcce5d65637bca2da9a1046a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_22aab906959f5a39c812c5e4d9e5912c3db7f6f808c2fe250d9aa68915cbf8cb->leave($__internal_22aab906959f5a39c812c5e4d9e5912c3db7f6f808c2fe250d9aa68915cbf8cb_prof);

        
        $__internal_af0334c55014bbcc2130a653c8cbc662b0d92ce4dcce5d65637bca2da9a1046a->leave($__internal_af0334c55014bbcc2130a653c8cbc662b0d92ce4dcce5d65637bca2da9a1046a_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae4188020bee8910ffb8297ce60d369961a12b0f1ae1e2481afe775963f7edb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4188020bee8910ffb8297ce60d369961a12b0f1ae1e2481afe775963f7edb5->enter($__internal_ae4188020bee8910ffb8297ce60d369961a12b0f1ae1e2481afe775963f7edb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f768016f2c9b261b9a11296b0488ddc043f9fcc9b321ea7eacdc67f72733182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f768016f2c9b261b9a11296b0488ddc043f9fcc9b321ea7eacdc67f72733182->enter($__internal_5f768016f2c9b261b9a11296b0488ddc043f9fcc9b321ea7eacdc67f72733182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project Rider";
        
        $__internal_5f768016f2c9b261b9a11296b0488ddc043f9fcc9b321ea7eacdc67f72733182->leave($__internal_5f768016f2c9b261b9a11296b0488ddc043f9fcc9b321ea7eacdc67f72733182_prof);

        
        $__internal_ae4188020bee8910ffb8297ce60d369961a12b0f1ae1e2481afe775963f7edb5->leave($__internal_ae4188020bee8910ffb8297ce60d369961a12b0f1ae1e2481afe775963f7edb5_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db8eaacdc735229ded464ee5e5b7112d9ee9bc618253e1c5218cb10fcc64dc58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8eaacdc735229ded464ee5e5b7112d9ee9bc618253e1c5218cb10fcc64dc58->enter($__internal_db8eaacdc735229ded464ee5e5b7112d9ee9bc618253e1c5218cb10fcc64dc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7438f868a187cbc0dae80412aad462830f410b4ff807687e9f06880722607173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7438f868a187cbc0dae80412aad462830f410b4ff807687e9f06880722607173->enter($__internal_7438f868a187cbc0dae80412aad462830f410b4ff807687e9f06880722607173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7438f868a187cbc0dae80412aad462830f410b4ff807687e9f06880722607173->leave($__internal_7438f868a187cbc0dae80412aad462830f410b4ff807687e9f06880722607173_prof);

        
        $__internal_db8eaacdc735229ded464ee5e5b7112d9ee9bc618253e1c5218cb10fcc64dc58->leave($__internal_db8eaacdc735229ded464ee5e5b7112d9ee9bc618253e1c5218cb10fcc64dc58_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_54ac85353719ce2072a5314692f9225d36d3064f5ef066be24367ff56bf80392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ac85353719ce2072a5314692f9225d36d3064f5ef066be24367ff56bf80392->enter($__internal_54ac85353719ce2072a5314692f9225d36d3064f5ef066be24367ff56bf80392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_a5d6659204d7afd52661929bb915ba556f030c40ce967e5c55636b4c934aaee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d6659204d7afd52661929bb915ba556f030c40ce967e5c55636b4c934aaee4->enter($__internal_a5d6659204d7afd52661929bb915ba556f030c40ce967e5c55636b4c934aaee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_a5d6659204d7afd52661929bb915ba556f030c40ce967e5c55636b4c934aaee4->leave($__internal_a5d6659204d7afd52661929bb915ba556f030c40ce967e5c55636b4c934aaee4_prof);

        
        $__internal_54ac85353719ce2072a5314692f9225d36d3064f5ef066be24367ff56bf80392->leave($__internal_54ac85353719ce2072a5314692f9225d36d3064f5ef066be24367ff56bf80392_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1f261d71ca39471ac362a5bc4cbbc060c3d0dc560462b9064fa0e8664642d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f261d71ca39471ac362a5bc4cbbc060c3d0dc560462b9064fa0e8664642d25->enter($__internal_f1f261d71ca39471ac362a5bc4cbbc060c3d0dc560462b9064fa0e8664642d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59f7f834267728882daa3575e0b22529105ee0856afd21913bd16188a921f8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f7f834267728882daa3575e0b22529105ee0856afd21913bd16188a921f8ef->enter($__internal_59f7f834267728882daa3575e0b22529105ee0856afd21913bd16188a921f8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_59f7f834267728882daa3575e0b22529105ee0856afd21913bd16188a921f8ef->leave($__internal_59f7f834267728882daa3575e0b22529105ee0856afd21913bd16188a921f8ef_prof);

        
        $__internal_f1f261d71ca39471ac362a5bc4cbbc060c3d0dc560462b9064fa0e8664642d25->leave($__internal_f1f261d71ca39471ac362a5bc4cbbc060c3d0dc560462b9064fa0e8664642d25_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_8a387a4d16929029e4fa66eef3236f3251fb9ddff457ac1cc730cdb60541e861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a387a4d16929029e4fa66eef3236f3251fb9ddff457ac1cc730cdb60541e861->enter($__internal_8a387a4d16929029e4fa66eef3236f3251fb9ddff457ac1cc730cdb60541e861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_2554190daa5b56d6f3fa5c5d2d80cf5a921d7b5647b59c37fd1c83aad18f14eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2554190daa5b56d6f3fa5c5d2d80cf5a921d7b5647b59c37fd1c83aad18f14eb->enter($__internal_2554190daa5b56d6f3fa5c5d2d80cf5a921d7b5647b59c37fd1c83aad18f14eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_2554190daa5b56d6f3fa5c5d2d80cf5a921d7b5647b59c37fd1c83aad18f14eb->leave($__internal_2554190daa5b56d6f3fa5c5d2d80cf5a921d7b5647b59c37fd1c83aad18f14eb_prof);

        
        $__internal_8a387a4d16929029e4fa66eef3236f3251fb9ddff457ac1cc730cdb60541e861->leave($__internal_8a387a4d16929029e4fa66eef3236f3251fb9ddff457ac1cc730cdb60541e861_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\app/Resources\\views/base.html.twig");
    }
}
