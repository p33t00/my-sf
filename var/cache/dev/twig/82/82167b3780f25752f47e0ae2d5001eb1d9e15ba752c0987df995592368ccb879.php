<?php

/* Form/bootstrap_3_layout.html.twig */
class __TwigTemplate_6f2a17d5ac921a872b18be319c02307156e522d5ada9f93da07154a754d50f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "Form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8850d29c6f9ae944ac0717253a0f7e1af3f56055f765e4f3757db1b308ef9105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8850d29c6f9ae944ac0717253a0f7e1af3f56055f765e4f3757db1b308ef9105->enter($__internal_8850d29c6f9ae944ac0717253a0f7e1af3f56055f765e4f3757db1b308ef9105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8850d29c6f9ae944ac0717253a0f7e1af3f56055f765e4f3757db1b308ef9105->leave($__internal_8850d29c6f9ae944ac0717253a0f7e1af3f56055f765e4f3757db1b308ef9105_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8b5a0177622581cc6ecae52eb0c9c298be477984dbc9513fbdd17abc37de753b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5a0177622581cc6ecae52eb0c9c298be477984dbc9513fbdd17abc37de753b->enter($__internal_8b5a0177622581cc6ecae52eb0c9c298be477984dbc9513fbdd17abc37de753b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8b5a0177622581cc6ecae52eb0c9c298be477984dbc9513fbdd17abc37de753b->leave($__internal_8b5a0177622581cc6ecae52eb0c9c298be477984dbc9513fbdd17abc37de753b_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d2fcbe6515c3732cfbc721b6538f43488cc0c8f19d73a9fbe5255eaa4d684d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fcbe6515c3732cfbc721b6538f43488cc0c8f19d73a9fbe5255eaa4d684d8b->enter($__internal_d2fcbe6515c3732cfbc721b6538f43488cc0c8f19d73a9fbe5255eaa4d684d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d2fcbe6515c3732cfbc721b6538f43488cc0c8f19d73a9fbe5255eaa4d684d8b->leave($__internal_d2fcbe6515c3732cfbc721b6538f43488cc0c8f19d73a9fbe5255eaa4d684d8b_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_29e042249767f86b343654ce7ae888673f039e8647b445a03c775ad3f3e130b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e042249767f86b343654ce7ae888673f039e8647b445a03c775ad3f3e130b4->enter($__internal_29e042249767f86b343654ce7ae888673f039e8647b445a03c775ad3f3e130b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_29e042249767f86b343654ce7ae888673f039e8647b445a03c775ad3f3e130b4->leave($__internal_29e042249767f86b343654ce7ae888673f039e8647b445a03c775ad3f3e130b4_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7887524d18a9a6789751eea3d7261894ec1cf1600fde0989bda26c0feca9da28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7887524d18a9a6789751eea3d7261894ec1cf1600fde0989bda26c0feca9da28->enter($__internal_7887524d18a9a6789751eea3d7261894ec1cf1600fde0989bda26c0feca9da28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_a5e235e9fcc12b12d3841d10869494a6637bc7953f4e54b4a0095238cda59a2c = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_939107ef37470b5d1ba6c48b034a77c1ede7cffafafc826b3e860431c43a254f = "{{") && ('' === $__internal_939107ef37470b5d1ba6c48b034a77c1ede7cffafafc826b3e860431c43a254f || 0 === strpos($__internal_a5e235e9fcc12b12d3841d10869494a6637bc7953f4e54b4a0095238cda59a2c, $__internal_939107ef37470b5d1ba6c48b034a77c1ede7cffafafc826b3e860431c43a254f)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_7887524d18a9a6789751eea3d7261894ec1cf1600fde0989bda26c0feca9da28->leave($__internal_7887524d18a9a6789751eea3d7261894ec1cf1600fde0989bda26c0feca9da28_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_5a1722ee9ac829812f56d581d573328392786d912ac70892e3f9cb561295bb92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1722ee9ac829812f56d581d573328392786d912ac70892e3f9cb561295bb92->enter($__internal_5a1722ee9ac829812f56d581d573328392786d912ac70892e3f9cb561295bb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_5a1722ee9ac829812f56d581d573328392786d912ac70892e3f9cb561295bb92->leave($__internal_5a1722ee9ac829812f56d581d573328392786d912ac70892e3f9cb561295bb92_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4881823e79306ab680b139d8674d2fd0ad8ee7757524693d1efaf01fcfcc2cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4881823e79306ab680b139d8674d2fd0ad8ee7757524693d1efaf01fcfcc2cb8->enter($__internal_4881823e79306ab680b139d8674d2fd0ad8ee7757524693d1efaf01fcfcc2cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_4881823e79306ab680b139d8674d2fd0ad8ee7757524693d1efaf01fcfcc2cb8->leave($__internal_4881823e79306ab680b139d8674d2fd0ad8ee7757524693d1efaf01fcfcc2cb8_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_a28a88c5d2ed7a1c8e3ef501daad831961da3dc751888943f957699285d2f1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28a88c5d2ed7a1c8e3ef501daad831961da3dc751888943f957699285d2f1c9->enter($__internal_a28a88c5d2ed7a1c8e3ef501daad831961da3dc751888943f957699285d2f1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_a28a88c5d2ed7a1c8e3ef501daad831961da3dc751888943f957699285d2f1c9->leave($__internal_a28a88c5d2ed7a1c8e3ef501daad831961da3dc751888943f957699285d2f1c9_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_221b34770fca53d177c95c71d82562c1e227662702a8685c76db1b37bf3cf3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221b34770fca53d177c95c71d82562c1e227662702a8685c76db1b37bf3cf3c3->enter($__internal_221b34770fca53d177c95c71d82562c1e227662702a8685c76db1b37bf3cf3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_221b34770fca53d177c95c71d82562c1e227662702a8685c76db1b37bf3cf3c3->leave($__internal_221b34770fca53d177c95c71d82562c1e227662702a8685c76db1b37bf3cf3c3_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_d702f3ba054365a4b6fa921298c113c064df9e29315270a295b52f7fc2a680f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d702f3ba054365a4b6fa921298c113c064df9e29315270a295b52f7fc2a680f9->enter($__internal_d702f3ba054365a4b6fa921298c113c064df9e29315270a295b52f7fc2a680f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_d702f3ba054365a4b6fa921298c113c064df9e29315270a295b52f7fc2a680f9->leave($__internal_d702f3ba054365a4b6fa921298c113c064df9e29315270a295b52f7fc2a680f9_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_6d4ee719ad8096c74fa3a61c4d00a2162616e86230f72e8e8cc1a20b810cd25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4ee719ad8096c74fa3a61c4d00a2162616e86230f72e8e8cc1a20b810cd25b->enter($__internal_6d4ee719ad8096c74fa3a61c4d00a2162616e86230f72e8e8cc1a20b810cd25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 110
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_6d4ee719ad8096c74fa3a61c4d00a2162616e86230f72e8e8cc1a20b810cd25b->leave($__internal_6d4ee719ad8096c74fa3a61c4d00a2162616e86230f72e8e8cc1a20b810cd25b_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_3dbe6f3d4323d8f4ec5c309018e76b1191139557f308acfcf199d26ce6e503ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbe6f3d4323d8f4ec5c309018e76b1191139557f308acfcf199d26ce6e503ff->enter($__internal_3dbe6f3d4323d8f4ec5c309018e76b1191139557f308acfcf199d26ce6e503ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_3dbe6f3d4323d8f4ec5c309018e76b1191139557f308acfcf199d26ce6e503ff->leave($__internal_3dbe6f3d4323d8f4ec5c309018e76b1191139557f308acfcf199d26ce6e503ff_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0fb2a32072b7574b733b66e8402c9c63ead30ca9150dbc99974e5176516705a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb2a32072b7574b733b66e8402c9c63ead30ca9150dbc99974e5176516705a3->enter($__internal_0fb2a32072b7574b733b66e8402c9c63ead30ca9150dbc99974e5176516705a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_0fb2a32072b7574b733b66e8402c9c63ead30ca9150dbc99974e5176516705a3->leave($__internal_0fb2a32072b7574b733b66e8402c9c63ead30ca9150dbc99974e5176516705a3_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e25217965661ed10152dbccf9989494533424808f04d28d57c5d67d8536646d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25217965661ed10152dbccf9989494533424808f04d28d57c5d67d8536646d3->enter($__internal_e25217965661ed10152dbccf9989494533424808f04d28d57c5d67d8536646d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_e25217965661ed10152dbccf9989494533424808f04d28d57c5d67d8536646d3->leave($__internal_e25217965661ed10152dbccf9989494533424808f04d28d57c5d67d8536646d3_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_664ca7e8c98871154aa7696954f97f244701e0b01c5ce54960b5602d87ab4bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664ca7e8c98871154aa7696954f97f244701e0b01c5ce54960b5602d87ab4bde->enter($__internal_664ca7e8c98871154aa7696954f97f244701e0b01c5ce54960b5602d87ab4bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 159
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_664ca7e8c98871154aa7696954f97f244701e0b01c5ce54960b5602d87ab4bde->leave($__internal_664ca7e8c98871154aa7696954f97f244701e0b01c5ce54960b5602d87ab4bde_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_60d0bb2ebbe870cceed54c387404a283c28d7b3777f130aee827ad278a7c46d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d0bb2ebbe870cceed54c387404a283c28d7b3777f130aee827ad278a7c46d1->enter($__internal_60d0bb2ebbe870cceed54c387404a283c28d7b3777f130aee827ad278a7c46d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 165
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_60d0bb2ebbe870cceed54c387404a283c28d7b3777f130aee827ad278a7c46d1->leave($__internal_60d0bb2ebbe870cceed54c387404a283c28d7b3777f130aee827ad278a7c46d1_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_74c8eb6a8e3e703c2dd6dc0c607f6259521893bc981e83fd35d43baed6c9397c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c8eb6a8e3e703c2dd6dc0c607f6259521893bc981e83fd35d43baed6c9397c->enter($__internal_74c8eb6a8e3e703c2dd6dc0c607f6259521893bc981e83fd35d43baed6c9397c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_74c8eb6a8e3e703c2dd6dc0c607f6259521893bc981e83fd35d43baed6c9397c->leave($__internal_74c8eb6a8e3e703c2dd6dc0c607f6259521893bc981e83fd35d43baed6c9397c_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_79e8ff517a36d040c5dc8867e7beaedbf033caf6e24c5d06ca3eec2ebe9843c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e8ff517a36d040c5dc8867e7beaedbf033caf6e24c5d06ca3eec2ebe9843c1->enter($__internal_79e8ff517a36d040c5dc8867e7beaedbf033caf6e24c5d06ca3eec2ebe9843c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_79e8ff517a36d040c5dc8867e7beaedbf033caf6e24c5d06ca3eec2ebe9843c1->leave($__internal_79e8ff517a36d040c5dc8867e7beaedbf033caf6e24c5d06ca3eec2ebe9843c1_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_809d995792f8d7d00f6f24a964f96c6b445b85a66b43465ca0ad8ad9451725c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809d995792f8d7d00f6f24a964f96c6b445b85a66b43465ca0ad8ad9451725c6->enter($__internal_809d995792f8d7d00f6f24a964f96c6b445b85a66b43465ca0ad8ad9451725c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 190
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 196
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 197
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_809d995792f8d7d00f6f24a964f96c6b445b85a66b43465ca0ad8ad9451725c6->leave($__internal_809d995792f8d7d00f6f24a964f96c6b445b85a66b43465ca0ad8ad9451725c6_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_53400907c41b7d07d8d3435f9b7e8cf3583bddadb2e6097a243ae5ba89015f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53400907c41b7d07d8d3435f9b7e8cf3583bddadb2e6097a243ae5ba89015f48->enter($__internal_53400907c41b7d07d8d3435f9b7e8cf3583bddadb2e6097a243ae5ba89015f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_53400907c41b7d07d8d3435f9b7e8cf3583bddadb2e6097a243ae5ba89015f48->leave($__internal_53400907c41b7d07d8d3435f9b7e8cf3583bddadb2e6097a243ae5ba89015f48_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_8b4aa384055a103e809fa6fb4738f6bb3dafa6cfea00ae0fc00f912129c6ba6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4aa384055a103e809fa6fb4738f6bb3dafa6cfea00ae0fc00f912129c6ba6a->enter($__internal_8b4aa384055a103e809fa6fb4738f6bb3dafa6cfea00ae0fc00f912129c6ba6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_8b4aa384055a103e809fa6fb4738f6bb3dafa6cfea00ae0fc00f912129c6ba6a->leave($__internal_8b4aa384055a103e809fa6fb4738f6bb3dafa6cfea00ae0fc00f912129c6ba6a_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_fc564dc2ffdec899fbc25bdc2fb8dbd89541da8ac3c93bd186621389f88daefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc564dc2ffdec899fbc25bdc2fb8dbd89541da8ac3c93bd186621389f88daefc->enter($__internal_fc564dc2ffdec899fbc25bdc2fb8dbd89541da8ac3c93bd186621389f88daefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fc564dc2ffdec899fbc25bdc2fb8dbd89541da8ac3c93bd186621389f88daefc->leave($__internal_fc564dc2ffdec899fbc25bdc2fb8dbd89541da8ac3c93bd186621389f88daefc_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_16d6d427ec4a4f17be8c4851c8c73881f70b92aec1a9f1340116c11a537b3bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d6d427ec4a4f17be8c4851c8c73881f70b92aec1a9f1340116c11a537b3bbf->enter($__internal_16d6d427ec4a4f17be8c4851c8c73881f70b92aec1a9f1340116c11a537b3bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_16d6d427ec4a4f17be8c4851c8c73881f70b92aec1a9f1340116c11a537b3bbf->leave($__internal_16d6d427ec4a4f17be8c4851c8c73881f70b92aec1a9f1340116c11a537b3bbf_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_63c5c46cea264da9d7ad0dda709a031e4b9991d4d24f56f6072e2794a65c2236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c5c46cea264da9d7ad0dda709a031e4b9991d4d24f56f6072e2794a65c2236->enter($__internal_63c5c46cea264da9d7ad0dda709a031e4b9991d4d24f56f6072e2794a65c2236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_63c5c46cea264da9d7ad0dda709a031e4b9991d4d24f56f6072e2794a65c2236->leave($__internal_63c5c46cea264da9d7ad0dda709a031e4b9991d4d24f56f6072e2794a65c2236_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_fdd81fdff4069889af843d31bfd235a0781705696aea97c8311dcbb0ed817e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd81fdff4069889af843d31bfd235a0781705696aea97c8311dcbb0ed817e8b->enter($__internal_fdd81fdff4069889af843d31bfd235a0781705696aea97c8311dcbb0ed817e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fdd81fdff4069889af843d31bfd235a0781705696aea97c8311dcbb0ed817e8b->leave($__internal_fdd81fdff4069889af843d31bfd235a0781705696aea97c8311dcbb0ed817e8b_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9a78498d1e4b07bc9ee070b3c2feb0a0619786741f9a1f7c00c38ae3a5101bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a78498d1e4b07bc9ee070b3c2feb0a0619786741f9a1f7c00c38ae3a5101bfd->enter($__internal_9a78498d1e4b07bc9ee070b3c2feb0a0619786741f9a1f7c00c38ae3a5101bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 239
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_9a78498d1e4b07bc9ee070b3c2feb0a0619786741f9a1f7c00c38ae3a5101bfd->leave($__internal_9a78498d1e4b07bc9ee070b3c2feb0a0619786741f9a1f7c00c38ae3a5101bfd_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_b4c89f51ac6275606dce20665e8bc14da50cfa77e0bd9e9aa497614b616b8721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c89f51ac6275606dce20665e8bc14da50cfa77e0bd9e9aa497614b616b8721->enter($__internal_b4c89f51ac6275606dce20665e8bc14da50cfa77e0bd9e9aa497614b616b8721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 246
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_b4c89f51ac6275606dce20665e8bc14da50cfa77e0bd9e9aa497614b616b8721->leave($__internal_b4c89f51ac6275606dce20665e8bc14da50cfa77e0bd9e9aa497614b616b8721_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2370c164e79149acda2c423d8f8d63a9952a204b67a2735dc473eb3f66b93016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2370c164e79149acda2c423d8f8d63a9952a204b67a2735dc473eb3f66b93016->enter($__internal_2370c164e79149acda2c423d8f8d63a9952a204b67a2735dc473eb3f66b93016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Form/bootstrap_3_layout.html.twig"));

        // line 255
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "        <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
        ";
            // line 262
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_2370c164e79149acda2c423d8f8d63a9952a204b67a2735dc473eb3f66b93016->leave($__internal_2370c164e79149acda2c423d8f8d63a9952a204b67a2735dc473eb3f66b93016_prof);

    }

    public function getTemplateName()
    {
        return "Form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  896 => 262,  893 => 261,  885 => 259,  881 => 258,  879 => 257,  873 => 256,  871 => 255,  865 => 254,  858 => 249,  856 => 248,  854 => 247,  848 => 246,  842 => 245,  835 => 242,  833 => 241,  831 => 240,  825 => 239,  819 => 238,  812 => 235,  810 => 234,  804 => 233,  797 => 230,  795 => 229,  789 => 228,  782 => 225,  780 => 224,  774 => 223,  767 => 220,  765 => 219,  759 => 218,  752 => 215,  750 => 214,  748 => 213,  742 => 212,  735 => 209,  733 => 208,  731 => 207,  729 => 206,  723 => 205,  717 => 204,  708 => 198,  704 => 197,  689 => 196,  685 => 193,  682 => 190,  681 => 189,  680 => 188,  678 => 187,  675 => 186,  672 => 185,  669 => 184,  666 => 183,  663 => 182,  660 => 181,  657 => 180,  654 => 179,  652 => 178,  646 => 177,  639 => 174,  633 => 173,  626 => 170,  620 => 169,  613 => 166,  611 => 165,  605 => 163,  598 => 160,  596 => 159,  590 => 158,  582 => 152,  580 => 151,  578 => 150,  575 => 148,  573 => 147,  571 => 146,  565 => 145,  557 => 141,  555 => 140,  553 => 139,  550 => 137,  548 => 136,  546 => 135,  540 => 134,  532 => 130,  526 => 127,  525 => 126,  524 => 125,  520 => 124,  516 => 123,  509 => 119,  508 => 118,  507 => 117,  503 => 116,  501 => 115,  495 => 114,  488 => 111,  486 => 110,  480 => 109,  472 => 105,  468 => 104,  464 => 103,  460 => 102,  456 => 101,  452 => 100,  448 => 99,  444 => 98,  440 => 97,  438 => 96,  434 => 95,  432 => 94,  429 => 92,  427 => 91,  421 => 90,  412 => 85,  409 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 254,  197 => 253,  194 => 251,  192 => 245,  189 => 244,  187 => 238,  184 => 237,  182 => 233,  179 => 232,  177 => 228,  174 => 227,  172 => 223,  169 => 222,  167 => 218,  164 => 217,  162 => 212,  159 => 211,  157 => 204,  154 => 203,  151 => 201,  149 => 177,  146 => 176,  144 => 173,  141 => 172,  139 => 169,  136 => 168,  134 => 163,  131 => 162,  129 => 158,  126 => 157,  123 => 155,  121 => 145,  118 => 144,  116 => 134,  113 => 133,  111 => 114,  108 => 113,  106 => 109,  104 => 90,  102 => 75,  99 => 74,  97 => 56,  94 => 55,  92 => 42,  89 => 41,  87 => 35,  84 => 34,  82 => 22,  79 => 21,  77 => 17,  74 => 16,  72 => 12,  69 => 11,  67 => 5,  64 => 4,  61 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
        {{- date_pattern|replace({
            '{{ year }}': form_widget(form.year),
            '{{ month }}': form_widget(form.month),
            '{{ day }}': form_widget(form.day),
        })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
        <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
        {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}", "Form/bootstrap_3_layout.html.twig", "/var/sym.loc/p33t_proj/app/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
