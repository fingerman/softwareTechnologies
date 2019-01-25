<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7d064feed5b2e5da3b3d962d48caa4e5f4b958f41672126809a1dfdfd02fd5df extends Twig_Template
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
        $__internal_742313d3bcdc5ec0b8b1c045e79843b42b2d77f543dcf3955546c3db89f7872c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742313d3bcdc5ec0b8b1c045e79843b42b2d77f543dcf3955546c3db89f7872c->enter($__internal_742313d3bcdc5ec0b8b1c045e79843b42b2d77f543dcf3955546c3db89f7872c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8e2a69862cfac29688a4a2bd622fc8ee2e78ae28d9a47fa2f9d14874809e6726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2a69862cfac29688a4a2bd622fc8ee2e78ae28d9a47fa2f9d14874809e6726->enter($__internal_8e2a69862cfac29688a4a2bd622fc8ee2e78ae28d9a47fa2f9d14874809e6726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_742313d3bcdc5ec0b8b1c045e79843b42b2d77f543dcf3955546c3db89f7872c->leave($__internal_742313d3bcdc5ec0b8b1c045e79843b42b2d77f543dcf3955546c3db89f7872c_prof);

        
        $__internal_8e2a69862cfac29688a4a2bd622fc8ee2e78ae28d9a47fa2f9d14874809e6726->leave($__internal_8e2a69862cfac29688a4a2bd622fc8ee2e78ae28d9a47fa2f9d14874809e6726_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
