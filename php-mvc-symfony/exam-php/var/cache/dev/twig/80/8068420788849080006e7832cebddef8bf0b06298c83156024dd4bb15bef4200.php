<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c3e618d2514d3486c3a0a566f2436c6b5e37b33bfeda0f768f43b15318c35872 extends Twig_Template
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
        $__internal_6cc6c5069af2698c15d79dedc5cd62f430cbb59e21fda1945e1af0ab58f4ec03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc6c5069af2698c15d79dedc5cd62f430cbb59e21fda1945e1af0ab58f4ec03->enter($__internal_6cc6c5069af2698c15d79dedc5cd62f430cbb59e21fda1945e1af0ab58f4ec03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_61959fc5ab052b166f68b93e6f3a1fa749b3a6de1591c0094bf48fa3e79ac53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61959fc5ab052b166f68b93e6f3a1fa749b3a6de1591c0094bf48fa3e79ac53a->enter($__internal_61959fc5ab052b166f68b93e6f3a1fa749b3a6de1591c0094bf48fa3e79ac53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6cc6c5069af2698c15d79dedc5cd62f430cbb59e21fda1945e1af0ab58f4ec03->leave($__internal_6cc6c5069af2698c15d79dedc5cd62f430cbb59e21fda1945e1af0ab58f4ec03_prof);

        
        $__internal_61959fc5ab052b166f68b93e6f3a1fa749b3a6de1591c0094bf48fa3e79ac53a->leave($__internal_61959fc5ab052b166f68b93e6f3a1fa749b3a6de1591c0094bf48fa3e79ac53a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}