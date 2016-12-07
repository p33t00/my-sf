<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d95c6881f5a74aa4cd082cf8c2322f45b71f47feb6c0227b909344fc01277641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f1c441a3d61f823b130241466e00fbc626345f82d408fc9589f1518b7041b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1c441a3d61f823b130241466e00fbc626345f82d408fc9589f1518b7041b37->enter($__internal_9f1c441a3d61f823b130241466e00fbc626345f82d408fc9589f1518b7041b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f1c441a3d61f823b130241466e00fbc626345f82d408fc9589f1518b7041b37->leave($__internal_9f1c441a3d61f823b130241466e00fbc626345f82d408fc9589f1518b7041b37_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3b752b1ada86ab5d26439c01b53c34bfc30257935b2607086a18173f9891e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b752b1ada86ab5d26439c01b53c34bfc30257935b2607086a18173f9891e64->enter($__internal_d3b752b1ada86ab5d26439c01b53c34bfc30257935b2607086a18173f9891e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_d3b752b1ada86ab5d26439c01b53c34bfc30257935b2607086a18173f9891e64->leave($__internal_d3b752b1ada86ab5d26439c01b53c34bfc30257935b2607086a18173f9891e64_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9a62c18413103f86031e2a1114111151c09d6548faf87bd44da422cb9280e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a62c18413103f86031e2a1114111151c09d6548faf87bd44da422cb9280e62->enter($__internal_a9a62c18413103f86031e2a1114111151c09d6548faf87bd44da422cb9280e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a9a62c18413103f86031e2a1114111151c09d6548faf87bd44da422cb9280e62->leave($__internal_a9a62c18413103f86031e2a1114111151c09d6548faf87bd44da422cb9280e62_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_50b3713bfdff620fd08e9e6d7c44540955d8d931087568f10d632d080ebbbb55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b3713bfdff620fd08e9e6d7c44540955d8d931087568f10d632d080ebbbb55->enter($__internal_50b3713bfdff620fd08e9e6d7c44540955d8d931087568f10d632d080ebbbb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_50b3713bfdff620fd08e9e6d7c44540955d8d931087568f10d632d080ebbbb55->leave($__internal_50b3713bfdff620fd08e9e6d7c44540955d8d931087568f10d632d080ebbbb55_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
