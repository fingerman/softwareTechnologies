<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_5479521664a76d2699f761a444e6f0d733b9b2b7739f36b1a1bde5c74731f7b2 extends Twig_Template
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
        $__internal_461afd5648152f5c0393af8aa1ce6083175751b1a87c92c00e8632684d53b89d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461afd5648152f5c0393af8aa1ce6083175751b1a87c92c00e8632684d53b89d->enter($__internal_461afd5648152f5c0393af8aa1ce6083175751b1a87c92c00e8632684d53b89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_efdbf99a57899e447911ced7b65af138f6e1ed59d4948d7fe110a8dfb5db06c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdbf99a57899e447911ced7b65af138f6e1ed59d4948d7fe110a8dfb5db06c7->enter($__internal_efdbf99a57899e447911ced7b65af138f6e1ed59d4948d7fe110a8dfb5db06c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_461afd5648152f5c0393af8aa1ce6083175751b1a87c92c00e8632684d53b89d->leave($__internal_461afd5648152f5c0393af8aa1ce6083175751b1a87c92c00e8632684d53b89d_prof);

        
        $__internal_efdbf99a57899e447911ced7b65af138f6e1ed59d4948d7fe110a8dfb5db06c7->leave($__internal_efdbf99a57899e447911ced7b65af138f6e1ed59d4948d7fe110a8dfb5db06c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
