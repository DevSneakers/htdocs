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

/* table/find_replace/index.twig */
class __TwigTemplate_e1bc9086019db788c21700a890cc900bb4464704381722620ce0fa9e996db80c extends \Twig\Template
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
        echo "<ul class=\"nav nav-pills m-2\">
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 3
        echo PhpMyAdmin\Url::getFromRoute("/table/search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "pos" => 0]);
        echo "\">
      ";
        // line 4
        echo \PhpMyAdmin\Html\Generator::getIcon("b_search", _gettext("Table search"));
        echo "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 9
        echo PhpMyAdmin\Url::getFromRoute("/table/zoom-search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
        echo "\">
      ";
        // line 10
        echo \PhpMyAdmin\Html\Generator::getIcon("b_select", _gettext("Zoom search"));
        echo "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"";
        // line 15
        echo PhpMyAdmin\Url::getFromRoute("/table/find-replace", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
        echo "\">
      ";
        // line 16
        echo \PhpMyAdmin\Html\Generator::getIcon("b_find_replace", _gettext("Find and replace"));
        echo "
    </a>
  </li>
</ul>

<form method=\"post\" action=\"";
        // line 21
        echo PhpMyAdmin\Url::getFromRoute("/table/find-replace");
        echo "\" name=\"insertForm\" id=\"find_replace_form\" class=\"ajax lock-page\">
  ";
        // line 22
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"back\" value=\"";
        // line 24
        echo PhpMyAdmin\Url::getFromRoute("/table/find-replace");
        echo "\">

  <fieldset id=\"fieldset_find_replace\">
    <fieldset id=\"fieldset_find\">
      <legend>
        ";
        // line 29
        echo _gettext("Find and replace");
        // line 30
        echo "      </legend>

      <label for=\"findInput\">";
        // line 32
        echo _gettext("Find:");
        echo "</label>
      <input type=\"text\" value=\"\" name=\"find\" id=\"findInput\" required>

      <label for=\"replaceWithInput\">";
        // line 35
        echo _gettext("Replace with:");
        echo "</label>
      <input type=\"text\" value=\"\" name=\"replaceWith\" id=\"replaceWithInput\">

      <label for=\"columnIndexSelect\">";
        // line 38
        echo _gettext("Column:");
        echo "</label>
      <select name=\"columnIndex\" id=\"columnIndexSelect\">
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["column_names"] ?? null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 41
            echo "          ";
            $context["type"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["types"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[(($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["column_names"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null)] ?? null) : null);
            // line 42
            echo "
          ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, ($context["sql_types"] ?? null), "getTypeClass", [0 => ($context["type"] ?? null)], "method", false, false, false, 43) == "CHAR")) {
                // line 44
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                // line 45
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["column_names"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "html", null, true);
                // line 46
                echo "</option>
          ";
            }
            // line 48
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "      </select>

      <input type=\"checkbox\" name=\"useRegex\" id=\"useRegex\">
      <label for=\"useRegex\">
        ";
        // line 53
        echo _gettext("Use regular expression");
        // line 54
        echo "      </label>
    </fieldset>
  </fieldset>

  <fieldset class=\"tblFooters\">
    <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"";
        // line 59
        echo _gettext("Go");
        echo "\">
  </fieldset>
</form>
<div id=\"sqlqueryresultsouter\"></div>
";
    }

    public function getTemplateName()
    {
        return "table/find_replace/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 59,  156 => 54,  154 => 53,  148 => 49,  142 => 48,  138 => 46,  136 => 45,  132 => 44,  130 => 43,  127 => 42,  124 => 41,  120 => 40,  115 => 38,  109 => 35,  103 => 32,  99 => 30,  97 => 29,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  69 => 16,  65 => 15,  57 => 10,  53 => 9,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/find_replace/index.twig", "C:\\Apache24\\htdocs\\phpmyadmin\\templates\\table\\find_replace\\index.twig");
    }
}
