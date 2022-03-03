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

/* server/privileges/add_user_fieldset.twig */
class __TwigTemplate_642da7b7013b821986422fd0cf62e1ab0d0e2a3c7a839ca79c649ae333e9436b extends \Twig\Template
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
        echo "<div class=\"row\">
<div class=\"col-12\">
    <fieldset id=\"fieldset_add_user\">
        <legend>";
        // line 4
        echo _pgettext(        "Create new user", "New");
        echo "</legend>
        <a id=\"add_user_anchor\" href=\"";
        // line 5
        echo PhpMyAdmin\Url::getFromRoute("/server/privileges", ($context["url_params"] ?? null));
        echo "\"
            ";
        // line 6
        if ( !twig_test_empty(($context["rel_params"] ?? null))) {
            // line 7
            echo "                rel=\"";
            echo PhpMyAdmin\Url::getCommon(($context["rel_params"] ?? null));
            echo "\"
            ";
        }
        // line 8
        echo ">
            ";
        // line 9
        echo \PhpMyAdmin\Html\Generator::getIcon("b_usradd");
        echo _gettext("Add user account");
        echo "</a>
    </fieldset>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "server/privileges/add_user_fieldset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  58 => 8,  52 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/add_user_fieldset.twig", "C:\\Apache24\\htdocs\\phpmyadmin\\templates\\server\\privileges\\add_user_fieldset.twig");
    }
}
