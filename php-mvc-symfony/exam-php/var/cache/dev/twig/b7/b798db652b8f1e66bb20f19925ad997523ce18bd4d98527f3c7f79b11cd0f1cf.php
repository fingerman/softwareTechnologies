<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5c9dbe3370d72c0c6eda1db246b63a326260d88c4c3a3efb2bfe94b379894552 extends Twig_Template
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
        $__internal_d0bc66e427345517ff1f8b1300d5cf022604f7660cd920dc699a8cc1a6622cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0bc66e427345517ff1f8b1300d5cf022604f7660cd920dc699a8cc1a6622cbd->enter($__internal_d0bc66e427345517ff1f8b1300d5cf022604f7660cd920dc699a8cc1a6622cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ce99f49baf81412d5c1f24366a5dc8e88bca926bf865568dc66e26dd9c347d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce99f49baf81412d5c1f24366a5dc8e88bca926bf865568dc66e26dd9c347d0f->enter($__internal_ce99f49baf81412d5c1f24366a5dc8e88bca926bf865568dc66e26dd9c347d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d0bc66e427345517ff1f8b1300d5cf022604f7660cd920dc699a8cc1a6622cbd->leave($__internal_d0bc66e427345517ff1f8b1300d5cf022604f7660cd920dc699a8cc1a6622cbd_prof);

        
        $__internal_ce99f49baf81412d5c1f24366a5dc8e88bca926bf865568dc66e26dd9c347d0f->leave($__internal_ce99f49baf81412d5c1f24366a5dc8e88bca926bf865568dc66e26dd9c347d0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
