<?php

/* form_table_layout.html.twig */
class __TwigTemplate_c4d8b2a3a23986a9e4aa9ead528ecc6840bc2033241f9901fa4ac2d8ec1cfec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_156660937681a96769cf7d092c3c3128d5e3f29cb69972b3702526040d5021c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156660937681a96769cf7d092c3c3128d5e3f29cb69972b3702526040d5021c7->enter($__internal_156660937681a96769cf7d092c3c3128d5e3f29cb69972b3702526040d5021c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_156660937681a96769cf7d092c3c3128d5e3f29cb69972b3702526040d5021c7->leave($__internal_156660937681a96769cf7d092c3c3128d5e3f29cb69972b3702526040d5021c7_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4dfa9ecdba7579ea8b79bb1a0f288a90e6e8c0cc78dc17bc760f038f4cf97739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfa9ecdba7579ea8b79bb1a0f288a90e6e8c0cc78dc17bc760f038f4cf97739->enter($__internal_4dfa9ecdba7579ea8b79bb1a0f288a90e6e8c0cc78dc17bc760f038f4cf97739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_table_layout.html.twig"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_4dfa9ecdba7579ea8b79bb1a0f288a90e6e8c0cc78dc17bc760f038f4cf97739->leave($__internal_4dfa9ecdba7579ea8b79bb1a0f288a90e6e8c0cc78dc17bc760f038f4cf97739_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e14544f7ee36275da88483d17ee6af2308527e00755c0c2bbba1eb9e6565cdbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14544f7ee36275da88483d17ee6af2308527e00755c0c2bbba1eb9e6565cdbc->enter($__internal_e14544f7ee36275da88483d17ee6af2308527e00755c0c2bbba1eb9e6565cdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_table_layout.html.twig"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_e14544f7ee36275da88483d17ee6af2308527e00755c0c2bbba1eb9e6565cdbc->leave($__internal_e14544f7ee36275da88483d17ee6af2308527e00755c0c2bbba1eb9e6565cdbc_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b0f0f6c74b001dbd9271a77c40b55f67a2290cb874956ef34ada428f999e2837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f0f6c74b001dbd9271a77c40b55f67a2290cb874956ef34ada428f999e2837->enter($__internal_b0f0f6c74b001dbd9271a77c40b55f67a2290cb874956ef34ada428f999e2837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_table_layout.html.twig"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_b0f0f6c74b001dbd9271a77c40b55f67a2290cb874956ef34ada428f999e2837->leave($__internal_b0f0f6c74b001dbd9271a77c40b55f67a2290cb874956ef34ada428f999e2837_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_84eccd3e89770190d426c88924e50622953b855636ad9e9d90abc81385e5e570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84eccd3e89770190d426c88924e50622953b855636ad9e9d90abc81385e5e570->enter($__internal_84eccd3e89770190d426c88924e50622953b855636ad9e9d90abc81385e5e570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_table_layout.html.twig"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_84eccd3e89770190d426c88924e50622953b855636ad9e9d90abc81385e5e570->leave($__internal_84eccd3e89770190d426c88924e50622953b855636ad9e9d90abc81385e5e570_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  139 => 42,  137 => 41,  133 => 38,  131 => 37,  128 => 35,  126 => 34,  122 => 33,  116 => 32,  108 => 28,  106 => 27,  103 => 25,  97 => 24,  89 => 20,  87 => 19,  83 => 16,  77 => 15,  69 => 11,  67 => 10,  65 => 9,  62 => 7,  60 => 6,  57 => 4,  51 => 3,  44 => 32,  42 => 24,  40 => 15,  38 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/sym.loc/p33t_proj/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
