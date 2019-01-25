<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5a3aafe480d68cbaaea1209d15a1bb8e79c8a05cf42395e6d6956707043cfc66 extends Twig_Template
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
        $__internal_a4b624469dab847e06bb767c579b93d91bf6f74e476d4918eb6ddf259cf26d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b624469dab847e06bb767c579b93d91bf6f74e476d4918eb6ddf259cf26d3b->enter($__internal_a4b624469dab847e06bb767c579b93d91bf6f74e476d4918eb6ddf259cf26d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_0a83e4473e0137b3f8578ce8179feeca1583803be78bf499822cf2ff8656cf2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a83e4473e0137b3f8578ce8179feeca1583803be78bf499822cf2ff8656cf2f->enter($__internal_0a83e4473e0137b3f8578ce8179feeca1583803be78bf499822cf2ff8656cf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a4b624469dab847e06bb767c579b93d91bf6f74e476d4918eb6ddf259cf26d3b->leave($__internal_a4b624469dab847e06bb767c579b93d91bf6f74e476d4918eb6ddf259cf26d3b_prof);

        
        $__internal_0a83e4473e0137b3f8578ce8179feeca1583803be78bf499822cf2ff8656cf2f->leave($__internal_0a83e4473e0137b3f8578ce8179feeca1583803be78bf499822cf2ff8656cf2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
