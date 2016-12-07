<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_87e178f8909e031f8021b2f281f2477a5a3d11cdc4ce8f31a9001277094ab7f6 extends Twig_Template
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
        $__internal_3fe6beb3f4451e1310c5bfeed28966c4b4392c14208d696dc586862b45d54799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe6beb3f4451e1310c5bfeed28966c4b4392c14208d696dc586862b45d54799->enter($__internal_3fe6beb3f4451e1310c5bfeed28966c4b4392c14208d696dc586862b45d54799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_3fe6beb3f4451e1310c5bfeed28966c4b4392c14208d696dc586862b45d54799->leave($__internal_3fe6beb3f4451e1310c5bfeed28966c4b4392c14208d696dc586862b45d54799_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
