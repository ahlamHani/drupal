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

/* themes/marinelli/templates/node.html.twig */
class __TwigTemplate_b256ba6ab2de6de9d113f0a36990b2ad3531a0755c4cd03e87f084640fff66fc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5];
        $filters = ["escape" => 3, "t" => 7];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
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
        // line 2
        echo "
<div id=\"node-";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "id", [])), "html", null, true);
        echo "\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  <div class=\"node-container\">
    ";
        // line 5
        if (($context["display_submitted"] ?? null)) {
            // line 6
            echo "      <div class=\"submitted-info\">
      ";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("posted by"));
            echo "
      <span class=\"node-name\">";
            // line 8
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
            echo "</span>
      ";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("on"));
            echo "
      <span class=\"node-date\">";
            // line 10
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true);
            echo "</span>
      ";
            // line 11
            if ( !($context["node"] ?? null)) {
                // line 12
                echo "        <span class=\"node-status-unpublished\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("unpublished"));
                echo "</span>
      ";
            }
            // line 14
            echo "      </div>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null)), "html", null, true);
        echo "

    <div class=\"nodecontent\"";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo ">
      ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
      ";
        // line 21
        if ( !($context["page"] ?? null)) {
            // line 22
            echo "        <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo ">
          <a href=\"";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</a>
        </h2>
      ";
        }
        // line 26
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
      ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
    </div>
    ";
        // line 29
        if (($context["content"] ?? null)) {
            // line 30
            echo "      <div class=\"links-container\">
        ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "links", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 34
        echo "    ";
        if ( !($context["teaser"] ?? null)) {
            // line 35
            echo "      <div class=\"clearfix\">
        ";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comments", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 39
        echo "  </div><!--end node container-->
</div><!--end node-->";
    }

    public function getTemplateName()
    {
        return "themes/marinelli/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 39,  158 => 36,  155 => 35,  152 => 34,  146 => 31,  143 => 30,  141 => 29,  136 => 27,  131 => 26,  123 => 23,  118 => 22,  116 => 21,  112 => 20,  108 => 19,  103 => 17,  100 => 16,  96 => 14,  90 => 12,  88 => 11,  84 => 10,  80 => 9,  76 => 8,  72 => 7,  69 => 6,  67 => 5,  58 => 3,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/marinelli/templates/node.html.twig", "/var/www/html/drupal/themes/marinelli/templates/node.html.twig");
    }
}
