<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_9c44b19cd6dd4bcc2f768813cbfb2c965c9268725d25b75040cc8329622648f5 extends Twig_Template
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
        $__internal_f0e282426b32835e8cf9f74f66d8dd4b3abd71fb9337bd6bc0006faf5dd06dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e282426b32835e8cf9f74f66d8dd4b3abd71fb9337bd6bc0006faf5dd06dd1->enter($__internal_f0e282426b32835e8cf9f74f66d8dd4b3abd71fb9337bd6bc0006faf5dd06dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f0e282426b32835e8cf9f74f66d8dd4b3abd71fb9337bd6bc0006faf5dd06dd1->leave($__internal_f0e282426b32835e8cf9f74f66d8dd4b3abd71fb9337bd6bc0006faf5dd06dd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
