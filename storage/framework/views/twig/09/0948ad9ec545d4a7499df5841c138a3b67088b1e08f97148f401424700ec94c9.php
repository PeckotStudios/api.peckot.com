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

/* shared.notifications */
class __TwigTemplate_02b99d41c11b26f81d2a8c2b78700e0b0f39fc45c7b52797323274bd6aeb5494 extends \TwigBridge\Twig\Template
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
        echo "<li
  class=\"nav-item dropdown\"
  data-t=\"";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.no-unread"]), "html", null, true);
        echo "\"
  data-notifications=\"";
        // line 4
        echo twig_escape_filter($this->env, json_encode(($context["notifications"] ?? null)), "html", null, true);
        echo "\"
>
</li>
";
    }

    public function getTemplateName()
    {
        return "shared.notifications";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared.notifications", "/www/wwwroot/mc.peckot.com/resources/views/shared/notifications.twig");
    }
}
