<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bfb8cbfc2e763096a4fb6d4259a192b9ca56297d890fcf93763b4df6a8222108 extends Twig_Template
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
        $__internal_ceac84eeba89875da095667b02d2f337e0fb8d537e0da82a9cc5afe0775ec6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceac84eeba89875da095667b02d2f337e0fb8d537e0da82a9cc5afe0775ec6a6->enter($__internal_ceac84eeba89875da095667b02d2f337e0fb8d537e0da82a9cc5afe0775ec6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2b9d6ffdb2f735ac3a0f27a8fd8c1acdd0a54ab81666fdb3e8227fac3953e5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9d6ffdb2f735ac3a0f27a8fd8c1acdd0a54ab81666fdb3e8227fac3953e5b9->enter($__internal_2b9d6ffdb2f735ac3a0f27a8fd8c1acdd0a54ab81666fdb3e8227fac3953e5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ceac84eeba89875da095667b02d2f337e0fb8d537e0da82a9cc5afe0775ec6a6->leave($__internal_ceac84eeba89875da095667b02d2f337e0fb8d537e0da82a9cc5afe0775ec6a6_prof);

        
        $__internal_2b9d6ffdb2f735ac3a0f27a8fd8c1acdd0a54ab81666fdb3e8227fac3953e5b9->leave($__internal_2b9d6ffdb2f735ac3a0f27a8fd8c1acdd0a54ab81666fdb3e8227fac3953e5b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}