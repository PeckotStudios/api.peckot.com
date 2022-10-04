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

/* /www/wwwroot/mc.peckot.com/resources/views/user/closet.twig */
class __TwigTemplate_6a76bb61c87f5f2821ed56b4112dd0233a51dc9969f24a08d37e150334211c0e extends \TwigBridge\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'before_foot' => [$this, 'block_before_foot'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "user.base";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("user.base", "/www/wwwroot/mc.peckot.com/resources/views/user/closet.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.my-closet"]), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  ";
        echo twig_include($this->env, $context, "shared.grid");
        echo "

  <div id=\"modals\"></div>
";
    }

    // line 11
    public function block_before_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "  <script id=\"blessing-extra\" type=\"application/json\">
    ";
        // line 13
        echo json_encode(($context["extra"] ?? null));
        echo "
  </script>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/user/closet.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  68 => 11,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/user/closet.twig", "/www/wwwroot/mc.peckot.com/resources/views/user/closet.twig");
    }
}
