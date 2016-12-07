<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_67220f523dfacf6a675f18c64fe09e7e904653366104b9412dcdaf9c918c5522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8fbcca9f6574b44406c3a960fbbb32fd037b67286884d3526c272463b82172c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fbcca9f6574b44406c3a960fbbb32fd037b67286884d3526c272463b82172c->enter($__internal_f8fbcca9f6574b44406c3a960fbbb32fd037b67286884d3526c272463b82172c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8fbcca9f6574b44406c3a960fbbb32fd037b67286884d3526c272463b82172c->leave($__internal_f8fbcca9f6574b44406c3a960fbbb32fd037b67286884d3526c272463b82172c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91f13604e3af16e8b6fb6128636c266bf294a97834896d518cb9caf04ba11f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f13604e3af16e8b6fb6128636c266bf294a97834896d518cb9caf04ba11f91->enter($__internal_91f13604e3af16e8b6fb6128636c266bf294a97834896d518cb9caf04ba11f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_91f13604e3af16e8b6fb6128636c266bf294a97834896d518cb9caf04ba11f91->leave($__internal_91f13604e3af16e8b6fb6128636c266bf294a97834896d518cb9caf04ba11f91_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_568a2e225c0d847b6ba4bbaffc2e466ca1e4e8ef061669d74d3d9d518cc9a4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568a2e225c0d847b6ba4bbaffc2e466ca1e4e8ef061669d74d3d9d518cc9a4aa->enter($__internal_568a2e225c0d847b6ba4bbaffc2e466ca1e4e8ef061669d74d3d9d518cc9a4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_568a2e225c0d847b6ba4bbaffc2e466ca1e4e8ef061669d74d3d9d518cc9a4aa->leave($__internal_568a2e225c0d847b6ba4bbaffc2e466ca1e4e8ef061669d74d3d9d518cc9a4aa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_74a5ea72d80df9a7740fb8552267ab4fc083ea4b844e84eb1a9cc1829bb21363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a5ea72d80df9a7740fb8552267ab4fc083ea4b844e84eb1a9cc1829bb21363->enter($__internal_74a5ea72d80df9a7740fb8552267ab4fc083ea4b844e84eb1a9cc1829bb21363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_74a5ea72d80df9a7740fb8552267ab4fc083ea4b844e84eb1a9cc1829bb21363->leave($__internal_74a5ea72d80df9a7740fb8552267ab4fc083ea4b844e84eb1a9cc1829bb21363_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
