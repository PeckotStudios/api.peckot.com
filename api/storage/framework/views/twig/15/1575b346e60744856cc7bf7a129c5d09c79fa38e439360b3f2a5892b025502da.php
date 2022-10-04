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

/* setup.base */
class __TwigTemplate_f671e29cd08c753bdd86f92da63d362012c716feaa9581342b498b1279ce87ce extends \TwigBridge\Twig\Template
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
            'subtitle' => [$this, 'block_subtitle'],
            'content' => [$this, 'block_content'],
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
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 9
        echo twig_include($this->env, $context, "assets.spectre", array(), true, true);
        echo "
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 11
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["style"], "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </head>

  <body class=\"bg-secondary\">
    ";
        // line 16
        echo twig_include($this->env, $context, "errors.languages");
        echo "
    <div class=\"hero d-flex\">
      <div class=\"hero-body\">
        <h1 class=\"text-center\">
          <a class=\"text-primary\" href=\"https://github.com/bs-community/blessing-skin-server\">
            Blessing Skin Server
          </a>
        </h1>
        <div class=\"divider\"></div>
        <h3>";
        // line 25
        $this->displayBlock('subtitle', $context, $blocks);
        echo "</h3>
        <div class=\"divider\"></div>
        ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "      </div>
    </div>
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, $context["script"], "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["setup.wizard.master.title"]), "html", null, true);
    }

    // line 25
    public function block_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("title", $context, $blocks);
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "setup.base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 27,  127 => 25,  120 => 8,  114 => 33,  105 => 31,  101 => 30,  97 => 28,  95 => 27,  90 => 25,  78 => 16,  73 => 13,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setup.base", "/www/wwwroot/mc.peckot.com/resources/views/setup/base.twig");
    }
}
