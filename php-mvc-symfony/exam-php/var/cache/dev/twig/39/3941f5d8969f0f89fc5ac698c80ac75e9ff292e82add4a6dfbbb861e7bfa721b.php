<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0633b41ef6eac0dee9b183b34172b833e176738ee225193069358d95370becd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b97596a875e8271c32317d0db7957be0458cb700367bab47aae0b038ad2e8f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b97596a875e8271c32317d0db7957be0458cb700367bab47aae0b038ad2e8f4->enter($__internal_5b97596a875e8271c32317d0db7957be0458cb700367bab47aae0b038ad2e8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0660aaed9a1e8b95129651fd400180f0a9d31c588613faff5aa809b5d15dd2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0660aaed9a1e8b95129651fd400180f0a9d31c588613faff5aa809b5d15dd2de->enter($__internal_0660aaed9a1e8b95129651fd400180f0a9d31c588613faff5aa809b5d15dd2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b97596a875e8271c32317d0db7957be0458cb700367bab47aae0b038ad2e8f4->leave($__internal_5b97596a875e8271c32317d0db7957be0458cb700367bab47aae0b038ad2e8f4_prof);

        
        $__internal_0660aaed9a1e8b95129651fd400180f0a9d31c588613faff5aa809b5d15dd2de->leave($__internal_0660aaed9a1e8b95129651fd400180f0a9d31c588613faff5aa809b5d15dd2de_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_78d23fece15297d917ef0a1e4be0e92253f71e846230bf1c30aebc0807d5604b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d23fece15297d917ef0a1e4be0e92253f71e846230bf1c30aebc0807d5604b->enter($__internal_78d23fece15297d917ef0a1e4be0e92253f71e846230bf1c30aebc0807d5604b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_18c1eedfa10d2f08391f64dea0588afae83020b3b97cc3f0e4ceb75f429e6fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c1eedfa10d2f08391f64dea0588afae83020b3b97cc3f0e4ceb75f429e6fb8->enter($__internal_18c1eedfa10d2f08391f64dea0588afae83020b3b97cc3f0e4ceb75f429e6fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_18c1eedfa10d2f08391f64dea0588afae83020b3b97cc3f0e4ceb75f429e6fb8->leave($__internal_18c1eedfa10d2f08391f64dea0588afae83020b3b97cc3f0e4ceb75f429e6fb8_prof);

        
        $__internal_78d23fece15297d917ef0a1e4be0e92253f71e846230bf1c30aebc0807d5604b->leave($__internal_78d23fece15297d917ef0a1e4be0e92253f71e846230bf1c30aebc0807d5604b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab651d9299c90448aec87e091f05c429b431f91ab98c180edeaaa3d971e8f422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab651d9299c90448aec87e091f05c429b431f91ab98c180edeaaa3d971e8f422->enter($__internal_ab651d9299c90448aec87e091f05c429b431f91ab98c180edeaaa3d971e8f422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_832e6565824f3d866338659212df4878c48ee261fb9bb2bba9c659ecf6ff1d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832e6565824f3d866338659212df4878c48ee261fb9bb2bba9c659ecf6ff1d3f->enter($__internal_832e6565824f3d866338659212df4878c48ee261fb9bb2bba9c659ecf6ff1d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_832e6565824f3d866338659212df4878c48ee261fb9bb2bba9c659ecf6ff1d3f->leave($__internal_832e6565824f3d866338659212df4878c48ee261fb9bb2bba9c659ecf6ff1d3f_prof);

        
        $__internal_ab651d9299c90448aec87e091f05c429b431f91ab98c180edeaaa3d971e8f422->leave($__internal_ab651d9299c90448aec87e091f05c429b431f91ab98c180edeaaa3d971e8f422_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
