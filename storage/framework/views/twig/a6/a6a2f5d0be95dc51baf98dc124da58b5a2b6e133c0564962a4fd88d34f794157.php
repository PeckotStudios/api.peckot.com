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

/* admin.widgets.dashboard.usage */
class __TwigTemplate_1108fcdfaa34c13590daacdf88338eb4b1e9fb85a0433d7fa4032f567df96b56 extends \TwigBridge\Twig\Template
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
        echo "<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"small-box bg-info\">
      <div class=\"inner\">
        <h3 class=\"stats\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sum"] ?? null), "users", [], "any", false, false, false, 5), "html", null, true);
        echo "</h3>
        <p>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.index.total-users"]), "html", null, true);
        echo "</p>
      </div>
      <div class=\"icon\"><i class=\"fas fa-users\"></i></div>
      <a href=\"";
        // line 9
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("admin/users");
        echo "\" class=\"small-box-footer\">
        ";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.user-manage"]), "html", null, true);
        echo "&nbsp;
        <i class=\"fa fa-arrow-circle-right\"></i>
      </a>
    </div>
  </div>

  <div class=\"col-md-6\">
    <div class=\"small-box bg-green\">
      <div class=\"inner\">
        <h3 class=\"stats\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sum"] ?? null), "players", [], "any", false, false, false, 19), "html", null, true);
        echo "</h3>
        <p>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.index.total-players"]), "html", null, true);
        echo "</p>
      </div>
      <div class=\"icon\"><i class=\"fas fa-gamepad\"></i></div>
      <a href=\"";
        // line 23
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("admin/players");
        echo "\" class=\"small-box-footer\">
        ";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.player-manage"]), "html", null, true);
        echo "&nbsp;
        <i class=\"fa fa-arrow-circle-right\"></i>
      </a>
    </div>
  </div>
</div>

<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"small-box bg-purple\">
      <div class=\"inner\">
        <h3 class=\"stats\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sum"] ?? null), "textures", [], "any", false, false, false, 35), "html", null, true);
        echo "</h3>
        <p>";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.index.total-textures"]), "html", null, true);
        echo "</p>
      </div>
      <div class=\"icon\"><i class=\"fas fa-file\"></i></div>
    </div>
  </div>

  <div class=\"col-md-6\">
    <div class=\"small-box bg-yellow\">
      <div class=\"inner\">
        ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["sum"] ?? null), "storage", [], "any", false, false, false, 45) > 1024)) {
            // line 46
            echo "          <h3 class=\"stats\">";
            echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, ($context["sum"] ?? null), "storage", [], "any", false, false, false, 46) / 1024), 1), "html", null, true);
            echo "MB</h3>
        ";
        } else {
            // line 48
            echo "          <h3 class=\"stats\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sum"] ?? null), "storage", [], "any", false, false, false, 48), "html", null, true);
            echo "KB</h3>
        ";
        }
        // line 50
        echo "        <p>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.index.disk-usage"]), "html", null, true);
        echo "</p>
      </div>
      <div class=\"icon\"><i class=\"fas fa-hdd\"></i></div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin.widgets.dashboard.usage";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 50,  121 => 48,  115 => 46,  113 => 45,  101 => 36,  97 => 35,  83 => 24,  79 => 23,  73 => 20,  69 => 19,  57 => 10,  53 => 9,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin.widgets.dashboard.usage", "/www/wwwroot/mc.peckot.com/resources/views/admin/widgets/dashboard/usage.twig");
    }
}
