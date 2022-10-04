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

/* /www/wwwroot/mc.peckot.com/resources/views/setup/wizard/database.twig */
class __TwigTemplate_1f2540ba6fe952ac086cac61c6a5dcfe6797237a65a140595c0894fc29347e6b extends \TwigBridge\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subtitle' => [$this, 'block_subtitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "setup.base";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("setup.base", "/www/wwwroot/mc.peckot.com/resources/views/setup/wizard/database.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.database.title"]), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <p>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.database.text"]), "html", null, true);
        echo "</p>
  <form
    id=\"setup\"
    method=\"post\"
    action=\"";
        // line 10
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("setup/database");
        echo "\"
    novalidate=\"novalidate\"
  >
    ";
        // line 13
        echo csrf_field();
        echo "
    <table>
      <tr>
        <th>
          <label for=\"type\" class=\"form-label\">";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.database.type"]), "html", null, true);
        echo "</label>
        </th>
        <td class=\"form-group\">
          <label class=\"form-radio d-inline-block\">
            <input name=\"type\" type=\"radio\" value=\"mysql\" id=\"type-mysql\" checked>
            <i class=\"form-icon\"></i> MySQL / MariaDB
          </label>
          <label class=\"form-radio d-inline-block\">
            <input name=\"type\" type=\"radio\" value=\"pgsql\" id=\"type-pgsql\">
            <i class=\"form-icon\"></i> PostgreSQL
          </label>
          <label class=\"form-radio d-inline-block\">
            <input name=\"type\" type=\"radio\" value=\"sqlite\" id=\"type-sqlite\">
            <i class=\"form-icon\"></i> SQLite
          </label>
        </td>
      </tr>
      <tr>
        <th>
          <label class=\"form-label\" for=\"host\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.database.host"]), "html", null, true);
        echo "</label>
        </th>
        <td>
          <input
            class=\"form-input\"
            name=\"host\"
            type=\"text\"
            id=\"host\"
            size=\"25\"
            value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["host"] ?? null), "html", null, true);
        echo "\"
          >
        </td>
      </tr>
      <tr>
        <th>
          <label class=\"form-label\" for=\"port\">";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.database.port"]), "html", null, true);
        echo "</label>
        </th>
        <td>
          <input
            class=\"form-input\"
            name=\"port\"
            type=\"text\"
            id=\"port\"
            size=\"25\"
            value=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["port"] ?? null), "html", null, true);
        echo "\"
          >
        </td>
      </tr>
      <tr>
        <th>
          <label class=\"form-label\" for=\"username\">";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.database.username"]), "html", null, true);
        echo "</label>
        </th>
        <td>
          <input
            class=\"form-input\"
            name=\"username\"
            type=\"text\"
            id=\"username\"
            size=\"25\"
            value=\"";
        // line 75
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\"
          >
        </td>
      </tr>
      <tr>
        <th>
          <label class=\"form-label\" for=\"password\">";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.database.password"]), "html", null, true);
        echo "</label>
        </th>
        <td>
          <input
            class=\"form-input\"
            type=\"password\"
            name=\"password\"
            id=\"password\"
            value=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "\"
          >
        </td>
      </tr>
      <tr>
        <th>
          <label class=\"form-label\" for=\"db\">";
        // line 95
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.database.db"]), "html", null, true);
        echo "</label>
        </th>
        <td>
          <input
            class=\"form-input\"
            name=\"db\"
            type=\"text\"
            id=\"db\"
            size=\"25\"
            value=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["database"] ?? null), "html", null, true);
        echo "\"
          >
        </td>
      </tr>
      <tr>
        <th></th>
        <td><p><small>";
        // line 110
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.database.db-notice"]), "html", null, true);
        echo "</small></p></td>
      </tr>
      <tr>
        <th>
          <label class=\"form-label\" for=\"prefix\">";
        // line 114
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.database.prefix"]), "html", null, true);
        echo "</label>
        </th>
        <td>
          <input
            class=\"form-input\"
            name=\"prefix\"
            type=\"text\"
            id=\"prefix\"
            size=\"25\"
            value=\"";
        // line 123
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "\"
          >
        </td>
      </tr>
      <tr>
        <th></th>
        <td><p><small>";
        // line 129
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.database.prefix-notice"]), "html", null, true);
        echo "</small></p></td>
      </tr>
    </table>

    ";
        // line 133
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "any", [], "any", false, false, false, 133)) {
            // line 134
            echo "      <div class=\"toast toast-error\" role=\"alert\">
        <ul>
          ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", [], "any", false, false, false, 136));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 137
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "        </ul>
      </div>
    ";
        }
        // line 142
        echo "
    <p class=\"step\">
      <input
        type=\"submit\"
        name=\"submit\"
        id=\"submit\"
        class=\"btn btn-primary\"
        value=\"";
        // line 149
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.welcome.button"]), "html", null, true);
        echo "\"
      >
    </p>
</form>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/setup/wizard/database.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 149,  264 => 142,  259 => 139,  250 => 137,  246 => 136,  242 => 134,  240 => 133,  233 => 129,  224 => 123,  212 => 114,  205 => 110,  196 => 104,  184 => 95,  175 => 89,  164 => 81,  155 => 75,  143 => 66,  134 => 60,  122 => 51,  113 => 45,  101 => 36,  79 => 17,  72 => 13,  66 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/setup/wizard/database.twig", "/www/wwwroot/mc.peckot.com/resources/views/setup/wizard/database.twig");
    }
}
