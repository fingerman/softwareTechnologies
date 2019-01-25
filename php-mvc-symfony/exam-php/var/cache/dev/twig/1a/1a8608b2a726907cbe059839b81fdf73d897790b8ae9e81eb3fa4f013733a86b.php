<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5be44fa5309bb4e94ecc22454556e1cd38606561dd24f6d3e435f8c65c03acfe extends Twig_Template
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
        $__internal_9ae3679e12ff83e703a89f0bd51c41b94c695d8376686616aa5b8ad2ef5b19fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae3679e12ff83e703a89f0bd51c41b94c695d8376686616aa5b8ad2ef5b19fe->enter($__internal_9ae3679e12ff83e703a89f0bd51c41b94c695d8376686616aa5b8ad2ef5b19fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_7d3d25a16b8718b88517976f1a8d5aba69acbf87fcd3b52a2e56e565a3e586c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3d25a16b8718b88517976f1a8d5aba69acbf87fcd3b52a2e56e565a3e586c0->enter($__internal_7d3d25a16b8718b88517976f1a8d5aba69acbf87fcd3b52a2e56e565a3e586c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9ae3679e12ff83e703a89f0bd51c41b94c695d8376686616aa5b8ad2ef5b19fe->leave($__internal_9ae3679e12ff83e703a89f0bd51c41b94c695d8376686616aa5b8ad2ef5b19fe_prof);

        
        $__internal_7d3d25a16b8718b88517976f1a8d5aba69acbf87fcd3b52a2e56e565a3e586c0->leave($__internal_7d3d25a16b8718b88517976f1a8d5aba69acbf87fcd3b52a2e56e565a3e586c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
