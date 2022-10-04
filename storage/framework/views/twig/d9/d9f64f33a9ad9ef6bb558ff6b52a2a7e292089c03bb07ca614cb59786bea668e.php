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

/* shared.sidebar */
class __TwigTemplate_5b2df397219c2caab7b61c328c86cc666181d6ad75fc2bed8f9d46a2ce5d524e extends \TwigBridge\Twig\Template
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
        echo "<aside class=\"main-sidebar sidebar-";
        echo twig_escape_filter($this->env, ($context["sidebar_color"] ?? null), "html", null, true);
        echo " elevation-3\">
  <a href=\"";
        // line 2
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("/");
        echo "\" class=\"brand-link text-center\">
    <span class=\"brand-text font-weight-light\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo "</span>
  </a>
  <div class=\"sidebar\">
    ";
        // line 6
        echo twig_include($this->env, $context, "shared.user-panel");
        echo "
    <nav class=\"mt-2\">
      <ul
        class=\"nav nav-pills nav-sidebar flex-column nav-child-indent\"
        data-widget=\"treeview\"
        role=\"menu\"
      >

        ";
        // line 14
        if ((($context["scope"] ?? null) == "user")) {
            // line 15
            echo "
          <li class=\"nav-header\">";
            // line 16
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.user-center"]), "html", null, true);
            echo "</li>
          ";
            // line 17
            echo twig_include($this->env, $context, "shared.side-menu", ["type" => "user"]);
            echo "
          <li class=\"nav-header\">";
            // line 18
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.explore"]), "html", null, true);
            echo "</li>
          ";
            // line 19
            echo twig_include($this->env, $context, "shared.side-menu", ["type" => "explore"]);
            echo "
          ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('auth_user')->getCallable(), []), "admin", [], "any", false, false, false, 20)) {
                // line 21
                echo "            <li class=\"nav-header\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.manage"]), "html", null, true);
                echo "</li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
                // line 23
                echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("admin");
                echo "\">
                <i class=\"nav-icon fas fa-cog\"></i>
                <p>";
                // line 25
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.admin-panel"]), "html", null, true);
                echo "</p>
              </a>
            </li>
          ";
            }
            // line 29
            echo "
        ";
        } elseif ((        // line 30
($context["scope"] ?? null) == "admin")) {
            // line 31
            echo "
          <li class=\"nav-header\">";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.admin-panel"]), "html", null, true);
            echo "</li>
          ";
            // line 33
            echo twig_include($this->env, $context, "shared.side-menu", ["type" => "admin"]);
            echo "
          <li class=\"nav-header\">";
            // line 34
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.back"]), "html", null, true);
            echo "</li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 36
            echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("user");
            echo "\">
              <i class=\"nav-icon fas fa-user\"></i> &nbsp;
              <p>";
            // line 38
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.user-center"]), "html", null, true);
            echo "</p>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 42
            echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("skinlib");
            echo "\">
              <i class=\"nav-icon fas fa-archive\"></i> &nbsp;
              <p>";
            // line 44
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.skinlib"]), "html", null, true);
            echo "</p>
            </a>
          </li>

        ";
        }
        // line 49
        echo "
      </ul>
    </nav>
  </div>
</aside>
";
    }

    public function getTemplateName()
    {
        return "shared.sidebar";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 49,  142 => 44,  137 => 42,  130 => 38,  125 => 36,  120 => 34,  116 => 33,  112 => 32,  109 => 31,  107 => 30,  104 => 29,  97 => 25,  92 => 23,  86 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  65 => 15,  63 => 14,  52 => 6,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared.sidebar", "/www/wwwroot/mc.peckot.com/resources/views/shared/sidebar.twig");
    }
}
