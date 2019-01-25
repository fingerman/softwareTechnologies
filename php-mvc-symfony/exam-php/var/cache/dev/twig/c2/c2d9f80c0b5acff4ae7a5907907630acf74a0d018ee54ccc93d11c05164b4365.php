<?php

/* :project:edit.html.twig */
class __TwigTemplate_c0b7e4775aac7b2a0122ce2ebf7fa381df791839b3c28657359640bdd3e53c41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:edit.html.twig", 1);
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
        $__internal_1b4ed8847cf01c2979f59ce5c12a88d83647234725564216a05e2362bef15bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4ed8847cf01c2979f59ce5c12a88d83647234725564216a05e2362bef15bf2->enter($__internal_1b4ed8847cf01c2979f59ce5c12a88d83647234725564216a05e2362bef15bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:edit.html.twig"));

        $__internal_72d82d03423b1abca9718e0a9d7e7daa23de85fb4bda8b9b021fbccce9b73018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d82d03423b1abca9718e0a9d7e7daa23de85fb4bda8b9b021fbccce9b73018->enter($__internal_72d82d03423b1abca9718e0a9d7e7daa23de85fb4bda8b9b021fbccce9b73018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b4ed8847cf01c2979f59ce5c12a88d83647234725564216a05e2362bef15bf2->leave($__internal_1b4ed8847cf01c2979f59ce5c12a88d83647234725564216a05e2362bef15bf2_prof);

        
        $__internal_72d82d03423b1abca9718e0a9d7e7daa23de85fb4bda8b9b021fbccce9b73018->leave($__internal_72d82d03423b1abca9718e0a9d7e7daa23de85fb4bda8b9b021fbccce9b73018_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_538429e2523acd0dce83208d247c27d2f9707aa1869a6bc099c150a774fe5776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538429e2523acd0dce83208d247c27d2f9707aa1869a6bc099c150a774fe5776->enter($__internal_538429e2523acd0dce83208d247c27d2f9707aa1869a6bc099c150a774fe5776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4bc0baee9452ebaedd7c128416e57b6531d9aa10923c53557d29277dd608af48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc0baee9452ebaedd7c128416e57b6531d9aa10923c53557d29277dd608af48->enter($__internal_4bc0baee9452ebaedd7c128416e57b6531d9aa10923c53557d29277dd608af48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_4bc0baee9452ebaedd7c128416e57b6531d9aa10923c53557d29277dd608af48->leave($__internal_4bc0baee9452ebaedd7c128416e57b6531d9aa10923c53557d29277dd608af48_prof);

        
        $__internal_538429e2523acd0dce83208d247c27d2f9707aa1869a6bc099c150a774fe5776->leave($__internal_538429e2523acd0dce83208d247c27d2f9707aa1869a6bc099c150a774fe5776_prof);

    }

    public function getTemplateName()
    {
        return ":project:edit.html.twig";
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

", ":project:edit.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\app/Resources\\views/project/edit.html.twig");
    }
}
