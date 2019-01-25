<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_790f15cfabfde6a4515d4566c56690ab968508ab86c94d5f7b397677139081f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed5f6aa22ed76298402ad04822bc732dd6d87a9f879d6cbabf560bf9c25b0605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5f6aa22ed76298402ad04822bc732dd6d87a9f879d6cbabf560bf9c25b0605->enter($__internal_ed5f6aa22ed76298402ad04822bc732dd6d87a9f879d6cbabf560bf9c25b0605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_e49b80fce6782e133bc4f1e56c649f5442af3e3fe2c718dd060a31674589eee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49b80fce6782e133bc4f1e56c649f5442af3e3fe2c718dd060a31674589eee0->enter($__internal_e49b80fce6782e133bc4f1e56c649f5442af3e3fe2c718dd060a31674589eee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ed5f6aa22ed76298402ad04822bc732dd6d87a9f879d6cbabf560bf9c25b0605->leave($__internal_ed5f6aa22ed76298402ad04822bc732dd6d87a9f879d6cbabf560bf9c25b0605_prof);

        
        $__internal_e49b80fce6782e133bc4f1e56c649f5442af3e3fe2c718dd060a31674589eee0->leave($__internal_e49b80fce6782e133bc4f1e56c649f5442af3e3fe2c718dd060a31674589eee0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
