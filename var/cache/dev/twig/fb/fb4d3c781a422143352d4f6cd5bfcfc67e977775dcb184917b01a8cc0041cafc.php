<?php

/* :todo:details.html.twig */
class __TwigTemplate_6f6e41c685c979768dbbd6439df161bf47e471d2409eb0bd7438b516e9e5a713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":todo:details.html.twig", 1);
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
        $__internal_547f5d56400f68dc164fa3cee2bc34f8c2c0317de235aeebbd516f119547f813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547f5d56400f68dc164fa3cee2bc34f8c2c0317de235aeebbd516f119547f813->enter($__internal_547f5d56400f68dc164fa3cee2bc34f8c2c0317de235aeebbd516f119547f813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":todo:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_547f5d56400f68dc164fa3cee2bc34f8c2c0317de235aeebbd516f119547f813->leave($__internal_547f5d56400f68dc164fa3cee2bc34f8c2c0317de235aeebbd516f119547f813_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a03038b325f6cb0d25bdc3dee8384bcd4808e6700ff53273d0bfd2fa4c70d023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03038b325f6cb0d25bdc3dee8384bcd4808e6700ff53273d0bfd2fa4c70d023->enter($__internal_a03038b325f6cb0d25bdc3dee8384bcd4808e6700ff53273d0bfd2fa4c70d023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":todo:details.html.twig"));

        // line 4
        echo "    <hr>
    <h2 class=\"page-header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "name", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "category", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Priority: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "priority", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Due: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "dueDate", array()), "date", array()), "html", null, true);
        echo "</li>
    </ul>
    <p>
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "description", array()), "html", null, true);
        echo "
    </p>

    <a href=\"/\" class=\"btn btn-default\">Back to list</a>
";
        
        $__internal_a03038b325f6cb0d25bdc3dee8384bcd4808e6700ff53273d0bfd2fa4c70d023->leave($__internal_a03038b325f6cb0d25bdc3dee8384bcd4808e6700ff53273d0bfd2fa4c70d023_prof);

    }

    public function getTemplateName()
    {
        return ":todo:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  56 => 9,  52 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    <hr>
    <h2 class=\"page-header\">{{ todo.name }}</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: {{ todo.category }}</li>
        <li class=\"list-group-item\">Priority: {{ todo.priority }}</li>
        <li class=\"list-group-item\">Due: {{ todo.dueDate.date }}</li>
    </ul>
    <p>
        {{ todo.description }}
    </p>

    <a href=\"/\" class=\"btn btn-default\">Back to list</a>
{% endblock %}", ":todo:details.html.twig", "/var/sym.loc/p33t_proj/app/Resources/views/todo/details.html.twig");
    }
}
