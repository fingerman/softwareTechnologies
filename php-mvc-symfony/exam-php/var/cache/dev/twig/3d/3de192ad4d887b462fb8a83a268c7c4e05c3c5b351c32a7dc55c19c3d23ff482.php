<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_1bc53a257bb5722d5c1b14b1c99cd7f54c0287673113c42acceefeee9aefef78 extends Twig_Template
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
        $__internal_2d3b1d9367c8c4f51c1b0ad54aca1e2ff99417aa58fcc42a91aa6a6bb3852507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3b1d9367c8c4f51c1b0ad54aca1e2ff99417aa58fcc42a91aa6a6bb3852507->enter($__internal_2d3b1d9367c8c4f51c1b0ad54aca1e2ff99417aa58fcc42a91aa6a6bb3852507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3c8ac4ee111b5bedb028212fe223d181d89e23f4e3d523166cd21209cfd8bf6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8ac4ee111b5bedb028212fe223d181d89e23f4e3d523166cd21209cfd8bf6f->enter($__internal_3c8ac4ee111b5bedb028212fe223d181d89e23f4e3d523166cd21209cfd8bf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2d3b1d9367c8c4f51c1b0ad54aca1e2ff99417aa58fcc42a91aa6a6bb3852507->leave($__internal_2d3b1d9367c8c4f51c1b0ad54aca1e2ff99417aa58fcc42a91aa6a6bb3852507_prof);

        
        $__internal_3c8ac4ee111b5bedb028212fe223d181d89e23f4e3d523166cd21209cfd8bf6f->leave($__internal_3c8ac4ee111b5bedb028212fe223d181d89e23f4e3d523166cd21209cfd8bf6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
