<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5777ff2091d9e2527f84e350d280dcc2e47d9d3fa57c201b9f74720d34f3854f extends Twig_Template
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
        $__internal_dbc2bf22bf9d06eecc7f806ef372462555a48ae503ef5a26e2b2796638ac319e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc2bf22bf9d06eecc7f806ef372462555a48ae503ef5a26e2b2796638ac319e->enter($__internal_dbc2bf22bf9d06eecc7f806ef372462555a48ae503ef5a26e2b2796638ac319e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbc2bf22bf9d06eecc7f806ef372462555a48ae503ef5a26e2b2796638ac319e->leave($__internal_dbc2bf22bf9d06eecc7f806ef372462555a48ae503ef5a26e2b2796638ac319e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ae1fb68895d5139140031230ffe5f254d855a34bc01eb308a7764acc67f8e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae1fb68895d5139140031230ffe5f254d855a34bc01eb308a7764acc67f8e10->enter($__internal_6ae1fb68895d5139140031230ffe5f254d855a34bc01eb308a7764acc67f8e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6ae1fb68895d5139140031230ffe5f254d855a34bc01eb308a7764acc67f8e10->leave($__internal_6ae1fb68895d5139140031230ffe5f254d855a34bc01eb308a7764acc67f8e10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f3488ff5e1ccaa4d98a30e4cbed9119d8e23fde8f3f53937eb71fbba895681bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3488ff5e1ccaa4d98a30e4cbed9119d8e23fde8f3f53937eb71fbba895681bb->enter($__internal_f3488ff5e1ccaa4d98a30e4cbed9119d8e23fde8f3f53937eb71fbba895681bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f3488ff5e1ccaa4d98a30e4cbed9119d8e23fde8f3f53937eb71fbba895681bb->leave($__internal_f3488ff5e1ccaa4d98a30e4cbed9119d8e23fde8f3f53937eb71fbba895681bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27b7f18bd46bfb5299486ecb47bb3e070b3d78fb8ca4fd67dec3bc722344dfef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b7f18bd46bfb5299486ecb47bb3e070b3d78fb8ca4fd67dec3bc722344dfef->enter($__internal_27b7f18bd46bfb5299486ecb47bb3e070b3d78fb8ca4fd67dec3bc722344dfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27b7f18bd46bfb5299486ecb47bb3e070b3d78fb8ca4fd67dec3bc722344dfef->leave($__internal_27b7f18bd46bfb5299486ecb47bb3e070b3d78fb8ca4fd67dec3bc722344dfef_prof);

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
