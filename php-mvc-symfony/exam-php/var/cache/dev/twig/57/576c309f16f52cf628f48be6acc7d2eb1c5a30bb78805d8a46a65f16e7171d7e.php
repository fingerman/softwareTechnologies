<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a1f962d0d4eaa4f9578ca429ce3bfdb93e5f5c9e64052c038f7a9acaf9474c0f extends Twig_Template
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
        $__internal_0f29a15316ba960b9e8c379319c0eedcbef2d1c959880d6910391c2b8fe33c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f29a15316ba960b9e8c379319c0eedcbef2d1c959880d6910391c2b8fe33c31->enter($__internal_0f29a15316ba960b9e8c379319c0eedcbef2d1c959880d6910391c2b8fe33c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_7b1f475b7c0abb982a04cda9dd47a730b51ecae53c6e530a4e48096a8dc47754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1f475b7c0abb982a04cda9dd47a730b51ecae53c6e530a4e48096a8dc47754->enter($__internal_7b1f475b7c0abb982a04cda9dd47a730b51ecae53c6e530a4e48096a8dc47754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0f29a15316ba960b9e8c379319c0eedcbef2d1c959880d6910391c2b8fe33c31->leave($__internal_0f29a15316ba960b9e8c379319c0eedcbef2d1c959880d6910391c2b8fe33c31_prof);

        
        $__internal_7b1f475b7c0abb982a04cda9dd47a730b51ecae53c6e530a4e48096a8dc47754->leave($__internal_7b1f475b7c0abb982a04cda9dd47a730b51ecae53c6e530a4e48096a8dc47754_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
