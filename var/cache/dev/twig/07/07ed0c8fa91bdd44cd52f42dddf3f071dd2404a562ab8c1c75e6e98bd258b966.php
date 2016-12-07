<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_f7a8f3f673babe3e7b9c427438b67a296e21e9834ad57e2040cec0b5ca4d7008 extends Twig_Template
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
        $__internal_dd9a5353f9073eb1d6bd1d9158b85bcad4efe686c0e5667fa39a797f4a4efa11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9a5353f9073eb1d6bd1d9158b85bcad4efe686c0e5667fa39a797f4a4efa11->enter($__internal_dd9a5353f9073eb1d6bd1d9158b85bcad4efe686c0e5667fa39a797f4a4efa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_dd9a5353f9073eb1d6bd1d9158b85bcad4efe686c0e5667fa39a797f4a4efa11->leave($__internal_dd9a5353f9073eb1d6bd1d9158b85bcad4efe686c0e5667fa39a797f4a4efa11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
