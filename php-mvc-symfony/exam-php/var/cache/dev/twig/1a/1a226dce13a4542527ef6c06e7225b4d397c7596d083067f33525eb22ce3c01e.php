<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3a46f5d3cf8ca8ca73488b5ae09e0be6877e692d893e92b012c33fb760462219 extends Twig_Template
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
        $__internal_c0258a256b273de8de1bbf1b9e5495783ec47edff11b3170e429a05ff41981aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0258a256b273de8de1bbf1b9e5495783ec47edff11b3170e429a05ff41981aa->enter($__internal_c0258a256b273de8de1bbf1b9e5495783ec47edff11b3170e429a05ff41981aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_005e28927921ecc5e4614caba18355e5332d0c26c5f1b9224d13b95b5d39aa56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005e28927921ecc5e4614caba18355e5332d0c26c5f1b9224d13b95b5d39aa56->enter($__internal_005e28927921ecc5e4614caba18355e5332d0c26c5f1b9224d13b95b5d39aa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c0258a256b273de8de1bbf1b9e5495783ec47edff11b3170e429a05ff41981aa->leave($__internal_c0258a256b273de8de1bbf1b9e5495783ec47edff11b3170e429a05ff41981aa_prof);

        
        $__internal_005e28927921ecc5e4614caba18355e5332d0c26c5f1b9224d13b95b5d39aa56->leave($__internal_005e28927921ecc5e4614caba18355e5332d0c26c5f1b9224d13b95b5d39aa56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
