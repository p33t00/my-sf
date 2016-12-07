<?php

/* post/base.blog.html.twig */
class __TwigTemplate_9db1ec55ab58ae76b956f036249c2f2a9e79a145af1a1d5d76662bdb1b465d55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'createbtn' => array($this, 'block_createbtn'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc35928831e6ee482a38d456df222768e69d07439f0379e87bd1dac585d0fee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc35928831e6ee482a38d456df222768e69d07439f0379e87bd1dac585d0fee6->enter($__internal_cc35928831e6ee482a38d456df222768e69d07439f0379e87bd1dac585d0fee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/base.blog.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Simple BloG is a default value if none title is set -->
    <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
</head>

<body>

<div class=\"blog-masthead\">
    <div class=\"container\">
        <nav class=\"blog-nav\">
            <a class=\"blog-nav-item active\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
        echo "\">Home</a>
";
        // line 37
        echo "        </nav>
    </div>
</div>

<div class=\"container\">

    ";
        // line 43
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "_index")) {
            // line 44
            echo "        <div class=\"blog-header\">
            <h1 class=\"blog-title\">
                <a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
            echo "\">P33t Blog</a>
            </h1>
            <p class=\"lead blog-description\">Peet blog Symfony 3 project </p>
            <p>";
            // line 49
            $this->displayBlock('createbtn', $context, $blocks);
            echo "</p>
        </div>
    ";
        }
        // line 52
        echo "

    <div class=\"row\">

        <div class=\"col-sm-8 blog-main\">
            ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "


        </div><!-- /.blog-main -->


        <div class=\"col-sm-3 col-sm-offset-1 blog-sidebar\">
            <div class=\"sidebar-module sidebar-module-inset\">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
";
        // line 96
        echo "            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

<footer class=\"blog-footer\">
    <p>Peet Blog to Learn some Symfony<a href=\"http://getbootstrap.com\">Bootstrap</a> by <a href=\"https://twitter.com/mdo\">@mdo</a>.</p>
    <p>
        <a href=\"#\">Back to top</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</body>
</html>
";
        
        $__internal_cc35928831e6ee482a38d456df222768e69d07439f0379e87bd1dac585d0fee6->leave($__internal_cc35928831e6ee482a38d456df222768e69d07439f0379e87bd1dac585d0fee6_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a82beaab31fee8f40e456e1e88acb7d86d4f5e020c8525af8095e00e0dfd93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a82beaab31fee8f40e456e1e88acb7d86d4f5e020c8525af8095e00e0dfd93b->enter($__internal_1a82beaab31fee8f40e456e1e88acb7d86d4f5e020c8525af8095e00e0dfd93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post/base.blog.html.twig"));

        echo " Simple BloG ";
        
        $__internal_1a82beaab31fee8f40e456e1e88acb7d86d4f5e020c8525af8095e00e0dfd93b->leave($__internal_1a82beaab31fee8f40e456e1e88acb7d86d4f5e020c8525af8095e00e0dfd93b_prof);

    }

    // line 49
    public function block_createbtn($context, array $blocks = array())
    {
        $__internal_e0e379e8ea0b3fcf316dea2d80a27185944a00b80498c29783071fc7adc08a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e379e8ea0b3fcf316dea2d80a27185944a00b80498c29783071fc7adc08a81->enter($__internal_e0e379e8ea0b3fcf316dea2d80a27185944a00b80498c29783071fc7adc08a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post/base.blog.html.twig"));

        
        $__internal_e0e379e8ea0b3fcf316dea2d80a27185944a00b80498c29783071fc7adc08a81->leave($__internal_e0e379e8ea0b3fcf316dea2d80a27185944a00b80498c29783071fc7adc08a81_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3bc8de806df26cd3d0ddfe2503ba02a6c706a3d4f85040ea6400cb4891cd6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bc8de806df26cd3d0ddfe2503ba02a6c706a3d4f85040ea6400cb4891cd6da->enter($__internal_b3bc8de806df26cd3d0ddfe2503ba02a6c706a3d4f85040ea6400cb4891cd6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post/base.blog.html.twig"));

        // line 58
        echo "
            ";
        
        $__internal_b3bc8de806df26cd3d0ddfe2503ba02a6c706a3d4f85040ea6400cb4891cd6da->leave($__internal_b3bc8de806df26cd3d0ddfe2503ba02a6c706a3d4f85040ea6400cb4891cd6da_prof);

    }

    public function getTemplateName()
    {
        return "post/base.blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 58,  168 => 57,  157 => 49,  145 => 15,  114 => 96,  101 => 60,  99 => 57,  92 => 52,  86 => 49,  80 => 46,  76 => 44,  74 => 43,  66 => 37,  62 => 30,  44 => 15,  38 => 12,  25 => 1,);
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
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <link href=\"{{ asset('css/blog.css') }}\" rel=\"stylesheet\">

    <!-- Simple BloG is a default value if none title is set -->
    <title>{% block title %} Simple BloG {% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
</head>

<body>

<div class=\"blog-masthead\">
    <div class=\"container\">
        <nav class=\"blog-nav\">
            <a class=\"blog-nav-item active\" href=\"{{ path('_index') }}\">Home</a>
{#
            <a class=\"blog-nav-item\" href=\"#\">New features</a>
            <a class=\"blog-nav-item\" href=\"#\">Press</a>
            <a class=\"blog-nav-item\" href=\"#\">New hires</a>
            <a class=\"blog-nav-item\" href=\"#\">About</a>
#}
        </nav>
    </div>
</div>

<div class=\"container\">

    {% if app.request.attributes.get('_route')=='_index' %}
        <div class=\"blog-header\">
            <h1 class=\"blog-title\">
                <a href=\"{{ path('_index') }}\">P33t Blog</a>
            </h1>
            <p class=\"lead blog-description\">Peet blog Symfony 3 project </p>
            <p>{% block createbtn %}{% endblock %}</p>
        </div>
    {% endif %}


    <div class=\"row\">

        <div class=\"col-sm-8 blog-main\">
            {% block body %}

            {% endblock %}



        </div><!-- /.blog-main -->


        <div class=\"col-sm-3 col-sm-offset-1 blog-sidebar\">
            <div class=\"sidebar-module sidebar-module-inset\">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
{#            <div class=\"sidebar-module\">
                <h4>Archives</h4>
                <ol class=\"list-unstyled\">
                    <li><a href=\"#\">March 2014</a></li>
                    <li><a href=\"#\">February 2014</a></li>
                    <li><a href=\"#\">January 2014</a></li>
                    <li><a href=\"#\">December 2013</a></li>
                    <li><a href=\"#\">November 2013</a></li>
                    <li><a href=\"#\">October 2013</a></li>
                    <li><a href=\"#\">September 2013</a></li>
                    <li><a href=\"#\">August 2013</a></li>
                    <li><a href=\"#\">July 2013</a></li>
                    <li><a href=\"#\">June 2013</a></li>
                    <li><a href=\"#\">May 2013</a></li>
                    <li><a href=\"#\">April 2013</a></li>
                </ol>
            </div>
            <div class=\"sidebar-module\">
                <h4>Elsewhere</h4>
                <ol class=\"list-unstyled\">
                    <li><a href=\"#\">GitHub</a></li>
                    <li><a href=\"#\">Twitter</a></li>
                    <li><a href=\"#\">Facebook</a></li>
                </ol>
#}
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

<footer class=\"blog-footer\">
    <p>Peet Blog to Learn some Symfony<a href=\"http://getbootstrap.com\">Bootstrap</a> by <a href=\"https://twitter.com/mdo\">@mdo</a>.</p>
    <p>
        <a href=\"#\">Back to top</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</body>
</html>
", "post/base.blog.html.twig", "/var/sym.loc/p33t_proj/app/Resources/views/post/base.blog.html.twig");
    }
}
