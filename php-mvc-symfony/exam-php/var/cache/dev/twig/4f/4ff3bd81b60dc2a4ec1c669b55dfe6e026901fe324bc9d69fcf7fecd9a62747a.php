<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_eb26deccd428a4b2e5b7c1a86234bcb3dbcc79ac7da7fa4f478fbb4e66e94628 extends Twig_Template
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
        $__internal_1c897cefc41826bb9e164d1f2e3e1806ee882a149c16f93a052093abf8300754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c897cefc41826bb9e164d1f2e3e1806ee882a149c16f93a052093abf8300754->enter($__internal_1c897cefc41826bb9e164d1f2e3e1806ee882a149c16f93a052093abf8300754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2415b28887c1b4a93ca0fb4ef1272da179284888126e7207817f209804672892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2415b28887c1b4a93ca0fb4ef1272da179284888126e7207817f209804672892->enter($__internal_2415b28887c1b4a93ca0fb4ef1272da179284888126e7207817f209804672892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1c897cefc41826bb9e164d1f2e3e1806ee882a149c16f93a052093abf8300754->leave($__internal_1c897cefc41826bb9e164d1f2e3e1806ee882a149c16f93a052093abf8300754_prof);

        
        $__internal_2415b28887c1b4a93ca0fb4ef1272da179284888126e7207817f209804672892->leave($__internal_2415b28887c1b4a93ca0fb4ef1272da179284888126e7207817f209804672892_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
