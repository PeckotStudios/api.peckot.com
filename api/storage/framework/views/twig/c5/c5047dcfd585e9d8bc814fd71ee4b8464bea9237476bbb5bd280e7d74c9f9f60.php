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

/* shared.header */
class __TwigTemplate_09c95e7bb8b2226f8ddf87b15ffa72a79e1e37cbbdf985a15f51067da02c2d73 extends \TwigBridge\Twig\Template
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
        echo "<nav class=\"main-header navbar navbar-expand navbar-";
        echo twig_escape_filter($this->env, ($context["navbar_color"] ?? null), "html", null, true);
        echo " navbar-";
        echo twig_escape_filter($this->env, ($context["color_mode"] ?? null), "html", null, true);
        echo "\">
  <ul class=\"navbar-nav\">
    <li class=\"nav-item\">
      <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\">
        <i class=\"fas fa-bars\"></i>
      </a>
    </li>
  </ul>

  <ul class=\"navbar-nav ml-auto\">
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("skinlib/upload");
        echo "\">
        <i class=\"fas fa-upload\" aria-hidden=\"true\"></i>&nbsp;
        <span class=\"d-none d-sm-inline\">
          ";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["skinlib.general.upload-new-skin"]), "html", null, true);
        echo "
        </span>
      </a>
    </li>
    ";
        // line 19
        echo twig_include($this->env, $context, "shared.dark-mode");
        echo "
    ";
        // line 20
        echo twig_include($this->env, $context, "shared.notifications");
        echo "
    ";
        // line 21
        echo twig_include($this->env, $context, "shared.languages");
        echo "
    ";
        // line 22
        echo twig_include($this->env, $context, "shared.user-menu");
        echo "
  </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "shared.header";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  75 => 21,  71 => 20,  67 => 19,  60 => 15,  54 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared.header", "/www/wwwroot/mc.peckot.com/resources/views/shared/header.twig");
    }
}
