<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_2f47f195589b6d4aff17698c55cb66b7187363ad3db87d9c34e6c183713bb8ec extends Twig_Template
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
        $__internal_f18df96114824e4f2ac582e4aa3b9ea38bca4e2d53bf85e1034114901fb8bf07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f18df96114824e4f2ac582e4aa3b9ea38bca4e2d53bf85e1034114901fb8bf07->enter($__internal_f18df96114824e4f2ac582e4aa3b9ea38bca4e2d53bf85e1034114901fb8bf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f02e3e6d972238154e077602cdcee917555e39aab58e66b2c00b471c5e3ca3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02e3e6d972238154e077602cdcee917555e39aab58e66b2c00b471c5e3ca3ba->enter($__internal_f02e3e6d972238154e077602cdcee917555e39aab58e66b2c00b471c5e3ca3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f18df96114824e4f2ac582e4aa3b9ea38bca4e2d53bf85e1034114901fb8bf07->leave($__internal_f18df96114824e4f2ac582e4aa3b9ea38bca4e2d53bf85e1034114901fb8bf07_prof);

        
        $__internal_f02e3e6d972238154e077602cdcee917555e39aab58e66b2c00b471c5e3ca3ba->leave($__internal_f02e3e6d972238154e077602cdcee917555e39aab58e66b2c00b471c5e3ca3ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
