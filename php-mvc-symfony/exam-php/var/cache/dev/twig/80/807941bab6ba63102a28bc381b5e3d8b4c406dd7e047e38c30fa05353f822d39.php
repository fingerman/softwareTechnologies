<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_276df2873d3e3e445a70600a6e2e89765a4ecc24d46617fb964713a995768832 extends Twig_Template
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
        $__internal_b1e73a86c8a46e6899b8c99b6d1a5df0d50d2e3f0c1d3992ae4304f11fa5e49e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e73a86c8a46e6899b8c99b6d1a5df0d50d2e3f0c1d3992ae4304f11fa5e49e->enter($__internal_b1e73a86c8a46e6899b8c99b6d1a5df0d50d2e3f0c1d3992ae4304f11fa5e49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7c4ccd585d977ffd9c9eb75ad3855142e662035508b8198647932111920d4b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4ccd585d977ffd9c9eb75ad3855142e662035508b8198647932111920d4b28->enter($__internal_7c4ccd585d977ffd9c9eb75ad3855142e662035508b8198647932111920d4b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b1e73a86c8a46e6899b8c99b6d1a5df0d50d2e3f0c1d3992ae4304f11fa5e49e->leave($__internal_b1e73a86c8a46e6899b8c99b6d1a5df0d50d2e3f0c1d3992ae4304f11fa5e49e_prof);

        
        $__internal_7c4ccd585d977ffd9c9eb75ad3855142e662035508b8198647932111920d4b28->leave($__internal_7c4ccd585d977ffd9c9eb75ad3855142e662035508b8198647932111920d4b28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
