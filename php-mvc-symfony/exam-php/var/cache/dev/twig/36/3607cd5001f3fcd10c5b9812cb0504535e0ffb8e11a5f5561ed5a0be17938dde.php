<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_ac41bea6f875975ce4bf391692af342d0e61eabc705bc3e50d95993582d8c80f extends Twig_Template
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
        $__internal_e58649570f371ee47c934a34bab0e15010320a908d197533be39f4ad1c4044f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58649570f371ee47c934a34bab0e15010320a908d197533be39f4ad1c4044f0->enter($__internal_e58649570f371ee47c934a34bab0e15010320a908d197533be39f4ad1c4044f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_1e82fab180c4e9fa54c1ee5adf435e1b5ff49b7d6544fae29f585995a509f69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e82fab180c4e9fa54c1ee5adf435e1b5ff49b7d6544fae29f585995a509f69a->enter($__internal_1e82fab180c4e9fa54c1ee5adf435e1b5ff49b7d6544fae29f585995a509f69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e58649570f371ee47c934a34bab0e15010320a908d197533be39f4ad1c4044f0->leave($__internal_e58649570f371ee47c934a34bab0e15010320a908d197533be39f4ad1c4044f0_prof);

        
        $__internal_1e82fab180c4e9fa54c1ee5adf435e1b5ff49b7d6544fae29f585995a509f69a->leave($__internal_1e82fab180c4e9fa54c1ee5adf435e1b5ff49b7d6544fae29f585995a509f69a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
