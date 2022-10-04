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

/* user.widgets.profile.nickname */
class __TwigTemplate_77088d7493ad1863211ebe597d4873e673478f7c41f2d5a8d2a86eb4f8d95e51 extends \TwigBridge\Twig\Template
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
        echo "<form class=\"card card-primary\" method=\"post\" id=\"change-nickname\">
  <div class=\"card-header\">
    <h3 class=\"card-title\">
      ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.nickname.title"]), "html", null, true);
        echo "
    </h3>
  </div>
  <div class=\"card-body\">
    <div class=\"form-group\">
      <input type=\"text\" class=\"form-control\" name=\"nickname\" required
        value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nickname", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
    </div>
  </div>
  <div class=\"card-footer\">
    <button class=\"btn btn-primary\" type=\"submit\">
      ";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.submit"]), "html", null, true);
        echo "
    </button>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "user.widgets.profile.nickname";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  51 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user.widgets.profile.nickname", "/www/wwwroot/mc.peckot.com/resources/views/user/widgets/profile/nickname.twig");
    }
}
