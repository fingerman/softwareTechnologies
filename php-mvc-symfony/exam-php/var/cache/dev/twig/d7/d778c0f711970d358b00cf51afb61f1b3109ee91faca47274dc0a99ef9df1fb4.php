<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cd742083def9d721d069bb8a62c065f3ceaa1f39293db08041323048139d4b03 extends Twig_Template
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
        $__internal_0c42b2fac99e59a3ac1a53449399172512bec0f1a0caaabe7474f0070c145646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c42b2fac99e59a3ac1a53449399172512bec0f1a0caaabe7474f0070c145646->enter($__internal_0c42b2fac99e59a3ac1a53449399172512bec0f1a0caaabe7474f0070c145646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_69b95bb2c3421f51298b47ac77f18e0aacfa36717377879a6432ae244a1f1872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b95bb2c3421f51298b47ac77f18e0aacfa36717377879a6432ae244a1f1872->enter($__internal_69b95bb2c3421f51298b47ac77f18e0aacfa36717377879a6432ae244a1f1872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0c42b2fac99e59a3ac1a53449399172512bec0f1a0caaabe7474f0070c145646->leave($__internal_0c42b2fac99e59a3ac1a53449399172512bec0f1a0caaabe7474f0070c145646_prof);

        
        $__internal_69b95bb2c3421f51298b47ac77f18e0aacfa36717377879a6432ae244a1f1872->leave($__internal_69b95bb2c3421f51298b47ac77f18e0aacfa36717377879a6432ae244a1f1872_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
