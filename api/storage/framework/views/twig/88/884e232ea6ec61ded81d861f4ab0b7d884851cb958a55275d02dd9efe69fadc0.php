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

/* /www/wwwroot/mc.peckot.com/resources/views/user/index.twig */
class __TwigTemplate_ada9d1757bfa06e0d89156fa56d7e528964159aba5eecc288c159d5ae0153b15 extends \TwigBridge\Twig\Template
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
        $this->parent = $this->loadTemplate("user.base", "/www/wwwroot/mc.peckot.com/resources/views/user/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.dashboard"]), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  ";
        echo twig_include($this->env, $context, "shared.grid");
        echo "

  <div id=\"modal-score-instruction\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.score-intro.title"]), "html", null, true);
        echo "</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          ";
        // line 18
        echo nl2br(twig_escape_filter($this->env, ($context["score_intro"] ?? null), "html", null, true));
        echo "
          <hr />
          <div class=\"row\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rates"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 22
            echo "              <div class=\"col-md-4\">
                <p class=\"text-center\">
                  ";
            // line 24
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), [("user.score-intro.rates." . $context["key"]), ["score" => $context["value"]]]), "html", null, true);
            echo "
                </p>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "          </div>
        </div>
        <div class=\"modal-footer\">
          <button class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.close"]), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 38
    public function block_before_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "  <script id=\"blessing-extra\" type=\"application/json\">
    ";
        // line 40
        echo json_encode(($context["extra"] ?? null));
        echo "
  </script>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/user/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  121 => 39,  117 => 38,  107 => 31,  102 => 28,  92 => 24,  88 => 22,  84 => 21,  78 => 18,  69 => 12,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/user/index.twig", "/www/wwwroot/mc.peckot.com/resources/views/user/index.twig");
    }
}
