<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b13c5fd5e268baf11eca79c21c26445ceb9044a0f0a435becd77c38a81ba844c extends Twig_Template
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
        $__internal_28b322eda0cffa2f3960a0e3c0080955ec753a87db19b9e871efe02a6dcd715b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b322eda0cffa2f3960a0e3c0080955ec753a87db19b9e871efe02a6dcd715b->enter($__internal_28b322eda0cffa2f3960a0e3c0080955ec753a87db19b9e871efe02a6dcd715b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3cec49052beebbc623156435a61b36123a1af7c4e8b31a44a8a8a57d8b71d856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cec49052beebbc623156435a61b36123a1af7c4e8b31a44a8a8a57d8b71d856->enter($__internal_3cec49052beebbc623156435a61b36123a1af7c4e8b31a44a8a8a57d8b71d856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_28b322eda0cffa2f3960a0e3c0080955ec753a87db19b9e871efe02a6dcd715b->leave($__internal_28b322eda0cffa2f3960a0e3c0080955ec753a87db19b9e871efe02a6dcd715b_prof);

        
        $__internal_3cec49052beebbc623156435a61b36123a1af7c4e8b31a44a8a8a57d8b71d856->leave($__internal_3cec49052beebbc623156435a61b36123a1af7c4e8b31a44a8a8a57d8b71d856_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
