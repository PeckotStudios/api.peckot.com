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

/* shared.user-menu */
class __TwigTemplate_4808e97ac3e78feee419154fbee34fe7bbf6435b9e679e42b4847d3660434101 extends \TwigBridge\Twig\Template
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
        echo "<li class=\"nav-item dropdown user-menu\">
  <a href=\"#\" class=\"nav-link\" data-toggle=\"dropdown\">
    <span class=\"d-none d-sm-inline\" data-mark=\"nickname\">
    <picture>
      <source srcset=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["avatar"] ?? null), "html", null, true);
        echo "\" type=\"image/webp\">
      <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["avatar_png"] ?? null), "html", null, true);
        echo "\" class=\"bs-avatar mr-2\" alt=\"User Image\">
    </picture>
      ";
        // line 8
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nickname", [], "any", true, true, false, 8) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nickname", [], "any", false, false, false, 8)))) ? (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nickname", [], "any", false, false, false, 8)) : (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 8))), "html", null, true);
        echo "
    </span>
  </a>

  <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
    <a class=\"dropdown-item\" href=\"";
        // line 13
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("user");
        echo "\">
      ";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.user-center"]), "html", null, true);
        echo "
    </a>
    <a class=\"dropdown-item\" href=\"";
        // line 16
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("user/profile");
        echo "\">
      ";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.profile"]), "html", null, true);
        echo "
    </a>
    <div class=\"dropdown-divider\"></div>
    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "admin", [], "any", false, false, false, 20)) {
            // line 21
            echo "      <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("admin");
            echo "\">
        ";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.admin-panel"]), "html", null, true);
            echo "
      </a>
      <a class=\"dropdown-item\" href=\"";
            // line 24
            echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("admin/users");
            echo "\">
        ";
            // line 25
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.user-manage"]), "html", null, true);
            echo "
      </a>
      <a class=\"dropdown-item\" href=\"";
            // line 27
            echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("admin/reports");
            echo "\">
        ";
            // line 28
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.report-manage"]), "html", null, true);
            echo "
      </a>
      ";
            // line 30
            if (($context["cli"] ?? null)) {
                // line 31
                echo "        <a class=\"dropdown-item\" href=\"#\" id=\"launch-cli\">
          Web CLI
        </a>
      ";
            }
            // line 35
            echo "      <div class=\"dropdown-divider\"></div>
    ";
        }
        // line 37
        echo "    <a class=\"dropdown-item\" href=\"#\" id=\"logout-button\">
      ";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.logout"]), "html", null, true);
        echo "
    </a>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "shared.user-menu";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 38,  121 => 37,  117 => 35,  111 => 31,  109 => 30,  104 => 28,  100 => 27,  95 => 25,  91 => 24,  86 => 22,  81 => 21,  79 => 20,  73 => 17,  69 => 16,  64 => 14,  60 => 13,  52 => 8,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared.user-menu", "/www/wwwroot/mc.peckot.com/resources/views/shared/user-menu.twig");
    }
}
