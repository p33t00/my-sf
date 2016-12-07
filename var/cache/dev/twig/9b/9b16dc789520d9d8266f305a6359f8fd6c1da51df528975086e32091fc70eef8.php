<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60489109c8185b0dc0a479e844c06f0aa40a3f52cd319e9627ac497ed257e35a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_a2e2aec5f0255f52f62b595cb42c75f562442c42da363c7c082a65530e0bb529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e2aec5f0255f52f62b595cb42c75f562442c42da363c7c082a65530e0bb529->enter($__internal_a2e2aec5f0255f52f62b595cb42c75f562442c42da363c7c082a65530e0bb529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2e2aec5f0255f52f62b595cb42c75f562442c42da363c7c082a65530e0bb529->leave($__internal_a2e2aec5f0255f52f62b595cb42c75f562442c42da363c7c082a65530e0bb529_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_10382e805a3fff3f1dc9f14fa435c4d0a96a68ec68f961304610a6818fe7ee59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10382e805a3fff3f1dc9f14fa435c4d0a96a68ec68f961304610a6818fe7ee59->enter($__internal_10382e805a3fff3f1dc9f14fa435c4d0a96a68ec68f961304610a6818fe7ee59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_10382e805a3fff3f1dc9f14fa435c4d0a96a68ec68f961304610a6818fe7ee59->leave($__internal_10382e805a3fff3f1dc9f14fa435c4d0a96a68ec68f961304610a6818fe7ee59_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_faea139e6981e94ef552939d3f0bbb54e15535754170113bb8a5e2f34ebf4d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faea139e6981e94ef552939d3f0bbb54e15535754170113bb8a5e2f34ebf4d49->enter($__internal_faea139e6981e94ef552939d3f0bbb54e15535754170113bb8a5e2f34ebf4d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_faea139e6981e94ef552939d3f0bbb54e15535754170113bb8a5e2f34ebf4d49->leave($__internal_faea139e6981e94ef552939d3f0bbb54e15535754170113bb8a5e2f34ebf4d49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6e0c54f3ee50a1d33f1a1260c6973436a0efa3771bc5158ccf5734ad154fa68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e0c54f3ee50a1d33f1a1260c6973436a0efa3771bc5158ccf5734ad154fa68->enter($__internal_b6e0c54f3ee50a1d33f1a1260c6973436a0efa3771bc5158ccf5734ad154fa68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b6e0c54f3ee50a1d33f1a1260c6973436a0efa3771bc5158ccf5734ad154fa68->leave($__internal_b6e0c54f3ee50a1d33f1a1260c6973436a0efa3771bc5158ccf5734ad154fa68_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
