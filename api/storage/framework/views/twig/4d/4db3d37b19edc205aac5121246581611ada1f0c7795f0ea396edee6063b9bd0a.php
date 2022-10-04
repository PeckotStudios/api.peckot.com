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

/* /www/wwwroot/mc.peckot.com/plugins/yggdrasil-api/views/config.twig */
class __TwigTemplate_c53e8c22fe8862bc4255a00a1945328bb5ca12db40d6621a2b49d390e0e191b6 extends \TwigBridge\Twig\Template
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
        $this->parent = $this->loadTemplate("admin.base", "/www/wwwroot/mc.peckot.com/plugins/yggdrasil-api/views/config.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Yggdrasil::config.title"]), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <style>
    textarea {
      font-family: \"SFMono-Regular\", Consolas, \"Liberation Mono\", Menlo, Courier, monospace;
    }
  </style>

  <div class=\"row\">
    <div class=\"col-md-6\">
      ";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "common", [], "any", false, false, false, 14);
        echo "
    </div>
    <div class=\"col-md-6\">
      <div class=\"card card-success\">
        <div class=\"card-header\">
          <h3 class=\"card-title\"><i class=\"fa fa-star\"></i> API Root</h3>
        </div>
        <div class=\"card-body\">
          <p>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Yggdrasil::config.url.label"]), "html", null, true);
        echo "<code>";
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("api/yggdrasil");
        echo "</code></p>
          <p>";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Yggdrasil::config.url.notice"]), "html", null, true);
        echo "</p>
        </div>
      </div>

      ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "keypair", [], "any", false, false, false, 27);
        echo "
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/plugins/yggdrasil-api/views/config.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  85 => 23,  79 => 22,  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/plugins/yggdrasil-api/views/config.twig", "/www/wwwroot/mc.peckot.com/plugins/yggdrasil-api/views/config.twig");
    }
}
