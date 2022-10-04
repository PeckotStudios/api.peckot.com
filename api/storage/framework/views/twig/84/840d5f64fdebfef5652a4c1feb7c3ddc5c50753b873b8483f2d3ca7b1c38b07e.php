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

/* errors.base */
class __TwigTemplate_b3d885458e02c4b249f801c4b489f2c36a9b2b529e844937485587f8f81c2078 extends \TwigBridge\Twig\Template
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
            'message' => [$this, 'block_message'],
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
        echo " - ";
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
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

  <body class=\"bg-gray\">
    ";
        // line 16
        echo twig_include($this->env, $context, "errors.languages");
        echo "
    <div class=\"hero d-flex\">
      <div class=\"hero-body text-center\">
        <h1><a class=\"text-primary\" href=\"";
        // line 19
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("/");
        echo "\">";
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo "</a></h1>
        <div class=\"divider\"></div>
        <h3 style=\"margin-top: 15vh;\">";
        // line 21
        $this->displayBlock('subtitle', $context, $blocks);
        echo "</h3>
        ";
        // line 22
        $this->displayBlock('message', $context, $blocks);
        // line 23
        echo "        <div class=\"divider\"></div>
        ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('auth_user')->getCallable(), []), "admin", [], "any", false, false, false, 24)) {
            // line 25
            echo "          <a class=\"btn btn-link\" href=\"https://blessing.netlify.com/faq.html\" target=\"_blank\">FAQ</a>
        ";
        }
        // line 27
        echo "      </div>
    </div>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 30
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, $context["script"], "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("title", $context, $blocks);
    }

    // line 22
    public function block_message($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "errors.base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 22,  137 => 21,  131 => 8,  125 => 32,  116 => 30,  112 => 29,  108 => 27,  104 => 25,  102 => 24,  99 => 23,  97 => 22,  93 => 21,  86 => 19,  80 => 16,  75 => 13,  66 => 11,  62 => 10,  58 => 9,  52 => 8,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "errors.base", "/www/wwwroot/mc.peckot.com/resources/views/errors/base.twig");
    }
}
