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

/* /www/wwwroot/mc.peckot.com/resources/views/forms/text.twig */
class __TwigTemplate_a37a8eb7d0ce01b49d765b00c0ed4a899dcd0c2f90f3ed7a73d3630e461d3bb8 extends \TwigBridge\Twig\Template
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
        echo "<input
  type=\"text\"
  class=\"form-control\"
  name=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
  ";
        // line 5
        echo ((($context["disabled"] ?? null)) ? ("disabled=disabled") : (""));
        echo "
  value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\"
  placeholder=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
        echo "\"
>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/forms/text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/forms/text.twig", "/www/wwwroot/mc.peckot.com/resources/views/forms/text.twig");
    }
}
