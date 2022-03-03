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

/* table/zoom_search/index.twig */
class __TwigTemplate_ef8ac2734fface662a47469d2bf7a098be74c385c15811a2d39af1c3ce8b6ef8 extends \Twig\Template
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
    <a class=\"nav-link active\" href=\"";
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
    <a class=\"nav-link\" href=\"";
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
        echo PhpMyAdmin\Url::getFromRoute("/table/zoom-search");
        echo "\" name=\"insertForm\" id=\"zoom_search_form\" class=\"ajax lock-page\">
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
        echo PhpMyAdmin\Url::getFromRoute("/table/zoom-search");
        echo "\">

  <fieldset id=\"fieldset_zoom_search\">
    <fieldset id=\"inputSection\">
      <legend>
        ";
        // line 29
        echo _gettext("Do a \"query by example\" (wildcard: \"%\") for two different columns");
        // line 30
        echo "      </legend>

      <table class=\"table table-light table-striped table-hover table-sm\" id=\"tableFieldsId\">
        <thead class=\"thead-light\">
          <tr>
            ";
        // line 35
        if (($context["geom_column_flag"] ?? null)) {
            // line 36
            echo "              <th>";
            echo _gettext("Function");
            echo "</th>
            ";
        }
        // line 38
        echo "            <th>";
        echo _gettext("Column");
        echo "</th>
            <th>";
        // line 39
        echo _gettext("Type");
        echo "</th>
            <th>";
        // line 40
        echo _gettext("Collation");
        echo "</th>
            <th>";
        // line 41
        echo _gettext("Operator");
        echo "</th>
            <th>";
        // line 42
        echo _gettext("Value");
        echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 46
        $context["type"] = [];
        // line 47
        echo "          ";
        $context["collation"] = [];
        // line 48
        echo "          ";
        $context["func"] = [];
        // line 49
        echo "          ";
        $context["value"] = [];
        // line 50
        echo "
          ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 52
            echo "            ";
            // line 53
            echo "            ";
            if (($context["i"] == 2)) {
                // line 54
                echo "              <tr>
                <th>
                  ";
                // line 56
                echo _gettext("Additional search criteria");
                // line 57
                echo "                </th>
              </tr>
            ";
            }
            // line 60
            echo "            <tr class=\"noclick\">
              <th>
                <select name=\"criteriaColumnNames[]\" id=\"tableid_";
            // line 62
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
                  <option value=\"pma_null\">
                    ";
            // line 64
            echo _gettext("None");
            // line 65
            echo "                  </option>
                  ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["column_names"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 67
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["criteria_column_names"] ?? null), $context["i"], [], "array", true, true, false, 67) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["criteria_column_names"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["column_names"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["j"]] ?? null) : null)))) {
                    // line 68
                    echo "                      <option value=\"";
                    echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["column_names"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["j"]] ?? null) : null), "html", null, true);
                    echo "\" selected>
                        ";
                    // line 69
                    echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["column_names"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["j"]] ?? null) : null), "html", null, true);
                    echo "
                      </option>
                    ";
                } else {
                    // line 72
                    echo "                      <option value=\"";
                    echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["column_names"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["j"]] ?? null) : null), "html", null, true);
                    echo "\">
                        ";
                    // line 73
                    echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["column_names"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["j"]] ?? null) : null), "html", null, true);
                    echo "
                      </option>
                    ";
                }
                // line 76
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                </select>
              </th>
              ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, ($context["criteria_column_names"] ?? null), $context["i"], [], "array", true, true, false, 79) && ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["criteria_column_names"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["i"]] ?? null) : null) != "pma_null"))) {
                // line 80
                echo "                ";
                $context["key"] = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["keys"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[(($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["criteria_column_names"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[$context["i"]] ?? null) : null)] ?? null) : null);
                // line 81
                echo "                ";
                $context["properties"] = twig_get_attribute($this->env, $this->source, ($context["self"] ?? null), "getColumnProperties", [0 => $context["i"], 1 => ($context["key"] ?? null)], "method", false, false, false, 81);
                // line 82
                echo "                ";
                $context["type"] = twig_array_merge(($context["type"] ?? null), [$context["i"] => (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["properties"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["type"] ?? null) : null)]);
                // line 83
                echo "                ";
                $context["collation"] = twig_array_merge(($context["collation"] ?? null), [$context["i"] => (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["properties"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["collation"] ?? null) : null)]);
                // line 84
                echo "                ";
                $context["func"] = twig_array_merge(($context["func"] ?? null), [$context["i"] => (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["properties"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["func"] ?? null) : null)]);
                // line 85
                echo "                ";
                $context["value"] = twig_array_merge(($context["value"] ?? null), [$context["i"] => (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["properties"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["value"] ?? null) : null)]);
                // line 86
                echo "              ";
            }
            // line 87
            echo "              ";
            // line 88
            echo "              <td dir=\"ltr\">
                ";
            // line 89
            ((twig_get_attribute($this->env, $this->source, ($context["type"] ?? null), $context["i"], [], "array", true, true, false, 89)) ? (print (twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["type"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[$context["i"]] ?? null) : null), "html", null, true))) : (print ("")));
            echo "
              </td>
              ";
            // line 92
            echo "              <td>
                ";
            // line 93
            ((twig_get_attribute($this->env, $this->source, ($context["collation"] ?? null), $context["i"], [], "array", true, true, false, 93)) ? (print (twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["collation"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[$context["i"]] ?? null) : null), "html", null, true))) : (print ("")));
            echo "
              </td>
              ";
            // line 96
            echo "              <td>
                ";
            // line 97
            echo ((twig_get_attribute($this->env, $this->source, ($context["func"] ?? null), $context["i"], [], "array", true, true, false, 97)) ? ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["func"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[$context["i"]] ?? null) : null)) : (""));
            echo "
              </td>
              ";
            // line 100
            echo "              <td>
                ";
            // line 101
            echo ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), $context["i"], [], "array", true, true, false, 101)) ? ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["value"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[$context["i"]] ?? null) : null)) : (""));
            echo "
              </td>
              <td>
                ";
            // line 105
            echo "                <input type=\"hidden\" name=\"criteriaColumnTypes[";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "]\" id=\"types_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"";
            // line 106
            if (twig_get_attribute($this->env, $this->source, ($context["criteria_column_types"] ?? null), $context["i"], [], "array", true, true, false, 106)) {
                echo " value=\"";
                echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["criteria_column_types"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[$context["i"]] ?? null) : null), "html", null, true);
                echo "\"";
            }
            echo ">
                <input type=\"hidden\" name=\"criteriaColumnCollations[";
            // line 107
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "]\" id=\"collations_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "        </tbody>
      </table>

      <table class=\"table table-borderless table-sm w-auto\">
        <tr>
          <td>
            <label for=\"dataLabel\">
              ";
        // line 118
        echo _gettext("Use this column to label each point");
        // line 119
        echo "            </label>
          </td>
          <td>
            <select name=\"dataLabel\" id=\"dataLabel\">
              <option value=\"\">
                ";
        // line 124
        echo _gettext("None");
        // line 125
        echo "              </option>
              ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["column_names"] ?? null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 127
            echo "                ";
            if ((array_key_exists("data_label", $context) && (($context["data_label"] ?? null) == twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["column_names"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[$context["i"]] ?? null) : null))))) {
                // line 128
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["column_names"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[$context["i"]] ?? null) : null), "html", null, true);
                echo "\" selected>
                    ";
                // line 129
                echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["column_names"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[$context["i"]] ?? null) : null), "html", null, true);
                echo "
                  </option>
                ";
            } else {
                // line 132
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["column_names"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[$context["i"]] ?? null) : null), "html", null, true);
                echo "\">
                    ";
                // line 133
                echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["column_names"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[$context["i"]] ?? null) : null), "html", null, true);
                echo "
                  </option>
                ";
            }
            // line 136
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label for=\"maxRowPlotLimit\">
              ";
        // line 143
        echo _gettext("Maximum rows to plot");
        // line 144
        echo "            </label>
          </td>
          <td>
            <input type=\"number\" name=\"maxPlotLimit\" id=\"maxRowPlotLimit\" required=\"required\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, ($context["max_plot_limit"] ?? null), "html", null, true);
        echo "\">
          </td>
        </tr>
      </table>
    </fieldset>
  </fieldset>

  <fieldset class=\"tblFooters\">
    <input class=\"btn btn-primary\" type=\"submit\" name=\"zoom_submit\" id=\"inputFormSubmitId\" value=\"";
        // line 155
        echo _gettext("Go");
        echo "\">
  </fieldset>
</form>
<div id=\"sqlqueryresultsouter\"></div>
";
    }

    public function getTemplateName()
    {
        return "table/zoom_search/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 155,  382 => 147,  377 => 144,  375 => 143,  367 => 137,  361 => 136,  355 => 133,  350 => 132,  344 => 129,  339 => 128,  336 => 127,  332 => 126,  329 => 125,  327 => 124,  320 => 119,  318 => 118,  309 => 111,  297 => 107,  289 => 106,  283 => 105,  277 => 101,  274 => 100,  269 => 97,  266 => 96,  261 => 93,  258 => 92,  253 => 89,  250 => 88,  248 => 87,  245 => 86,  242 => 85,  239 => 84,  236 => 83,  233 => 82,  230 => 81,  227 => 80,  225 => 79,  221 => 77,  215 => 76,  209 => 73,  204 => 72,  198 => 69,  193 => 68,  190 => 67,  186 => 66,  183 => 65,  181 => 64,  176 => 62,  172 => 60,  167 => 57,  165 => 56,  161 => 54,  158 => 53,  156 => 52,  152 => 51,  149 => 50,  146 => 49,  143 => 48,  140 => 47,  138 => 46,  131 => 42,  127 => 41,  123 => 40,  119 => 39,  114 => 38,  108 => 36,  106 => 35,  99 => 30,  97 => 29,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  69 => 16,  65 => 15,  57 => 10,  53 => 9,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/zoom_search/index.twig", "C:\\Apache24\\htdocs\\phpmyadmin\\templates\\table\\zoom_search\\index.twig");
    }
}
