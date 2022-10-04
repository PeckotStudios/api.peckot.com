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

/* user.widgets.dashboard.announcement */
class __TwigTemplate_c422f7fb79e92226a5cefea74cddd8e1bc5a1096f00fa4599d37e5c2217abc72 extends \TwigBridge\Twig\Template
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
        echo "<div class=\"card card-primary card-outline\">
  <div class=\"card-header\">
    <h3 class=\"card-title\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.announcement"]), "html", null, true);
        echo "</h3>
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('auth_user')->getCallable(), []), "admin", [], "any", false, false, false, 4)) {
            // line 5
            echo "      &nbsp;
      <a href=\"";
            // line 6
            echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("/admin/options");
            echo "\">
        <i class=\"fas fa-edit\"></i>
      </a>
    ";
        }
        // line 10
        echo "  </div>
  <div class=\"card-body\">
    ";
        // line 12
        echo ($context["announcement"] ?? null);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "user.widgets.dashboard.announcement";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  57 => 10,  50 => 6,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user.widgets.dashboard.announcement", "/www/wwwroot/mc.peckot.com/resources/views/user/widgets/dashboard/announcement.twig");
    }
}
