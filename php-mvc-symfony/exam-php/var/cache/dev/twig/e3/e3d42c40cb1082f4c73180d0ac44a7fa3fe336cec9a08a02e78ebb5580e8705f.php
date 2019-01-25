<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_485a80234a59f8cde2406e11eecedf0cfba25476358ca06393c00d9bcc96d5d8 extends Twig_Template
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
        $__internal_4b66ea9969b72a85a392c755b8ba852cb4fe4d86b2060c2c3dc3cec834126e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b66ea9969b72a85a392c755b8ba852cb4fe4d86b2060c2c3dc3cec834126e8d->enter($__internal_4b66ea9969b72a85a392c755b8ba852cb4fe4d86b2060c2c3dc3cec834126e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f6aa29967891a785da4576269473acb760dcde964d7bd1863a55c97bf8759bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6aa29967891a785da4576269473acb760dcde964d7bd1863a55c97bf8759bf8->enter($__internal_f6aa29967891a785da4576269473acb760dcde964d7bd1863a55c97bf8759bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4b66ea9969b72a85a392c755b8ba852cb4fe4d86b2060c2c3dc3cec834126e8d->leave($__internal_4b66ea9969b72a85a392c755b8ba852cb4fe4d86b2060c2c3dc3cec834126e8d_prof);

        
        $__internal_f6aa29967891a785da4576269473acb760dcde964d7bd1863a55c97bf8759bf8->leave($__internal_f6aa29967891a785da4576269473acb760dcde964d7bd1863a55c97bf8759bf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
