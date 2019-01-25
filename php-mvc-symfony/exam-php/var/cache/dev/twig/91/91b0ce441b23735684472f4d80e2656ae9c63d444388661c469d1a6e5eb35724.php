<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_27979bc060592bd8fda23ef67f3b72ac46a69e3a8cde15a44253ea5a4cfe9d22 extends Twig_Template
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
        $__internal_6bbe9fbcf81c0b160f9d9b6e452dcebd2a18f7cd260921b4b610130ab643563c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bbe9fbcf81c0b160f9d9b6e452dcebd2a18f7cd260921b4b610130ab643563c->enter($__internal_6bbe9fbcf81c0b160f9d9b6e452dcebd2a18f7cd260921b4b610130ab643563c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_23e6d83157fd64e50592c166d6c610b18e1f005961b9d0290b893708499003be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e6d83157fd64e50592c166d6c610b18e1f005961b9d0290b893708499003be->enter($__internal_23e6d83157fd64e50592c166d6c610b18e1f005961b9d0290b893708499003be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6bbe9fbcf81c0b160f9d9b6e452dcebd2a18f7cd260921b4b610130ab643563c->leave($__internal_6bbe9fbcf81c0b160f9d9b6e452dcebd2a18f7cd260921b4b610130ab643563c_prof);

        
        $__internal_23e6d83157fd64e50592c166d6c610b18e1f005961b9d0290b893708499003be->leave($__internal_23e6d83157fd64e50592c166d6c610b18e1f005961b9d0290b893708499003be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
