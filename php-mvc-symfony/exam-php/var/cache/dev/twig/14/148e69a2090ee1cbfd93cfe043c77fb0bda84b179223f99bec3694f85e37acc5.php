<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4c80cbbc4f6e251443e356fa4168c1192c12b7acf878024bfb7970d6dfa88fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe128f6cb5f785e6a3f4dead3929d4af3088a46f5829c72716a1cf2ed7316db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe128f6cb5f785e6a3f4dead3929d4af3088a46f5829c72716a1cf2ed7316db5->enter($__internal_fe128f6cb5f785e6a3f4dead3929d4af3088a46f5829c72716a1cf2ed7316db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ca77e66fb8dad9535fa83b3928c2ef429eb03204c8bfbb8e7aff2cebc3293994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca77e66fb8dad9535fa83b3928c2ef429eb03204c8bfbb8e7aff2cebc3293994->enter($__internal_ca77e66fb8dad9535fa83b3928c2ef429eb03204c8bfbb8e7aff2cebc3293994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fe128f6cb5f785e6a3f4dead3929d4af3088a46f5829c72716a1cf2ed7316db5->leave($__internal_fe128f6cb5f785e6a3f4dead3929d4af3088a46f5829c72716a1cf2ed7316db5_prof);

        
        $__internal_ca77e66fb8dad9535fa83b3928c2ef429eb03204c8bfbb8e7aff2cebc3293994->leave($__internal_ca77e66fb8dad9535fa83b3928c2ef429eb03204c8bfbb8e7aff2cebc3293994_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_38a89865cda6b50a3cf630b647390774ec6da0765e698ed409b3d042401c215e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a89865cda6b50a3cf630b647390774ec6da0765e698ed409b3d042401c215e->enter($__internal_38a89865cda6b50a3cf630b647390774ec6da0765e698ed409b3d042401c215e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_74bb7e78f2028da14f28cac3e96506c313dd3a2888c104f27d25edf3356ab156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bb7e78f2028da14f28cac3e96506c313dd3a2888c104f27d25edf3356ab156->enter($__internal_74bb7e78f2028da14f28cac3e96506c313dd3a2888c104f27d25edf3356ab156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_74bb7e78f2028da14f28cac3e96506c313dd3a2888c104f27d25edf3356ab156->leave($__internal_74bb7e78f2028da14f28cac3e96506c313dd3a2888c104f27d25edf3356ab156_prof);

        
        $__internal_38a89865cda6b50a3cf630b647390774ec6da0765e698ed409b3d042401c215e->leave($__internal_38a89865cda6b50a3cf630b647390774ec6da0765e698ed409b3d042401c215e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\softwareTechnologies\\php-mvc-symfony\\exam-php\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
