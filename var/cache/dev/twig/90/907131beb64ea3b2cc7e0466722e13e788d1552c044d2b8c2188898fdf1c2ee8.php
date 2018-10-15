<?php

/* BitBagSyliusCmsPlugin:Shop/Block:index.html.twig */
class __TwigTemplate_7aa72743df3c644d90f31ce82386d420a67970fcce910c9ecf9a2fe2ccd7e2f6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/Block:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/Block:index.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 2
            echo "    <div class=\"column\">
        <div class=\"ui segment\">
            ";
            // line 4
            echo $this->extensions['BitBag\SyliusCmsPlugin\Twig\Extension\RenderBlockExtension']->renderBlock(twig_get_attribute($this->env, $this->source, $context["block"], "code", array()));
            echo "
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Shop/Block:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for block in blocks %}
    <div class=\"column\">
        <div class=\"ui segment\">
            {{ bitbag_cms_render_block(block.code) }}
        </div>
    </div>
{% endfor %}
", "BitBagSyliusCmsPlugin:Shop/Block:index.html.twig", "/var/www/workspace/test-evonne/vendor/bitbag/cms-plugin/src/Resources/views/Shop/Block/index.html.twig");
    }
}
