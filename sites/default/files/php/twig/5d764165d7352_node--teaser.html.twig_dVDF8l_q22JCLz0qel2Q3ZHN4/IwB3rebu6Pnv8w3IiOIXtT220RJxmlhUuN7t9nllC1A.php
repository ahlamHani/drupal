<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/marinelli/templates/node--teaser.html.twig */
class __TwigTemplate_e50a1072c2ea0f08c50b457cc8ad1ff59d2a4b75a31b6f8de8f76a2c679d3008 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 15, "set" => 29];
        $filters = ["escape" => 10, "format_date" => 30, "date" => 32, "t" => 46];
        $functions = ["date" => 29];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'format_date', 'date', 't'],
                ['date']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 8
        echo "

<div class=\"teaser-container ";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
\t<div class=\"teaser-content\">
\t\t<h2 class=\"teaser-title\">
\t\t";
        // line 14
        echo "\t\t   ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 15
        if ( !($context["page"] ?? null)) {
            // line 16
            echo "      <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method")), "html", null, true);
            echo ">
        <a href=\"";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
      </h2>
    ";
        }
        // line 20
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
\t\t";
        // line 21
        if (($context["sticky"] ?? null)) {
            // line 22
            echo "\t\t\t<span class=\"teaser-sticky\">";
            echo "</span>
\t\t";
        }
        // line 24
        echo "\t\t</h2>
\t\t";
        // line 25
        if (($context["display_submitted"] ?? null)) {
            // line 26
            echo "\t\t\t<div class=\"teaser-created\">

   ";
            // line 28
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "created", []), "value", []) || $this->getAttribute($this->getAttribute(($context["node"] ?? null), "changed", [], "any", false, true), "value", [], "any", true, true))) {
                // line 29
                echo "  ";
                $context["node_pub"] = twig_date_converter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "created", []), "value", [])));
                // line 30
                echo "  ";
                $context["node_upd"] = call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "changed", []), "value", []))]);
                // line 31
                echo "\t\t\t\t<div class=\"teaser-created-month\">
\t\t\t\t\t";
                // line 32
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_pub"] ?? null)), "M"), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"teaser-created-day\">
\t\t\t\t\t";
                // line 35
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_pub"] ?? null)), "d"), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 38
            echo "\t\t\t</div>
\t\t";
        }
        // line 40
        echo "\t\t\t<div class=\"teaser-text\">
\t\t";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
      \t\t</div>
\t</div>
  <div class=\"teaser-meta\">
  ";
        // line 45
        if (($context["display_submitted"] ?? null)) {
            // line 46
            echo "    <strong class=\"teaser-author\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Posted By"));
            echo "</strong> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 48
        echo "    <span class=\"teaser-readmore\">";
        echo "</span>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/marinelli/templates/node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 48,  147 => 46,  145 => 45,  138 => 41,  135 => 40,  131 => 38,  125 => 35,  119 => 32,  116 => 31,  113 => 30,  110 => 29,  108 => 28,  104 => 26,  102 => 25,  99 => 24,  94 => 22,  92 => 21,  87 => 20,  79 => 17,  74 => 16,  72 => 15,  67 => 14,  59 => 10,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/marinelli/templates/node--teaser.html.twig", "/var/www/html/drupal/themes/marinelli/templates/node--teaser.html.twig");
    }
}
