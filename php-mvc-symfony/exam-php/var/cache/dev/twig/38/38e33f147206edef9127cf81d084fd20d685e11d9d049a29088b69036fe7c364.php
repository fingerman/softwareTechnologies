<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_bf1fd811ebc364c1f0a4b92e92c89d4ec8e86ec1e93ed396270c5a9928cef604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2dad469958c1fa25de2c84d1cbd24aed9a3bbe9547fe0cebdb17d432a8b00fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2dad469958c1fa25de2c84d1cbd24aed9a3bbe9547fe0cebdb17d432a8b00fb->enter($__internal_a2dad469958c1fa25de2c84d1cbd24aed9a3bbe9547fe0cebdb17d432a8b00fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_7313e29ca857a0ff58decda3866cf81a477df3e32107a225b63182314f9c0c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7313e29ca857a0ff58decda3866cf81a477df3e32107a225b63182314f9c0c60->enter($__internal_7313e29ca857a0ff58decda3866cf81a477df3e32107a225b63182314f9c0c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a2dad469958c1fa25de2c84d1cbd24aed9a3bbe9547fe0cebdb17d432a8b00fb->leave($__internal_a2dad469958c1fa25de2c84d1cbd24aed9a3bbe9547fe0cebdb17d432a8b00fb_prof);

        
        $__internal_7313e29ca857a0ff58decda3866cf81a477df3e32107a225b63182314f9c0c60->leave($__internal_7313e29ca857a0ff58decda3866cf81a477df3e32107a225b63182314f9c0c60_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05bef0fa25064f8410e319d1f5cc673d414ee392a4254d6913c054dc67a54eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05bef0fa25064f8410e319d1f5cc673d414ee392a4254d6913c054dc67a54eef->enter($__internal_05bef0fa25064f8410e319d1f5cc673d414ee392a4254d6913c054dc67a54eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ebd5e8c76a1a998775c722bd70c180cc508200e9c495a676cd1e5361179ef86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd5e8c76a1a998775c722bd70c180cc508200e9c495a676cd1e5361179ef86c->enter($__internal_ebd5e8c76a1a998775c722bd70c180cc508200e9c495a676cd1e5361179ef86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ebd5e8c76a1a998775c722bd70c180cc508200e9c495a676cd1e5361179ef86c->leave($__internal_ebd5e8c76a1a998775c722bd70c180cc508200e9c495a676cd1e5361179ef86c_prof);

        
        $__internal_05bef0fa25064f8410e319d1f5cc673d414ee392a4254d6913c054dc67a54eef->leave($__internal_05bef0fa25064f8410e319d1f5cc673d414ee392a4254d6913c054dc67a54eef_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_623eea8dd16977d0fa41208cb75b9742da206970a4f15ae07130577ba5e07699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623eea8dd16977d0fa41208cb75b9742da206970a4f15ae07130577ba5e07699->enter($__internal_623eea8dd16977d0fa41208cb75b9742da206970a4f15ae07130577ba5e07699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3ed61c004e3b4cc9569b10ee2a8d916171ad19455db2645f3a2508f09bba58c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed61c004e3b4cc9569b10ee2a8d916171ad19455db2645f3a2508f09bba58c8->enter($__internal_3ed61c004e3b4cc9569b10ee2a8d916171ad19455db2645f3a2508f09bba58c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3ed61c004e3b4cc9569b10ee2a8d916171ad19455db2645f3a2508f09bba58c8->leave($__internal_3ed61c004e3b4cc9569b10ee2a8d916171ad19455db2645f3a2508f09bba58c8_prof);

        
        $__internal_623eea8dd16977d0fa41208cb75b9742da206970a4f15ae07130577ba5e07699->leave($__internal_623eea8dd16977d0fa41208cb75b9742da206970a4f15ae07130577ba5e07699_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d6895d6b01962dfa4b885733cda41662676fc513f562de2b85261758ebccac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6895d6b01962dfa4b885733cda41662676fc513f562de2b85261758ebccac1->enter($__internal_4d6895d6b01962dfa4b885733cda41662676fc513f562de2b85261758ebccac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80950d99d931f3195c6dd582912390eb2fd5ddf1856aa0d74f44201ea6c80431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80950d99d931f3195c6dd582912390eb2fd5ddf1856aa0d74f44201ea6c80431->enter($__internal_80950d99d931f3195c6dd582912390eb2fd5ddf1856aa0d74f44201ea6c80431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_80950d99d931f3195c6dd582912390eb2fd5ddf1856aa0d74f44201ea6c80431->leave($__internal_80950d99d931f3195c6dd582912390eb2fd5ddf1856aa0d74f44201ea6c80431_prof);

        
        $__internal_4d6895d6b01962dfa4b885733cda41662676fc513f562de2b85261758ebccac1->leave($__internal_4d6895d6b01962dfa4b885733cda41662676fc513f562de2b85261758ebccac1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
