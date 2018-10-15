<?php

/* BitBagSyliusCmsPlugin:Macro:translationForm.html.twig */
class __TwigTemplate_8015d62c45790cdf833913befd4c4e6abf162dc02cec8ea46ac7fbe61a8730af extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig"));

        // line 27
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_translationForm($__translations__ = null, $__resource__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "translations" => $__translations__,
            "resource" => $__resource__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationForm"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationForm"));

            // line 2
            echo "    ";
            $context["image"] = $this->loadTemplate("@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig", "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig", 2);
            // line 3
            echo "    ";
            $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig", 3);
            // line 4
            echo "
    <div class=\"ui styled fluid accordion\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new Twig_Error_Runtime('Variable "translations" does not exist.', 6, $this->source); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
                // line 7
                echo "            <div data-locale=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
                <div class=\"title";
                // line 8
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
                // line 10
                echo $context["flags"]->macro_fromLocaleCode($context["locale"]);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["locale"])), "html", null, true);
                echo "
                </div>
                <div class=\"ui content";
                // line 12
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationForm"]);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 14
                    echo "
                        ";
                    // line 15
                    if (("image" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "name", array()))) {
                        // line 16
                        echo "                            ";
                        echo $context["image"]->macro_imageWidget($context["field"]);
                        echo "
                        ";
                    } else {
                        // line 18
                        echo "                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                        echo "
                        ";
                    }
                    // line 20
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                </div>
            </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 28
    public function macro_translationFormWithSlug($__translations__ = null, $__slugFieldTemplate__ = null, $__resource__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "translations" => $__translations__,
            "slugFieldTemplate" => $__slugFieldTemplate__,
            "resource" => $__resource__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationFormWithSlug"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationFormWithSlug"));

            // line 29
            echo "    ";
            $context["image"] = $this->loadTemplate("@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig", "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig", 29);
            // line 30
            echo "    ";
            $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig", 30);
            // line 31
            echo "
    <div class=\"ui styled fluid accordion\">
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new Twig_Error_Runtime('Variable "translations" does not exist.', 33, $this->source); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
                // line 34
                echo "            <div data-locale=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
                <div class=\"title";
                // line 35
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
                // line 37
                echo $context["flags"]->macro_fromLocaleCode($context["locale"]);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["locale"])), "html", null, true);
                echo "
                </div>
                <div class=\"ui content";
                // line 39
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationForm"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 41
                    echo "
                        ";
                    // line 42
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "name", array()) == "slug")) {
                        // line 43
                        echo "                            ";
                        $this->loadTemplate((isset($context["slugFieldTemplate"]) || array_key_exists("slugFieldTemplate", $context) ? $context["slugFieldTemplate"] : (function () { throw new Twig_Error_Runtime('Variable "slugFieldTemplate" does not exist.', 43, $this->source); })()), "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig", 43)->display(array_merge($context, array("slugField" => twig_get_attribute($this->env, $this->source, $context["translationForm"], "slug", array()), "resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 43, $this->source); })()))));
                        // line 44
                        echo "                        ";
                    } elseif (("image" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "name", array()))) {
                        // line 45
                        echo "                            ";
                        echo $context["image"]->macro_imageWidget($context["field"]);
                        echo "
                        ";
                    } else {
                        // line 47
                        echo "                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                        echo "
                        ";
                    }
                    // line 49
                    echo "
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                </div>
            </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    </div>
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
        return "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 54,  298 => 51,  283 => 49,  277 => 47,  271 => 45,  268 => 44,  265 => 43,  263 => 42,  260 => 41,  243 => 40,  237 => 39,  230 => 37,  223 => 35,  218 => 34,  201 => 33,  197 => 31,  194 => 30,  191 => 29,  171 => 28,  155 => 25,  139 => 22,  132 => 20,  126 => 18,  120 => 16,  118 => 15,  115 => 14,  111 => 13,  105 => 12,  98 => 10,  91 => 8,  86 => 7,  69 => 6,  65 => 4,  62 => 3,  59 => 2,  40 => 1,  29 => 27,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro translationForm(translations, resource) %}
    {% import '@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig' as image %}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"ui styled fluid accordion\">
        {% for locale, translationForm in translations %}
            <div data-locale=\"{{ locale }}\">
                <div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
                    <i class=\"dropdown icon\"></i>
                    {{ flags.fromLocaleCode(locale) }} {{ locale|sylius_locale_name }}
                </div>
                <div class=\"ui content{% if 0 == loop.index0 %} active{% endif %}\">
                    {% for field in translationForm %}

                        {% if 'image' == field.vars.name %}
                            {{ image.imageWidget(field) }}
                        {% else %}
                            {{ form_row(field) }}
                        {% endif %}

                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}

{% macro translationFormWithSlug(translations, slugFieldTemplate, resource) %}
    {% import '@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig' as image %}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"ui styled fluid accordion\">
        {% for locale, translationForm in translations %}
            <div data-locale=\"{{ locale }}\">
                <div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
                    <i class=\"dropdown icon\"></i>
                    {{ flags.fromLocaleCode(locale) }} {{ locale|sylius_locale_name }}
                </div>
                <div class=\"ui content{% if 0 == loop.index0 %} active{% endif %}\">
                    {% for field in translationForm %}

                        {% if field.vars.name == 'slug' %}
                            {% include slugFieldTemplate with { 'slugField': translationForm.slug, 'resource': resource } %}
                        {% elseif 'image' == field.vars.name %}
                            {{ image.imageWidget(field) }}
                        {% else %}
                            {{ form_row(field) }}
                        {% endif %}

                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}", "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig", "/var/www/workspace/test-evonne/vendor/bitbag/cms-plugin/src/Resources/views/Macro/translationForm.html.twig");
    }
}
