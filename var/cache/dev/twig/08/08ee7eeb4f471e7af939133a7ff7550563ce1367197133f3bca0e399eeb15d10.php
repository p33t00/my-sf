<?php

/* post/new.html.twig */
class __TwigTemplate_9f035705bf146663da156cfd612bbfaf9f1d988ad6ab5f428ee7c668f6ffc33d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("post/base.blog.html.twig", "post/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "post/base.blog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e445669e2f3c7073ab28f70c18481e478408d61ab87b61707932ddddf53d168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e445669e2f3c7073ab28f70c18481e478408d61ab87b61707932ddddf53d168->enter($__internal_4e445669e2f3c7073ab28f70c18481e478408d61ab87b61707932ddddf53d168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e445669e2f3c7073ab28f70c18481e478408d61ab87b61707932ddddf53d168->leave($__internal_4e445669e2f3c7073ab28f70c18481e478408d61ab87b61707932ddddf53d168_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc194cb8e2d2104168326b3c9bb8fd5b2b8781cd02f92ae26ed9a996c181df8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc194cb8e2d2104168326b3c9bb8fd5b2b8781cd02f92ae26ed9a996c181df8f->enter($__internal_fc194cb8e2d2104168326b3c9bb8fd5b2b8781cd02f92ae26ed9a996c181df8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_fc194cb8e2d2104168326b3c9bb8fd5b2b8781cd02f92ae26ed9a996c181df8f->leave($__internal_fc194cb8e2d2104168326b3c9bb8fd5b2b8781cd02f92ae26ed9a996c181df8f_prof);

    }

    public function getTemplateName()
    {
        return "post/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'post/base.blog.html.twig' %}

{% block body %}
    <h1>Post creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "post/new.html.twig", "/var/sym.loc/p33t_proj/app/Resources/views/post/new.html.twig");
    }
}
