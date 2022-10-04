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

/* user.widgets.profile.avatar */
class __TwigTemplate_16a282845f617bcff615123f6fe54b17d0534d4ee903a81af0f4dd67ab301a51 extends \TwigBridge\Twig\Template
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
        echo "<div class=\"card card-primary\">
  <div class=\"card-header\">
    <h3 class=\"card-title\">
      ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.avatar.title"]), "html", null, true);
        echo "
    </h3>
  </div>
  <div class=\"card-body\">
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.avatar.notice"]);
        echo "
  </div>
  <div class=\"card-footer\">
    <button class=\"btn btn-primary\" id=\"reset-avatar\">
      ";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.avatar.reset"]), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "user.widgets.profile.avatar";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user.widgets.profile.avatar", "/www/wwwroot/mc.peckot.com/resources/views/user/widgets/profile/avatar.twig");
    }
}
