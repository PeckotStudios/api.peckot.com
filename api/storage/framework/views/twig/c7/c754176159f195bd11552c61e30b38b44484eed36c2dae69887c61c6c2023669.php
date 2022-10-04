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

/* /www/wwwroot/mc.peckot.com/resources/views/admin/customize.twig */
class __TwigTemplate_77655c63eadf7c02980ae9ac92463c64276000f30ac8ba3a2aadd2542260ee16 extends \TwigBridge\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'before_foot' => [$this, 'block_before_foot'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.base";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin.base", "/www/wwwroot/mc.peckot.com/resources/views/admin/customize.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.customize"]), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <div class=\"row\">
    <div class=\"col-md-3\">
      <form class=\"card box-primary\" method=\"post\" action=\"";
        // line 8
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("/admin/customize?action=color");
        echo "\">
        ";
        // line 9
        echo csrf_field();
        echo "
        <div class=\"card-header\">
          <h3 class=\"card-title\">
            ";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.customize.change-color.title"]), "html", null, true);
        echo "
          </h3>
        </div>
        <div class=\"card-body\">
          <div id=\"navbar-color-picker\">
            <p>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.customize.colors.navbar"]), "html", null, true);
        echo "</p>
            <div>
              ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "navbar", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 20
            echo "                <label>
                  <input type=\"radio\" class=\"d-none\" name=\"navbar\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "\">
                  <div class=\"btn-color bg-";
            // line 22
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo " display-inline-block
                    rounded-pill mr-2 mb-1 elevation-2\"
                  ></div>
                </label>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>
          </div>
          <div id=\"sidebar-dark-picker\">
            <p>";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.customize.colors.sidebar.dark"]), "html", null, true);
        echo "</p>
            <div>
              ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "sidebar", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 33
            echo "                <label>
                  <input type=\"radio\" class=\"d-none\" name=\"sidebar\" value=\"dark-";
            // line 34
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "\">
                  <div class=\"btn-color bg-";
            // line 35
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo " display-inline-block
                    rounded-pill mr-2 mb-1 elevation-2\"
                  ></div>
                </label>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
          </div>
          <div id=\"sidebar-light-picker\">
            <p>";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.customize.colors.sidebar.light"]), "html", null, true);
        echo "</p>
            <div>
              ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "sidebar", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 46
            echo "                <label>
                  <input type=\"radio\" class=\"d-none\" name=\"sidebar\" value=\"light-";
            // line 47
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "\">
                  <div class=\"btn-color bg-";
            // line 48
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo " display-inline-block
                    rounded-pill mr-2 mb-1 elevation-2\"
                  ></div>
                </label>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </div>
          </div>
        </div>
        <div class=\"card-footer\">
          <input
            type=\"submit\"
            class=\"btn btn-primary\"
            value=\"";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.submit"]), "html", null, true);
        echo "\"
            name=\"submit_color\"
          >
        </div>
      </form>
    </div>
    <div class=\"col-md-9\">
      ";
        // line 67
        echo twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "homepage", [], "any", false, false, false, 67);
        echo "
      ";
        // line 68
        echo twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "custom_js_css", [], "any", false, false, false, 68);
        echo "
    </div>
  </div>
";
    }

    // line 73
    public function block_before_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "  <script id=\"blessing-extra\" type=\"application/json\">
    ";
        // line 75
        echo json_encode(($context["extra"] ?? null));
        echo "
  </script>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/admin/customize.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 75,  207 => 74,  203 => 73,  195 => 68,  191 => 67,  181 => 60,  172 => 53,  161 => 48,  157 => 47,  154 => 46,  150 => 45,  145 => 43,  140 => 40,  129 => 35,  125 => 34,  122 => 33,  118 => 32,  113 => 30,  108 => 27,  97 => 22,  93 => 21,  90 => 20,  86 => 19,  81 => 17,  73 => 12,  67 => 9,  63 => 8,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/admin/customize.twig", "/www/wwwroot/mc.peckot.com/resources/views/admin/customize.twig");
    }
}
