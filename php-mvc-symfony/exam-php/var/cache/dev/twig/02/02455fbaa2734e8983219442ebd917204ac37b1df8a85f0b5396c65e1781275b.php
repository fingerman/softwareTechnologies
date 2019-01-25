<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_598e049b61823ad2836bb9f47a778eb83326f7bdfac6d9375e9b062c5845249a extends Twig_Template
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
        $__internal_1ab21470f4337ca7caffa660b459adc5ddde37d5b2343fd2880de7c88b02106f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab21470f4337ca7caffa660b459adc5ddde37d5b2343fd2880de7c88b02106f->enter($__internal_1ab21470f4337ca7caffa660b459adc5ddde37d5b2343fd2880de7c88b02106f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_68bb7fef1f9344807a5c6b3d249509e654341912eeb723b6c0c32f7882e9bcbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68bb7fef1f9344807a5c6b3d249509e654341912eeb723b6c0c32f7882e9bcbd->enter($__internal_68bb7fef1f9344807a5c6b3d249509e654341912eeb723b6c0c32f7882e9bcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_1ab21470f4337ca7caffa660b459adc5ddde37d5b2343fd2880de7c88b02106f->leave($__internal_1ab21470f4337ca7caffa660b459adc5ddde37d5b2343fd2880de7c88b02106f_prof);

        
        $__internal_68bb7fef1f9344807a5c6b3d249509e654341912eeb723b6c0c32f7882e9bcbd->leave($__internal_68bb7fef1f9344807a5c6b3d249509e654341912eeb723b6c0c32f7882e9bcbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
