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

/* /www/wwwroot/mc.peckot.com/resources/views/admin/users.twig */
class __TwigTemplate_1500c6380a8ca5b6333d93a07838c077eee4f8046248d0cb4b9010c25e9d7f2b extends \TwigBridge\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'before_foot' => [$this, 'block_before_foot'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.base";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin.base", "/www/wwwroot/mc.peckot.com/resources/views/admin/users.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.user-manage"]), "html", null, true);
    }

    // line 5
    public function block_before_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  ";
        $context["extra"] = ["currentUser" => call_user_func_array($this->env->getFunction('auth_user')->getCallable(), [])];
        // line 7
        echo "  <script id=\"blessing-extra\" type=\"application/json\">
    ";
        // line 8
        echo json_encode(($context["extra"] ?? null));
        echo "
  </script>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/admin/users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/admin/users.twig", "/www/wwwroot/mc.peckot.com/resources/views/admin/users.twig");
    }
}
