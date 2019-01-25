<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_5523d52f20ee3b6182d335ce260d6312be5f899d2d823fb2c6015d7aabb67522 extends Twig_Template
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
        $__internal_c4548b7d4ad5baf1bf32e500b6e271eed3fba0a0aa07f868f634ece7a36ecdd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4548b7d4ad5baf1bf32e500b6e271eed3fba0a0aa07f868f634ece7a36ecdd7->enter($__internal_c4548b7d4ad5baf1bf32e500b6e271eed3fba0a0aa07f868f634ece7a36ecdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_c50f163ee4d4e09eda90966ddd6b58097f65e89b9f0b617e086885abfb8daed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50f163ee4d4e09eda90966ddd6b58097f65e89b9f0b617e086885abfb8daed0->enter($__internal_c50f163ee4d4e09eda90966ddd6b58097f65e89b9f0b617e086885abfb8daed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c4548b7d4ad5baf1bf32e500b6e271eed3fba0a0aa07f868f634ece7a36ecdd7->leave($__internal_c4548b7d4ad5baf1bf32e500b6e271eed3fba0a0aa07f868f634ece7a36ecdd7_prof);

        
        $__internal_c50f163ee4d4e09eda90966ddd6b58097f65e89b9f0b617e086885abfb8daed0->leave($__internal_c50f163ee4d4e09eda90966ddd6b58097f65e89b9f0b617e086885abfb8daed0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
