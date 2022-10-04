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

/* auth.rows.register.notice */
class __TwigTemplate_b67c1f36576c20449a707521b6999ff6bf80f9d6678571b8711ca618a91291f7 extends \TwigBridge\Twig\Template
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
        echo "<p class=\"login-box-msg\">
  ";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["auth.register.message", ["sitename" => ($context["site_name"] ?? null)]]), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "auth.rows.register.notice";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth.rows.register.notice", "/www/wwwroot/mc.peckot.com/resources/views/auth/rows/register/notice.twig");
    }
}
