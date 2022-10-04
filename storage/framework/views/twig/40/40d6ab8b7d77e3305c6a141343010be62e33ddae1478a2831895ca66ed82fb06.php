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

/* /www/wwwroot/mc.peckot.com/resources/views/errors/404.twig */
class __TwigTemplate_97a1d770e5796e0a41e7a5db6f7dd49eed5dd20c2d64eb7c2fef5103130404cc extends \TwigBridge\Twig\Template
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
        $this->parent = $this->loadTemplate("errors.base", "/www/wwwroot/mc.peckot.com/resources/views/errors/404.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "404 Not Found";
    }

    // line 5
    public function block_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <p>
    ";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["errors.exception.detail", ["msg" => ((twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", [], "any", false, false, false, 7)) ? (twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", [], "any", false, false, false, 7)) : (call_user_func_array($this->env->getFunction('trans')->getCallable(), ["errors.http.msg-404"])))]]), "html", null, true);
        echo "
  </p>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/errors/404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/errors/404.twig", "/www/wwwroot/mc.peckot.com/resources/views/errors/404.twig");
    }
}
