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

/* auth.rows.login.message */
class __TwigTemplate_ecb5d1dae9a2b0a39c4856af8ac3911f6f44335c30d5a56b18d493faea55511b extends \TwigBridge\Twig\Template
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
        if (call_user_func_array($this->env->getFunction('session_has')->getCallable(), ["msg"])) {
            // line 2
            echo "  <div class=\"alert alert-warning\">
    ";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('session_pull')->getCallable(), ["msg"]), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "auth.rows.login.message";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth.rows.login.message", "/www/wwwroot/mc.peckot.com/resources/views/auth/rows/login/message.twig");
    }
}
