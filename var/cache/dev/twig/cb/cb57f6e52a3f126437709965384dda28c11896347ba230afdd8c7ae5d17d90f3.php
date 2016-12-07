<?php

/* :post:index.html.twig */
class __TwigTemplate_e84f2f90b3a2f6435ab8c2042955db22e56e0a4707699f36abf51eecca771ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:index.html.twig", 1);
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
        $__internal_b87904b2062bb3fab2a2ede23d2500444b91c6aacda4f897682e6f7a6facfa6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87904b2062bb3fab2a2ede23d2500444b91c6aacda4f897682e6f7a6facfa6f->enter($__internal_b87904b2062bb3fab2a2ede23d2500444b91c6aacda4f897682e6f7a6facfa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b87904b2062bb3fab2a2ede23d2500444b91c6aacda4f897682e6f7a6facfa6f->leave($__internal_b87904b2062bb3fab2a2ede23d2500444b91c6aacda4f897682e6f7a6facfa6f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4649421000cc7823de3658008d13def941af1da285c35bf80c3240aafd57917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4649421000cc7823de3658008d13def941af1da285c35bf80c3240aafd57917->enter($__internal_c4649421000cc7823de3658008d13def941af1da285c35bf80c3240aafd57917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":post:index.html.twig"));

        // line 4
        echo "    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Text</th>
                <th>Published</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "text", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["post"], "published", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["post"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["post"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_new");
        echo "\">Create a new post</a>
        </li>
    </ul>
";
        
        $__internal_c4649421000cc7823de3658008d13def941af1da285c35bf80c3240aafd57917->leave($__internal_c4649421000cc7823de3658008d13def941af1da285c35bf80c3240aafd57917_prof);

    }

    public function getTemplateName()
    {
        return ":post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 46,  124 => 41,  112 => 35,  106 => 32,  97 => 28,  91 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Text</th>
                <th>Published</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
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
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('_new') }}\">Create a new post</a>
        </li>
    </ul>
{% endblock %}
", ":post:index.html.twig", "/var/sym.loc/p33t_proj/app/Resources/views/post/index.html.twig");
    }
}
