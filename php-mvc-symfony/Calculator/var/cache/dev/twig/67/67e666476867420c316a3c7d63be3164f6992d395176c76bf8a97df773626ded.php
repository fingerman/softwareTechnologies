<?php

/* base.html.twig */
class __TwigTemplate_e13bb222ec9b7f178ac39ef21520d2636f7affe0ea1242450f389ba6795d57f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_908b8c2957e7cd96a7328fd2c83eff625dc3827083069136f8ab934fe9dc9532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908b8c2957e7cd96a7328fd2c83eff625dc3827083069136f8ab934fe9dc9532->enter($__internal_908b8c2957e7cd96a7328fd2c83eff625dc3827083069136f8ab934fe9dc9532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
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
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_908b8c2957e7cd96a7328fd2c83eff625dc3827083069136f8ab934fe9dc9532->leave($__internal_908b8c2957e7cd96a7328fd2c83eff625dc3827083069136f8ab934fe9dc9532_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_497d34dc244a912a1091ba52cc8c6f69d9fedc47dc62f3d837cdc7d7299350f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497d34dc244a912a1091ba52cc8c6f69d9fedc47dc62f3d837cdc7d7299350f7->enter($__internal_497d34dc244a912a1091ba52cc8c6f69d9fedc47dc62f3d837cdc7d7299350f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_497d34dc244a912a1091ba52cc8c6f69d9fedc47dc62f3d837cdc7d7299350f7->leave($__internal_497d34dc244a912a1091ba52cc8c6f69d9fedc47dc62f3d837cdc7d7299350f7_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e38ab51a03d70f595bf14284a036b7fc93689c42cb0bae44c7caea0aa23423cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38ab51a03d70f595bf14284a036b7fc93689c42cb0bae44c7caea0aa23423cc->enter($__internal_e38ab51a03d70f595bf14284a036b7fc93689c42cb0bae44c7caea0aa23423cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_e38ab51a03d70f595bf14284a036b7fc93689c42cb0bae44c7caea0aa23423cc->leave($__internal_e38ab51a03d70f595bf14284a036b7fc93689c42cb0bae44c7caea0aa23423cc_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_49bd7f3207bfaee83d297a7eaa91300976e2b017d39ff204e3119d724ef133fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bd7f3207bfaee83d297a7eaa91300976e2b017d39ff204e3119d724ef133fe->enter($__internal_49bd7f3207bfaee83d297a7eaa91300976e2b017d39ff204e3119d724ef133fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_49bd7f3207bfaee83d297a7eaa91300976e2b017d39ff204e3119d724ef133fe->leave($__internal_49bd7f3207bfaee83d297a7eaa91300976e2b017d39ff204e3119d724ef133fe_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_6aa7b2ebb5afef7619f6e0b63ca4cea2deba66d9e5fa0cb849f4b1f9d47c9e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa7b2ebb5afef7619f6e0b63ca4cea2deba66d9e5fa0cb849f4b1f9d47c9e69->enter($__internal_6aa7b2ebb5afef7619f6e0b63ca4cea2deba66d9e5fa0cb849f4b1f9d47c9e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_6aa7b2ebb5afef7619f6e0b63ca4cea2deba66d9e5fa0cb849f4b1f9d47c9e69->leave($__internal_6aa7b2ebb5afef7619f6e0b63ca4cea2deba66d9e5fa0cb849f4b1f9d47c9e69_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_d627ee978cb29606294877efbb3cf7683429b5e98b742ef2f8ea6154a9c62eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d627ee978cb29606294877efbb3cf7683429b5e98b742ef2f8ea6154a9c62eb2->enter($__internal_d627ee978cb29606294877efbb3cf7683429b5e98b742ef2f8ea6154a9c62eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_d627ee978cb29606294877efbb3cf7683429b5e98b742ef2f8ea6154a9c62eb2->leave($__internal_d627ee978cb29606294877efbb3cf7683429b5e98b742ef2f8ea6154a9c62eb2_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_02c97f12e96a74b89d27984418139485bda8ada6e82575384c2bcd716a5edb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c97f12e96a74b89d27984418139485bda8ada6e82575384c2bcd716a5edb8e->enter($__internal_02c97f12e96a74b89d27984418139485bda8ada6e82575384c2bcd716a5edb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_02c97f12e96a74b89d27984418139485bda8ada6e82575384c2bcd716a5edb8e->leave($__internal_02c97f12e96a74b89d27984418139485bda8ada6e82575384c2bcd716a5edb8e_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cda87f3ab7fba4321155f4fb9b7a704304e946ddbf22a89b9d07e39e21e2100c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda87f3ab7fba4321155f4fb9b7a704304e946ddbf22a89b9d07e39e21e2100c->enter($__internal_cda87f3ab7fba4321155f4fb9b7a704304e946ddbf22a89b9d07e39e21e2100c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_cda87f3ab7fba4321155f4fb9b7a704304e946ddbf22a89b9d07e39e21e2100c->leave($__internal_cda87f3ab7fba4321155f4fb9b7a704304e946ddbf22a89b9d07e39e21e2100c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
