<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3c5f289e7dc7140a77a29127610715eef0170db9631bfab393ccc936b0c0ad35 extends Twig_Template
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
        $__internal_345b0b451ef3e55a4744d839848a1ad1ed8956f57953b5bf736801a0cd8b170f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345b0b451ef3e55a4744d839848a1ad1ed8956f57953b5bf736801a0cd8b170f->enter($__internal_345b0b451ef3e55a4744d839848a1ad1ed8956f57953b5bf736801a0cd8b170f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_21127e875cd61146383f2eb5f98e0008d12a8f2295f6c3ef92fc000ee80c983d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21127e875cd61146383f2eb5f98e0008d12a8f2295f6c3ef92fc000ee80c983d->enter($__internal_21127e875cd61146383f2eb5f98e0008d12a8f2295f6c3ef92fc000ee80c983d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_345b0b451ef3e55a4744d839848a1ad1ed8956f57953b5bf736801a0cd8b170f->leave($__internal_345b0b451ef3e55a4744d839848a1ad1ed8956f57953b5bf736801a0cd8b170f_prof);

        
        $__internal_21127e875cd61146383f2eb5f98e0008d12a8f2295f6c3ef92fc000ee80c983d->leave($__internal_21127e875cd61146383f2eb5f98e0008d12a8f2295f6c3ef92fc000ee80c983d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
