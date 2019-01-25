<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f21ab4e482dbc0556d765e1ce856c35da01a2cbec85481c9dfccf87c2c79808a extends Twig_Template
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
        $__internal_654466655db464da738b7bb1d3e9add8c802a62f92ceb728b98831f6645e50bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654466655db464da738b7bb1d3e9add8c802a62f92ceb728b98831f6645e50bf->enter($__internal_654466655db464da738b7bb1d3e9add8c802a62f92ceb728b98831f6645e50bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_272ca3835c5e7a436d5fdefe77ffcde1e3526121f1661f4dd54abcde115a5c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272ca3835c5e7a436d5fdefe77ffcde1e3526121f1661f4dd54abcde115a5c4c->enter($__internal_272ca3835c5e7a436d5fdefe77ffcde1e3526121f1661f4dd54abcde115a5c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_654466655db464da738b7bb1d3e9add8c802a62f92ceb728b98831f6645e50bf->leave($__internal_654466655db464da738b7bb1d3e9add8c802a62f92ceb728b98831f6645e50bf_prof);

        
        $__internal_272ca3835c5e7a436d5fdefe77ffcde1e3526121f1661f4dd54abcde115a5c4c->leave($__internal_272ca3835c5e7a436d5fdefe77ffcde1e3526121f1661f4dd54abcde115a5c4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
