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

/* C:\xampp\htdocs\DormStreet/themes/demo/pages/login.htm */
class __TwigTemplate_17c22d6f28101db33086313e2000ea5ef9d296358c60bdcc6d267c22c494cc88 extends \Twig\Template
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
        echo "<header style=\"background-color: #008E98 !important;\"  class=\"bg-primary text-white\">
    <div class=\"container text-center\">
    ";
        // line 3
        if ( !($context["user"] ?? null)) {
            // line 4
            echo "      <h1 style=\"color:white;\">Welcome to DormStreet</h1>
    ";
        } else {
            // line 5
            echo "  
     <h1 style=\"color:white;\">DormStreet</h1>
    ";
        }
        // line 8
        echo "      <p class=\"lead\">The Perfect App to Find Apartments and Dormitories for Rent</p>
    </div>
</header>

";
        // line 12
        if ( !($context["user"] ?? null)) {
            // line 13
            echo "
    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            ";
            // line 18
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "        </div>

        <div class=\"col-md-6\">
            ";
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "        </div>

    </div>

";
        } else {
            // line 28
            echo "
    ";
            // line 29
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 30
            echo "
    ";
            // line 31
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 32
            echo "
    ";
            // line 33
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 34
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\DormStreet/themes/demo/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  104 => 33,  101 => 32,  97 => 31,  94 => 30,  90 => 29,  87 => 28,  80 => 23,  76 => 22,  71 => 19,  67 => 18,  60 => 13,  58 => 12,  52 => 8,  47 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header style=\"background-color: #008E98 !important;\"  class=\"bg-primary text-white\">
    <div class=\"container text-center\">
    {% if not user %}
      <h1 style=\"color:white;\">Welcome to DormStreet</h1>
    {% else %}  
     <h1 style=\"color:white;\">DormStreet</h1>
    {% endif %}
      <p class=\"lead\">The Perfect App to Find Apartments and Dormitories for Rent</p>
    </div>
</header>

{% if not user %}

    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            {% partial account ~ '::signin' %}
        </div>

        <div class=\"col-md-6\">
            {% partial account ~ '::register' %}
        </div>

    </div>

{% else %}

    {% partial account ~ '::activation_check' %}

    {% partial account ~ '::update' %}

    {% partial account ~ '::deactivate_link' %}

{% endif %}", "C:\\xampp\\htdocs\\DormStreet/themes/demo/pages/login.htm", "");
    }
}
