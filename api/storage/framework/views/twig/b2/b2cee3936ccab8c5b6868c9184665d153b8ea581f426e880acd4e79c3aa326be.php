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

/* Yggdrasil::dnd */
class __TwigTemplate_dbaf0a6acc9da5fb3fb717f43906aa105eb463ce53da9648688a002aa0c85ed6 extends \TwigBridge\Twig\Template
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
        echo "<div class=\"card card-success card-outline\">
  <div class=\"card-header\">
    <h3 class=\"card-title\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Yggdrasil::dnd.title"]), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"card-body\">
    <p>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Yggdrasil::dnd.url"]), "html", null, true);
        echo "<code>";
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("/api/yggdrasil");
        echo "</code></p>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Yggdrasil::dnd.tip"]), "html", null, true);
        echo "</p>
  </div>
  <div class=\"card-footer\">
    <button
      id=\"ygg-dnd-button\"
      class=\"btn btn-primary\"
      draggable=\"true\"
      data-clipboard-text=\"";
        // line 14
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("/api/yggdrasil");
        echo "\"
    >
      ";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Yggdrasil::dnd.button"]), "html", null, true);
        echo "
    </button>
    <a
      class=\"btn btn-default ml-2\"
      target=\"_blank\"
      href=\"https://blessing.netlify.app/yggdrasil-api/authlib-injector.html\"
    >
      ";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Yggdrasil::dnd.guide"]), "html", null, true);
        echo "
    </a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Yggdrasil::dnd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  68 => 16,  63 => 14,  53 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Yggdrasil::dnd", "/www/wwwroot/mc.peckot.com/plugins/yggdrasil-api/views/dnd.twig");
    }
}
