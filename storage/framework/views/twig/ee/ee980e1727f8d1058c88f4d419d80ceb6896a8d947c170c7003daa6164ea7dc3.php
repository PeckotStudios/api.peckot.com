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

/* /www/wwwroot/mc.peckot.com/resources/views/errors/pretty.twig */
class __TwigTemplate_5a5feebb60cae6c52e2e86f37d6ce7208bdfc9b12c3fbb7b44968653ab77457a extends \TwigBridge\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'message' => [$this, 'block_message'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "errors.base";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("errors.base", "/www/wwwroot/mc.peckot.com/resources/views/errors/pretty.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["errors.general.title"]), "html", null, true);
    }

    // line 5
    public function block_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <p>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["errors.exception.code", ["code" => ($context["code"] ?? null)]]), "html", null, true);
        echo "</p>
  <p>";
        // line 7
        echo nl2br(twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["errors.exception.detail", ["msg" => ($context["message"] ?? null)]]), "html", null, true));
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/errors/pretty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/errors/pretty.twig", "/www/wwwroot/mc.peckot.com/resources/views/errors/pretty.twig");
    }
}
