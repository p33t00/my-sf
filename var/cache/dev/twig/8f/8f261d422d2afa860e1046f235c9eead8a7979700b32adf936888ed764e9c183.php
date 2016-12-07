<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0f7be41943c3a2b6d678b490fabc65beea2987a6b1e5b9da1ba02dc7887b883a extends Twig_Template
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
        $__internal_ab7fc138ea8fb0ffc2285aa85265ed60d8f7fc7a8c7d5d285fde0ce432a4846a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7fc138ea8fb0ffc2285aa85265ed60d8f7fc7a8c7d5d285fde0ce432a4846a->enter($__internal_ab7fc138ea8fb0ffc2285aa85265ed60d8f7fc7a8c7d5d285fde0ce432a4846a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab7fc138ea8fb0ffc2285aa85265ed60d8f7fc7a8c7d5d285fde0ce432a4846a->leave($__internal_ab7fc138ea8fb0ffc2285aa85265ed60d8f7fc7a8c7d5d285fde0ce432a4846a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0623087dbbdeb54be8b2873b19e95e950c07674ec2d7076daf20a77f3e35ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0623087dbbdeb54be8b2873b19e95e950c07674ec2d7076daf20a77f3e35ba5->enter($__internal_d0623087dbbdeb54be8b2873b19e95e950c07674ec2d7076daf20a77f3e35ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d0623087dbbdeb54be8b2873b19e95e950c07674ec2d7076daf20a77f3e35ba5->leave($__internal_d0623087dbbdeb54be8b2873b19e95e950c07674ec2d7076daf20a77f3e35ba5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_112233e6f7b4de92faddae4ebb7a2f0e1c3b90d46a2f1f3743ca434f7bd3276a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112233e6f7b4de92faddae4ebb7a2f0e1c3b90d46a2f1f3743ca434f7bd3276a->enter($__internal_112233e6f7b4de92faddae4ebb7a2f0e1c3b90d46a2f1f3743ca434f7bd3276a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_112233e6f7b4de92faddae4ebb7a2f0e1c3b90d46a2f1f3743ca434f7bd3276a->leave($__internal_112233e6f7b4de92faddae4ebb7a2f0e1c3b90d46a2f1f3743ca434f7bd3276a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0566381bd090be18e6193faf29806c841b1af1bc34a3bc5349c31af48881674c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0566381bd090be18e6193faf29806c841b1af1bc34a3bc5349c31af48881674c->enter($__internal_0566381bd090be18e6193faf29806c841b1af1bc34a3bc5349c31af48881674c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0566381bd090be18e6193faf29806c841b1af1bc34a3bc5349c31af48881674c->leave($__internal_0566381bd090be18e6193faf29806c841b1af1bc34a3bc5349c31af48881674c_prof);

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
