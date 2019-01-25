<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b5eaf4597d1d726360c3e1888c3161aee57be78ff6a67363cb51eb8045a4df52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_262934bf7cc8164afd8605d03f55d974c77ae313d5b5b59ce019d17ef402d4b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262934bf7cc8164afd8605d03f55d974c77ae313d5b5b59ce019d17ef402d4b2->enter($__internal_262934bf7cc8164afd8605d03f55d974c77ae313d5b5b59ce019d17ef402d4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_b99c3f7b39b79d5e69d8462a64f92e1bbd6a5852063e50dd89378b7bb328db3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99c3f7b39b79d5e69d8462a64f92e1bbd6a5852063e50dd89378b7bb328db3c->enter($__internal_b99c3f7b39b79d5e69d8462a64f92e1bbd6a5852063e50dd89378b7bb328db3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_262934bf7cc8164afd8605d03f55d974c77ae313d5b5b59ce019d17ef402d4b2->leave($__internal_262934bf7cc8164afd8605d03f55d974c77ae313d5b5b59ce019d17ef402d4b2_prof);

        
        $__internal_b99c3f7b39b79d5e69d8462a64f92e1bbd6a5852063e50dd89378b7bb328db3c->leave($__internal_b99c3f7b39b79d5e69d8462a64f92e1bbd6a5852063e50dd89378b7bb328db3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_deba6606177a472f88ec544bf17c4810adda44834f903decb49873f2c5d3f712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deba6606177a472f88ec544bf17c4810adda44834f903decb49873f2c5d3f712->enter($__internal_deba6606177a472f88ec544bf17c4810adda44834f903decb49873f2c5d3f712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a26fd47baa2efc11daf510a45ca855b7f2feadd8470e0da102a31f06cc37c1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26fd47baa2efc11daf510a45ca855b7f2feadd8470e0da102a31f06cc37c1d2->enter($__internal_a26fd47baa2efc11daf510a45ca855b7f2feadd8470e0da102a31f06cc37c1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a26fd47baa2efc11daf510a45ca855b7f2feadd8470e0da102a31f06cc37c1d2->leave($__internal_a26fd47baa2efc11daf510a45ca855b7f2feadd8470e0da102a31f06cc37c1d2_prof);

        
        $__internal_deba6606177a472f88ec544bf17c4810adda44834f903decb49873f2c5d3f712->leave($__internal_deba6606177a472f88ec544bf17c4810adda44834f903decb49873f2c5d3f712_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea175f2f184aaa0082c95fd04814fd9dd7a628d0ce38c64c62e1d71542caf598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea175f2f184aaa0082c95fd04814fd9dd7a628d0ce38c64c62e1d71542caf598->enter($__internal_ea175f2f184aaa0082c95fd04814fd9dd7a628d0ce38c64c62e1d71542caf598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f641af9941331e8fb634c62f3c85d98c83d4663aa93785118dfba3d6a24f5b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f641af9941331e8fb634c62f3c85d98c83d4663aa93785118dfba3d6a24f5b2f->enter($__internal_f641af9941331e8fb634c62f3c85d98c83d4663aa93785118dfba3d6a24f5b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f641af9941331e8fb634c62f3c85d98c83d4663aa93785118dfba3d6a24f5b2f->leave($__internal_f641af9941331e8fb634c62f3c85d98c83d4663aa93785118dfba3d6a24f5b2f_prof);

        
        $__internal_ea175f2f184aaa0082c95fd04814fd9dd7a628d0ce38c64c62e1d71542caf598->leave($__internal_ea175f2f184aaa0082c95fd04814fd9dd7a628d0ce38c64c62e1d71542caf598_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_201390eb94aab4f1c12ac44a805d359ec600b9723a02ef64109eee38247ceea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201390eb94aab4f1c12ac44a805d359ec600b9723a02ef64109eee38247ceea4->enter($__internal_201390eb94aab4f1c12ac44a805d359ec600b9723a02ef64109eee38247ceea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40baf6224918b6ce877b4810e44297f6737440290f13e42bd8ba67fb23c806e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40baf6224918b6ce877b4810e44297f6737440290f13e42bd8ba67fb23c806e2->enter($__internal_40baf6224918b6ce877b4810e44297f6737440290f13e42bd8ba67fb23c806e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_40baf6224918b6ce877b4810e44297f6737440290f13e42bd8ba67fb23c806e2->leave($__internal_40baf6224918b6ce877b4810e44297f6737440290f13e42bd8ba67fb23c806e2_prof);

        
        $__internal_201390eb94aab4f1c12ac44a805d359ec600b9723a02ef64109eee38247ceea4->leave($__internal_201390eb94aab4f1c12ac44a805d359ec600b9723a02ef64109eee38247ceea4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
