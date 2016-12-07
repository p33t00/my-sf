<?php

/* post/show.html.twig */
class __TwigTemplate_f8daccf976aa082d96cedd9de148fa0a39a3c3bddf7cd0998573e7563af0ca92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("post/base.blog.html.twig", "post/show.html.twig", 1);
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
        $__internal_ba76d3495a0cb5ae471f20255704b2c2d9946afc4f3497bbb0b1e29375a43b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba76d3495a0cb5ae471f20255704b2c2d9946afc4f3497bbb0b1e29375a43b5e->enter($__internal_ba76d3495a0cb5ae471f20255704b2c2d9946afc4f3497bbb0b1e29375a43b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba76d3495a0cb5ae471f20255704b2c2d9946afc4f3497bbb0b1e29375a43b5e->leave($__internal_ba76d3495a0cb5ae471f20255704b2c2d9946afc4f3497bbb0b1e29375a43b5e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4d9fb7730b3c65ce501a7f3b389a822f6b951400b3e61980fe6d60c1e0772be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d9fb7730b3c65ce501a7f3b389a822f6b951400b3e61980fe6d60c1e0772be->enter($__internal_f4d9fb7730b3c65ce501a7f3b389a822f6b951400b3e61980fe6d60c1e0772be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post/show.html.twig"));

        // line 4
        echo "    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "text", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Published</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "published", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f4d9fb7730b3c65ce501a7f3b389a822f6b951400b3e61980fe6d60c1e0772be->leave($__internal_f4d9fb7730b3c65ce501a7f3b389a822f6b951400b3e61980fe6d60c1e0772be_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 49,  120 => 47,  114 => 44,  108 => 41,  96 => 34,  87 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ post.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ post.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ post.description }}</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>{{ post.text }}</td>
            </tr>
            <tr>
                <th>Published</th>
                <td>{% if post.published %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if post.created %}{{ post.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{% if post.updated %}{{ post.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('_edit', { 'id': post.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "post/show.html.twig", "/var/sym.loc/p33t_proj/app/Resources/views/post/show.html.twig");
    }
}
