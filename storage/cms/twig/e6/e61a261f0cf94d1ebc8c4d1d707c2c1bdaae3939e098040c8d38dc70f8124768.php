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

/* C:\xampp\htdocs\DormStreet/themes/demo/pages/units.htm */
class __TwigTemplate_90076e0f01971226c3f0549b40a24b7b9f44efc2f03efbfcb0bb26a585ea7004 extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "
<div class=\"container\" style=\"height: auto; width: 1300px; display: flex; justify-content: center; align-items: center;\">


<ul style=\"display: flex; justify-content: center; align-items: center; flex-wrap: wrap; \" class=\"record-list\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 13
            echo "
    <li style=\"margin:30px; list-style-type: none;\">
    \t<a style=\"text-decoration: none\" href=\"";
            // line 15
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 15)]);
            echo "\">

        <div class=\"\" style=\" height:700px; width: 400px; box-shadow:  0px 3px 2px 1px rgba(0, 0, 0, .3); \">
        \t<img src=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 18), "thumb", [0 => 400, 1 => 300, 2 => ["mode" => "crop"]], "method", false, false, false, 18), "html", null, true);
            echo " \" class=\"card-img-top\" style=\"\">
  \t\t\t<div class=\"card-body\" style=\"padding:10px;\">

        \t<h3>
            ";
            // line 23
            echo "            ";
            ob_start();
            // line 24
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 25
                echo "                ";
            }
            // line 26
            echo "
                ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "

                ";
            // line 29
            if (($context["detailsPage"] ?? null)) {
                // line 30
                echo "
                ";
            }
            // line 32
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 33
            echo "            </h3>

           \t<div style=\"color: black\">
            <p>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, false, 36), "html", null, true);
            echo " /month</p>
            <p>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
            <p>";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 38);
            echo "</p>
            </div>

  \t\t\t</div>
\t\t</li>
\t\t </a>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</ul>
</div>

";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 51) > 1)) {
            // line 52
            echo "    <ul class=\"pagination\">
        ";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 53) > 1)) {
                // line 54
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 54), "baseFileName", [], "any", false, false, false, 54), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 54) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 56
            echo "
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 57)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 58
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 58) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 59
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 59), "baseFileName", [], "any", false, false, false, 59), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
        ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 63) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 63))) {
                // line 64
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 64), "baseFileName", [], "any", false, false, false, 64), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 64) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 66
            echo "    </ul>
";
        }
        // line 68
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\DormStreet/themes/demo/pages/units.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 68,  191 => 66,  185 => 64,  183 => 63,  180 => 62,  169 => 59,  164 => 58,  160 => 57,  157 => 56,  151 => 54,  149 => 53,  146 => 52,  144 => 51,  139 => 48,  130 => 46,  117 => 38,  113 => 37,  109 => 36,  104 => 33,  101 => 32,  97 => 30,  95 => 29,  90 => 27,  87 => 26,  84 => 25,  81 => 24,  78 => 23,  71 => 18,  65 => 15,  61 => 13,  56 => 12,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<div class=\"container\" style=\"height: auto; width: 1300px; display: flex; justify-content: center; align-items: center;\">


<ul style=\"display: flex; justify-content: center; align-items: center; flex-wrap: wrap; \" class=\"record-list\">
    {% for record in records %}

    <li style=\"margin:30px; list-style-type: none;\">
    \t<a style=\"text-decoration: none\" href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">

        <div class=\"\" style=\" height:700px; width: 400px; box-shadow:  0px 3px 2px 1px rgba(0, 0, 0, .3); \">
        \t<img src=\"{{ record.poster.thumb(400, 300, {'mode':'crop'}) }} \" class=\"card-img-top\" style=\"\">
  \t\t\t<div class=\"card-body\" style=\"padding:10px;\">

        \t<h3>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                {% endif %}

                {{ record.title }}

                {% if detailsPage %}

                {% endif %}
            {% endspaceless %}
            </h3>

           \t<div style=\"color: black\">
            <p>{{ record.price}} /month</p>
            <p>{{ record.location}}</p>
            <p>{{record.description|raw }}</p>
            </div>

  \t\t\t</div>
\t\t</li>
\t\t </a>

    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>
</div>

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}

</div>", "C:\\xampp\\htdocs\\DormStreet/themes/demo/pages/units.htm", "");
    }
}
