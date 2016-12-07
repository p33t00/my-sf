<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c6783ac43dd907379c39cced4ff8bb5fb60e4025e96a0f2224e2f710f17ad59b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_f3d13656c13519e8f1dc6e28bbd4478dc643211441b1ba71838576653eead3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d13656c13519e8f1dc6e28bbd4478dc643211441b1ba71838576653eead3b2->enter($__internal_f3d13656c13519e8f1dc6e28bbd4478dc643211441b1ba71838576653eead3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d13656c13519e8f1dc6e28bbd4478dc643211441b1ba71838576653eead3b2->leave($__internal_f3d13656c13519e8f1dc6e28bbd4478dc643211441b1ba71838576653eead3b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d161270b4943d6848749b13e5b51d25f5c54462bda9f60d5881ddfebdc796e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d161270b4943d6848749b13e5b51d25f5c54462bda9f60d5881ddfebdc796e4f->enter($__internal_d161270b4943d6848749b13e5b51d25f5c54462bda9f60d5881ddfebdc796e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_d161270b4943d6848749b13e5b51d25f5c54462bda9f60d5881ddfebdc796e4f->leave($__internal_d161270b4943d6848749b13e5b51d25f5c54462bda9f60d5881ddfebdc796e4f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f537df335e8fec67f18fa030d68c391b2483027bb7da9e30734b99be8a84e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f537df335e8fec67f18fa030d68c391b2483027bb7da9e30734b99be8a84e23->enter($__internal_0f537df335e8fec67f18fa030d68c391b2483027bb7da9e30734b99be8a84e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0f537df335e8fec67f18fa030d68c391b2483027bb7da9e30734b99be8a84e23->leave($__internal_0f537df335e8fec67f18fa030d68c391b2483027bb7da9e30734b99be8a84e23_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
