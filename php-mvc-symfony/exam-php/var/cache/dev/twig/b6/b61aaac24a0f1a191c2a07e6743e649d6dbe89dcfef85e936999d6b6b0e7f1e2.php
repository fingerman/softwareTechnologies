<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_97530a603414ff968afa75fd8425460d8debf405eb3db4f998bf3fc52072e52a extends Twig_Template
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
        $__internal_61b1ed4b385a22b19a5be76b62da5da0f052a8bff72a6f9f561364938f9830b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b1ed4b385a22b19a5be76b62da5da0f052a8bff72a6f9f561364938f9830b6->enter($__internal_61b1ed4b385a22b19a5be76b62da5da0f052a8bff72a6f9f561364938f9830b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_8ac0908b8a8b84c0fadccd83960544bf3332b6f223fddd7c3ebdd0e5df1e3e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac0908b8a8b84c0fadccd83960544bf3332b6f223fddd7c3ebdd0e5df1e3e9d->enter($__internal_8ac0908b8a8b84c0fadccd83960544bf3332b6f223fddd7c3ebdd0e5df1e3e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_61b1ed4b385a22b19a5be76b62da5da0f052a8bff72a6f9f561364938f9830b6->leave($__internal_61b1ed4b385a22b19a5be76b62da5da0f052a8bff72a6f9f561364938f9830b6_prof);

        
        $__internal_8ac0908b8a8b84c0fadccd83960544bf3332b6f223fddd7c3ebdd0e5df1e3e9d->leave($__internal_8ac0908b8a8b84c0fadccd83960544bf3332b6f223fddd7c3ebdd0e5df1e3e9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
