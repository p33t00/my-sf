<?php

/* :p33t:dub.html.twig */
class __TwigTemplate_ddd001d6453958adc82a6fe119f354f5767490de474041579d130031150922fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("p33t/base.html.twig", ":p33t:dub.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "p33t/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70d84ad559a1190583dce8b287610e827b9d89a6fa4e13fdeccdaadacba7151d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d84ad559a1190583dce8b287610e827b9d89a6fa4e13fdeccdaadacba7151d->enter($__internal_70d84ad559a1190583dce8b287610e827b9d89a6fa4e13fdeccdaadacba7151d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":p33t:dub.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70d84ad559a1190583dce8b287610e827b9d89a6fa4e13fdeccdaadacba7151d->leave($__internal_70d84ad559a1190583dce8b287610e827b9d89a6fa4e13fdeccdaadacba7151d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ae013849bee1416137007cc37e54657a4c79f5031470735d72755aa3305917c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae013849bee1416137007cc37e54657a4c79f5031470735d72755aa3305917c->enter($__internal_0ae013849bee1416137007cc37e54657a4c79f5031470735d72755aa3305917c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":p33t:dub.html.twig"));

        // line 4
        echo "
<p>Heloo ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo ". here are a few words. Just to test</p>

    <a href=";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lucky_page");
        echo ">GO LUCKY</a>
    <a href=";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
        echo ">Create Data</a>
";
        
        $__internal_0ae013849bee1416137007cc37e54657a4c79f5031470735d72755aa3305917c->leave($__internal_0ae013849bee1416137007cc37e54657a4c79f5031470735d72755aa3305917c_prof);

    }

    public function getTemplateName()
    {
        return ":p33t:dub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'p33t/base.html.twig' %}

{% block body %}

<p>Heloo {{ name }}. here are a few words. Just to test</p>

    <a href={{path('lucky_page')}}>GO LUCKY</a>
    <a href={{path('create')}}>Create Data</a>
{% endblock %}", ":p33t:dub.html.twig", "/var/sym.loc/p33t_proj/app/Resources/views/p33t/dub.html.twig");
    }
}
