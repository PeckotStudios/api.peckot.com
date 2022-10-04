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

/* user.widgets.profile.email */
class __TwigTemplate_20ab04ccb9e26c852fd2a8cb652f8bb4b81b096b95f85e2cdb0536324b1b64f0 extends \TwigBridge\Twig\Template
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
        echo "<form class=\"card card-warning\" method=\"post\" id=\"change-email\">
  <div class=\"card-header\">
    <h3 class=\"card-title\">
      ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.email.title"]), "html", null, true);
        echo "
    </h3>
  </div>
  <div class=\"card-body\">
    <div class=\"form-group\">
      <input type=\"email\" class=\"form-control\" name=\"email\" required
        value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 10), "html", null, true);
        echo "\"
        placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.email.new"]), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
      <input type=\"password\" class=\"form-control\" name=\"password\" required
        placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.email.password"]), "html", null, true);
        echo "\" autocomplete=\"current-password\">
    </div>
  </div>
  <div class=\"card-footer\">
    <button class=\"btn btn-primary\" type=\"submit\">
      ";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.email.button"]), "html", null, true);
        echo "
    </button>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "user.widgets.profile.email";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  62 => 15,  55 => 11,  51 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user.widgets.profile.email", "/www/wwwroot/mc.peckot.com/resources/views/user/widgets/profile/email.twig");
    }
}
