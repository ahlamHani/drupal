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

/* themes/marinelli/templates/page.html.twig */
class __TwigTemplate_adbcc4de34fa22989f5e5ab7179f28c6a9c6650774e9910a44b9e7937394f22d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 16];
        $filters = ["escape" => 15];
        $functions = ["url" => 66];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['url']
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
        // line 15
        echo "<div class=\"container_12 ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout_width"] ?? null)), "html", null, true);
        echo "\" id=\"totalContainer\">
  ";
        // line 16
        if (($context["topRegion"] ?? null)) {
            // line 17
            echo "    ";
            // line 18
            echo "    <div id=\"top\" class=\"outsidecontent\">
      ";
            // line 19
            if ($this->getAttribute(($context["page"] ?? null), "utility_top", [])) {
                // line 20
                echo "        ";
                // line 21
                echo "        <div class=\"utility\" id=\"topUtility\">
          ";
                // line 22
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "utility_top", [])), "html", null, true);
                echo "
        </div>
        ";
                // line 25
                echo "      ";
            }
            // line 26
            echo "    </div>
    ";
            // line 28
            echo "  ";
        }
        // line 29
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "topbar", [])) {
            // line 30
            echo "    ";
            // line 31
            echo "    <div id=\"topBar\" class=\"outsidecontent\">
      ";
            // line 32
            if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
                // line 33
                echo "        ";
                // line 34
                echo "        <div id=\"search\">
          ";
                // line 35
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
                echo "
        </div>
        ";
                // line 38
                echo "      ";
            }
            // line 39
            echo "      <div id=\"topBarContainer\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout_width"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topbar", [])), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 48
            echo "  ";
        }
        // line 49
        echo "  <div id=\"pageBorder\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["noborder"] ?? null)), "html", null, true);
        echo ">
    ";
        // line 55
        echo "    ";
        // line 56
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "overcontent", [])) {
            // line 57
            echo "      ";
            // line 58
            echo "      <div class=\"grid_12 outofContent\" id=\"overContent\">
        ";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "overcontent", [])), "html", null, true);
            echo "
      </div>
      ";
            // line 62
            echo "    ";
        }
        // line 63
        echo "

    <div id=\"header-images\">
      <a href=\"";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\" class=\"active\">
        <img  src=\"";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/advertise/1.jpg\" alt=\"Description for image 2\" title=\"Title for image 2\">
      </a>


             </div>
      ";
        // line 72
        if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])) {
            // line 73
            echo "      <div id=\"navigation-secondary\" class=\"sitemenu\">
        ";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 77
        echo "    <div id=\"contentWrapper\">
      ";
        // line 83
        echo "      ";
        // line 84
        echo "      <div id=\"innerContent\">
        ";
        // line 86
        echo "        <div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["context_class"] ?? null)), "html", null, true);
        echo "\" id=\"siteContent\">
          ";
        // line 87
        if ($this->getAttribute(($context["page"] ?? null), "overnode", [])) {
            // line 88
            echo "            ";
            // line 89
            echo "            <div class=\"outofnode\" id=\"overNode\">
              ";
            // line 90
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "overnode", [])), "html", null, true);
            echo "
            </div>
            ";
            // line 93
            echo "          ";
        }
        // line 94
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "highlight", [])) {
            // line 95
            echo "            <div id=\"highlight\">
              ";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlight", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 99
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
          ";
        // line 100
        if (($context["title"] ?? null)) {
            // line 101
            echo "            <h1 id=\"page-title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h1>
          ";
        }
        // line 103
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
          ";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
        echo "
          ";
        // line 105
        if (($context["tabs"] ?? null)) {
            // line 106
            echo "            <div class=\"tab-container\">
              ";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 110
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
        // line 111
        if (($context["action_links"] ?? null)) {
            // line 112
            echo "          <ul class=\"action-links\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
            echo "</ul>
        ";
        }
        // line 114
        echo "        ";
        // line 115
        echo "        <div id=\"content\">
          ";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        </div>
        ";
        // line 119
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
        echo "
        ";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "undernode", [])) {
            // line 121
            echo "          ";
            // line 122
            echo "          <div class=\"outofnode\" id=\"underNode\">
            ";
            // line 123
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "undernode", [])), "html", null, true);
            echo "
          </div>
          ";
            // line 126
            echo "        ";
        }
        // line 127
        echo "      </div>
      ";
        // line 129
        echo "      ";
        if ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) || $this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) || ([($context["layout_type_twig"] ?? null) => ($context["options"] ?? null)] != 2))) {
            // line 130
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_class"] ?? null)), "html", null, true);
            echo "\" id=\"sidebarWrapper\">
          ";
            // line 132
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "oversidebars", [])) {
                // line 133
                echo "            <div class=\"outofsidebars grid_6 alpha omega\" id=\"overSidebars\">
              ";
                // line 134
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "oversidebars", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 137
            echo "          ";
            // line 138
            echo "        ";
        }
        // line 139
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 140
            echo "          ";
            // line 141
            echo "          <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_class1"] ?? null)), "html", null, true);
            echo " sidebar\" id=\"sidebar-first\">
            ";
            // line 142
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
          ";
            // line 145
            echo "        ";
        }
        // line 146
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 147
            echo "          ";
            // line 148
            echo "          <div class=\" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_class2"] ?? null)), "html", null, true);
            echo " sidebar\" id=\"sidebar-second\">
            ";
            // line 150
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
          ";
            // line 153
            echo "        ";
        }
        // line 154
        echo "        ";
        if ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) || $this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) || ([($context["layout_type_twig"] ?? null) => ($context["options"] ?? null)] != 2))) {
            // line 155
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "undersidebars", [])) {
                // line 156
                echo "            ";
                // line 157
                echo "            <div class=\"outofsidebars grid_6 alpha omega\" id=\"underSidebars\">
              ";
                // line 158
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "undersidebars", [])), "html", null, true);
                echo "
            </div>
            ";
                // line 161
                echo "          ";
            }
            // line 162
            echo "        </div>
        ";
            // line 164
            echo "      ";
        }
        // line 165
        echo "    </div>
    ";
        // line 167
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "undercontent", [])) {
            // line 168
            echo "      ";
            // line 169
            echo "      <div class=\"grid_12 outofContent\" id=\"underContent\">
        ";
            // line 170
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "undercontent", [])), "html", null, true);
            echo "
      </div>
      ";
            // line 173
            echo "    ";
        }
        // line 174
        echo "  </div>
  ";
        // line 176
        echo "</div>
";
        // line 178
        if (($this->getAttribute(($context["page"] ?? null), "footer", []) || $this->getAttribute(($context["page"] ?? null), "utility_bottom", []))) {
            // line 179
            echo "  ";
            // line 180
            echo "  <div id=\"footer\" class=\"outsidecontent\">
    ";
            // line 181
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
    <div class=\"utility\" id=\"bottomUtility\">
      ";
            // line 183
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "utility_bottom", [])), "html", null, true);
            echo "
    </div>
    ";
            // line 186
            echo "  </div>
  ";
        }
        // line 189
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/marinelli/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 189,  425 => 186,  420 => 183,  415 => 181,  412 => 180,  410 => 179,  408 => 178,  405 => 176,  402 => 174,  399 => 173,  394 => 170,  391 => 169,  389 => 168,  386 => 167,  383 => 165,  380 => 164,  377 => 162,  374 => 161,  369 => 158,  366 => 157,  364 => 156,  361 => 155,  358 => 154,  355 => 153,  349 => 150,  344 => 148,  342 => 147,  339 => 146,  336 => 145,  331 => 142,  326 => 141,  324 => 140,  321 => 139,  318 => 138,  316 => 137,  310 => 134,  307 => 133,  304 => 132,  299 => 130,  296 => 129,  293 => 127,  290 => 126,  285 => 123,  282 => 122,  280 => 121,  278 => 120,  273 => 119,  268 => 116,  265 => 115,  263 => 114,  257 => 112,  255 => 111,  250 => 110,  244 => 107,  241 => 106,  239 => 105,  235 => 104,  230 => 103,  224 => 101,  222 => 100,  217 => 99,  211 => 96,  208 => 95,  205 => 94,  202 => 93,  197 => 90,  194 => 89,  192 => 88,  190 => 87,  185 => 86,  182 => 84,  180 => 83,  177 => 77,  171 => 74,  168 => 73,  166 => 72,  157 => 67,  153 => 66,  148 => 63,  145 => 62,  140 => 59,  137 => 58,  135 => 57,  132 => 56,  130 => 55,  125 => 49,  122 => 48,  116 => 40,  111 => 39,  108 => 38,  103 => 35,  100 => 34,  98 => 33,  96 => 32,  93 => 31,  91 => 30,  88 => 29,  85 => 28,  82 => 26,  79 => 25,  74 => 22,  71 => 21,  69 => 20,  67 => 19,  64 => 18,  62 => 17,  60 => 16,  55 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/marinelli/templates/page.html.twig", "/var/www/html/drupal/themes/marinelli/templates/page.html.twig");
    }
}
