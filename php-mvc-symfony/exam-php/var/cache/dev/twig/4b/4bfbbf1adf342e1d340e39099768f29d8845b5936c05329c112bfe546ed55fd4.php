<?php

/* project/create.html.twig */
class __TwigTemplate_7da1e9b039eeeec7543ae3aef445464ca850d5ac6140b3041be1ef65f41eb261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/create.html.twig", 1);
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
        $__internal_38e35fe04923ee7c36b8694c8f49b80403f39fe2d37d8eed71d3dde884cf4c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e35fe04923ee7c36b8694c8f49b80403f39fe2d37d8eed71d3dde884cf4c55->enter($__internal_38e35fe04923ee7c36b8694c8f49b80403f39fe2d37d8eed71d3dde884cf4c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/create.html.twig"));

        $__internal_dcbbe5100ad9ca53e8f5531cccf336ded820ac6862c6a818bfa31503101f8eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbbe5100ad9ca53e8f5531cccf336ded820ac6862c6a818bfa31503101f8eb8->enter($__internal_dcbbe5100ad9ca53e8f5531cccf336ded820ac6862c6a818bfa31503101f8eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e35fe04923ee7c36b8694c8f49b80403f39fe2d37d8eed71d3dde884cf4c55->leave($__internal_38e35fe04923ee7c36b8694c8f49b80403f39fe2d37d8eed71d3dde884cf4c55_prof);

        
        $__internal_dcbbe5100ad9ca53e8f5531cccf336ded820ac6862c6a818bfa31503101f8eb8->leave($__internal_dcbbe5100ad9ca53e8f5531cccf336ded820ac6862c6a818bfa31503101f8eb8_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_487b21668d1036101d1f12ebd199594f3191c626672b3449e4deec97997ea932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487b21668d1036101d1f12ebd199594f3191c626672b3449e4deec97997ea932->enter($__internal_487b21668d1036101d1f12ebd199594f3191c626672b3449e4deec97997ea932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3d000cca2acf15cdf7c989fcc947b907cb52e2328fcbb4b57e9c02f1fddcf2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d000cca2acf15cdf7c989fcc947b907cb52e2328fcbb4b57e9c02f1fddcf2d7->enter($__internal_3d000cca2acf15cdf7c989fcc947b907cb52e2328fcbb4b57e9c02f1fddcf2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_3d000cca2acf15cdf7c989fcc947b907cb52e2328fcbb4b57e9c02f1fddcf2d7->leave($__internal_3d000cca2acf15cdf7c989fcc947b907cb52e2328fcbb4b57e9c02f1fddcf2d7_prof);

        
        $__internal_487b21668d1036101d1f12ebd199594f3191c626672b3449e4deec97997ea932->leave($__internal_487b21668d1036101d1f12ebd199594f3191c626672b3449e4deec97997ea932_prof);

    }

    public function getTemplateName()
    {
        return "project/create.html.twig";
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
{% endblock %}", "project/create.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\app\\Resources\\views\\project\\create.html.twig");
    }
}
