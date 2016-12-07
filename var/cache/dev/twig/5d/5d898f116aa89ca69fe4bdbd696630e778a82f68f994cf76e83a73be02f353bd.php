<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3e5369986eb767aa7688f1ce011ceba3ec3d04d6891cf717f017a3d24710980e extends Twig_Template
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
        $__internal_1dee50562ede6c189596e035fad6f0e6170c0b3050cb560ec40e6e7faca1b1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dee50562ede6c189596e035fad6f0e6170c0b3050cb560ec40e6e7faca1b1b3->enter($__internal_1dee50562ede6c189596e035fad6f0e6170c0b3050cb560ec40e6e7faca1b1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dee50562ede6c189596e035fad6f0e6170c0b3050cb560ec40e6e7faca1b1b3->leave($__internal_1dee50562ede6c189596e035fad6f0e6170c0b3050cb560ec40e6e7faca1b1b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33a3809fdff3898628a58d4f1dde713891a28acaa3b578564760ed16ab7d5e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a3809fdff3898628a58d4f1dde713891a28acaa3b578564760ed16ab7d5e23->enter($__internal_33a3809fdff3898628a58d4f1dde713891a28acaa3b578564760ed16ab7d5e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_33a3809fdff3898628a58d4f1dde713891a28acaa3b578564760ed16ab7d5e23->leave($__internal_33a3809fdff3898628a58d4f1dde713891a28acaa3b578564760ed16ab7d5e23_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd921dc60e2ffff83e80b3f14471d3d9e659605658c22def21c3160512dac943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd921dc60e2ffff83e80b3f14471d3d9e659605658c22def21c3160512dac943->enter($__internal_bd921dc60e2ffff83e80b3f14471d3d9e659605658c22def21c3160512dac943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd921dc60e2ffff83e80b3f14471d3d9e659605658c22def21c3160512dac943->leave($__internal_bd921dc60e2ffff83e80b3f14471d3d9e659605658c22def21c3160512dac943_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c8b971f05e1c423d3e11e2ccc3858265aa7428b0f5ffb46e65bb93e65510a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8b971f05e1c423d3e11e2ccc3858265aa7428b0f5ffb46e65bb93e65510a99->enter($__internal_8c8b971f05e1c423d3e11e2ccc3858265aa7428b0f5ffb46e65bb93e65510a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c8b971f05e1c423d3e11e2ccc3858265aa7428b0f5ffb46e65bb93e65510a99->leave($__internal_8c8b971f05e1c423d3e11e2ccc3858265aa7428b0f5ffb46e65bb93e65510a99_prof);

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
