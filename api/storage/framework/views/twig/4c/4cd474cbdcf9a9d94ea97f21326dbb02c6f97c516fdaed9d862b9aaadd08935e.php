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

/* /www/wwwroot/mc.peckot.com/resources/views/skinlib/upload.twig */
class __TwigTemplate_7ad039bc31995ce3a1d5975e9516cca216db452fee7455eee054daf67230e844 extends \TwigBridge\Twig\Template
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
        $this->parent = $this->loadTemplate("skinlib.base", "/www/wwwroot/mc.peckot.com/resources/views/skinlib/upload.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["skinlib.upload.title"]), "html", null, true);
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
        // line 22
        echo twig_include($this->env, $context, "shared.grid");
        echo "
        </div>
      </section>
    </div>
  </div>
";
    }

    // line 29
    public function block_before_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  <script id=\"blessing-extra\" type=\"application/json\">
    ";
        // line 31
        echo json_encode(($context["extra"] ?? null));
        echo "
  </script>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/skinlib/upload.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  94 => 30,  90 => 29,  80 => 22,  67 => 12,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/skinlib/upload.twig", "/www/wwwroot/mc.peckot.com/resources/views/skinlib/upload.twig");
    }
}
