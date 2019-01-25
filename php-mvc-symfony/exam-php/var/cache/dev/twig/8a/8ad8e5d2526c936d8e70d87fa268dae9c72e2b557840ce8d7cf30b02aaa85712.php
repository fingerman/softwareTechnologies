<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b2c95232eb0d55c97d68de5ae4f44443823fca483ab53295763b097e03cc727a extends Twig_Template
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
        $__internal_feab050f989d314d120fc210ce81b226d616878c15cfc406cd5eea4b379aa32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feab050f989d314d120fc210ce81b226d616878c15cfc406cd5eea4b379aa32b->enter($__internal_feab050f989d314d120fc210ce81b226d616878c15cfc406cd5eea4b379aa32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b64dd71d3eec4ecc31242f97250a221bc311eaeaa4413419e94b5c29b6b82bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64dd71d3eec4ecc31242f97250a221bc311eaeaa4413419e94b5c29b6b82bcf->enter($__internal_b64dd71d3eec4ecc31242f97250a221bc311eaeaa4413419e94b5c29b6b82bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_feab050f989d314d120fc210ce81b226d616878c15cfc406cd5eea4b379aa32b->leave($__internal_feab050f989d314d120fc210ce81b226d616878c15cfc406cd5eea4b379aa32b_prof);

        
        $__internal_b64dd71d3eec4ecc31242f97250a221bc311eaeaa4413419e94b5c29b6b82bcf->leave($__internal_b64dd71d3eec4ecc31242f97250a221bc311eaeaa4413419e94b5c29b6b82bcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
