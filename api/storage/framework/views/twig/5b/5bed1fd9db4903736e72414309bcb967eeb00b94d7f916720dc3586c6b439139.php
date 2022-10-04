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

/* auth.base */
class __TwigTemplate_cda3b58f51c3865eec20657c7248ef769f5e51ec929b964126932432e35deef2 extends \TwigBridge\Twig\Template
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

  <body class=\"hold-transition login-page\">
    <div class=\"login-box\">
      <div class=\"login-logo\">
        <a href=\"";
        // line 11
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("/");
        echo "\">";
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo "</a>
      </div>

      <div class=\"card\">
        <div class=\"card-body login-card-body\">
          ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "        </div>
      </div>
    </div>

    ";
        // line 21
        $this->displayBlock('before_foot', $context, $blocks);
        // line 22
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

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_before_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "auth.base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 21,  98 => 16,  92 => 5,  83 => 22,  81 => 21,  75 => 17,  73 => 16,  63 => 11,  52 => 5,  48 => 4,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth.base", "/www/wwwroot/mc.peckot.com/resources/views/auth/base.twig");
    }
}
