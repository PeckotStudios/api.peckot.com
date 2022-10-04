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

/* assets.style */
class __TwigTemplate_d8b9c52e03d558b63cbf77da57ec4be813dfdb50e60f9feb196be124e4f43550 extends \TwigBridge\Twig\Template
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
        echo "/app/style.def7575.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">";
    }

    public function getTemplateName()
    {
        return "assets.style";
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
        return new Source("", "assets.style", "/www/wwwroot/mc.peckot.com/resources/views/assets/style.twig");
    }
}
