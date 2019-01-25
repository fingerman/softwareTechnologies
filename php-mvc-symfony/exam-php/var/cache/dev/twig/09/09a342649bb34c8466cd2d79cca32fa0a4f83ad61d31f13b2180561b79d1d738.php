<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_435b145c8ef31e48213b21b1f35cb1988e3aabdd0f0a8db418b196ebf061e9c8 extends Twig_Template
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
        $__internal_ed79bb0258e39c6826a51e2c9ee4dc5af02c83bfc8ac7cb0cd5e7b6f7966e6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed79bb0258e39c6826a51e2c9ee4dc5af02c83bfc8ac7cb0cd5e7b6f7966e6ed->enter($__internal_ed79bb0258e39c6826a51e2c9ee4dc5af02c83bfc8ac7cb0cd5e7b6f7966e6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_03e2baaaf71c22f3bd12189c6846637a286f88568ccfe43307a1843168f4ff11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e2baaaf71c22f3bd12189c6846637a286f88568ccfe43307a1843168f4ff11->enter($__internal_03e2baaaf71c22f3bd12189c6846637a286f88568ccfe43307a1843168f4ff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ed79bb0258e39c6826a51e2c9ee4dc5af02c83bfc8ac7cb0cd5e7b6f7966e6ed->leave($__internal_ed79bb0258e39c6826a51e2c9ee4dc5af02c83bfc8ac7cb0cd5e7b6f7966e6ed_prof);

        
        $__internal_03e2baaaf71c22f3bd12189c6846637a286f88568ccfe43307a1843168f4ff11->leave($__internal_03e2baaaf71c22f3bd12189c6846637a286f88568ccfe43307a1843168f4ff11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
