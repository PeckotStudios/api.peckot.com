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

/* /www/wwwroot/mc.peckot.com/resources/views/forms/textarea.twig */
class __TwigTemplate_c6eb789b4b87bfd83d39ac5adb0868108bf83f1c6c7e21603e05b4663b59b91c extends \TwigBridge\Twig\Template
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
        echo "<textarea
  class=\"form-control\"
  rows=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["rows"] ?? null), "html", null, true);
        echo "\"
  name=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
  ";
        // line 5
        echo ((($context["disabled"] ?? null)) ? ("disabled=disabled") : (""));
        echo "
>";
        // line 6
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/forms/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/forms/textarea.twig", "/www/wwwroot/mc.peckot.com/resources/views/forms/textarea.twig");
    }
}
