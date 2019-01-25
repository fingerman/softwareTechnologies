<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c08bf877778582fdec794b9caa80fc0cc782285edc446736100a530820b35de1 extends Twig_Template
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
        $__internal_c6e57101587d95a41cd58d5e89cf1b9b2b2f18795e3f38552dbeb4c734a7314e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e57101587d95a41cd58d5e89cf1b9b2b2f18795e3f38552dbeb4c734a7314e->enter($__internal_c6e57101587d95a41cd58d5e89cf1b9b2b2f18795e3f38552dbeb4c734a7314e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9d9bedffb60cfc7bef9c95970ecb37a53883206eda1b97985259230de7e76579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9bedffb60cfc7bef9c95970ecb37a53883206eda1b97985259230de7e76579->enter($__internal_9d9bedffb60cfc7bef9c95970ecb37a53883206eda1b97985259230de7e76579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c6e57101587d95a41cd58d5e89cf1b9b2b2f18795e3f38552dbeb4c734a7314e->leave($__internal_c6e57101587d95a41cd58d5e89cf1b9b2b2f18795e3f38552dbeb4c734a7314e_prof);

        
        $__internal_9d9bedffb60cfc7bef9c95970ecb37a53883206eda1b97985259230de7e76579->leave($__internal_9d9bedffb60cfc7bef9c95970ecb37a53883206eda1b97985259230de7e76579_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
