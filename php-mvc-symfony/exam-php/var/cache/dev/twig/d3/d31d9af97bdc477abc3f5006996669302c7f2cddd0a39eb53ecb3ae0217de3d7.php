<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9ecddeb65954af326e08e59dc415095e3d5d2361d7468edc360abd7ffc046fb1 extends Twig_Template
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
        $__internal_7355f26aeb6a2cf002110b8786fa07c23c8579398f254af5e3a64021fbd8c31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7355f26aeb6a2cf002110b8786fa07c23c8579398f254af5e3a64021fbd8c31a->enter($__internal_7355f26aeb6a2cf002110b8786fa07c23c8579398f254af5e3a64021fbd8c31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_913d21612ad8882337a92367d7e7d5e3bc0f10dd49882ae2463c523d4d90557b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913d21612ad8882337a92367d7e7d5e3bc0f10dd49882ae2463c523d4d90557b->enter($__internal_913d21612ad8882337a92367d7e7d5e3bc0f10dd49882ae2463c523d4d90557b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7355f26aeb6a2cf002110b8786fa07c23c8579398f254af5e3a64021fbd8c31a->leave($__internal_7355f26aeb6a2cf002110b8786fa07c23c8579398f254af5e3a64021fbd8c31a_prof);

        
        $__internal_913d21612ad8882337a92367d7e7d5e3bc0f10dd49882ae2463c523d4d90557b->leave($__internal_913d21612ad8882337a92367d7e7d5e3bc0f10dd49882ae2463c523d4d90557b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
