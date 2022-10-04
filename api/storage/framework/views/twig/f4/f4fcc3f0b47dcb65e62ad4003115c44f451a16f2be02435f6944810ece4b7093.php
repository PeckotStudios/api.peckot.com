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

/* /www/wwwroot/mc.peckot.com/resources/views/forms/form.twig */
class __TwigTemplate_f538466f09096faa2aa03ecc237aa4c42a480360ae9b246110d94f679a3b9848 extends \TwigBridge\Twig\Template
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
        echo "<div class=\"card card-";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\">
  <div class=\"card-header\">
    <h3 class=\"card-title\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " ";
        echo ($context["hint"] ?? null);
        echo "</h3>
  </div>
  <form method=\"post\">
    ";
        // line 6
        echo csrf_field();
        echo "
    <input type=\"hidden\" name=\"option\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
    <div class=\"card-body\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
          ";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 11);
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 16
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alert"], "type", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
          ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, $context["alert"], "type", [], "any", false, false, false, 17) == "success")) {
                // line 18
                echo "            <i class=\"fas fa-check icon\"></i>
          ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 19
$context["alert"], "type", [], "any", false, false, false, 19) == "info")) {
                // line 20
                echo "            <i class=\"fas fa-info icon\"></i>
          ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 21
$context["alert"], "type", [], "any", false, false, false, 21) == "warning")) {
                // line 22
                echo "            <i class=\"fas fa-exclamation-triangle icon\"></i>
          ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 23
$context["alert"], "type", [], "any", false, false, false, 23) == "danger")) {
                // line 24
                echo "            <i class=\"fas fa-times-circle icon\"></i>
          ";
            }
            // line 26
            echo "          <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alert"], "content", [], "any", false, false, false, 26), "html", null, true);
            echo "</span>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
      ";
        // line 30
        if (($context["renderWithoutTable"] ?? null)) {
            // line 31
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "          ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "render", [], "method", false, false, false, 32);
                echo "
          ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "            <p class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 34);
                    echo "</p>
          ";
                }
                // line 36
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "      ";
        } else {
            // line 38
            echo "        <div class=\"container-fluid\">
          ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 40
                echo "            <div class=\"row ";
                echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40) == 1)) ? ("mb-3") : ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40) == twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 40))) ? ("mt-3") : ("my-3"))));
                echo "\">
              ";
                // line 41
                if ( !($context["renderInputTagsOnly"] ?? null)) {
                    // line 42
                    echo "                <div class=\"col-sm-4\">
                  ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 43), "html", null, true);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "hint", [], "any", false, false, false, 43);
                    echo "
                </div>
              ";
                }
                // line 46
                echo "              <div class=\"col-sm-";
                echo ((($context["renderInputTagsOnly"] ?? null)) ? ("12") : ("8"));
                echo "\">
                ";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["item"], "render", [], "method", false, false, false, 47);
                echo "
                ";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "                  <p class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 49);
                    echo "</p>
                ";
                }
                // line 51
                echo "              </div>
            </div>
          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </div>
      ";
        }
        // line 56
        echo "    </div>
    <div class=\"card-footer\">
      ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 59
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["button"], "href", [], "any", false, false, false, 59)) {
                // line 60
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "href", [], "any", false, false, false, 60), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["button"], "class", [], "any", false, false, false, 60), " "), "html", null, true);
                echo "\">
            ";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["button"], "text", [], "any", false, false, false, 61);
                echo "
          </a>
        ";
            } else {
                // line 64
                echo "          <button
            type=\"";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "type", [], "any", false, false, false, 65), "html", null, true);
                echo "\"
            name=\"";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "name", [], "any", false, false, false, 66), "html", null, true);
                echo "\"
            class=\"";
                // line 67
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["button"], "class", [], "any", false, false, false, 67), " "), "html", null, true);
                echo "\"
          >
            ";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["button"], "text", [], "any", false, false, false, 69);
                echo "
          </button>
        ";
            }
            // line 72
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    </div>
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/forms/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 73,  274 => 72,  268 => 69,  263 => 67,  259 => 66,  255 => 65,  252 => 64,  246 => 61,  239 => 60,  236 => 59,  232 => 58,  228 => 56,  224 => 54,  208 => 51,  202 => 49,  200 => 48,  196 => 47,  191 => 46,  183 => 43,  180 => 42,  178 => 41,  173 => 40,  156 => 39,  153 => 38,  150 => 37,  144 => 36,  138 => 34,  136 => 33,  131 => 32,  126 => 31,  124 => 30,  121 => 29,  111 => 26,  107 => 24,  105 => 23,  102 => 22,  100 => 21,  97 => 20,  95 => 19,  92 => 18,  90 => 17,  85 => 16,  81 => 15,  78 => 14,  69 => 11,  64 => 10,  60 => 9,  55 => 7,  51 => 6,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/forms/form.twig", "/www/wwwroot/mc.peckot.com/resources/views/forms/form.twig");
    }
}
