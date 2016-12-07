<?php

/* MyFirstBundle:Todo:create.html.twig */
class __TwigTemplate_90822f6f0d3bdd895d770483a214409a52ea4cd55d6ad582a81040966f5948b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyFirstBundle:Todo:create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39b7eef2e006275ef0fc5286358062258b18560d690215a6b27fa4f44a863d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b7eef2e006275ef0fc5286358062258b18560d690215a6b27fa4f44a863d88->enter($__internal_39b7eef2e006275ef0fc5286358062258b18560d690215a6b27fa4f44a863d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyFirstBundle:Todo:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39b7eef2e006275ef0fc5286358062258b18560d690215a6b27fa4f44a863d88->leave($__internal_39b7eef2e006275ef0fc5286358062258b18560d690215a6b27fa4f44a863d88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d99124f86cd2a902259a34c8dfb39bdbc6b2cf4e9a9ef18a1bc39875826e1b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99124f86cd2a902259a34c8dfb39bdbc6b2cf4e9a9ef18a1bc39875826e1b4e->enter($__internal_d99124f86cd2a902259a34c8dfb39bdbc6b2cf4e9a9ef18a1bc39875826e1b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyFirstBundle:Todo:create.html.twig"));

        // line 4
        echo "
    <h2 class='page-header'>Add some Todos</h2>
    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_d99124f86cd2a902259a34c8dfb39bdbc6b2cf4e9a9ef18a1bc39875826e1b4e->leave($__internal_d99124f86cd2a902259a34c8dfb39bdbc6b2cf4e9a9ef18a1bc39875826e1b4e_prof);

    }

    public function getTemplateName()
    {
        return "MyFirstBundle:Todo:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <h2 class='page-header'>Add some Todos</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

{% endblock %}", "MyFirstBundle:Todo:create.html.twig", "/var/sym.loc/p33t_proj/src/MyFirstBundle/Resources/views/Todo/create.html.twig");
    }
}
