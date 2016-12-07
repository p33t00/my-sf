<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_b3bedcb56b0be59c85db2b23cd89f5b9f5182e73d362776a5e9ea5121eb096ef extends Twig_Template
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
        $__internal_a5d187744c3a9dd91eae10cb206064b1d3e94ec668487f4c0b7d399e3ab02979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d187744c3a9dd91eae10cb206064b1d3e94ec668487f4c0b7d399e3ab02979->enter($__internal_a5d187744c3a9dd91eae10cb206064b1d3e94ec668487f4c0b7d399e3ab02979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_a5d187744c3a9dd91eae10cb206064b1d3e94ec668487f4c0b7d399e3ab02979->leave($__internal_a5d187744c3a9dd91eae10cb206064b1d3e94ec668487f4c0b7d399e3ab02979_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
