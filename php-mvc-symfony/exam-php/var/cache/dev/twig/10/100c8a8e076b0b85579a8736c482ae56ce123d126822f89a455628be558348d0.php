<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_0d229daf3099657ec73e67a30e4e4c649e1847f887c7836ee2e7badbb5dc015c extends Twig_Template
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
        $__internal_424368136b6b4f1840287a584a624288d962512af741d7524f7aeaa7f9c1f1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424368136b6b4f1840287a584a624288d962512af741d7524f7aeaa7f9c1f1d8->enter($__internal_424368136b6b4f1840287a584a624288d962512af741d7524f7aeaa7f9c1f1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_85473c99fb08850a7f77d0e5a5d225ec7e208371a25714c0bcd9ce066e97224e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85473c99fb08850a7f77d0e5a5d225ec7e208371a25714c0bcd9ce066e97224e->enter($__internal_85473c99fb08850a7f77d0e5a5d225ec7e208371a25714c0bcd9ce066e97224e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_424368136b6b4f1840287a584a624288d962512af741d7524f7aeaa7f9c1f1d8->leave($__internal_424368136b6b4f1840287a584a624288d962512af741d7524f7aeaa7f9c1f1d8_prof);

        
        $__internal_85473c99fb08850a7f77d0e5a5d225ec7e208371a25714c0bcd9ce066e97224e->leave($__internal_85473c99fb08850a7f77d0e5a5d225ec7e208371a25714c0bcd9ce066e97224e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
