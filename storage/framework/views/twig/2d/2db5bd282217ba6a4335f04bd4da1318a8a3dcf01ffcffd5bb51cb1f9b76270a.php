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

/* /www/wwwroot/mc.peckot.com/resources/views/admin/update.twig */
class __TwigTemplate_115b10923effef222c501fedb873b3fd10bd05905a5caf43ff0603d00fea8d0b extends \TwigBridge\Twig\Template
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
        $this->parent = $this->loadTemplate("admin.base", "/www/wwwroot/mc.peckot.com/resources/views/admin/update.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.check-update"]), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <div class=\"row\">
    <div class=\"col-md-6\">
      <div class=\"card card-primary\">
        <div class=\"card-header\">
          <h3 class=\"card-title\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.update.info.title"]), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"card-body\">
          ";
        // line 13
        if (($context["can_update"] ?? null)) {
            // line 14
            echo "            <div class=\"callout callout-info\">
              ";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.update.info.available"]), "html", null, true);
            echo "
            </div>
            <div class=\"container-fluid\">
              <div class=\"row mb-3\">
                <div class=\"col-sm-4\">
                  ";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.update.info.versions.latest"]), "html", null, true);
            echo "
                </div>
                <div class=\"col-sm-8\">
                  v";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "latest", [], "any", false, false, false, 23), "html", null, true);
            echo "
                </div>
              </div>
              <div class=\"row mt-3\">
                <div class=\"col-sm-4\">
                  ";
            // line 28
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.update.info.versions.current"]), "html", null, true);
            echo "
                </div>
                <div class=\"col-sm-8\">
                  v";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "current", [], "any", false, false, false, 31), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          ";
        } else {
            // line 36
            echo "            ";
            if (($context["error"] ?? null)) {
                // line 37
                echo "              <div class=\"callout callout-danger\">
                ";
                // line 38
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.update.errors.connection", ["error" => ($context["error"] ?? null)]]), "html", null, true);
                echo "
              </div>
            ";
            } else {
                // line 41
                echo "              <div class=\"callout callout-success\">
                ";
                // line 42
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.update.info.up-to-date"]), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 45
            echo "            <div class=\"container-fluid\">
              <div class=\"row\">
                <div class=\"col-sm-4\">
                  ";
            // line 48
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.update.info.versions.current"]), "html", null, true);
            echo "
                </div>
                <div class=\"col-sm-8\">
                  v";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "current", [], "any", false, false, false, 51), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          ";
        }
        // line 56
        echo "        </div>
        <div class=\"card-footer\">
          ";
        // line 58
        if (($context["can_update"] ?? null)) {
            // line 59
            echo "            <button class=\"btn bg-primary\" id=\"update\">
              ";
            // line 60
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.update.info.button"]), "html", null, true);
            echo "
            </button>
          ";
        } else {
            // line 63
            echo "            <button class=\"btn bg-primary\" disabled=\"disabled\">
              ";
            // line 64
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.update.info.button"]), "html", null, true);
            echo "
            </button>
          ";
        }
        // line 67
        echo "          <a
            target=\"_blank\"
            class=\"btn btn-default float-right\"
            href=\"https://github.com/bs-community/blessing-skin-server/releases\"
          >
            ";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.update.info.check-github"]), "html", null, true);
        echo "
          </a>
        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"card card-info\">
        <div class=\"card-header\">
          <h3 class=\"card-title\">
            ";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.update.cautions.title"]), "html", null, true);
        echo "
          </h3>
        </div>
        <div class=\"card-body\">
          ";
        // line 85
        echo nl2br(twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.update.cautions.text"]), "html", null, true));
        echo "
          <a target=\"_blank\" href=\"https://blessing.netlify.com/update-sources.html\">
            ";
        // line 87
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.update.cautions.link"]), "html", null, true);
        echo "
          </a>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/admin/update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 87,  201 => 85,  194 => 81,  182 => 72,  175 => 67,  169 => 64,  166 => 63,  160 => 60,  157 => 59,  155 => 58,  151 => 56,  143 => 51,  137 => 48,  132 => 45,  126 => 42,  123 => 41,  117 => 38,  114 => 37,  111 => 36,  103 => 31,  97 => 28,  89 => 23,  83 => 20,  75 => 15,  72 => 14,  70 => 13,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/admin/update.twig", "/www/wwwroot/mc.peckot.com/resources/views/admin/update.twig");
    }
}
