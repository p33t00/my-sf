<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_5d6b10e15b526c568b72a40f4ea70b9d2d4a746d62f103d9165525355c0fa8cc extends Twig_Template
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
        $__internal_7c13d81331784173a6c2b5daf902425ecf94aa8a1d8c7e17428403d6655f1ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c13d81331784173a6c2b5daf902425ecf94aa8a1d8c7e17428403d6655f1ddc->enter($__internal_7c13d81331784173a6c2b5daf902425ecf94aa8a1d8c7e17428403d6655f1ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7c13d81331784173a6c2b5daf902425ecf94aa8a1d8c7e17428403d6655f1ddc->leave($__internal_7c13d81331784173a6c2b5daf902425ecf94aa8a1d8c7e17428403d6655f1ddc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
