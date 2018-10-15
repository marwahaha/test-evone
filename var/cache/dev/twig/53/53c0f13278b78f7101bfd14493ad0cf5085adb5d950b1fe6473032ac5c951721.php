<?php

/* @SyliusAdmin/Product/Attribute/attributeValues.html.twig */
class __TwigTemplate_f65ac07883b7c6526da1386c3c560ee7ffcfd8c6bced057942bafbd22d2b193b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Attribute/attributeValues.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Attribute/attributeValues.html.twig"));

        // line 1
        $context["self"] = $this;
        // line 2
        echo "
";
        // line 3
        $context["subject"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->source); })()), "name", array()), array("_attribute" => ""));
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new Twig_Error_Runtime('Variable "forms" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["code"] => $context["localeCodes"]) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["localeCodes"]);
            foreach ($context['_seq'] as $context["localeCode"] => $context["form"]) {
                // line 6
                echo "        <div class=\"attribute\" data-id=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
            ";
                // line 7
                $context["id"] = twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "vars", array()), "label", array()), array(" " => "_")));
                // line 8
                echo "            ";
                if (twig_in_filter("type_checkbox", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "vars", array()), "cache_key", array()))) {
                    // line 9
                    echo "                ";
                    echo $context["self"]->macro_checkboxField($context["form"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 9, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 9, $this->source); })()), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 9, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 9, $this->source); })()), "applicationName", array()));
                    echo "
            ";
                } else {
                    // line 11
                    echo "                ";
                    echo $context["self"]->macro_textField($context["form"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 11, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 11, $this->source); })()), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 11, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 11, $this->source); })()), "applicationName", array()));
                    echo "
            ";
                }
                // line 13
                echo "            <input type=\"hidden\"
                   name=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 14, $this->source); })()), "applicationName", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 14, $this->source); })()), "html", null, true);
                echo "[attributes][";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 14, $this->source); })()), "html", null, true);
                echo "][attribute]\"
                   id=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 15, $this->source); })()), "applicationName", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 15, $this->source); })()), "html", null, true);
                echo "_attributes_";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 15, $this->source); })()), "html", null, true);
                echo "_attribute\"
                   value=\"";
                // line 16
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"/>
            <input type=\"hidden\"
                   name=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 18, $this->source); })()), "applicationName", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 18, $this->source); })()), "html", null, true);
                echo "[attributes][";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 18, $this->source); })()), "html", null, true);
                echo "][localeCode]\"
                   id=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 19, $this->source); })()), "applicationName", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "_attributes_";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "_localeCode\"
                   value=\"";
                // line 20
                echo twig_escape_filter($this->env, $context["localeCode"], "html", null, true);
                echo "\"/>
            ";
                // line 21
                $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 21, $this->source); })()) + 1);
                // line 22
                echo "        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['localeCode'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['localeCodes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
        // line 43
        echo "
";
        // line 54
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function macro_formField($__item__ = null, $__count__ = null, $__id__ = null, $__prefix__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "count" => $__count__,
            "id" => $__id__,
            "prefix" => $__prefix__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "formField"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "formField"));

            // line 27
            echo "    ";
            $context["__internal_b0e73b082cc79299a6591e644f854d350a84041f1672c092a97b41841ec13703"] = $this;
            // line 28
            echo "    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->source); })()), "children", array())) > 0)) {
                // line 29
                echo "        ";
                $context["prefix"] = (((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 29, $this->source); })()) . "_") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 29, $this->source); })()), "vars", array()), "name", array()));
                // line 30
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->source); })()), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 31
                    echo "            ";
                    echo $context["__internal_b0e73b082cc79299a6591e644f854d350a84041f1672c092a97b41841ec13703"]->macro_formField($context["child"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 31, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 31, $this->source); })()), (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 31, $this->source); })()), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 31, $this->source); })()), (isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new Twig_Error_Runtime('Variable "applicationName" does not exist.', 31, $this->source); })()));
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 33, $this->source); })()), "vars", array()), "name", array()) != "_token")) {
                // line 34
                echo "        ";
                $context["namePrefix"] = twig_replace_filter((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 34, $this->source); })()), array("_" => "]["));
                // line 35
                echo "        ";
                $context["dataName"] = (((((((((isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new Twig_Error_Runtime('Variable "applicationName" does not exist.', 35, $this->source); })()) . "_") . (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 35, $this->source); })())) . "[attributes][") . (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 35, $this->source); })())) . (isset($context["namePrefix"]) || array_key_exists("namePrefix", $context) ? $context["namePrefix"] : (function () { throw new Twig_Error_Runtime('Variable "namePrefix" does not exist.', 35, $this->source); })())) . "][") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 35, $this->source); })()), "vars", array()), "name", array())) . "]");
                // line 36
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "vars", array(), "any", false, true), "multiple", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 36, $this->source); })()), "vars", array()), "multiple", array()))) {
                    // line 37
                    echo "            ";
                    $context["dataName"] = ((isset($context["dataName"]) || array_key_exists("dataName", $context) ? $context["dataName"] : (function () { throw new Twig_Error_Runtime('Variable "dataName" does not exist.', 37, $this->source); })()) . "[]");
                    // line 38
                    echo "        ";
                }
                // line 39
                echo "
        ";
                // line 40
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 40, $this->source); })()), 'widget', array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 40, $this->source); })()), "attr" => array("data-name" => (isset($context["dataName"]) || array_key_exists("dataName", $context) ? $context["dataName"] : (function () { throw new Twig_Error_Runtime('Variable "dataName" does not exist.', 40, $this->source); })()))));
                echo "
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 44
    public function macro_textField($__form__ = null, $__count__ = null, $__id__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "count" => $__count__,
            "id" => $__id__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textField"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textField"));

            // line 45
            echo "    ";
            $context["__internal_d2c4db2952d1ac080b03db6ebb3b2dfa0c5bba3184cb027912d1ca40f2c38011"] = $this;
            // line 46
            echo "    <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        <div class=\"ui label\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "vars", array()), "label", array()), "html", null, true);
            echo "</div>
        ";
            // line 48
            echo $context["__internal_d2c4db2952d1ac080b03db6ebb3b2dfa0c5bba3184cb027912d1ca40f2c38011"]->macro_formField((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 48, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 48, $this->source); })()), "", (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 48, $this->source); })()), (isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new Twig_Error_Runtime('Variable "applicationName" does not exist.', 48, $this->source); })()));
            echo "
        <button class=\"ui red right labeled icon button\">
            <i class=\"remove icon\"></i> ";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
            echo "
        </button>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 55
    public function macro_checkboxField($__form__ = null, $__count__ = null, $__id__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "count" => $__count__,
            "id" => $__id__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkboxField"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkboxField"));

            // line 56
            echo "    ";
            $context["__internal_2e5008a21694bbd0982554fb6180b553f23957823d280f9b13dbbe2168db1948"] = $this;
            // line 57
            echo "    <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        ";
            // line 58
            echo $context["__internal_2e5008a21694bbd0982554fb6180b553f23957823d280f9b13dbbe2168db1948"]->macro_formField((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 58, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 58, $this->source); })()), "", (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 58, $this->source); })()), (isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new Twig_Error_Runtime('Variable "applicationName" does not exist.', 58, $this->source); })()));
            echo "
        <label>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "vars", array()), "label", array()), "html", null, true);
            echo "</label>
    </div>
    <button class=\"ui red right labeled icon button\" style=\"float: right;\">
        <i class=\"remove icon\"></i> ";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
            echo "
    </button>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Attribute/attributeValues.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 62,  314 => 59,  310 => 58,  307 => 57,  304 => 56,  282 => 55,  263 => 50,  258 => 48,  254 => 47,  251 => 46,  248 => 45,  226 => 44,  208 => 40,  205 => 39,  202 => 38,  199 => 37,  196 => 36,  193 => 35,  190 => 34,  187 => 33,  178 => 31,  173 => 30,  170 => 29,  167 => 28,  164 => 27,  141 => 26,  130 => 54,  127 => 43,  124 => 25,  113 => 22,  111 => 21,  107 => 20,  99 => 19,  91 => 18,  86 => 16,  78 => 15,  70 => 14,  67 => 13,  61 => 11,  55 => 9,  52 => 8,  50 => 7,  45 => 6,  40 => 5,  36 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as self %}

{% set subject = metadata.name|replace({'_attribute': ''}) %}
{% for code, localeCodes in forms %}
    {% for localeCode, form in localeCodes %}
        <div class=\"attribute\" data-id=\"{{ code }}\">
            {% set id = form.vars.label|replace({' ': '_'})|lower %}
            {% if 'type_checkbox' in form.vars.cache_key %}
                {{ self.checkboxField(form, count, id, subject, metadata.applicationName) }}
            {% else %}
                {{ self.textField(form, count, id, subject, metadata.applicationName) }}
            {% endif %}
            <input type=\"hidden\"
                   name=\"{{ metadata.applicationName }}_{{ subject }}[attributes][{{ count }}][attribute]\"
                   id=\"{{ metadata.applicationName }}_{{ subject }}_attributes_{{ count }}_attribute\"
                   value=\"{{ code }}\"/>
            <input type=\"hidden\"
                   name=\"{{ metadata.applicationName }}_{{ subject }}[attributes][{{ count }}][localeCode]\"
                   id=\"{{ metadata.applicationName }}_{{ subject }}_attributes_{{ count }}_localeCode\"
                   value=\"{{ localeCode }}\"/>
            {% set count = count + 1 %}
        </div>
    {% endfor %}
{% endfor %}

{% macro formField(item, count, id, prefix, subject, applicationName) %}
    {% from _self import formField %}
    {% if item.children|length > 0 %}
        {% set prefix = prefix~'_'~item.vars.name %}
        {% for child in item.children %}
            {{ formField(child, count, id, prefix, subject, applicationName) }}
        {% endfor %}
    {% elseif item.vars.name != '_token' %}
        {% set namePrefix = prefix|replace({'_': ']['}) %}
        {% set dataName = applicationName~'_'~subject~'[attributes]['~count~namePrefix~']['~item.vars.name~']' %}
        {% if item.vars.multiple is defined and item.vars.multiple %}
            {% set dataName = dataName~'[]' %}
        {% endif %}

        {{ form_widget(item, {'id': id, 'attr': {'data-name': dataName }}) }}
    {% endif %}
{% endmacro %}

{% macro textField(form, count, id, subject, applicationName) %}
    {% from _self import formField %}
    <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        <div class=\"ui label\">{{ form.vars.label }}</div>
        {{ formField(form, count, id, '', subject, applicationName) }}
        <button class=\"ui red right labeled icon button\">
            <i class=\"remove icon\"></i> {{ 'sylius.ui.delete'|trans }}
        </button>
    </div>
{% endmacro %}

{% macro checkboxField(form, count, id, subject, applicationName) %}
    {% from _self import formField %}
    <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        {{ formField(form, count, id, '', subject, applicationName) }}
        <label>{{ form.vars.label }}</label>
    </div>
    <button class=\"ui red right labeled icon button\" style=\"float: right;\">
        <i class=\"remove icon\"></i> {{ 'sylius.ui.delete'|trans }}
    </button>
{% endmacro %}
", "@SyliusAdmin/Product/Attribute/attributeValues.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Attribute/attributeValues.html.twig");
    }
}
