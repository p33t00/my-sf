<?php

/* :todo:edit.html.twig */
class __TwigTemplate_fed8a0f4946f16a9d4258084466f6f2300e6425eff5344eadfbfffd4a2f0a8c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":todo:edit.html.twig", 1);
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
        $__internal_abfbeadaf8703365e81df31e88b4a52e52d3eb0e3d2859dda11b13f41e41e4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfbeadaf8703365e81df31e88b4a52e52d3eb0e3d2859dda11b13f41e41e4c7->enter($__internal_abfbeadaf8703365e81df31e88b4a52e52d3eb0e3d2859dda11b13f41e41e4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abfbeadaf8703365e81df31e88b4a52e52d3eb0e3d2859dda11b13f41e41e4c7->leave($__internal_abfbeadaf8703365e81df31e88b4a52e52d3eb0e3d2859dda11b13f41e41e4c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab6042802d47a629f6f9ee1204b2d1ff2799bde6d5b539de4c75f5d1be98318a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6042802d47a629f6f9ee1204b2d1ff2799bde6d5b539de4c75f5d1be98318a->enter($__internal_ab6042802d47a629f6f9ee1204b2d1ff2799bde6d5b539de4c75f5d1be98318a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":todo:edit.html.twig"));

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
        
        $__internal_ab6042802d47a629f6f9ee1204b2d1ff2799bde6d5b539de4c75f5d1be98318a->leave($__internal_ab6042802d47a629f6f9ee1204b2d1ff2799bde6d5b539de4c75f5d1be98318a_prof);

    }

    public function getTemplateName()
    {
        return ":todo:edit.html.twig";
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

{% endblock %}", ":todo:edit.html.twig", "/var/sym.loc/p33t_proj/app/Resources/views/todo/edit.html.twig");
    }
}
