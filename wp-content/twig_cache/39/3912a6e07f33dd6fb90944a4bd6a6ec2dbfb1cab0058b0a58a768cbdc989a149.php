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

/* admin/partials/header.twig */
class __TwigTemplate_35740f810d0d447bd02c84125e61f41a4afb0cc0cf15f31e52311b6d95455be8 extends \Twig\Template
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
        echo "<div class=\"wrap\" id=\"adtrak-advanced-ld\">


\t";
        // line 4
        if ( !twig_test_empty(($context["notice"] ?? null))) {
            echo "<div class=\"af-notice ";
            if ((twig_get_attribute($this->env, $this->source, ($context["notice"] ?? null), "type", [], "any", false, false, false, 4) == "error")) {
                echo "notice-error";
            } else {
                echo "notice-success";
            }
            echo " notice is-dismissable\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["notice"] ?? null), "message", [], "any", false, false, false, 4), "html", null, true);
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "admin/partials/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrap\" id=\"adtrak-advanced-ld\">


\t{% if notice is not empty %}<div class=\"af-notice {% if(notice.type == 'error') %}notice-error{% else %}notice-success{% endif %} notice is-dismissable\">{{ notice.message }}</div>{% endif %}", "admin/partials/header.twig", "/Users/shannonwoolis/Sites/thanet-bedz/wp-content/plugins/advanced-location-dynamics/resources/views/admin/partials/header.twig");
    }
}
