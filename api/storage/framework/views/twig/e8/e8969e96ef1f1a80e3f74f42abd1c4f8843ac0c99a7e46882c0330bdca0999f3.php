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

/* shared.head */
class __TwigTemplate_6f1942226836946cc94cd795abbfce52b89108d50b702d6d89baf528e0a8777c extends \TwigBridge\Twig\Template
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
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
<meta name=\"csrf-token\" content=\"";
        // line 4
        echo call_user_func_array($this->env->getFunction('csrf_token')->getCallable(), []);
        echo "\">
<meta name=\"theme-color\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["theme_color"] ?? null), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "keywords", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
<meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
";
        // line 8
        echo strip_tags(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "extra", [], "any", false, false, false, 8), "<meta>");
        echo "
<link rel=\"preconnect\" href=\"https://unpkg.com/\" crossorigin>
";
        // line 10
        if (($context["custom_cdn_host"] ?? null)) {
            // line 11
            echo "  <link rel=\"preconnect\" href=\"";
            echo twig_escape_filter($this->env, ($context["custom_cdn_host"] ?? null), "html", null, true);
            echo "\" id=\"cdn-host\" crossorigin>
";
        }
        // line 13
        echo "<script id=\"blessing-globals\" type=\"application/json\">";
        echo json_encode(($context["blessing"] ?? null));
        echo "</script>
<script src=\"";
        // line 14
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("/meta.js");
        echo "\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/@fortawesome/fontawesome-free@5.15.4/css/all.min.css\" crossorigin>
";
        // line 16
        echo twig_include($this->env, $context, "assets.style", array(), true, true);
        echo "
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 18
            echo "  <link";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["link"]);
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo $context["value"];
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, ($context["favicon"] ?? null), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["favicon"] ?? null), "html", null, true);
        echo "\" sizes=\"192x192\">
<link rel=\"apple-touch-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["favicon"] ?? null), "html", null, true);
        echo "\" sizes=\"180x180\">
";
        // line 23
        if (($context["inline_css"] ?? null)) {
            // line 24
            echo "  <style>";
            echo strip_tags(($context["inline_css"] ?? null));
            echo "</style>
";
        }
        // line 26
        echo twig_join_filter(($context["extra_head"] ?? null), "
");
        echo "
";
    }

    public function getTemplateName()
    {
        return "shared.head";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 26,  124 => 24,  122 => 23,  118 => 22,  114 => 21,  109 => 20,  89 => 18,  85 => 17,  81 => 16,  76 => 14,  71 => 13,  65 => 11,  63 => 10,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared.head", "/www/wwwroot/mc.peckot.com/resources/views/shared/head.twig");
    }
}
