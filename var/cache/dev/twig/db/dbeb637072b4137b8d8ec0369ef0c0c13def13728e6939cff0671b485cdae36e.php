<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f4c518d94e870396977c66f0609adb6d25a3ce44d51f253b402df28184381d27 extends Twig_Template
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
        $__internal_b73433a53fe9f0639e2c59cafebb05c917816073bed0e9503ff63f4f56ebbf33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73433a53fe9f0639e2c59cafebb05c917816073bed0e9503ff63f4f56ebbf33->enter($__internal_b73433a53fe9f0639e2c59cafebb05c917816073bed0e9503ff63f4f56ebbf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b73433a53fe9f0639e2c59cafebb05c917816073bed0e9503ff63f4f56ebbf33->leave($__internal_b73433a53fe9f0639e2c59cafebb05c917816073bed0e9503ff63f4f56ebbf33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
