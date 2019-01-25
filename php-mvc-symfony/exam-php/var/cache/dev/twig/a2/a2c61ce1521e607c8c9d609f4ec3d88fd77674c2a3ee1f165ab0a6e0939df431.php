<?php

/* project/edit.html.twig */
class __TwigTemplate_e399600f4dff927941f4cb375d53ffe1aba20395d5692725ae6be22e4cb96c6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/edit.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cca4a4c7bb14d4f463c444624e17c4a73cab61a53fe39d287c7fc1d7ce02fd1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca4a4c7bb14d4f463c444624e17c4a73cab61a53fe39d287c7fc1d7ce02fd1e->enter($__internal_cca4a4c7bb14d4f463c444624e17c4a73cab61a53fe39d287c7fc1d7ce02fd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/edit.html.twig"));

        $__internal_d41e17d86b4f9dcc860a9c71095d9af895ca556584d77bf933a62fc826f26052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41e17d86b4f9dcc860a9c71095d9af895ca556584d77bf933a62fc826f26052->enter($__internal_d41e17d86b4f9dcc860a9c71095d9af895ca556584d77bf933a62fc826f26052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cca4a4c7bb14d4f463c444624e17c4a73cab61a53fe39d287c7fc1d7ce02fd1e->leave($__internal_cca4a4c7bb14d4f463c444624e17c4a73cab61a53fe39d287c7fc1d7ce02fd1e_prof);

        
        $__internal_d41e17d86b4f9dcc860a9c71095d9af895ca556584d77bf933a62fc826f26052->leave($__internal_d41e17d86b4f9dcc860a9c71095d9af895ca556584d77bf933a62fc826f26052_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d3826cb6f26c45c22fc7e1394077c76c561ef01afc2366e161f201b798cca00c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3826cb6f26c45c22fc7e1394077c76c561ef01afc2366e161f201b798cca00c->enter($__internal_d3826cb6f26c45c22fc7e1394077c76c561ef01afc2366e161f201b798cca00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_7b78554414b87dd861ecb2f01b185e16d7051a4df73684a5292c741912edddb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b78554414b87dd861ecb2f01b185e16d7051a4df73684a5292c741912edddb4->enter($__internal_7b78554414b87dd861ecb2f01b185e16d7051a4df73684a5292c741912edddb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "title", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "budget", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Edit Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_7b78554414b87dd861ecb2f01b185e16d7051a4df73684a5292c741912edddb4->leave($__internal_7b78554414b87dd861ecb2f01b185e16d7051a4df73684a5292c741912edddb4_prof);

        
        $__internal_d3826cb6f26c45c22fc7e1394077c76c561ef01afc2366e161f201b798cca00c->leave($__internal_d3826cb6f26c45c22fc7e1394077c76c561ef01afc2366e161f201b798cca00c_prof);

    }

    public function getTemplateName()
    {
        return "project/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"{{ project.title }}\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\">{{ project.description }}</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"{{ project.budget }}\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Edit Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}

", "project/edit.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\app\\Resources\\views\\project\\edit.html.twig");
    }
}
