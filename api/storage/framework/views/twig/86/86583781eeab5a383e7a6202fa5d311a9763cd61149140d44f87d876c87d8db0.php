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

/* Blessing\OAuthCore::providers */
class __TwigTemplate_33ed33e42a6559f284e9bb1dd07b68da7b193864b03e50fcff7d4e65d1723450 extends \TwigBridge\Twig\Template
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
        if ((twig_length_filter($this->env, ($context["providers"] ?? null)) > 0)) {
            // line 2
            echo "  <div class=\"my-3 text-center\">
    <div class=\"mb-1\">";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Blessing\\OAuthCore::providers.title"]), "html", null, true);
            echo "</div>
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["providers"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["provider"]) {
                // line 5
                echo "      <a href=\"";
                echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url(("/auth/login/" . $context["name"]));
                echo "\" class=\"btn btn-block bg-light border-secondary\">
        <i class=\"fab fa-";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provider"], "icon", [], "any", false, false, false, 6), "html", null, true);
                echo "\"></i>&nbsp;
        ";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provider"], "displayName", [], "any", false, false, false, 7), "html", null, true);
                echo "
      </a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['provider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "Blessing\\OAuthCore::providers";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  59 => 7,  55 => 6,  50 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Blessing\\OAuthCore::providers", "/www/wwwroot/mc.peckot.com/plugins/oauth/views/providers.twig");
    }
}
