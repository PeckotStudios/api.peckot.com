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

/* /www/wwwroot/mc.peckot.com/resources/views/forms/checkbox.twig */
class __TwigTemplate_55f58c1827e84ccce59b5c6ae3f3c12057a6dab62758b83528b6c37f158abfd3 extends \TwigBridge\Twig\Template
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
        echo "<label for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
  <input
    type=\"checkbox\"
    ";
        // line 4
        echo ((($context["value"] ?? null)) ? ("checked=\"true\"") : (""));
        echo "
    id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
    name=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
    ";
        // line 7
        echo ((($context["disabled"] ?? null)) ? ("disabled=disabled") : (""));
        echo "
    value=\"true\"
  > ";
        // line 9
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "
</label>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/forms/checkbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  56 => 7,  52 => 6,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/forms/checkbox.twig", "/www/wwwroot/mc.peckot.com/resources/views/forms/checkbox.twig");
    }
}
