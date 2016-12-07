<?php

/* base.html.twig */
class __TwigTemplate_2dc604cc788500333169c28d282102e37094040cc9a0d8a9becf49b5be16295d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bece5c53c2598324c9588fce2f923b6546e528251b930aaf4999cc5a069a1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bece5c53c2598324c9588fce2f923b6546e528251b930aaf4999cc5a069a1c6->enter($__internal_8bece5c53c2598324c9588fce2f923b6546e528251b930aaf4999cc5a069a1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"p33t\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</head>
    <body>
        <nav class=\"navbar navbar-inverse\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Todo ProJ</a>
                </div>
                <div id=\"navbar\" class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"/\">List</a></li>
                        <li><a href=\"/create\">Create</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peek", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 45
            echo "                        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 48
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    ";
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "                </div>
            </div>
        </div><!-- /.container -->

        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
</html>
";
        
        $__internal_8bece5c53c2598324c9588fce2f923b6546e528251b930aaf4999cc5a069a1c6->leave($__internal_8bece5c53c2598324c9588fce2f923b6546e528251b930aaf4999cc5a069a1c6_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_77f6bbf7d9d1522de3b93b012c08de2dded2d71eb4fb96d3c3654acff80e7422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f6bbf7d9d1522de3b93b012c08de2dded2d71eb4fb96d3c3654acff80e7422->enter($__internal_77f6bbf7d9d1522de3b93b012c08de2dded2d71eb4fb96d3c3654acff80e7422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_77f6bbf7d9d1522de3b93b012c08de2dded2d71eb4fb96d3c3654acff80e7422->leave($__internal_77f6bbf7d9d1522de3b93b012c08de2dded2d71eb4fb96d3c3654acff80e7422_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c87d1f30322c3266fc10631a05067e60da57a8bb3e8438d7e7f07369fd3df55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87d1f30322c3266fc10631a05067e60da57a8bb3e8438d7e7f07369fd3df55f->enter($__internal_c87d1f30322c3266fc10631a05067e60da57a8bb3e8438d7e7f07369fd3df55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_c87d1f30322c3266fc10631a05067e60da57a8bb3e8438d7e7f07369fd3df55f->leave($__internal_c87d1f30322c3266fc10631a05067e60da57a8bb3e8438d7e7f07369fd3df55f_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_75bd6f99c84398107613eede51377cc0a6e9a81d7d4e930b176b155f6e749c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bd6f99c84398107613eede51377cc0a6e9a81d7d4e930b176b155f6e749c42->enter($__internal_75bd6f99c84398107613eede51377cc0a6e9a81d7d4e930b176b155f6e749c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_75bd6f99c84398107613eede51377cc0a6e9a81d7d4e930b176b155f6e749c42->leave($__internal_75bd6f99c84398107613eede51377cc0a6e9a81d7d4e930b176b155f6e749c42_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0172f5d5e6953bc189a3770425bca9ccfeb345cff74a55503a62cee27796f651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0172f5d5e6953bc189a3770425bca9ccfeb345cff74a55503a62cee27796f651->enter($__internal_0172f5d5e6953bc189a3770425bca9ccfeb345cff74a55503a62cee27796f651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_0172f5d5e6953bc189a3770425bca9ccfeb345cff74a55503a62cee27796f651->leave($__internal_0172f5d5e6953bc189a3770425bca9ccfeb345cff74a55503a62cee27796f651_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 55,  150 => 50,  139 => 12,  127 => 11,  118 => 56,  116 => 55,  110 => 51,  107 => 50,  98 => 48,  93 => 47,  84 => 45,  80 => 44,  47 => 14,  44 => 13,  42 => 12,  38 => 11,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"p33t\">

    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</head>
    <body>
        <nav class=\"navbar navbar-inverse\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Todo ProJ</a>
                </div>
                <div id=\"navbar\" class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"/\">List</a></li>
                        <li><a href=\"/create\">Create</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    {% for flash_message in app.session.flashbag.peek('notice') %}
                        <div class=\"alert alert-success\">{{ flash_message }}</div>
                    {% endfor %}
                    {% for flash_message in app.session.flashbag.get('error') %}
                        <div class=\"alert alert-danger\">{{ flash_message }}</div>
                    {% endfor %}
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div><!-- /.container -->

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/sym.loc/p33t_proj/app/Resources/views/base.html.twig");
    }
}
