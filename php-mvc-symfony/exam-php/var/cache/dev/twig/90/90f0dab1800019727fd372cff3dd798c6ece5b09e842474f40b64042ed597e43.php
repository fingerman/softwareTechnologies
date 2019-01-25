<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_50d7596cc7694e7be7cb1c574fe4a4bfb444aae630706bfcc6c49ff0c638a4ee extends Twig_Template
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
        $__internal_f5cb685ceef9c6d27c36e7830887c66e8c03a0717be5db6e3a2848c536b59cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5cb685ceef9c6d27c36e7830887c66e8c03a0717be5db6e3a2848c536b59cea->enter($__internal_f5cb685ceef9c6d27c36e7830887c66e8c03a0717be5db6e3a2848c536b59cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_5827a8cac15c309cf46fb816cc4da030f85a70cf1fe61b65716c8894a89b3c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5827a8cac15c309cf46fb816cc4da030f85a70cf1fe61b65716c8894a89b3c7f->enter($__internal_5827a8cac15c309cf46fb816cc4da030f85a70cf1fe61b65716c8894a89b3c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f5cb685ceef9c6d27c36e7830887c66e8c03a0717be5db6e3a2848c536b59cea->leave($__internal_f5cb685ceef9c6d27c36e7830887c66e8c03a0717be5db6e3a2848c536b59cea_prof);

        
        $__internal_5827a8cac15c309cf46fb816cc4da030f85a70cf1fe61b65716c8894a89b3c7f->leave($__internal_5827a8cac15c309cf46fb816cc4da030f85a70cf1fe61b65716c8894a89b3c7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
