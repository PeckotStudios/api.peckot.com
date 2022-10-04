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

/* admin.base */
class __TwigTemplate_871792835d0bbfb450ee295ad4475486b75c80b9b3369562fed0c97346fa82cd extends \TwigBridge\Twig\Template
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
        echo " hold-transition sidebar-mini\">
    <div class=\"wrapper\">
      ";
        // line 10
        echo twig_include($this->env, $context, "shared.header");
        echo "
      ";
        // line 11
        echo twig_include($this->env, $context, "shared.sidebar", ["scope" => "admin"]);
        echo "
      <div class=\"content-wrapper\">
        <div class=\"content-header\">
          <div class=\"container-fluid\">
            <div class=\"d-flex justify-content-between flex-wrap\">
              <div>
                <h1 class=\"m-0\">";
        // line 17
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
              </div>
              <div>
                <div class=\"breadcrumb\"></div>
              </div>
            </div>
          </div>
        </div>
        <section class=\"content\">
          <div class=\"container-fluid\">
            ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "          </div>
        </section>
      </div>
      <footer class=\"main-footer\">
        ";
        // line 32
        echo twig_include($this->env, $context, "shared.copyright");
        echo "
      </footer>
    </div>
    ";
        // line 35
        $this->displayBlock('before_foot', $context, $blocks);
        // line 36
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

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 35
    public function block_before_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "admin.base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  122 => 27,  116 => 5,  107 => 36,  105 => 35,  99 => 32,  93 => 28,  91 => 27,  78 => 17,  69 => 11,  65 => 10,  60 => 8,  52 => 5,  48 => 4,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin.base", "/www/wwwroot/mc.peckot.com/resources/views/admin/base.twig");
    }
}
