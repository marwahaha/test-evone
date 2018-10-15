<?php

/* @SitemapPlugin/index.xml.twig */
class __TwigTemplate_bb302d1bd619a10d1d568a920af1a2fe68b7b3136547aefb38869c56481e6146 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitemapPlugin/index.xml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitemapPlugin/index.xml.twig"));

        // line 1
        $context["url_helper"] = $this->loadTemplate("SitemapPlugin::Macro/url.html.twig", "@SitemapPlugin/index.xml.twig", 1);
        // line 2
        $context["xml_helper"] = $this->loadTemplate("SitemapPlugin::Macro/xml.html.twig", "@SitemapPlugin/index.xml.twig", 2);
        // line 3
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["url_set"]) || array_key_exists("url_set", $context) ? $context["url_set"] : (function () { throw new Twig_Error_Runtime('Variable "url_set" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 6
            echo "        <sitemap>
            <loc>";
            // line 7
            echo $context["url_helper"]->macro_absolute_or_relative(twig_get_attribute($this->env, $this->source, $context["url"], "localization", array()), (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new Twig_Error_Runtime('Variable "absolute_url" does not exist.', 7, $this->source); })()));
            echo "</loc>
            ";
            // line 8
            echo $context["xml_helper"]->macro_last_modification($context["url"]);
            echo "
        </sitemap>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</sitemapindex>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SitemapPlugin/index.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  48 => 8,  44 => 7,  41 => 6,  37 => 5,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SitemapPlugin::Macro/url.html.twig' as url_helper %}
{% import 'SitemapPlugin::Macro/xml.html.twig' as xml_helper %}
<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    {% for url in url_set %}
        <sitemap>
            <loc>{{ url_helper.absolute_or_relative(url.localization, absolute_url) }}</loc>
            {{ xml_helper.last_modification(url) }}
        </sitemap>
    {% endfor %}
</sitemapindex>
", "@SitemapPlugin/index.xml.twig", "/var/www/workspace/test-evonne/vendor/stefandoorn/sitemap-plugin/src/Resources/views/index.xml.twig");
    }
}
