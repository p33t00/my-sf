<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_462dc33f55f5a5da9722600d38be51129dd156f1027e4d8a8e06957c3aeb296e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1a9b2a29c5926b2f9e7a25040963790641715a5e28a9739a2c4489b7fbe0b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a9b2a29c5926b2f9e7a25040963790641715a5e28a9739a2c4489b7fbe0b5c->enter($__internal_b1a9b2a29c5926b2f9e7a25040963790641715a5e28a9739a2c4489b7fbe0b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_b1a9b2a29c5926b2f9e7a25040963790641715a5e28a9739a2c4489b7fbe0b5c->leave($__internal_b1a9b2a29c5926b2f9e7a25040963790641715a5e28a9739a2c4489b7fbe0b5c_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "BlogBundle:Default:index.html.twig", "/var/sym.loc/p33t_proj/src/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
