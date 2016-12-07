<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f17bdfff419eb38c81a5a267d7464ec81930022a58f8a8a931d5fa028d7e37c4 extends Twig_Template
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
        $__internal_c4e6613d400907e6ecc4f15daa3a567d5fd9d1564dca1fb75143c4979b239b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e6613d400907e6ecc4f15daa3a567d5fd9d1564dca1fb75143c4979b239b7c->enter($__internal_c4e6613d400907e6ecc4f15daa3a567d5fd9d1564dca1fb75143c4979b239b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c4e6613d400907e6ecc4f15daa3a567d5fd9d1564dca1fb75143c4979b239b7c->leave($__internal_c4e6613d400907e6ecc4f15daa3a567d5fd9d1564dca1fb75143c4979b239b7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
