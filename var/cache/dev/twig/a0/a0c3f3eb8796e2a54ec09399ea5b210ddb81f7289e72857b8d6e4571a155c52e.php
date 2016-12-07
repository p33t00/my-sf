<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6bf8acee36b64411360e0feca2a9591f6378ebca71d1a65dd98355d84ac08f3f extends Twig_Template
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
        $__internal_d7da97924999ffb670f7f12f44d956630eac698801365e3137c7b4f589a5e9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7da97924999ffb670f7f12f44d956630eac698801365e3137c7b4f589a5e9af->enter($__internal_d7da97924999ffb670f7f12f44d956630eac698801365e3137c7b4f589a5e9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d7da97924999ffb670f7f12f44d956630eac698801365e3137c7b4f589a5e9af->leave($__internal_d7da97924999ffb670f7f12f44d956630eac698801365e3137c7b4f589a5e9af_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_201eea2a395dbc61cf740c5e409429e426d1838647e30b1448bb82e9834f920f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201eea2a395dbc61cf740c5e409429e426d1838647e30b1448bb82e9834f920f->enter($__internal_201eea2a395dbc61cf740c5e409429e426d1838647e30b1448bb82e9834f920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_201eea2a395dbc61cf740c5e409429e426d1838647e30b1448bb82e9834f920f->leave($__internal_201eea2a395dbc61cf740c5e409429e426d1838647e30b1448bb82e9834f920f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
