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

/* assets.spectre */
class __TwigTemplate_2efcb0a49c5130ef168cdd2d5e07120e42eaf7b784ef242c570dbc04e22fcfaf extends \TwigBridge\Twig\Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/app/spectre.d5c09e2.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">";
    }

    public function getTemplateName()
    {
        return "assets.spectre";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "assets.spectre", "/www/wwwroot/mc.peckot.com/resources/views/assets/spectre.twig");
    }
}
