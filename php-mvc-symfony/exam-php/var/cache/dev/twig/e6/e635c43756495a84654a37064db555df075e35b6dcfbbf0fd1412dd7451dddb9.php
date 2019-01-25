<?php

/* :project:create.html.twig */
class __TwigTemplate_80a4c42733bede188df17fa491bc318665393d448aa42d96d54a874ab48d9847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:create.html.twig", 1);
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
        $__internal_e462354b61e4313ae74dac2bde6b77c4924e1907dacba92e6d6e2866b3cb2902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e462354b61e4313ae74dac2bde6b77c4924e1907dacba92e6d6e2866b3cb2902->enter($__internal_e462354b61e4313ae74dac2bde6b77c4924e1907dacba92e6d6e2866b3cb2902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:create.html.twig"));

        $__internal_da47055b752fbfb469e12419723bccf6ba59de35b867394764fc9148d25030db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da47055b752fbfb469e12419723bccf6ba59de35b867394764fc9148d25030db->enter($__internal_da47055b752fbfb469e12419723bccf6ba59de35b867394764fc9148d25030db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e462354b61e4313ae74dac2bde6b77c4924e1907dacba92e6d6e2866b3cb2902->leave($__internal_e462354b61e4313ae74dac2bde6b77c4924e1907dacba92e6d6e2866b3cb2902_prof);

        
        $__internal_da47055b752fbfb469e12419723bccf6ba59de35b867394764fc9148d25030db->leave($__internal_da47055b752fbfb469e12419723bccf6ba59de35b867394764fc9148d25030db_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_97dabb6a3506eb14dec664248dbd2e4560990175136603e22fc97bc2ad59446d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97dabb6a3506eb14dec664248dbd2e4560990175136603e22fc97bc2ad59446d->enter($__internal_97dabb6a3506eb14dec664248dbd2e4560990175136603e22fc97bc2ad59446d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_dd7d8b3d495c2e83f35ecd2adf92777f60eb7e45a538edcdcd007e83f414daa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7d8b3d495c2e83f35ecd2adf92777f60eb7e45a538edcdcd007e83f414daa1->enter($__internal_dd7d8b3d495c2e83f35ecd2adf92777f60eb7e45a538edcdcd007e83f414daa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_dd7d8b3d495c2e83f35ecd2adf92777f60eb7e45a538edcdcd007e83f414daa1->leave($__internal_dd7d8b3d495c2e83f35ecd2adf92777f60eb7e45a538edcdcd007e83f414daa1_prof);

        
        $__internal_97dabb6a3506eb14dec664248dbd2e4560990175136603e22fc97bc2ad59446d->leave($__internal_97dabb6a3506eb14dec664248dbd2e4560990175136603e22fc97bc2ad59446d_prof);

    }

    public function getTemplateName()
    {
        return ":project:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
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
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", ":project:create.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\app/Resources\\views/project/create.html.twig");
    }
}
