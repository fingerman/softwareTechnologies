<?php

/* project/delete.html.twig */
class __TwigTemplate_bcca06a9106a4110bec0cf53b7b4fef1c7823df61791d11ee732f7c8b5c5fd2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/delete.html.twig", 1);
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
        $__internal_74243ea36674e62e25d18276fc9c422972b68770b9b720f240b473040657b99b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74243ea36674e62e25d18276fc9c422972b68770b9b720f240b473040657b99b->enter($__internal_74243ea36674e62e25d18276fc9c422972b68770b9b720f240b473040657b99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/delete.html.twig"));

        $__internal_460736efc7b15f3addd7466a24335d411e83ab07fdd70fdfbc75a60082e70e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460736efc7b15f3addd7466a24335d411e83ab07fdd70fdfbc75a60082e70e24->enter($__internal_460736efc7b15f3addd7466a24335d411e83ab07fdd70fdfbc75a60082e70e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74243ea36674e62e25d18276fc9c422972b68770b9b720f240b473040657b99b->leave($__internal_74243ea36674e62e25d18276fc9c422972b68770b9b720f240b473040657b99b_prof);

        
        $__internal_460736efc7b15f3addd7466a24335d411e83ab07fdd70fdfbc75a60082e70e24->leave($__internal_460736efc7b15f3addd7466a24335d411e83ab07fdd70fdfbc75a60082e70e24_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_882f38cca3c204d2b462e62969a5843bbf318144e001cf08debefde159ab0c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882f38cca3c204d2b462e62969a5843bbf318144e001cf08debefde159ab0c4e->enter($__internal_882f38cca3c204d2b462e62969a5843bbf318144e001cf08debefde159ab0c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5d31322ad890c77ef7feaa5f0ec01ddeacd6d589386c841ec4674a0cb8801d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d31322ad890c77ef7feaa5f0ec01ddeacd6d589386c841ec4674a0cb8801d7f->enter($__internal_5d31322ad890c77ef7feaa5f0ec01ddeacd6d589386c841ec4674a0cb8801d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_5d31322ad890c77ef7feaa5f0ec01ddeacd6d589386c841ec4674a0cb8801d7f->leave($__internal_5d31322ad890c77ef7feaa5f0ec01ddeacd6d589386c841ec4674a0cb8801d7f_prof);

        
        $__internal_882f38cca3c204d2b462e62969a5843bbf318144e001cf08debefde159ab0c4e->leave($__internal_882f38cca3c204d2b462e62969a5843bbf318144e001cf08debefde159ab0c4e_prof);

    }

    public function getTemplateName()
    {
        return "project/delete.html.twig";
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
{% endblock %}", "project/delete.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\app\\Resources\\views\\project\\delete.html.twig");
    }
}
