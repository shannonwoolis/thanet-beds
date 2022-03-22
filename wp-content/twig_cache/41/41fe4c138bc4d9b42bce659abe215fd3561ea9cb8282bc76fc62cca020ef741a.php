<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* front/ld/single.twig */
class __TwigTemplate_0a6a2065718da2d0def51a22f26f9a8ead2c0ac51da8da5d3d0b842eae00ca89 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<span class='ld-phonenumber'>
    ";
        // line 3
        echo "    ";
        if (($context["calltag"] ?? null)) {
            // line 4
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["number"] ?? null), "calltag", [], "any", false, false, false, 4), "html", null, true);
            echo "
    ";
        }
        // line 6
        echo "
    ";
        // line 8
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["number"] ?? null), "insights", [], "any", false, false, false, 8))) {
            // line 9
            echo "        <span class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["number"] ?? null), "insights", [], "any", false, false, false, 9), "html", null, true);
            echo "\">  
    ";
        } else {
            // line 10
            echo "      
        <a onClick=\"\" href=\"tel:";
            // line 11
            if ((($context["cookie"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["number"] ?? null), "location_name", [], "any", false, false, false, 11))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["number"] ?? null), "ppc", [], "any", false, false, false, 11), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["number"] ?? null), "seo", [], "any", false, false, false, 11), "html", null, true);
            }
            echo "\">
    ";
        }
        // line 12
        echo "    

    ";
        // line 15
        echo "    ";
        if ((($context["cookie"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["number"] ?? null), "location_name", [], "any", false, false, false, 15))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["number"] ?? null), "ppc", [], "any", false, false, false, 15), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["number"] ?? null), "seo", [], "any", false, false, false, 15), "html", null, true);
        }
        // line 16
        echo "
    ";
        // line 18
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["number"] ?? null), "insights", [], "any", false, false, false, 18))) {
            // line 19
            echo "        </span>  
    ";
        } else {
            // line 20
            echo "      
        </a>
    ";
        }
        // line 22
        echo "   

</span>";
    }

    public function getTemplateName()
    {
        return "front/ld/single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  94 => 20,  90 => 19,  87 => 18,  84 => 16,  77 => 15,  73 => 12,  64 => 11,  61 => 10,  55 => 9,  52 => 8,  49 => 6,  43 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span class='ld-phonenumber'>
    {# If the calltag is set, show the calltag #}
    {% if calltag %}
        {{ number.calltag }}
    {% endif %}

    {# Check to see if insights is set and show a span or show a link #}
    {% if number.insights is not empty %}
        <span class=\"{{ number.insights}}\">  
    {% else %}      
        <a onClick=\"\" href=\"tel:{% if cookie == number.location_name %}{{ number.ppc }}{% else %}{{ number.seo }}{% endif %}\">
    {% endif %}    

    {# Check if cookie is set and show ppc if it is else show the seo number #}
    {% if cookie == number.location_name %}{{ number.ppc }}{% else %}{{ number.seo }}{% endif %}

    {# Check to see if insights is set and show a span or show a link #}
    {% if number.insights is not empty %}
        </span>  
    {% else %}      
        </a>
    {% endif %}   

</span>", "front/ld/single.twig", "/Users/shannonwoolis/Sites/thanet-bedz/wp-content/plugins/advanced-location-dynamics/resources/views/front/ld/single.twig");
    }
}
