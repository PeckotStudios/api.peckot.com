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

/* skinlib.base */
class __TwigTemplate_59fcfac77fae66f76b75dad3db17e15fff391a6eda15354c64e10b36c34f70ae extends \TwigBridge\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'before_foot' => [$this, 'block_before_foot'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "\">
  <head>
    ";
        // line 4
        echo twig_include($this->env, $context, "shared.head");
        echo "
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo "</title>
  </head>

  <body class=\"";
        // line 8
        echo ((($context["dark_mode"] ?? null)) ? ("dark-mode") : (""));
        echo " hold-transition layout-top-nav\">
    <div class=\"wrapper\">
      <nav class=\"main-header navbar navbar-expand navbar-";
        // line 10
        echo twig_escape_filter($this->env, ($context["navbar_color"] ?? null), "html", null, true);
        echo " navbar-";
        echo twig_escape_filter($this->env, ($context["color_mode"] ?? null), "html", null, true);
        echo " ml-0\">
        <div class=\"container\">
          <div class=\"navbar-header\">
            <a href=\"";
        // line 13
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("/");
        echo "\" class=\"navbar-brand\">";
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo "</a>
          </div>

          <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("skinlib");
        echo "\">
                  ";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.skinlib"]), "html", null, true);
        echo "
                </a>
              </li>
              ";
        // line 23
        if (call_user_func_array($this->env->getFunction('auth_check')->getCallable(), [])) {
            // line 24
            echo "                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
            // line 25
            echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("user/closet");
            echo "\">
                    ";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.my-closet"]), "html", null, true);
            echo "
                  </a>
                </li>
              ";
        }
        // line 30
        echo "            </ul>
          </div>

          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
              ";
        // line 35
        if (call_user_func_array($this->env->getFunction('auth_check')->getCallable(), [])) {
            // line 36
            echo "                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
            // line 37
            echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("skinlib/upload");
            echo "\">
                    <i class=\"fas fa-upload\" aria-hidden=\"true\"></i>&nbsp;
                    <span class=\"d-none d-sm-inline\">
                      ";
            // line 40
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["skinlib.general.upload-new-skin"]), "html", null, true);
            echo "
                    </span>
                  </a>
                </li>
                ";
            // line 44
            echo twig_include($this->env, $context, "shared.notifications");
            echo "
              ";
        }
        // line 46
        echo "              ";
        echo twig_include($this->env, $context, "shared.languages");
        echo "
              ";
        // line 47
        if (call_user_func_array($this->env->getFunction('auth_check')->getCallable(), [])) {
            // line 48
            echo "                ";
            echo twig_include($this->env, $context, "shared.user-menu");
            echo "
              ";
        } else {
            // line 50
            echo "                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
            // line 51
            echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("auth/login");
            echo "\">
                    <i class=\"fas fa-user\"></i>
                    <span class=\"d-none d-sm-inline\">
                      ";
            // line 54
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.anonymous"]), "html", null, true);
            echo "
                    </span>
                  </a>
                </li>
              ";
        }
        // line 59
        echo "            </ul>
          </div>
        </div>
      </nav>

      ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "
      <footer class=\"main-footer\">
        <div class=\"container\">
          ";
        // line 68
        echo twig_include($this->env, $context, "shared.copyright");
        echo "
        </div>
      </footer>
    </div>
    ";
        // line 72
        $this->displayBlock('before_foot', $context, $blocks);
        // line 73
        echo "    ";
        echo twig_include($this->env, $context, "shared.foot");
        echo "
  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 64
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 72
    public function block_before_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "skinlib.base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 72,  208 => 64,  202 => 5,  193 => 73,  191 => 72,  184 => 68,  179 => 65,  177 => 64,  170 => 59,  162 => 54,  156 => 51,  153 => 50,  147 => 48,  145 => 47,  140 => 46,  135 => 44,  128 => 40,  122 => 37,  119 => 36,  117 => 35,  110 => 30,  103 => 26,  99 => 25,  96 => 24,  94 => 23,  88 => 20,  84 => 19,  73 => 13,  65 => 10,  60 => 8,  52 => 5,  48 => 4,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "skinlib.base", "/www/wwwroot/mc.peckot.com/resources/views/skinlib/base.twig");
    }
}
