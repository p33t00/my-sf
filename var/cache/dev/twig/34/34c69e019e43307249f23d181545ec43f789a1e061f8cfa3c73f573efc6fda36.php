<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_453cf98b3d5f6911e80a57eda054e892e1b630b8ba6cb11bec12c3e6d70ea538 extends Twig_Template
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
        $__internal_ab7153bf7c4f16d9ee5ba07a97caaf428fcfce81de75c4b98e7f4ec1ab6f23c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7153bf7c4f16d9ee5ba07a97caaf428fcfce81de75c4b98e7f4ec1ab6f23c7->enter($__internal_ab7153bf7c4f16d9ee5ba07a97caaf428fcfce81de75c4b98e7f4ec1ab6f23c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ab7153bf7c4f16d9ee5ba07a97caaf428fcfce81de75c4b98e7f4ec1ab6f23c7->leave($__internal_ab7153bf7c4f16d9ee5ba07a97caaf428fcfce81de75c4b98e7f4ec1ab6f23c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
