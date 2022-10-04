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

/* shared.side-menu-item */
class __TwigTemplate_4862719476781d46d6e126cfca84619f634d81dfad8b8caab347f8fb6533ba9a extends \TwigBridge\Twig\Template
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
        echo "<li class=\"nav-item ";
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "classes", [], "any", false, false, false, 1), " "), "html", null, true);
        echo "\">
  ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 2)) {
            // line 3
            echo "    <a class=\"nav-link ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "active", [], "any", false, false, false, 3)) ? ("active") : (""));
            echo "\" href=\"#\">
      <i class=\"nav-icon fas ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 4), "html", null, true);
            echo "\"></i>
      <p class=\"ml-1\">";
            // line 5
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 5)]), "html", null, true);
            echo "</p>
      <i class=\"right fas fa-angle-left\"></i>
    </a>
    <ul class=\"nav nav-treeview\">
      ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 9));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 10
                echo "        ";
                echo twig_include($this->env, $context, "shared.side-menu-item", ["item" => $context["child"]]);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
  ";
        } else {
            // line 14
            echo "    <a
      href=\"";
            // line 15
            echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 15));
            echo "\"
      class=\"nav-link ";
            // line 16
            echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "active", [], "any", false, false, false, 16)) ? ("active") : (""));
            echo "\"
      ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "new-tab", [], "any", false, false, false, 17)) {
                // line 18
                echo "        target=\"_blank\"
        rel=\"noopener noreferrer\"
      ";
            }
            // line 21
            echo "    >
      <i class=\"nav-icon ";
            // line 22
            echo (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 22) == "fa-circle")) ? ("far") : ("fas"));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 22), "html", null, true);
            echo "\"></i>
      <p class=\"ml-1\">";
            // line 23
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 23)]), "html", null, true);
            echo "</p>
    </a>
  ";
        }
        // line 26
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "shared.side-menu-item";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 26,  125 => 23,  119 => 22,  116 => 21,  111 => 18,  109 => 17,  105 => 16,  101 => 15,  98 => 14,  94 => 12,  77 => 10,  60 => 9,  53 => 5,  49 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared.side-menu-item", "/www/wwwroot/mc.peckot.com/resources/views/shared/side-menu-item.twig");
    }
}
