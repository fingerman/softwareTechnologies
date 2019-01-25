<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_1ffbb21902518405bf59b7ec94ccffaf68c67c4a1b0ebaa4cce656079092e2c1 extends Twig_Template
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
        $__internal_35e7692acab8af79d992cc3418b56678b3938212b7140f161f9383e383f117b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e7692acab8af79d992cc3418b56678b3938212b7140f161f9383e383f117b5->enter($__internal_35e7692acab8af79d992cc3418b56678b3938212b7140f161f9383e383f117b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_0207fc02ff1746db7931a723cba1eee213de458caf986d9d6ab235203ee980e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0207fc02ff1746db7931a723cba1eee213de458caf986d9d6ab235203ee980e9->enter($__internal_0207fc02ff1746db7931a723cba1eee213de458caf986d9d6ab235203ee980e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_35e7692acab8af79d992cc3418b56678b3938212b7140f161f9383e383f117b5->leave($__internal_35e7692acab8af79d992cc3418b56678b3938212b7140f161f9383e383f117b5_prof);

        
        $__internal_0207fc02ff1746db7931a723cba1eee213de458caf986d9d6ab235203ee980e9->leave($__internal_0207fc02ff1746db7931a723cba1eee213de458caf986d9d6ab235203ee980e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
