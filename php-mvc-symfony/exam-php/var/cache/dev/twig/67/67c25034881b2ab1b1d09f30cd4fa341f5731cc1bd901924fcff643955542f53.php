<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9b39bd38d864ded649e3f6e25a41391e5e04cc702cce15f0bb32ee558430cd64 extends Twig_Template
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
        $__internal_a86d2fdf89cb91ac799642c50c9b98846049ddc8ee6a8d06029d32f208728dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a86d2fdf89cb91ac799642c50c9b98846049ddc8ee6a8d06029d32f208728dc6->enter($__internal_a86d2fdf89cb91ac799642c50c9b98846049ddc8ee6a8d06029d32f208728dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7b0a208a2f219b79e19e0d9c87ed61840aff83264bee111af2139033778c833f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0a208a2f219b79e19e0d9c87ed61840aff83264bee111af2139033778c833f->enter($__internal_7b0a208a2f219b79e19e0d9c87ed61840aff83264bee111af2139033778c833f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a86d2fdf89cb91ac799642c50c9b98846049ddc8ee6a8d06029d32f208728dc6->leave($__internal_a86d2fdf89cb91ac799642c50c9b98846049ddc8ee6a8d06029d32f208728dc6_prof);

        
        $__internal_7b0a208a2f219b79e19e0d9c87ed61840aff83264bee111af2139033778c833f->leave($__internal_7b0a208a2f219b79e19e0d9c87ed61840aff83264bee111af2139033778c833f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
