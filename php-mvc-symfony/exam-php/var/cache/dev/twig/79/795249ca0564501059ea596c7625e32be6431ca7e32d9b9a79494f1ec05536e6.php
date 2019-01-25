<?php

/* :project:delete.html.twig */
class __TwigTemplate_714b9629620fa3907900d79da98903a413ffb037fb5d72cb53479ba4e9683085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:delete.html.twig", 1);
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
        $__internal_64a637941c32617f6072c1f2e5a182c8a2bb6fbb97cb2412b5cca3e2135b0d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a637941c32617f6072c1f2e5a182c8a2bb6fbb97cb2412b5cca3e2135b0d7a->enter($__internal_64a637941c32617f6072c1f2e5a182c8a2bb6fbb97cb2412b5cca3e2135b0d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:delete.html.twig"));

        $__internal_6d838581a56c5ef220e886a14476cd84bcf3124c95292287d02f6bc9aa6e93af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d838581a56c5ef220e886a14476cd84bcf3124c95292287d02f6bc9aa6e93af->enter($__internal_6d838581a56c5ef220e886a14476cd84bcf3124c95292287d02f6bc9aa6e93af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64a637941c32617f6072c1f2e5a182c8a2bb6fbb97cb2412b5cca3e2135b0d7a->leave($__internal_64a637941c32617f6072c1f2e5a182c8a2bb6fbb97cb2412b5cca3e2135b0d7a_prof);

        
        $__internal_6d838581a56c5ef220e886a14476cd84bcf3124c95292287d02f6bc9aa6e93af->leave($__internal_6d838581a56c5ef220e886a14476cd84bcf3124c95292287d02f6bc9aa6e93af_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_999a2827e5da4f2c8827342487faf1252833a95d003165263f794fa6fb18daeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999a2827e5da4f2c8827342487faf1252833a95d003165263f794fa6fb18daeb->enter($__internal_999a2827e5da4f2c8827342487faf1252833a95d003165263f794fa6fb18daeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_2e6a509c7f94e2699e4a0e7a7bb354a6cbef2bf13109ca4d240f8b567c3f578a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6a509c7f94e2699e4a0e7a7bb354a6cbef2bf13109ca4d240f8b567c3f578a->enter($__internal_2e6a509c7f94e2699e4a0e7a7bb354a6cbef2bf13109ca4d240f8b567c3f578a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo "\" disabled=\"disabled\"/>
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"
                      disabled=\"disabled\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "budget", array()), "html", null, true);
        echo "\"
                   disabled=\"disabled\"/>
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Delete Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_2e6a509c7f94e2699e4a0e7a7bb354a6cbef2bf13109ca4d240f8b567c3f578a->leave($__internal_2e6a509c7f94e2699e4a0e7a7bb354a6cbef2bf13109ca4d240f8b567c3f578a_prof);

        
        $__internal_999a2827e5da4f2c8827342487faf1252833a95d003165263f794fa6fb18daeb->leave($__internal_999a2827e5da4f2c8827342487faf1252833a95d003165263f794fa6fb18daeb_prof);

    }

    public function getTemplateName()
    {
        return ":project:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  73 => 20,  66 => 16,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
            <input class=\"create-title-content\" name=\"project[title]\" value=\"{{ project.title }}\" disabled=\"disabled\"/>
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"
                      disabled=\"disabled\">{{ project.description }}</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"{{ project.budget }}\"
                   disabled=\"disabled\"/>
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Delete Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", ":project:delete.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\app/Resources\\views/project/delete.html.twig");
    }
}
