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

/* errors.languages */
class __TwigTemplate_e4dd15982486a5d5b54c799724d1b1988841d9c89f2e73d4c8bd0149ac20d1d9 extends \TwigBridge\Twig\Template
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
        echo "<div class=\"text-right m-2 p-2\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["langs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 3
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "url", [], "any", false, false, false, 3), "html", null, true);
            echo "\"
      class=\"mx-2 p-1 label ";
            // line 4
            echo (((twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 4) == ($context["lang_name"] ?? null))) ? ("label-primary") : ("label-secondary"));
            echo "\"
    >";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "errors.languages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  53 => 5,  49 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "errors.languages", "/www/wwwroot/mc.peckot.com/resources/views/errors/languages.twig");
    }
}
