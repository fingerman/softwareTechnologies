<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_987ac1695af07336547e168128399df4bd6c257ab9e89891fcee1bad7d943e81 extends Twig_Template
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
        $__internal_76e7b88349dede473d5cda71749c6c8a74f441364c2568208d4f5ad95c2e2a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e7b88349dede473d5cda71749c6c8a74f441364c2568208d4f5ad95c2e2a09->enter($__internal_76e7b88349dede473d5cda71749c6c8a74f441364c2568208d4f5ad95c2e2a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_15c0dcf9657b0f2485dc498ab7ae16a8771444245cb5a82ad3ac7341041fa920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c0dcf9657b0f2485dc498ab7ae16a8771444245cb5a82ad3ac7341041fa920->enter($__internal_15c0dcf9657b0f2485dc498ab7ae16a8771444245cb5a82ad3ac7341041fa920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_76e7b88349dede473d5cda71749c6c8a74f441364c2568208d4f5ad95c2e2a09->leave($__internal_76e7b88349dede473d5cda71749c6c8a74f441364c2568208d4f5ad95c2e2a09_prof);

        
        $__internal_15c0dcf9657b0f2485dc498ab7ae16a8771444245cb5a82ad3ac7341041fa920->leave($__internal_15c0dcf9657b0f2485dc498ab7ae16a8771444245cb5a82ad3ac7341041fa920_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
