<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_70755a2df5fd64c550bf04706dc1bfe3ec6c5538b5f4c905988eb319c7efbe1b extends Twig_Template
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
        $__internal_be75776b2a62fa118204503c715e3ca197c4232ddc71f4546fb665afac8f12da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be75776b2a62fa118204503c715e3ca197c4232ddc71f4546fb665afac8f12da->enter($__internal_be75776b2a62fa118204503c715e3ca197c4232ddc71f4546fb665afac8f12da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_be75776b2a62fa118204503c715e3ca197c4232ddc71f4546fb665afac8f12da->leave($__internal_be75776b2a62fa118204503c715e3ca197c4232ddc71f4546fb665afac8f12da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
