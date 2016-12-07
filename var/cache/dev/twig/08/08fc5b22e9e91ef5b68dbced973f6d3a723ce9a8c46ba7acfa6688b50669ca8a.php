<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c087eee759ede84ff8c71084e44e499e5db6e59b3c7129be4d28d4325dfabbc3 extends Twig_Template
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
        $__internal_14494aaa049c45aae0fc3e7caf0963dc421f5f8516b3021d4a95af3076dc6fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14494aaa049c45aae0fc3e7caf0963dc421f5f8516b3021d4a95af3076dc6fd0->enter($__internal_14494aaa049c45aae0fc3e7caf0963dc421f5f8516b3021d4a95af3076dc6fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_14494aaa049c45aae0fc3e7caf0963dc421f5f8516b3021d4a95af3076dc6fd0->leave($__internal_14494aaa049c45aae0fc3e7caf0963dc421f5f8516b3021d4a95af3076dc6fd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
