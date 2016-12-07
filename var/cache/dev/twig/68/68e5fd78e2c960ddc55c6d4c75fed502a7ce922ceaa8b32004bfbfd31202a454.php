<?php

/* MyFirstBundle:Default:index.html.twig */
class __TwigTemplate_97d45ce4033dd0148da9743bf2b497f47787c45747cb3f04589368d4a9937925 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyFirstBundle:Default:index.html.twig", 1);
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
        $__internal_994e740223dcbe3d28275a8186122d75eb0b0df631ffc79b73c02f227ae6d382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994e740223dcbe3d28275a8186122d75eb0b0df631ffc79b73c02f227ae6d382->enter($__internal_994e740223dcbe3d28275a8186122d75eb0b0df631ffc79b73c02f227ae6d382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyFirstBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_994e740223dcbe3d28275a8186122d75eb0b0df631ffc79b73c02f227ae6d382->leave($__internal_994e740223dcbe3d28275a8186122d75eb0b0df631ffc79b73c02f227ae6d382_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cae9b70ce1baff4b8df5bdee1b4b42d9b24e4b14aa2154949cefef2bc69e0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cae9b70ce1baff4b8df5bdee1b4b42d9b24e4b14aa2154949cefef2bc69e0b0->enter($__internal_5cae9b70ce1baff4b8df5bdee1b4b42d9b24e4b14aa2154949cefef2bc69e0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyFirstBundle:Default:index.html.twig"));

        // line 4
        echo "    <div class=\"panel panel-default\">
        <!-- Default panel contents -->
        <div class=\"text-primary panel-heading\">Todo List</div>

        <!-- Table -->
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th>Due Date</th>
                    <th>Create Date</th>
                    <th></th>
                </tr>
            </thead>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "category", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "priority", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["task"], "createDate", array()), "date", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo_details", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo " class='btn btn-success'>Details</a>
                            <a href=";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo_edit", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo " class='btn btn-default'>Edit</a>
                            <a href=";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo_delete", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo " class='btn btn-danger'>Delete</a>
                        </td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_5cae9b70ce1baff4b8df5bdee1b4b42d9b24e4b14aa2154949cefef2bc69e0b0->leave($__internal_5cae9b70ce1baff4b8df5bdee1b4b42d9b24e4b14aa2154949cefef2bc69e0b0_prof);

    }

    public function getTemplateName()
    {
        return "MyFirstBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 38,  117 => 34,  113 => 33,  109 => 32,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  77 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
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
    <div class=\"panel panel-default\">
        <!-- Default panel contents -->
        <div class=\"text-primary panel-heading\">Todo List</div>

        <!-- Table -->
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th>Due Date</th>
                    <th>Create Date</th>
                    <th></th>
                </tr>
            </thead>
                {% for task in list %}
                    <tr>
                        <td>{{ loop.index }}</td>
                        <td>{{ task.name }}</td>
                        <td>{{ task.category }}</td>
                        <td>{{ task.description }}</td>
                        <td>{{ task.priority }}</td>
                        <td>{{ task.dueDate|date('F j, Y, g:i a') }}</td>
                        <td>{{ task.createDate.date }}</td>
                        <td>
                            <a href={{path('todo_details', {'id':task.id})}} class='btn btn-success'>Details</a>
                            <a href={{path('todo_edit', {'id':task.id})}} class='btn btn-default'>Edit</a>
                            <a href={{path('todo_delete', {'id':task.id})}} class='btn btn-danger'>Delete</a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "MyFirstBundle:Default:index.html.twig", "/var/sym.loc/p33t_proj/src/MyFirstBundle/Resources/views/Default/index.html.twig");
    }
}
