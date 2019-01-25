<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b48ca71d9a556fb73398bc78650fb6de75f8d087ee81a3c6c73d91a18dd5df52 extends Twig_Template
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
        $__internal_46e2f429ab5a64296a4ee45cbc7351ec13655d55926c086759b10570ff6becfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e2f429ab5a64296a4ee45cbc7351ec13655d55926c086759b10570ff6becfe->enter($__internal_46e2f429ab5a64296a4ee45cbc7351ec13655d55926c086759b10570ff6becfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_02acd138dfc0892d11de928da0b05ec7c8234603aa84f75a9b261736bece8aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02acd138dfc0892d11de928da0b05ec7c8234603aa84f75a9b261736bece8aff->enter($__internal_02acd138dfc0892d11de928da0b05ec7c8234603aa84f75a9b261736bece8aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_46e2f429ab5a64296a4ee45cbc7351ec13655d55926c086759b10570ff6becfe->leave($__internal_46e2f429ab5a64296a4ee45cbc7351ec13655d55926c086759b10570ff6becfe_prof);

        
        $__internal_02acd138dfc0892d11de928da0b05ec7c8234603aa84f75a9b261736bece8aff->leave($__internal_02acd138dfc0892d11de928da0b05ec7c8234603aa84f75a9b261736bece8aff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
