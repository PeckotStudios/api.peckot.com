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

/* GPlane\Mojang::bind */
class __TwigTemplate_2530229743a2a82edd85c5538592efb8d9198a6e47681968d1463fc842216c5b extends \TwigBridge\Twig\Template
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
        echo "<form class=\"card card-primary card-outline\">
\t<div class=\"card-header\">
\t\t<h3 class=\"card-title\">
\t\t\t";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["GPlane\\Mojang::bind.title"]), "html", null, true);
        echo "
\t\t</h3>
\t</div>
\t<div class=\"card-body\">
\t\t<div>
\t\t\t";
        // line 9
        echo nl2br(twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["GPlane\\Mojang::bind.description", ["score" => ($context["score"] ?? null)]]), "html", null, true));
        echo "
\t\t</div>
\t</div>
\t<div class=\"card-footer\">
\t\t<a class=\"btn btn-primary\" href=\"/mojang/verify\">
\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["GPlane\\Mojang::bind.verify"]), "html", null, true);
        echo "
\t\t</a>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "GPlane\\Mojang::bind";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  50 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "GPlane\\Mojang::bind", "/www/wwwroot/mc.peckot.com/plugins/mojang-verification/views/bind.twig");
    }
}
