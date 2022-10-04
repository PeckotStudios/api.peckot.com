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

/* shared.languages */
class __TwigTemplate_b828512201ec2c82495594cf56e9a6bda63f82a5b9137cbc8c74c0701af07b6c extends \TwigBridge\Twig\Template
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
        echo "<li class=\"nav-item dropdown\">
  <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" style=\"color:#fff;\" aria-expanded=\"false\">
    <i class=\"fas fa-language\" aria-hidden=\"true\"></i>
    <span class=\"d-none d-sm-inline\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["current"] ?? null), "html", null, true);
        echo "</span>
  </a>
  <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["langs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 8
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "url", [], "any", false, false, false, 8), "html", null, true);
            echo "\" class=\"dropdown-item locale\">
        ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "
      </a>
      <div class=\"dropdown-divider\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "shared.languages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  57 => 9,  52 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared.languages", "/www/wwwroot/mc.peckot.com/resources/views/shared/languages.twig");
    }
}
