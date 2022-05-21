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

/* admin/index.twig */
class __TwigTemplate_1b48cc5b646daa98b0d595af839ef393f5d959731f7e4be0b8dfb16d7c775165 extends \Twig\Template
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
        $this->loadTemplate("admin/partials/header.twig", "admin/index.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"adv-ld-container\">

    <div class=\"adv-ld-panel\">

        <div class=\"adv-ld-panel__top\">
            Advanced Location Dynamics
        </div>
    
        <div class=\"adv-ld-panel__pop-box\"></div>

        <div class=\"adv-ld-panel__content\">
            <p><strong>Advanced Feature Status: <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"A check to see if this site is eligible for advanced features.\"><i class=\"fas fa-question-circle\"></i></a></strong></p>
            ";
        // line 15
        if (($context["advancedEligible"] ?? null)) {
            // line 16
            echo "                <h2>Eligible</h2>
            ";
        } else {
            // line 18
            echo "                <h2>Not Eligible</h2>
            ";
        }
        // line 20
        echo "
            <i>Unsure if this site should be eligible? Check with the account owner or paid marketer.</i>

            <p><strong>License Status: <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"A check to see if the site is authorised to use the plugin.\"><i class=\"fas fa-question-circle\"></i></a></strong></p>
            ";
        // line 24
        if (($context["licenseValidity"] ?? null)) {
            // line 25
            echo "                <h2>Valid</h2>
            ";
        } else {
            // line 27
            echo "                <h2>Invalid</h2>
            ";
        }
        // line 29
        echo "
            <i>This should be set to valid, if it isn't check your license key then check with the Development team asap.</i>
        </div>

    </div>

</div>

";
        // line 37
        $this->loadTemplate("admin/partials/footer.twig", "admin/index.twig", 37)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  80 => 29,  76 => 27,  72 => 25,  70 => 24,  64 => 20,  60 => 18,  56 => 16,  54 => 15,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'admin/partials/header.twig' %}

<div class=\"adv-ld-container\">

    <div class=\"adv-ld-panel\">

        <div class=\"adv-ld-panel__top\">
            Advanced Location Dynamics
        </div>
    
        <div class=\"adv-ld-panel__pop-box\"></div>

        <div class=\"adv-ld-panel__content\">
            <p><strong>Advanced Feature Status: <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"A check to see if this site is eligible for advanced features.\"><i class=\"fas fa-question-circle\"></i></a></strong></p>
            {% if advancedEligible %}
                <h2>Eligible</h2>
            {% else %}
                <h2>Not Eligible</h2>
            {% endif %}

            <i>Unsure if this site should be eligible? Check with the account owner or paid marketer.</i>

            <p><strong>License Status: <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"A check to see if the site is authorised to use the plugin.\"><i class=\"fas fa-question-circle\"></i></a></strong></p>
            {% if licenseValidity %}
                <h2>Valid</h2>
            {% else %}
                <h2>Invalid</h2>
            {% endif %}

            <i>This should be set to valid, if it isn't check your license key then check with the Development team asap.</i>
        </div>

    </div>

</div>

{% include 'admin/partials/footer.twig' %}", "admin/index.twig", "/Users/shannonwoolis/Sites/thanet-bedz/wp-content/plugins/advanced-location-dynamics/resources/views/admin/index.twig");
    }
}
