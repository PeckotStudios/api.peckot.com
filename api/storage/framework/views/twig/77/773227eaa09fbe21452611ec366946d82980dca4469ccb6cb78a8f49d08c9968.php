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

/* /www/wwwroot/mc.peckot.com/resources/views/forms/hint.twig */
class __TwigTemplate_225820376fca05b74ddabb530d9425cb975bc1a80432844f1e5b66d7b8230dfd extends \TwigBridge\Twig\Template
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
        echo "<i class=\"fas fa-question-circle\" title=\"";
        echo twig_escape_filter($this->env, ($context["hint"] ?? null), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\"></i>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/forms/hint.twig";
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
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/forms/hint.twig", "/www/wwwroot/mc.peckot.com/resources/views/forms/hint.twig");
    }
}
