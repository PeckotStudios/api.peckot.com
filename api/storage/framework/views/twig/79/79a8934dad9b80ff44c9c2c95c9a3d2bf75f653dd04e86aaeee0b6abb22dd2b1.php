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

/* /www/wwwroot/mc.peckot.com/resources/views/admin/i18n.twig */
class __TwigTemplate_02d95bc28cd7c621ffbf9ea4bf10881b7d23a928b7e5c24a441de6a2d1f7d5f6 extends \TwigBridge\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.base";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin.base", "/www/wwwroot/mc.peckot.com/resources/views/admin/i18n.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.i18n"]), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <div class=\"row\">
    <div class=\"col-lg-8\"><div class=\"card\" id=\"table\"></div></div>
    <div class=\"col-lg-4\">
      <form action=\"";
        // line 9
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("/admin/i18n");
        echo "\" method=\"post\">
        <div class=\"card card-primary\">
          <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.i18n.add"]), "html", null, true);
        echo "</h3>
          </div>
          <div class=\"card-body p-0\">
            ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "any", [], "any", false, false, false, 15)) {
            // line 16
            echo "              <div class=\"alert alert-danger m-3\">
                <i class=\"icon fas fa-exclamation-triangle\"></i>
                ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [], "any", false, false, false, 18), "html", null, true);
            echo "
              </div>
            ";
        } elseif (call_user_func_array($this->env->getFunction('session_pull')->getCallable(), ["success"])) {
            // line 21
            echo "              <div class=\"alert alert-success m-3\">
                <i class=\"icon fas fa-check\"></i>
                ";
            // line 23
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.i18n.added"]), "html", null, true);
            echo "
              </div>
            ";
        }
        // line 26
        echo "            ";
        echo csrf_field();
        echo "
            <div class=\"container-fluid my-4 px-4\">
              <div class=\"row mb-3\">
                <div class=\"col-sm-3\">";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.i18n.group"]), "html", null, true);
        echo "</div>
                <div class=\"col-sm-9\">
                  <input type=\"text\" class=\"form-control\" name=\"group\" required>
                </div>
              </div>
              <div class=\"row my-3\">
                <div class=\"col-sm-3\">";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.i18n.key"]), "html", null, true);
        echo "</div>
                <div class=\"col-sm-9\">
                  <input type=\"text\" class=\"form-control\" name=\"key\" required>
                </div>
              </div>
              <div class=\"row mt-3\">
                <div class=\"col-sm-3\">";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.i18n.text"]), "html", null, true);
        echo "</div>
                <div class=\"col-sm-9\">
                  <input type=\"text\" class=\"form-control\" name=\"text\" required>
                </div>
              </div>
            </div>
          </div>
          <div class=\"card-footer\">
            <input
              type=\"submit\"
              value=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.submit"]), "html", null, true);
        echo "\"
              class=\"btn btn-primary\"
            >
          </div>
        </div>
      </form>
      <a class=\"btn btn-block btn-outline-info\" href=\"https://blessing.netlify.com/ui-text.html\" target=\"_blank\">
        ";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.i18n.tip"]), "html", null, true);
        echo "
      </a>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/admin/i18n.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 58,  135 => 51,  122 => 41,  113 => 35,  104 => 29,  97 => 26,  91 => 23,  87 => 21,  81 => 18,  77 => 16,  75 => 15,  69 => 12,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/admin/i18n.twig", "/www/wwwroot/mc.peckot.com/resources/views/admin/i18n.twig");
    }
}
