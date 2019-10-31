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

/* C:\xampp\htdocs\DormStreet/themes/demo/pages/unit-single.htm */
class __TwigTemplate_75762a49a010baa56380557fa9240c380a4752291dbaa6c86e5cdbd7d5795875 extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "    <div class=\"container\" style=\"height: auto; justify-content: center; align-items: center; box-shadow:  0px 3px 2px 1px rgba(0, 0, 0, .3);\">
\t<!-- image -->
\t

\t";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "image", [], "any", false, false, false, 10), "html", null, true);
            echo "
    <h1 style=\"\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
            echo "</h2>

    <ul style=\"display: flex; justify-content: center; flex-wrap: wrap; margin:40px;>
    \t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "gallery", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 15
                echo "
    \t\t<li style=\" list-style-type: none;\">
    \t\t\t<a href=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 17), "html", null, true);
                echo "\">
    \t\t\t<img style=\"margin:1px;\" src=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 300, 1 => 300, 2 => ["mode" => "crop"]], "method", false, false, false, 18), "html", null, true);
                echo "\">
    \t\t\t</a>
    \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    \t\t\t<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", [], "any", false, false, false, 21), "path", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
    \t\t\t<img style=\"margin:-2px;\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", [], "any", false, false, false, 22), "thumb", [0 => 300, 1 => 300, 2 => ["mode" => "crop"]], "method", false, false, false, 22), "html", null, true);
            echo "\" >
    \t\t\t</a>
    \t\t</li>
    \t
    </ul>
<div class=\"container\" style=\"align-items:center; \">
    <p><b>Location</b>:  ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "location", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
    <p><b>Price</b>:  ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, false, 29), "html", null, true);
            echo " /month</p>
    <p><b>Roomsize(sqm)</b>: ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "roomsize", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
    <p><b>Rooms</b>:  ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "rooms", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
    <p><b>Total Occupancy</b>:  ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "occupancy", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
    <p><b>Description</b>:  ";
            // line 33
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 33);
            echo "</p>
</div>
";
        } else {
            // line 36
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
        // line 38
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\DormStreet/themes/demo/pages/unit-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 38,  125 => 36,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  90 => 22,  85 => 21,  76 => 18,  72 => 17,  68 => 15,  64 => 14,  58 => 11,  54 => 10,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
    <div class=\"container\" style=\"height: auto; justify-content: center; align-items: center; box-shadow:  0px 3px 2px 1px rgba(0, 0, 0, .3);\">
\t<!-- image -->
\t

\t{{record.image}}
    <h1 style=\"\">{{ record.title }}</h2>

    <ul style=\"display: flex; justify-content: center; flex-wrap: wrap; margin:40px;>
    \t{%for image in record.gallery %}

    \t\t<li style=\" list-style-type: none;\">
    \t\t\t<a href=\"{{ image.path }}\">
    \t\t\t<img style=\"margin:1px;\" src=\"{{ image.thumb(300,300,{'mode':'crop'}) }}\">
    \t\t\t</a>
    \t\t\t{% endfor %}
    \t\t\t<a href=\"{{ record.poster.path }}\">
    \t\t\t<img style=\"margin:-2px;\" src=\"{{ record.poster.thumb(300,300,{'mode':'crop'})}}\" >
    \t\t\t</a>
    \t\t</li>
    \t
    </ul>
<div class=\"container\" style=\"align-items:center; \">
    <p><b>Location</b>:  {{ record.location }}</p>
    <p><b>Price</b>:  {{ record.price }} /month</p>
    <p><b>Roomsize(sqm)</b>: {{ record.roomsize }}</p>
    <p><b>Rooms</b>:  {{ record.rooms }}</p>
    <p><b>Total Occupancy</b>:  {{ record.occupancy }}</p>
    <p><b>Description</b>:  {{record.description|raw }}</p>
</div>
{% else %}
    {{ notFoundMessage }}
{% endif %}
</div>", "C:\\xampp\\htdocs\\DormStreet/themes/demo/pages/unit-single.htm", "");
    }
}
