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

/* sites/all/themes/manualsness/templates/page--tv.html.twig */
class __TwigTemplate_8e4121ab4a14f80caef0e8333187af72f931230a2247dc12b736eba9a3a1b004 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        // line 1
        echo "<meta http-equiv=\"refresh\" content=\"1555\">
<style>
  html,body,.dialog-off-canvas-main-canvas {
    min-height:100%;
    height:100%;
    margin:0;
    background:black;
  }
  #kaiosVideo {
    width: 100%
  }
  .center {
    top:50%;
    position:relative;
    transform: translateY(-50%); /* and all the browser variants of this */
  }
</style>
<video id=\"kaiosVideo\"class=\"center\" controls=\"controls\"  autoplay=\"autoplay\" playsinline  muted loop=\"true\">
  <source id=\"kaiosVideoSource\" src=\"\"> </source>
</video>

<script>
  document.getElementById('kaiosVideoSource').src = 'sites/default/files/Test.mp4?v=' + Math.random();
</script>
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/manualsness/templates/page--tv.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "sites/all/themes/manualsness/templates/page--tv.html.twig", "/home/hb/Development/drupal/sites/all/themes/manualsness/templates/page--tv.html.twig");
    }
}
