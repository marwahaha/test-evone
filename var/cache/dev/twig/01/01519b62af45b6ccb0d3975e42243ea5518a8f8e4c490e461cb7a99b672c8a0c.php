<?php

/* SitemapPlugin::show.xml.twig */
class __TwigTemplate_99491ae788e46fc4b1db5bb23fada90839527370e201bfed5faa02706643d644 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitemapPlugin::show.xml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitemapPlugin::show.xml.twig"));

        // line 1
        $context["url_helper"] = $this->loadTemplate("SitemapPlugin::Macro/url.html.twig", "SitemapPlugin::show.xml.twig", 1);
        // line 2
        $context["language_helper"] = $this->loadTemplate("SitemapPlugin::Macro/language.html.twig", "SitemapPlugin::show.xml.twig", 2);
        // line 3
        $context["xml_helper"] = $this->loadTemplate("SitemapPlugin::Macro/xml.html.twig", "SitemapPlugin::show.xml.twig", 3);
        // line 4
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["url_set"]) || array_key_exists("url_set", $context) ? $context["url_set"] : (function () { throw new Twig_Error_Runtime('Variable "url_set" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 7
            echo "        <url>
            <loc>";
            // line 8
            echo $context["url_helper"]->macro_absolute_or_relative(twig_get_attribute($this->env, $this->source, $context["url"], "localization", array()), (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new Twig_Error_Runtime('Variable "absolute_url" does not exist.', 8, $this->source); })()));
            echo "</loc>
            ";
            // line 9
            if (( !((isset($context["hreflang"]) || array_key_exists("hreflang", $context) ? $context["hreflang"] : (function () { throw new Twig_Error_Runtime('Variable "hreflang" does not exist.', 9, $this->source); })()) === false) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["url"], "alternatives", array())))) {
                // line 10
                echo "                <xhtml:link rel=\"alternate\" hreflang=\"";
                echo $context["language_helper"]->macro_localeToCode(twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 10, $this->source); })()), "localeCode", array()));
                echo "\" href=\"";
                echo $context["url_helper"]->macro_absolute_or_relative(twig_get_attribute($this->env, $this->source, $context["url"], "localization", array()), (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new Twig_Error_Runtime('Variable "absolute_url" does not exist.', 10, $this->source); })()));
                echo "\"/>
                ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["url"], "alternatives", array()));
                foreach ($context['_seq'] as $context["locale"] => $context["location"]) {
                    // line 12
                    echo "                    <xhtml:link rel=\"alternate\" hreflang=\"";
                    echo $context["language_helper"]->macro_localeToCode($context["locale"]);
                    echo "\" href=\"";
                    echo $context["url_helper"]->macro_absolute_or_relative($context["location"], (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new Twig_Error_Runtime('Variable "absolute_url" does not exist.', 12, $this->source); })()));
                    echo "\"/>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['locale'], $context['location'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "            ";
            }
            // line 15
            echo "            ";
            echo $context["xml_helper"]->macro_last_modification($context["url"]);
            echo "
            ";
            // line 16
            echo $context["xml_helper"]->macro_change_frequency($context["url"]);
            echo "
            ";
            // line 17
            echo $context["xml_helper"]->macro_priority($context["url"]);
            echo "
        </url>
        ";
            // line 19
            if (( !((isset($context["hreflang"]) || array_key_exists("hreflang", $context) ? $context["hreflang"] : (function () { throw new Twig_Error_Runtime('Variable "hreflang" does not exist.', 19, $this->source); })()) === false) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["url"], "alternatives", array())))) {
                // line 20
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["url"], "alternatives", array()));
                foreach ($context['_seq'] as $context["locale"] => $context["location"]) {
                    // line 21
                    echo "                <url>
                    <loc>";
                    // line 22
                    echo $context["url_helper"]->macro_absolute_or_relative($context["location"], (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new Twig_Error_Runtime('Variable "absolute_url" does not exist.', 22, $this->source); })()));
                    echo "</loc>
                    <xhtml:link rel=\"alternate\" hreflang=\"";
                    // line 23
                    echo $context["language_helper"]->macro_localeToCode(twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 23, $this->source); })()), "localeCode", array()));
                    echo "\" href=\"";
                    echo $context["url_helper"]->macro_absolute_or_relative(twig_get_attribute($this->env, $this->source, $context["url"], "localization", array()), (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new Twig_Error_Runtime('Variable "absolute_url" does not exist.', 23, $this->source); })()));
                    echo "\"/>
                    ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["url"], "alternatives", array()));
                    foreach ($context['_seq'] as $context["localeSub"] => $context["locationSub"]) {
                        // line 25
                        echo "                        <xhtml:link rel=\"alternate\" hreflang=\"";
                        echo $context["language_helper"]->macro_localeToCode($context["localeSub"]);
                        echo "\" href=\"";
                        echo $context["url_helper"]->macro_absolute_or_relative($context["locationSub"], (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new Twig_Error_Runtime('Variable "absolute_url" does not exist.', 25, $this->source); })()));
                        echo "\"/>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['localeSub'], $context['locationSub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "                    ";
                    echo $context["xml_helper"]->macro_last_modification($context["url"]);
                    echo "
                    ";
                    // line 28
                    echo $context["xml_helper"]->macro_change_frequency($context["url"]);
                    echo "
                    ";
                    // line 29
                    echo $context["xml_helper"]->macro_priority($context["url"]);
                    echo "
                </url>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['locale'], $context['location'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "        ";
            }
            // line 33
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</urlset>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SitemapPlugin::show.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 34,  147 => 33,  144 => 32,  135 => 29,  131 => 28,  126 => 27,  115 => 25,  111 => 24,  105 => 23,  101 => 22,  98 => 21,  93 => 20,  91 => 19,  86 => 17,  82 => 16,  77 => 15,  74 => 14,  63 => 12,  59 => 11,  52 => 10,  50 => 9,  46 => 8,  43 => 7,  39 => 6,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SitemapPlugin::Macro/url.html.twig' as url_helper %}
{% import 'SitemapPlugin::Macro/language.html.twig' as language_helper %}
{% import 'SitemapPlugin::Macro/xml.html.twig' as xml_helper %}
<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">
    {% for url in url_set %}
        <url>
            <loc>{{ url_helper.absolute_or_relative(url.localization, absolute_url) }}</loc>
            {% if hreflang is not same as(false) and url.alternatives is not empty %}
                <xhtml:link rel=\"alternate\" hreflang=\"{{ language_helper.localeToCode(sylius.localeCode) }}\" href=\"{{ url_helper.absolute_or_relative(url.localization, absolute_url) }}\"/>
                {% for locale, location in url.alternatives %}
                    <xhtml:link rel=\"alternate\" hreflang=\"{{ language_helper.localeToCode(locale) }}\" href=\"{{ url_helper.absolute_or_relative(location, absolute_url) }}\"/>
                {% endfor %}
            {% endif %}
            {{ xml_helper.last_modification(url) }}
            {{ xml_helper.change_frequency(url) }}
            {{ xml_helper.priority(url) }}
        </url>
        {% if hreflang is not same as(false) and url.alternatives is not empty %}
            {% for locale, location in url.alternatives %}
                <url>
                    <loc>{{ url_helper.absolute_or_relative(location, absolute_url) }}</loc>
                    <xhtml:link rel=\"alternate\" hreflang=\"{{ language_helper.localeToCode(sylius.localeCode) }}\" href=\"{{ url_helper.absolute_or_relative(url.localization, absolute_url) }}\"/>
                    {% for localeSub, locationSub in url.alternatives %}
                        <xhtml:link rel=\"alternate\" hreflang=\"{{ language_helper.localeToCode(localeSub) }}\" href=\"{{ url_helper.absolute_or_relative(locationSub, absolute_url) }}\"/>
                    {% endfor %}
                    {{ xml_helper.last_modification(url) }}
                    {{ xml_helper.change_frequency(url) }}
                    {{ xml_helper.priority(url) }}
                </url>
            {% endfor %}
        {% endif %}
    {% endfor %}
</urlset>
", "SitemapPlugin::show.xml.twig", "/var/www/workspace/test-evonne/vendor/stefandoorn/sitemap-plugin/src/Resources/views/show.xml.twig");
    }
}
