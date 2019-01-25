<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8cb8dd1eaf50f41c0f18025fa2d30798b2d605186fe8effb0f052950dc68fecd extends Twig_Template
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
        $__internal_6cc6d04163b9085d51cebc8a28f176a8ee8bb8c666a30bd96ebb40943eaaaf4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc6d04163b9085d51cebc8a28f176a8ee8bb8c666a30bd96ebb40943eaaaf4a->enter($__internal_6cc6d04163b9085d51cebc8a28f176a8ee8bb8c666a30bd96ebb40943eaaaf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c41ac31865bd523ae03dd4ec15f3ff7f9703f8317642fed77d51f2709a41a443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41ac31865bd523ae03dd4ec15f3ff7f9703f8317642fed77d51f2709a41a443->enter($__internal_c41ac31865bd523ae03dd4ec15f3ff7f9703f8317642fed77d51f2709a41a443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6cc6d04163b9085d51cebc8a28f176a8ee8bb8c666a30bd96ebb40943eaaaf4a->leave($__internal_6cc6d04163b9085d51cebc8a28f176a8ee8bb8c666a30bd96ebb40943eaaaf4a_prof);

        
        $__internal_c41ac31865bd523ae03dd4ec15f3ff7f9703f8317642fed77d51f2709a41a443->leave($__internal_c41ac31865bd523ae03dd4ec15f3ff7f9703f8317642fed77d51f2709a41a443_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
