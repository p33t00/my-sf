<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a9beb32bd7ca198c4721396b2ecbb23c43506ebdce03a0bc981992986b892006 extends Twig_Template
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
        $__internal_f8b85a2aaa3a121f0afe30be11b0da2522f02b3e1d63fbadfe97bc9c1556930b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b85a2aaa3a121f0afe30be11b0da2522f02b3e1d63fbadfe97bc9c1556930b->enter($__internal_f8b85a2aaa3a121f0afe30be11b0da2522f02b3e1d63fbadfe97bc9c1556930b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f8b85a2aaa3a121f0afe30be11b0da2522f02b3e1d63fbadfe97bc9c1556930b->leave($__internal_f8b85a2aaa3a121f0afe30be11b0da2522f02b3e1d63fbadfe97bc9c1556930b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
