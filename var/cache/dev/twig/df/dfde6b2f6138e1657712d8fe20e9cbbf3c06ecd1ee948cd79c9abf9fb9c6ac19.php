<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_da6001889948e5854baad51c11accca3a3384a09ae56dab8008b926a69392a42 extends Twig_Template
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
        $__internal_7a8a562a99921e7069a17c284dc7871e9fda5b5d36ce4bb84de7c39ff17c4aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a8a562a99921e7069a17c284dc7871e9fda5b5d36ce4bb84de7c39ff17c4aca->enter($__internal_7a8a562a99921e7069a17c284dc7871e9fda5b5d36ce4bb84de7c39ff17c4aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7a8a562a99921e7069a17c284dc7871e9fda5b5d36ce4bb84de7c39ff17c4aca->leave($__internal_7a8a562a99921e7069a17c284dc7871e9fda5b5d36ce4bb84de7c39ff17c4aca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
