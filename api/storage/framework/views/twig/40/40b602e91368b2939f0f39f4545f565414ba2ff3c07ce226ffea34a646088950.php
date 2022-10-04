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

/* /www/wwwroot/mc.peckot.com/resources/views/skinlib/show.twig */
class __TwigTemplate_461722f04263f72bc9e933dc4be608e5f3085a9e4f281bef6cd6847275e1a44a extends \TwigBridge\Twig\Template
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
            'before_foot' => [$this, 'block_before_foot'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "skinlib.base";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("skinlib.base", "/www/wwwroot/mc.peckot.com/resources/views/skinlib/show.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["texture"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <div class=\"content-wrapper\">
    <div class=\"container\">
      <div class=\"content-header\">
        <div class=\"container-fluid\">
          <div class=\"d-flex justify-content-between flex-wrap\">
            <div>
              <h1 class=\"m-0\">";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["skinlib.show.title"]), "html", null, true);
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
        // line 23
        echo twig_include($this->env, $context, "shared.grid");
        echo "
        </div>
      </section>
    </div>
  </div>

  <div id=\"modals\"></div>
";
    }

    // line 32
    public function block_before_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "  <script id=\"blessing-extra\" type=\"application/json\">
    ";
        // line 34
        echo json_encode(($context["extra"] ?? null));
        echo "
  </script>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/skinlib/show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  97 => 33,  93 => 32,  81 => 23,  67 => 12,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/skinlib/show.twig", "/www/wwwroot/mc.peckot.com/resources/views/skinlib/show.twig");
    }
}
