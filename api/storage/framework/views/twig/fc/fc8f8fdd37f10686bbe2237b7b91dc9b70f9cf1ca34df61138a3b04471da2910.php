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

/* shared.foot */
class __TwigTemplate_c2215a8483507e39e2041d538ba0c3b7dc3dbc5c35952303081175783586e249 extends \TwigBridge\Twig\Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, ($context["i18n"] ?? null), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
";
        // line 2
        echo twig_include($this->env, $context, "assets.app", array(), true, true);
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 4
            echo "  <script";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["script"]);
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        if (($context["inline_js"] ?? null)) {
            // line 7
            echo "  <script>
    ";
            // line 8
            echo strip_tags(($context["inline_js"] ?? null), "<div><span><ul><li><p><a><img><i>");
            echo "
  </script>
";
        }
        // line 11
        echo twig_join_filter(($context["extra_foot"] ?? null), "
");
        echo "
";
    }

    public function getTemplateName()
    {
        return "shared.foot";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  75 => 8,  72 => 7,  70 => 6,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared.foot", "/www/wwwroot/mc.peckot.com/resources/views/shared/foot.twig");
    }
}
