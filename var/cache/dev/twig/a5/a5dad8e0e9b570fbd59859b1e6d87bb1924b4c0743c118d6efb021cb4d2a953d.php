<?php

/* post/index.html.twig */
class __TwigTemplate_7e34f8d96886c30594856b02998b78ad0b65a612f1844d150a5271f941f57b26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("post/base.blog.html.twig", "post/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'createbtn' => array($this, 'block_createbtn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "post/base.blog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_169dad9d745a782f78e92eb62620d4c90469084cb72992b2d71b7cfc6a412e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169dad9d745a782f78e92eb62620d4c90469084cb72992b2d71b7cfc6a412e21->enter($__internal_169dad9d745a782f78e92eb62620d4c90469084cb72992b2d71b7cfc6a412e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_169dad9d745a782f78e92eb62620d4c90469084cb72992b2d71b7cfc6a412e21->leave($__internal_169dad9d745a782f78e92eb62620d4c90469084cb72992b2d71b7cfc6a412e21_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fff9e159cb7de99bf7bc10a81b6aef1f38916fd12add728f5820afe2f00f725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fff9e159cb7de99bf7bc10a81b6aef1f38916fd12add728f5820afe2f00f725->enter($__internal_3fff9e159cb7de99bf7bc10a81b6aef1f38916fd12add728f5820afe2f00f725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post/index.html.twig"));

        // line 4
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "                <div class=\"blog-post\">
                    <h2 class=\"blog-post-title\">
                        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo " </a>
                    </h2>
                    <p class=\"blog-post-meta\">
                        ";
            // line 10
            if ($this->getAttribute($context["post"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo " by <a href=\"#\">Mark</a>

                        ";
            // line 12
            if ($this->getAttribute($context["post"], "published", array())) {
                // line 13
                echo "                            <span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>
                        ";
            } else {
                // line 15
                echo "                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                        ";
            }
            // line 17
            echo "
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                    </p>

                    <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                    <hr>
                </div><!-- /.blog-post -->

";
            // line 46
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_new");
        echo "\">Create a new post</a>
        </li>

    <nav>
        <ul class=\"pager\">
            <li><a href=\"#\">Previous</a></li>
            <li><a href=\"#\">Next</a></li>
        </ul>
    </nav>
";
        
        $__internal_3fff9e159cb7de99bf7bc10a81b6aef1f38916fd12add728f5820afe2f00f725->leave($__internal_3fff9e159cb7de99bf7bc10a81b6aef1f38916fd12add728f5820afe2f00f725_prof);

    }

    // line 61
    public function block_createbtn($context, array $blocks = array())
    {
        $__internal_8d899554a3e5e6517bc5e19541def0f30a9cfcefb9cc687d6a1df9436a22facb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d899554a3e5e6517bc5e19541def0f30a9cfcefb9cc687d6a1df9436a22facb->enter($__internal_8d899554a3e5e6517bc5e19541def0f30a9cfcefb9cc687d6a1df9436a22facb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post/index.html.twig"));

        // line 62
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_new");
        echo "\">
        <button type=\"button\" class=\"btn btn-info btn-lg\">
            New Post <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
        </button>
    </a>
";
        
        $__internal_8d899554a3e5e6517bc5e19541def0f30a9cfcefb9cc687d6a1df9436a22facb->leave($__internal_8d899554a3e5e6517bc5e19541def0f30a9cfcefb9cc687d6a1df9436a22facb_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 62,  115 => 61,  98 => 49,  94 => 47,  88 => 46,  78 => 18,  75 => 17,  71 => 15,  67 => 13,  65 => 12,  58 => 10,  50 => 7,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
        {% for post in posts %}
                <div class=\"blog-post\">
                    <h2 class=\"blog-post-title\">
                        <a href=\"{{ path('_show', { 'id': post.id }) }}\"> {{ post.title }} </a>
                    </h2>
                    <p class=\"blog-post-meta\">
                        {% if post.created %}{{ post.created|date('Y-m-d H:i:s') }}{% endif %} by <a href=\"#\">Mark</a>

                        {% if post.published %}
                            <span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>
                        {% else %}
                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                        {% endif %}

                        <a href=\"{{ path('_edit', { 'id': post.id }) }}\">Edit</a>
                    </p>

                    <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                    <hr>
                </div><!-- /.blog-post -->

{#
                <tr>
                <td><a href=\"{{ path('_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                <td>{{ post.title }}</td>
                <td>{{ post.description }}</td>
                <td>{{ post.text }}</td>
                <td>{% if post.published %}Yes{% else %}No{% endif %}</td>
                <td>{% if post.created %}{{ post.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if post.updated %}{{ post.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('_show', { 'id': post.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('_edit', { 'id': post.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
#}
        {% endfor %}

        <li>
            <a href=\"{{ path('_new') }}\">Create a new post</a>
        </li>

    <nav>
        <ul class=\"pager\">
            <li><a href=\"#\">Previous</a></li>
            <li><a href=\"#\">Next</a></li>
        </ul>
    </nav>
{% endblock %}


{% block createbtn %}
    <a href=\"{{ path('_new') }}\">
        <button type=\"button\" class=\"btn btn-info btn-lg\">
            New Post <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
        </button>
    </a>
{% endblock %}
", "post/index.html.twig", "/var/sym.loc/p33t_proj/app/Resources/views/post/index.html.twig");
    }
}
