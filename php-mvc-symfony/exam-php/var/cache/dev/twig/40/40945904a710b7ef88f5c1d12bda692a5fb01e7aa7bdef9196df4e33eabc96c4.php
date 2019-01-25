<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_496361a52fc8271d65235d4851230ebdc00c8896318ee973e165ea284f8b479c extends Twig_Template
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
        $__internal_70568dbe96a727a7a5c97cc8735a10dbd8ecb9b1e4492f3b76a4aed7860f45ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70568dbe96a727a7a5c97cc8735a10dbd8ecb9b1e4492f3b76a4aed7860f45ef->enter($__internal_70568dbe96a727a7a5c97cc8735a10dbd8ecb9b1e4492f3b76a4aed7860f45ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f763986ba58d4a21248420e2db24df03f890d24472d6c8da678b5ceac24a4e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f763986ba58d4a21248420e2db24df03f890d24472d6c8da678b5ceac24a4e08->enter($__internal_f763986ba58d4a21248420e2db24df03f890d24472d6c8da678b5ceac24a4e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_70568dbe96a727a7a5c97cc8735a10dbd8ecb9b1e4492f3b76a4aed7860f45ef->leave($__internal_70568dbe96a727a7a5c97cc8735a10dbd8ecb9b1e4492f3b76a4aed7860f45ef_prof);

        
        $__internal_f763986ba58d4a21248420e2db24df03f890d24472d6c8da678b5ceac24a4e08->leave($__internal_f763986ba58d4a21248420e2db24df03f890d24472d6c8da678b5ceac24a4e08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
