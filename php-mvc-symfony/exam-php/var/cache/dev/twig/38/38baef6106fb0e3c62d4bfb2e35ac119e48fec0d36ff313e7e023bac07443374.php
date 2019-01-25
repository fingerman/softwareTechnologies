<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_288584128327698ed0e6b6c25dbb34fb794c43c6f188d96db5d4ff24feacf281 extends Twig_Template
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
        $__internal_f35af87cfe7668f6bdcd461df134f0e3528bfc7fedb06b9b61f5f8fa222b3c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35af87cfe7668f6bdcd461df134f0e3528bfc7fedb06b9b61f5f8fa222b3c5d->enter($__internal_f35af87cfe7668f6bdcd461df134f0e3528bfc7fedb06b9b61f5f8fa222b3c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_bdb540859137df5b58fdfec152ba67c4b21712ff21574f02960b304814f3cf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb540859137df5b58fdfec152ba67c4b21712ff21574f02960b304814f3cf89->enter($__internal_bdb540859137df5b58fdfec152ba67c4b21712ff21574f02960b304814f3cf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f35af87cfe7668f6bdcd461df134f0e3528bfc7fedb06b9b61f5f8fa222b3c5d->leave($__internal_f35af87cfe7668f6bdcd461df134f0e3528bfc7fedb06b9b61f5f8fa222b3c5d_prof);

        
        $__internal_bdb540859137df5b58fdfec152ba67c4b21712ff21574f02960b304814f3cf89->leave($__internal_bdb540859137df5b58fdfec152ba67c4b21712ff21574f02960b304814f3cf89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
