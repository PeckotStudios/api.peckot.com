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

/* /www/wwwroot/mc.peckot.com/resources/views/setup/wizard/info.twig */
class __TwigTemplate_10185877286ae336abc232547d1411f24b64f3bafffc20172b65e746625137a8 extends \TwigBridge\Twig\Template
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
        $this->parent = $this->loadTemplate("setup.base", "/www/wwwroot/mc.peckot.com/resources/views/setup/wizard/info.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.info.title"]), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <p>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.info.text"]), "html", null, true);
        echo "</p>
  <form
    id=\"setup\"
    method=\"post\"
    action=\"";
        // line 10
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("setup/finish");
        echo "\"
    novalidate=\"novalidate\"
  >
    ";
        // line 13
        echo csrf_field();
        echo "
    <table>
      <tr class=\"form-group\">
        <th>
          <label class=\"form-label\" for=\"email\">";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.info.admin-email"]), "html", null, true);
        echo "</label>
        </th>
        <td>
          <input class=\"form-input\" name=\"email\" type=\"email\" id=\"email\" size=\"25\">
        </td>
      </tr>
      <tr>
        <th></th>
        <td><p><small>";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.info.admin-notice"]), "html", null, true);
        echo "</small></p></td>
      </tr>
      <tr class=\"form-group\">
        <th>
          <label class=\"form-label\" for=\"email\">";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.info.nickname"]), "html", null, true);
        echo "</label>
        </th>
        <td>
          <input class=\"form-input my-2\" name=\"nickname\" type=\"text\" id=\"nickname\" size=\"25\">
        </td>
      </tr>
      <tr class=\"form-group\">
        <th>
          <label class=\"form-label\" for=\"password\">";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.info.password"]), "html", null, true);
        echo "</label>
        </th>
        <td>
          <input class=\"form-input\" type=\"password\" name=\"password\" id=\"password\" class=\"regular-text\">
        </td>
      </tr>
      <tr>
        <th></th>
        <td><p><small>";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.info.pwd-notice"]), "html", null, true);
        echo "</small></p></td>
      </tr>
      <tr class=\"form-group\">
        <th>
          <label class=\"form-label\" for=\"password_confirmation\">
            ";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.info.confirm-pwd"]), "html", null, true);
        echo "
          </label>
        </th>
        <td>
          <input
            class=\"form-input my-2\"
            type=\"password\"
            name=\"password_confirmation\"
            id=\"password_confirmation\"
          >
        </td>
      </tr>
      <tr class=\"form-group\">
        <th>
          <label class=\"form-label\" for=\"site_name\">
            ";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.info.site-name"]), "html", null, true);
        echo "
          </label>
        </th>
        <td>
          <input
            class=\"form-input\"
            name=\"site_name\"
            type=\"text\"
            id=\"site_name\"
            size=\"25\"
            value=\"";
        // line 75
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config')->getCallable(), ["options.site_name"]), "html", null, true);
        echo "\"
          >
        </td>
      </tr>
      <tr>
        <th></th>
        <td><p><small>";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.info.site-name-notice"]), "html", null, true);
        echo "</small></p></td>
      </tr>
    </table>

    ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "any", [], "any", false, false, false, 85)) {
            // line 86
            echo "      <div class=\"toast toast-error\" role=\"alert\">
        <ul>
          ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", [], "any", false, false, false, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 89
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "        </ul>
      </div>
    ";
        }
        // line 94
        echo "
    <p class=\"step\">
      <input
        type=\"submit\"
        name=\"submit\"
        id=\"submit\"
        class=\"btn btn-primary\"
        value=\"";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.info.button"]), "html", null, true);
        echo "\"
      >
    </p>
  </form>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/setup/wizard/info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 101,  198 => 94,  193 => 91,  184 => 89,  180 => 88,  176 => 86,  174 => 85,  167 => 81,  158 => 75,  145 => 65,  127 => 50,  119 => 45,  108 => 37,  97 => 29,  90 => 25,  79 => 17,  72 => 13,  66 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/setup/wizard/info.twig", "/www/wwwroot/mc.peckot.com/resources/views/setup/wizard/info.twig");
    }
}
