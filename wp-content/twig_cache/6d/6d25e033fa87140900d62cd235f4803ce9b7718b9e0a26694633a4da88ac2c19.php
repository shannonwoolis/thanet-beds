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

/* admin/ld/index.twig */
class __TwigTemplate_82b7201bdcce23620f6039e154917c9266c8ed8225fcaea7ce93f518cc0e9d46 extends \Twig\Template
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
        $this->loadTemplate("admin/partials/header.twig", "admin/ld/index.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"adv-ld-container\">

    <div class=\"adv-ld-panel adv-ld-panel--full\">

        <div class=\"adv-ld-panel__top adv-ld-panel__top--eight\">
            <span class=\"adv-ld-panel__top-item\">Location <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the location as a slug. e.g. new-york\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\">Location Label <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the location as plain text. e.g. New York\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\">Calltag <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the calltag prefix. e.g. Call us on:\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\">SEO Number <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the SEO number for this location. e.g. 0115 000 0000\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\">PPC Number <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the PPC number for this location. e.g. 0115 000 1111\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\">Insights Class <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the Insights class to enable number switching with CTM/ResponseTap\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\">Tracking Label <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the tag which will appear in analytics when this number is clicked. e.g. Call Nottingham\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\"></span>
        </div>
        
        <div class=\"adv-ld-panel__pop-box\"></div>

        <div id=\"adv-number-list\" class=\"adv-ld-panel__content adv-ld-panel__content--no-padding\">
            <div class=\"adv-ld-panel__row adv-ld-panel__row--example adv-ld-panel__row--eight\">
                <form method=\"POST\" action=\"#\" class=\"adv-ld__number-form\">
                    <div class=\"adv-ld-panel__row-item\"><input name=\"location-name\" class=\"adv-ld-panel__input\"></div>
                    <div class=\"adv-ld-panel__row-item\"><input name=\"location-label\" class=\"adv-ld-panel__input\"></div>
                    <div class=\"adv-ld-panel__row-item\"><input name=\"calltag\" class=\"adv-ld-panel__input\" required></div>
                    <div class=\"adv-ld-panel__row-item\"><input name=\"seo\" class=\"adv-ld-panel__input\" required></div>
                    <div class=\"adv-ld-panel__row-item\"><input name=\"ppc\" class=\"adv-ld-panel__input\"></div>
                    <div class=\"adv-ld-panel__row-item\"><input name=\"insights\" class=\"adv-ld-panel__input\"></div>
                    <div class=\"adv-ld-panel__row-item\"><input name=\"tracking-label\" class=\"adv-ld-panel__input\"></div>
                    <div class=\"adv-ld-panel__row-item\">
                        <button class=\"button button-primary\" type=\"submit\">Save</button>
                            <a class=\"adv-ld-panel__delete-row button button-danger\" href=\"#\">Delete</a>
                    </div>
                </form>
            </div>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["numbers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
            // line 37
            echo "                <div data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["number"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" class=\"adv-ld-panel__row adv-ld-panel__row--eight\">
                    <div class=\"adv-ld-panel__row-item\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["number"], "location_name", [], "any", false, false, false, 38), "html", null, true);
            echo "</div>
                    <div class=\"adv-ld-panel__row-item\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["number"], "location_label", [], "any", false, false, false, 39), "html", null, true);
            echo "</div>
                    <div class=\"adv-ld-panel__row-item\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["number"], "calltag", [], "any", false, false, false, 40), "html", null, true);
            echo "</div>
                    <div class=\"adv-ld-panel__row-item\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["number"], "seo", [], "any", false, false, false, 41), "html", null, true);
            echo "</div>
                    <div class=\"adv-ld-panel__row-item\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["number"], "ppc", [], "any", false, false, false, 42), "html", null, true);
            echo "</div>
                    <div class=\"adv-ld-panel__row-item\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["number"], "insights", [], "any", false, false, false, 43), "html", null, true);
            echo "</div>
                    <div class=\"adv-ld-panel__row-item\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["number"], "tracking_label", [], "any", false, false, false, 44), "html", null, true);
            echo "</div>
                    <div class=\"adv-ld-panel__row-item\">
                        <a class=\"adv-ld-panel__edit-row button\" href=\"#\">Edit</a>
                        ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, $context["number"], "location_name", [], "any", false, false, false, 47) != "uk")) {
                // line 48
                echo "                            <a class=\"adv-ld-panel__delete-row button button-danger\" href=\"#\">Delete</a>
                        ";
            }
            // line 50
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </div>

        <div class=\"adv-ld-panel__bottom\">
            <!-- <button class=\"button button-primary\">Save</button> -->
            ";
        // line 57
        echo ($context["pagination"] ?? null);
        echo "
            <a class=\"adv-ld__new-row button\">+ Add New</a>
        </div>

    </div>
    
    <form class=\"adv-ld-panel\" method=\"POST\" action=\"\">

        <div class=\"adv-ld-panel__top\">
            Tracking Options
        </div>

        <div class=\"adv-ld-panel__content\">
            <h4>Insights Type <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Unsure? Check with the accout owner.\"><i class=\"fas fa-question-circle\"></i></a></h4>
            <label for=\"insight-type\"><input type=\"radio\" name=\"insight-type\" value=\"0\" ";
        // line 71
        if ((($context["tracking_type"] ?? null) == 0)) {
            echo "checked";
        }
        echo "> None</label>
            <label for=\"insight-type\"><input type=\"radio\" name=\"insight-type\" value=\"1\" ";
        // line 72
        if ((($context["tracking_type"] ?? null) == 1)) {
            echo "checked";
        }
        echo "> CallTrackingMetrics</label>
            <label for=\"insight-type\"><input type=\"radio\" name=\"insight-type\" value=\"2\" ";
        // line 73
        if ((($context["tracking_type"] ?? null) == 2)) {
            echo "checked";
        }
        echo "> ResponseTap</label>
            <h4>Tracking ID <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Unsure? Check with the accout owner.\"><i class=\"fas fa-question-circle\"></i></a></h4>
            <input type=\"text\" name=\"tracking-id\" placeholder=\"39829\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, ($context["tracking_id"] ?? null), "html", null, true);
        echo "\">
        </div>

        <div class=\"adv-ld-panel__bottom\">
            <button class=\"button button-primary\">Save</button>
        </div>

    </form>

</div>

";
        // line 86
        $this->loadTemplate("admin/partials/footer.twig", "admin/ld/index.twig", 86)->display($context);
        // line 87
        echo "
<div data-id=\"\" class=\"adv-confirm-popup\">
    <div class=\"adv-confirm-popup__panel\">
        <h3>Are you sure?!</h3>
        <p>The action you are about to take is irreversible! Are you sure you want to proceed</p>
        <a href=\"#\" class=\"adv-confirm-popup__confirm button\">Yes!</a>
        <a href=\"#\" class=\"adv-confirm-popup__reject button button-primary\">Oops, No!</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/ld/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 87,  184 => 86,  170 => 75,  163 => 73,  157 => 72,  151 => 71,  134 => 57,  128 => 53,  120 => 50,  116 => 48,  114 => 47,  108 => 44,  104 => 43,  100 => 42,  96 => 41,  92 => 40,  88 => 39,  84 => 38,  79 => 37,  75 => 36,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'admin/partials/header.twig' %}

<div class=\"adv-ld-container\">

    <div class=\"adv-ld-panel adv-ld-panel--full\">

        <div class=\"adv-ld-panel__top adv-ld-panel__top--eight\">
            <span class=\"adv-ld-panel__top-item\">Location <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the location as a slug. e.g. new-york\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\">Location Label <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the location as plain text. e.g. New York\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\">Calltag <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the calltag prefix. e.g. Call us on:\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\">SEO Number <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the SEO number for this location. e.g. 0115 000 0000\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\">PPC Number <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the PPC number for this location. e.g. 0115 000 1111\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\">Insights Class <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the Insights class to enable number switching with CTM/ResponseTap\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\">Tracking Label <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Enter the tag which will appear in analytics when this number is clicked. e.g. Call Nottingham\"><i class=\"fas fa-question-circle\"></i></a></span>
            <span class=\"adv-ld-panel__top-item\"></span>
        </div>
        
        <div class=\"adv-ld-panel__pop-box\"></div>

        <div id=\"adv-number-list\" class=\"adv-ld-panel__content adv-ld-panel__content--no-padding\">
            <div class=\"adv-ld-panel__row adv-ld-panel__row--example adv-ld-panel__row--eight\">
                <form method=\"POST\" action=\"#\" class=\"adv-ld__number-form\">
                    <div class=\"adv-ld-panel__row-item\"><input name=\"location-name\" class=\"adv-ld-panel__input\"></div>
                    <div class=\"adv-ld-panel__row-item\"><input name=\"location-label\" class=\"adv-ld-panel__input\"></div>
                    <div class=\"adv-ld-panel__row-item\"><input name=\"calltag\" class=\"adv-ld-panel__input\" required></div>
                    <div class=\"adv-ld-panel__row-item\"><input name=\"seo\" class=\"adv-ld-panel__input\" required></div>
                    <div class=\"adv-ld-panel__row-item\"><input name=\"ppc\" class=\"adv-ld-panel__input\"></div>
                    <div class=\"adv-ld-panel__row-item\"><input name=\"insights\" class=\"adv-ld-panel__input\"></div>
                    <div class=\"adv-ld-panel__row-item\"><input name=\"tracking-label\" class=\"adv-ld-panel__input\"></div>
                    <div class=\"adv-ld-panel__row-item\">
                        <button class=\"button button-primary\" type=\"submit\">Save</button>
                            <a class=\"adv-ld-panel__delete-row button button-danger\" href=\"#\">Delete</a>
                    </div>
                </form>
            </div>
            {% for number in numbers %}
                <div data-id=\"{{ number.id }}\" class=\"adv-ld-panel__row adv-ld-panel__row--eight\">
                    <div class=\"adv-ld-panel__row-item\">{{ number.location_name }}</div>
                    <div class=\"adv-ld-panel__row-item\">{{ number.location_label }}</div>
                    <div class=\"adv-ld-panel__row-item\">{{ number.calltag }}</div>
                    <div class=\"adv-ld-panel__row-item\">{{ number.seo }}</div>
                    <div class=\"adv-ld-panel__row-item\">{{ number.ppc }}</div>
                    <div class=\"adv-ld-panel__row-item\">{{ number.insights }}</div>
                    <div class=\"adv-ld-panel__row-item\">{{ number.tracking_label }}</div>
                    <div class=\"adv-ld-panel__row-item\">
                        <a class=\"adv-ld-panel__edit-row button\" href=\"#\">Edit</a>
                        {% if number.location_name != 'uk' %}
                            <a class=\"adv-ld-panel__delete-row button button-danger\" href=\"#\">Delete</a>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>

        <div class=\"adv-ld-panel__bottom\">
            <!-- <button class=\"button button-primary\">Save</button> -->
            {{ pagination|raw }}
            <a class=\"adv-ld__new-row button\">+ Add New</a>
        </div>

    </div>
    
    <form class=\"adv-ld-panel\" method=\"POST\" action=\"\">

        <div class=\"adv-ld-panel__top\">
            Tracking Options
        </div>

        <div class=\"adv-ld-panel__content\">
            <h4>Insights Type <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Unsure? Check with the accout owner.\"><i class=\"fas fa-question-circle\"></i></a></h4>
            <label for=\"insight-type\"><input type=\"radio\" name=\"insight-type\" value=\"0\" {% if(tracking_type == 0) %}checked{% endif %}> None</label>
            <label for=\"insight-type\"><input type=\"radio\" name=\"insight-type\" value=\"1\" {% if(tracking_type == 1) %}checked{% endif %}> CallTrackingMetrics</label>
            <label for=\"insight-type\"><input type=\"radio\" name=\"insight-type\" value=\"2\" {% if(tracking_type == 2) %}checked{% endif %}> ResponseTap</label>
            <h4>Tracking ID <a href=\"#\" class=\"adv-ld-panel__info-pop\" data-info=\"Unsure? Check with the accout owner.\"><i class=\"fas fa-question-circle\"></i></a></h4>
            <input type=\"text\" name=\"tracking-id\" placeholder=\"39829\" value=\"{{ tracking_id }}\">
        </div>

        <div class=\"adv-ld-panel__bottom\">
            <button class=\"button button-primary\">Save</button>
        </div>

    </form>

</div>

{% include 'admin/partials/footer.twig' %}

<div data-id=\"\" class=\"adv-confirm-popup\">
    <div class=\"adv-confirm-popup__panel\">
        <h3>Are you sure?!</h3>
        <p>The action you are about to take is irreversible! Are you sure you want to proceed</p>
        <a href=\"#\" class=\"adv-confirm-popup__confirm button\">Yes!</a>
        <a href=\"#\" class=\"adv-confirm-popup__reject button button-primary\">Oops, No!</a>
    </div>
</div>", "admin/ld/index.twig", "/Users/shannonwoolis/Sites/thanet-bedz/wp-content/plugins/advanced-location-dynamics/resources/views/admin/ld/index.twig");
    }
}
