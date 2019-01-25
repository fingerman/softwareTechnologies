<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fd92be7e6432c7a02abe94c7282a8557d41b1a96172d1d71ffa3d8ad9e6799a4 extends Twig_Template
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
        $__internal_1fced86b00c15ba1812ff031e9689e40d04578ce274cc9b7983294a411117994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fced86b00c15ba1812ff031e9689e40d04578ce274cc9b7983294a411117994->enter($__internal_1fced86b00c15ba1812ff031e9689e40d04578ce274cc9b7983294a411117994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_74ecaf99666e8e2b18b42690718d8df4a4a168a9452c79ab414395f7a8877021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ecaf99666e8e2b18b42690718d8df4a4a168a9452c79ab414395f7a8877021->enter($__internal_74ecaf99666e8e2b18b42690718d8df4a4a168a9452c79ab414395f7a8877021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1fced86b00c15ba1812ff031e9689e40d04578ce274cc9b7983294a411117994->leave($__internal_1fced86b00c15ba1812ff031e9689e40d04578ce274cc9b7983294a411117994_prof);

        
        $__internal_74ecaf99666e8e2b18b42690718d8df4a4a168a9452c79ab414395f7a8877021->leave($__internal_74ecaf99666e8e2b18b42690718d8df4a4a168a9452c79ab414395f7a8877021_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
