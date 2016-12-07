<?php

/* :p33t:base.html.twig */
class __TwigTemplate_5194dfcda346d01860c345f6c480fc7cc843f6b4740ef96d1b0c8acab9b4ca1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1586c7c96766a5d3ba1a1e299a18577e88017ca6cd1f3dbb7bb42854e6548a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1586c7c96766a5d3ba1a1e299a18577e88017ca6cd1f3dbb7bb42854e6548a0a->enter($__internal_1586c7c96766a5d3ba1a1e299a18577e88017ca6cd1f3dbb7bb42854e6548a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":p33t:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<h1>Hello, world!</h1>
";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "</body>
</html>";
        
        $__internal_1586c7c96766a5d3ba1a1e299a18577e88017ca6cd1f3dbb7bb42854e6548a0a->leave($__internal_1586c7c96766a5d3ba1a1e299a18577e88017ca6cd1f3dbb7bb42854e6548a0a_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0e83c3c86deebebcfcb1c6ceb94b627280668f0cbe63a7e23634e67496d89de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e83c3c86deebebcfcb1c6ceb94b627280668f0cbe63a7e23634e67496d89de->enter($__internal_b0e83c3c86deebebcfcb1c6ceb94b627280668f0cbe63a7e23634e67496d89de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":p33t:base.html.twig"));

        
        $__internal_b0e83c3c86deebebcfcb1c6ceb94b627280668f0cbe63a7e23634e67496d89de->leave($__internal_b0e83c3c86deebebcfcb1c6ceb94b627280668f0cbe63a7e23634e67496d89de_prof);

    }

    public function getTemplateName()
    {
        return ":p33t:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 23,  49 => 24,  47 => 23,  23 => 1,);
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
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<h1>Hello, world!</h1>
{% block body %}{% endblock %}
</body>
</html>", ":p33t:base.html.twig", "/var/sym.loc/p33t_proj/app/Resources/views/p33t/base.html.twig");
    }
}
