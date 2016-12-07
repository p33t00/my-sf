<?php

/* :post:new.html.twig */
class __TwigTemplate_0cd609787cf59b0816c5f55e194b6483519e36be75dd6ffa4d520a4823ff7bce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:new.html.twig", 1);
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
        $__internal_88ecc60447ffd1c4f8d12a571e67095692b60e51f73df490071a5c5e4dea8e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ecc60447ffd1c4f8d12a571e67095692b60e51f73df490071a5c5e4dea8e54->enter($__internal_88ecc60447ffd1c4f8d12a571e67095692b60e51f73df490071a5c5e4dea8e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88ecc60447ffd1c4f8d12a571e67095692b60e51f73df490071a5c5e4dea8e54->leave($__internal_88ecc60447ffd1c4f8d12a571e67095692b60e51f73df490071a5c5e4dea8e54_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8408d92bb5e7f404ca01f08537320c5f09cb3d58d7e892c2c9601ea98819772d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8408d92bb5e7f404ca01f08537320c5f09cb3d58d7e892c2c9601ea98819772d->enter($__internal_8408d92bb5e7f404ca01f08537320c5f09cb3d58d7e892c2c9601ea98819772d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":post:new.html.twig"));

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
        
        $__internal_8408d92bb5e7f404ca01f08537320c5f09cb3d58d7e892c2c9601ea98819772d->leave($__internal_8408d92bb5e7f404ca01f08537320c5f09cb3d58d7e892c2c9601ea98819772d_prof);

    }

    public function getTemplateName()
    {
        return ":post:new.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

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
", ":post:new.html.twig", "/var/sym.loc/p33t_proj/app/Resources/views/post/new.html.twig");
    }
}
