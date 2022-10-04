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

/* admin.widgets.dashboard.notification */
class __TwigTemplate_0111f313c083319f3ff79bfe99e5459da75e7259190b9b88f686f9f86212ebbd extends \TwigBridge\Twig\Template
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
        echo "<div class=\"card\">
  <div class=\"card-header\">
    <h3 class=\"card-title\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.notifications.send.title"]), "html", null, true);
        echo "</h3>
  </div>
  <form method=\"post\" action=\"";
        // line 5
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("/admin/notifications/send");
        echo "\">
    ";
        // line 6
        echo csrf_field();
        echo "
    <div class=\"card-body\">
      ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "any", [], "any", false, false, false, 8)) {
            // line 9
            echo "        <div class=\"callout callout-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [], "any", false, false, false, 9), "html", null, true);
            echo "</div>
      ";
        }
        // line 11
        echo "      ";
        $context["sent_result"] = call_user_func_array($this->env->getFunction('session_pull')->getCallable(), ["sentResult"]);
        // line 12
        echo "      ";
        if (($context["sent_result"] ?? null)) {
            // line 13
            echo "        <div class=\"callout callout-success\">";
            echo twig_escape_filter($this->env, ($context["sent_result"] ?? null), "html", null, true);
            echo "</div>
      ";
        }
        // line 15
        echo "      <div class=\"form-group\">
        <label>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.notifications.receiver.title"]), "html", null, true);
        echo "</label>
        <div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"receiver\" value=\"all\" required>
          ";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.notifications.receiver.all"]), "html", null, true);
        echo "
        </label>
        </div>
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"receiver\" value=\"normal\" required>
            ";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.notifications.receiver.normal"]), "html", null, true);
        echo "
          </label>
        </div>
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"receiver\" value=\"uid\" required>
            ";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.notifications.receiver.uid"]), "html", null, true);
        echo " &nbsp;
            <input type=\"number\" name=\"uid\" class=\"form-control\">
          </label>
        </div>
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"receiver\" value=\"email\" required>
            ";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.notifications.receiver.email"]), "html", null, true);
        echo " &nbsp;
            <input type=\"email\" name=\"email\" class=\"form-control\">
          </label>
        </div>
      </div>
      <div class=\"form-group\">
        <label>";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.notifications.title"]), "html", null, true);
        echo "</label>
        <input type=\"text\" name=\"title\" class=\"form-control\" required>
      </div>
      <div class=\"form-group\">
        <label>";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.notifications.content"]), "html", null, true);
        echo "</label>
        <textarea name=\"content\" class=\"form-control\" rows=\"3\"></textarea>
      </div>
    </div>
    <div class=\"card-footer\">
      <input
        type=\"submit\"
        value=\"";
        // line 56
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.submit"]), "html", null, true);
        echo "\"
        class=\"btn btn-primary\"
      >
    </div>
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin.widgets.dashboard.notification";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 56,  129 => 49,  122 => 45,  113 => 39,  103 => 32,  94 => 26,  85 => 20,  78 => 16,  75 => 15,  69 => 13,  66 => 12,  63 => 11,  57 => 9,  55 => 8,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin.widgets.dashboard.notification", "/www/wwwroot/mc.peckot.com/resources/views/admin/widgets/dashboard/notification.twig");
    }
}
