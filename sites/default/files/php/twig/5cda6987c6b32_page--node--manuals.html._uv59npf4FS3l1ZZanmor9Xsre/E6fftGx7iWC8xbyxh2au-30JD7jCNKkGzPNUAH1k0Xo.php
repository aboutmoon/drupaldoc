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

/* sites/all/themes/manualsness/templates/page--node--manuals.html.twig */
class __TwigTemplate_2c7f2b14a86ede12a11f8438f595461ec48efe4c47c5173e297f428229bbd66a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 67];
        $filters = ["t" => 58];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t'],
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
        // line 55
        echo "<div id=\"page-wrapper\">
    <div id=\"page\">

        <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
            <div class=\"section layout-container clearfix\">
                ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "
                ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
                ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
            </div>
        </header>

        <div id=\"content-container\">
            ";
        // line 67
        if ($this->getAttribute(($context["page"] ?? null), "left_column", [])) {
            // line 68
            echo "                <div id=\"left-column\">
                    <div id=\"left-col-header\"></div>
                    <div id=\"toc\">
                        ";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "left_column", [])), "html", null, true);
            echo "
                    </div>

                </div>
            ";
        }
        // line 76
        echo "            <div id=\"main-column\">
                <div id=\"main\">
                    <div id=\"main-content\">
                        <div id=\"main-col-body\">
                            ";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
                        </div>
                        <div id=\"main-col-footer\"></div>
                    </div>
                </div>
                <div id=\"right-expanded\">
                    <div id=\"right-content-wrapper\">
                        <div id=\"pagetoc\">
                            <p>On this page:</p>
                            <ul class=\"pagetoc\">

                            </ul>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/manualsness/templates/page--node--manuals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 80,  96 => 76,  88 => 71,  83 => 68,  81 => 67,  73 => 62,  69 => 61,  65 => 60,  60 => 58,  55 => 55,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "sites/all/themes/manualsness/templates/page--node--manuals.html.twig", "/home/hb/Development/drupal/sites/all/themes/manualsness/templates/page--node--manuals.html.twig");
    }
}
