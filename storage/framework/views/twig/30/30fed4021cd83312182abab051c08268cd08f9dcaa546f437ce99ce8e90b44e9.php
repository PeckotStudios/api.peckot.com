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

/* Blessing\TextureDescription::description */
class __TwigTemplate_d0d314601b5857636f21f31d6a6805313ab67a835661dbd5227b64dcffd7b41b extends \TwigBridge\Twig\Template
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
        echo "<div id=\"texture-description\" data-can-edit=\"";
        echo twig_escape_filter($this->env, ($context["can_edit"] ?? null), "html", null, true);
        echo "\" data-max-length=\"";
        echo twig_escape_filter($this->env, ($context["max_length"] ?? null), "html", null, true);
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "Blessing\\TextureDescription::description";
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
        return new Source("", "Blessing\\TextureDescription::description", "/www/wwwroot/mc.peckot.com/plugins/texture-description/views/description.twig");
    }
}
