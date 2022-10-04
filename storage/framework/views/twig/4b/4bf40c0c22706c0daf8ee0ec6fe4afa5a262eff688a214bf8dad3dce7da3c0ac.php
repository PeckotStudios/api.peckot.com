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

/* user.widgets.profile.delete-account */
class __TwigTemplate_36556079654a585f109965e0969bee433cb5f394088177e0eb9bd9a805c8c301 extends \TwigBridge\Twig\Template
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
        echo "<div class=\"card card-danger\">
  <div class=\"card-header\">
    <h3 class=\"card-title\">
      ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.delete.title"]), "html", null, true);
        echo "
    </h3>
  </div>
  <div class=\"card-body\">
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "admin", [], "any", false, false, false, 8)) {
            // line 9
            echo "      <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.delete.admin"]), "html", null, true);
            echo "</p>
      <button class=\"btn btn-danger\" disabled=\"disabled\">
        ";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.delete.button"]), "html", null, true);
            echo "
      </button>
    ";
        } else {
            // line 14
            echo "      <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.delete.notice", ["site" => ($context["site_name"] ?? null)]]), "html", null, true);
            echo "</p>
      <button
        class=\"btn btn-danger\"
        data-toggle=\"modal\"
        data-target=\"#modal-delete-account\"
      >
        ";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.delete.button"]), "html", null, true);
            echo "
      </button>
    ";
        }
        // line 23
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "user.widgets.profile.delete-account";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  73 => 20,  63 => 14,  57 => 11,  51 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user.widgets.profile.delete-account", "/www/wwwroot/mc.peckot.com/resources/views/user/widgets/profile/delete-account.twig");
    }
}
