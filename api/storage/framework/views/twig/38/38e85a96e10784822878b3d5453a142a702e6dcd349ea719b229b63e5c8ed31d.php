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

/* user.widgets.profile.password */
class __TwigTemplate_48eedf7bc0ca404664a066e0b080b5e9dfc346113ca3cd9d85cab96cf177daee extends \TwigBridge\Twig\Template
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
        echo "<form class=\"card card-warning\" method=\"post\" id=\"change-password\">
  <div class=\"card-header\">
    <h3 class=\"card-title\">
      ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.password.title"]), "html", null, true);
        echo "
    </h3>
  </div>
  <div class=\"card-body\">
    <div class=\"form-group\">
      <label>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.password.old"]), "html", null, true);
        echo "</label>
      <input type=\"password\" class=\"form-control\" name=\"oldPassword\"
        required autocomplete=\"current-password\">
    </div>

    <div class=\"form-group\">
      <label>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.password.new"]), "html", null, true);
        echo "</label>
      <input type=\"password\" class=\"form-control\" name=\"newPassword\" required
        minlength=\"8\" maxlength=\"32\" autocomplete=\"new-password\">
    </div>

    <div class=\"form-group\">
      <label>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.password.confirm"]), "html", null, true);
        echo "</label>
      <input type=\"password\" class=\"form-control\" name=\"confirm\" required
        minlength=\"8\" maxlength=\"32\" autocomplete=\"new-password\">
    </div>
  </div>
  <div class=\"card-footer\">
    <button class=\"btn btn-primary\" type=\"submit\">
      ";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.password.button"]), "html", null, true);
        echo "
    </button>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "user.widgets.profile.password";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  68 => 21,  59 => 15,  50 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user.widgets.profile.password", "/www/wwwroot/mc.peckot.com/resources/views/user/widgets/profile/password.twig");
    }
}
