<?php

/* :project:index.html.twig */
class __TwigTemplate_7eff3ca35c3b71be1c41b1cc6f153d40cbaaba311ef12833c4d6ef4c9978133d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:index.html.twig", 1);
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
        $__internal_240ffa113a821af26de02f5aedde0c580104acf033ca7f04f5b71c845c1777ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240ffa113a821af26de02f5aedde0c580104acf033ca7f04f5b71c845c1777ec->enter($__internal_240ffa113a821af26de02f5aedde0c580104acf033ca7f04f5b71c845c1777ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:index.html.twig"));

        $__internal_c8d99238754aff1eebd1c4c6c5ae45893b778855fe80620ac38424fcd5bd8b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d99238754aff1eebd1c4c6c5ae45893b778855fe80620ac38424fcd5bd8b07->enter($__internal_c8d99238754aff1eebd1c4c6c5ae45893b778855fe80620ac38424fcd5bd8b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_240ffa113a821af26de02f5aedde0c580104acf033ca7f04f5b71c845c1777ec->leave($__internal_240ffa113a821af26de02f5aedde0c580104acf033ca7f04f5b71c845c1777ec_prof);

        
        $__internal_c8d99238754aff1eebd1c4c6c5ae45893b778855fe80620ac38424fcd5bd8b07->leave($__internal_c8d99238754aff1eebd1c4c6c5ae45893b778855fe80620ac38424fcd5bd8b07_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_799fe7a173a1477462d828435ac09f829284f7ca0754795d061639661873ffc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799fe7a173a1477462d828435ac09f829284f7ca0754795d061639661873ffc9->enter($__internal_799fe7a173a1477462d828435ac09f829284f7ca0754795d061639661873ffc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_dc48f5b2fef9ae13467d2359c62f06b7aff84f6fe3e3665f5cd5d7e2bd470f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc48f5b2fef9ae13467d2359c62f06b7aff84f6fe3e3665f5cd5d7e2bd470f80->enter($__internal_dc48f5b2fef9ae13467d2359c62f06b7aff84f6fe3e3665f5cd5d7e2bd470f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <div class=\"button-holder\">
        <a type=\"button\" href=\"/create\" class=\"log-button\">Create New Project</a>
    </div>
    <div class=\"content\">
        <div class=\"header\">
            <div class=\"project-label\">Project</div>
            <div class=\"budget-label\">Budget</div>
            <div class=\"actions-label\">Actions</div>
        </div>
        <div class=\"main\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 16
            echo "                <div class=\"project\">
                    <div class=\"project-title\">
                        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "
                    </div>
                    <div class=\"project-budget\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "budget", array()), "html", null, true);
            echo "
                    </div>
                    <div class=\"project-actions\">
                        <a type=\"button\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\" class=\"edit-button\">Edit</a>
                        <a type=\"button\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\" class=\"delete-button\">Delete</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
</div>
";
        
        $__internal_dc48f5b2fef9ae13467d2359c62f06b7aff84f6fe3e3665f5cd5d7e2bd470f80->leave($__internal_dc48f5b2fef9ae13467d2359c62f06b7aff84f6fe3e3665f5cd5d7e2bd470f80_prof);

        
        $__internal_799fe7a173a1477462d828435ac09f829284f7ca0754795d061639661873ffc9->leave($__internal_799fe7a173a1477462d828435ac09f829284f7ca0754795d061639661873ffc9_prof);

    }

    public function getTemplateName()
    {
        return ":project:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  86 => 25,  82 => 24,  76 => 21,  70 => 18,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"button-holder\">
        <a type=\"button\" href=\"/create\" class=\"log-button\">Create New Project</a>
    </div>
    <div class=\"content\">
        <div class=\"header\">
            <div class=\"project-label\">Project</div>
            <div class=\"budget-label\">Budget</div>
            <div class=\"actions-label\">Actions</div>
        </div>
        <div class=\"main\">
            {% for project in projects %}
                <div class=\"project\">
                    <div class=\"project-title\">
                        {{ project.title }}
                    </div>
                    <div class=\"project-budget\">
                        {{ project.budget }}
                    </div>
                    <div class=\"project-actions\">
                        <a type=\"button\" href=\"{{ path('edit', {id: project.id}) }}\" class=\"edit-button\">Edit</a>
                        <a type=\"button\" href=\"{{ path('delete', {id: project.id}) }}\" class=\"delete-button\">Delete</a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}", ":project:index.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\app/Resources\\views/project/index.html.twig");
    }
}
