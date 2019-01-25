<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_dfbbb742d790e4aa82f523cd4151318f9070a60a902ca3a1a54bb847823bafe1 extends Twig_Template
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
        $__internal_5f30c0e5525405095a0e6a3c2d34c1e3564a8b379a2b152360972f000922499f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f30c0e5525405095a0e6a3c2d34c1e3564a8b379a2b152360972f000922499f->enter($__internal_5f30c0e5525405095a0e6a3c2d34c1e3564a8b379a2b152360972f000922499f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8b8d7a37fca4e98707c6590f11c796a7648be1e9215308f82b1158cf673836aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8d7a37fca4e98707c6590f11c796a7648be1e9215308f82b1158cf673836aa->enter($__internal_8b8d7a37fca4e98707c6590f11c796a7648be1e9215308f82b1158cf673836aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5f30c0e5525405095a0e6a3c2d34c1e3564a8b379a2b152360972f000922499f->leave($__internal_5f30c0e5525405095a0e6a3c2d34c1e3564a8b379a2b152360972f000922499f_prof);

        
        $__internal_8b8d7a37fca4e98707c6590f11c796a7648be1e9215308f82b1158cf673836aa->leave($__internal_8b8d7a37fca4e98707c6590f11c796a7648be1e9215308f82b1158cf673836aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
