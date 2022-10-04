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

/* shared.user-panel */
class __TwigTemplate_334740715751bd63b93f2a6edd435d09a69f347819a81a428221ec5b77a57db3 extends \TwigBridge\Twig\Template
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
        echo "<div class=\"user-panel mt-3 mb-3 ";
        echo (((twig_length_filter($this->env, ($context["badges"] ?? null)) > 0)) ? ("pb-2") : (""));
        echo "\">
  <div class=\"d-flex\">
    <div class=\"image\">
      <picture>
        <source srcset=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["avatar"] ?? null), "html", null, true);
        echo "\" type=\"image/webp\">
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["avatar_png"] ?? null), "html", null, true);
        echo "\" class=\"bs-avatar\" alt=\"User Image\">
      </picture>
    </div>
    <div class=\"info\">
      <a class=\"d-block\" data-mark=\"nickname\">";
        // line 10
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nickname", [], "any", true, true, false, 10) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nickname", [], "any", false, false, false, 10)))) ? (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nickname", [], "any", false, false, false, 10)) : (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 10))), "html", null, true);
        echo "</a>
    </div>
  </div>

  <div class=\"mt-3 ml-2 mr-2 d-flex flex-wrap\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["badges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
            // line 16
            echo "      <span class=\"badge bg-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "color", [], "any", false, false, false, 16), "html", null, true);
            echo " mb-1 mr-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "text", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "shared.user-panel";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  68 => 16,  64 => 15,  56 => 10,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared.user-panel", "/www/wwwroot/mc.peckot.com/resources/views/shared/user-panel.twig");
    }
}
