<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d9196bc38897ef0621bd664cd17de26153e95a49a4528250d38473f6a2ff138a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47f1dda6d449d591f917978ec03304658794d62dd3dd1bca5a24910431a97118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f1dda6d449d591f917978ec03304658794d62dd3dd1bca5a24910431a97118->enter($__internal_47f1dda6d449d591f917978ec03304658794d62dd3dd1bca5a24910431a97118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47f1dda6d449d591f917978ec03304658794d62dd3dd1bca5a24910431a97118->leave($__internal_47f1dda6d449d591f917978ec03304658794d62dd3dd1bca5a24910431a97118_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5af53ca1b8545ce4398252cec38c9091e732e820c6d2ba7eff79cb352f48c7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af53ca1b8545ce4398252cec38c9091e732e820c6d2ba7eff79cb352f48c7ca->enter($__internal_5af53ca1b8545ce4398252cec38c9091e732e820c6d2ba7eff79cb352f48c7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5af53ca1b8545ce4398252cec38c9091e732e820c6d2ba7eff79cb352f48c7ca->leave($__internal_5af53ca1b8545ce4398252cec38c9091e732e820c6d2ba7eff79cb352f48c7ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7360cff57097f5809d7d41754f9cae849bba5c761f42d85ca68653309c1065a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7360cff57097f5809d7d41754f9cae849bba5c761f42d85ca68653309c1065a7->enter($__internal_7360cff57097f5809d7d41754f9cae849bba5c761f42d85ca68653309c1065a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7360cff57097f5809d7d41754f9cae849bba5c761f42d85ca68653309c1065a7->leave($__internal_7360cff57097f5809d7d41754f9cae849bba5c761f42d85ca68653309c1065a7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d89bd0f44cbe5a0a44608b4210d1bbfdd8b1617f7c50d201a13b18b71e8863dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89bd0f44cbe5a0a44608b4210d1bbfdd8b1617f7c50d201a13b18b71e8863dd->enter($__internal_d89bd0f44cbe5a0a44608b4210d1bbfdd8b1617f7c50d201a13b18b71e8863dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d89bd0f44cbe5a0a44608b4210d1bbfdd8b1617f7c50d201a13b18b71e8863dd->leave($__internal_d89bd0f44cbe5a0a44608b4210d1bbfdd8b1617f7c50d201a13b18b71e8863dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
