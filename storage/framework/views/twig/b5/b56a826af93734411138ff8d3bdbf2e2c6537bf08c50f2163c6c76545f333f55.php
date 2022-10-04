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

/* shared.copyright */
class __TwigTemplate_caa7cfc665ea638419d1d6afb81ad4ae4940f4f528e62a5a7d9e23e2304ae3d3 extends \TwigBridge\Twig\Template
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
        $context["repo"] = "https://github.com/bs-community/blessing-skin-server";
        // line 2
        echo "
<!-- YOU CAN NOT MODIFIY THE COPYRIGHT TEXT W/O PERMISSION -->
<div id=\"copyright-text\" class=\"float-right d-none d-sm-inline\">
  ";
        // line 5
        if ((($context["copyright"] ?? null) == 0)) {
            // line 6
            echo "    Powered with ❤ by <a href=\"";
            echo twig_escape_filter($this->env, ($context["repo"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">Blessing Skin Server</a>.
  ";
        } elseif ((        // line 7
($context["copyright"] ?? null) == 1)) {
            // line 8
            echo "    Powered by <a href=\"";
            echo twig_escape_filter($this->env, ($context["repo"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">Blessing Skin Server</a>.
  ";
        } elseif ((        // line 9
($context["copyright"] ?? null) == 2)) {
            // line 10
            echo "    Proudly powered by <a href=\"";
            echo twig_escape_filter($this->env, ($context["repo"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">Blessing Skin Server</a>.
  ";
        } elseif ((        // line 11
($context["copyright"] ?? null) == 3)) {
            // line 12
            echo "    由 <a href=\"";
            echo twig_escape_filter($this->env, ($context["repo"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">Blessing Skin Server</a> 强力驱动。
  ";
        } elseif ((        // line 13
($context["copyright"] ?? null) == 4)) {
            // line 14
            echo "    采用 <a href=\"";
            echo twig_escape_filter($this->env, ($context["repo"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">Blessing Skin Server</a> 搭建。
  ";
        } elseif ((        // line 15
($context["copyright"] ?? null) == 5)) {
            // line 16
            echo "    使用 <a href=\"";
            echo twig_escape_filter($this->env, ($context["repo"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">Blessing Skin Server</a> 稳定运行。
  ";
        } else {
            // line 18
            echo "    自豪地采用 <a href=\"";
            echo twig_escape_filter($this->env, ($context["repo"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">Blessing Skin Server</a>。
  ";
        }
        // line 20
        echo "</div>

";
        // line 22
        $context["rules"] = ["{site_name}" => ($context["site_name"] ?? null), "{site_url}" => ($context["site_url"] ?? null)];
        // line 23
        echo twig_replace_filter(($context["custom_copyright"] ?? null), ($context["rules"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "shared.copyright";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  97 => 22,  93 => 20,  87 => 18,  81 => 16,  79 => 15,  74 => 14,  72 => 13,  67 => 12,  65 => 11,  60 => 10,  58 => 9,  53 => 8,  51 => 7,  46 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared.copyright", "/www/wwwroot/mc.peckot.com/resources/views/shared/copyright.twig");
    }
}
