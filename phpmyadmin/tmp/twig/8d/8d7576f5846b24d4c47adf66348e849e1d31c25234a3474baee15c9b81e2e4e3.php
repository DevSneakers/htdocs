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

/* server/replication/master_replication.twig */
class __TwigTemplate_75aa58aca2174a24a50640c810dd145733a6794880f864b9f934244eb8fce8dc extends \Twig\Template
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
        if ( !($context["clear_screen"] ?? null)) {
            // line 2
            echo "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
            // line 3
            echo _gettext("Master replication");
            echo "</div>
    <div class=\"card-body\">
    ";
            // line 5
            echo _gettext("This server is configured as master in a replication process.");
            // line 6
            echo "    <ul>
      <li>
        <a href=\"#master_status_href\" id=\"master_status_href\">
          ";
            // line 9
            echo _gettext("Show master status");
            // line 10
            echo "        </a>
        ";
            // line 11
            echo ($context["master_status_table"] ?? null);
            echo "
      </li>
      <li>
        <p>
          <a href=\"#master_slaves_href\" id=\"master_slaves_href\">
            ";
            // line 16
            echo _gettext("Show connected slaves");
            // line 17
            echo "          </a>
        </p>

        <div id=\"replication_slaves_section\" style=\"display: none;\">
          <table class=\"pma-table data\">
            <thead>
              <tr>
                <th>";
            // line 24
            echo _gettext("Server ID");
            echo "</th>
                <th>";
            // line 25
            echo _gettext("Host");
            echo "</th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slaves"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slave"]) {
                // line 30
                echo "                <tr>
                  <td class=\"value\">";
                // line 31
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["slave"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["Server_id"] ?? null) : null), "html", null, true);
                echo "</td>
                  <td class=\"value\">";
                // line 32
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["slave"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["Host"] ?? null) : null), "html", null, true);
                echo "</td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slave'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </tbody>
          </table>
          <br>
          ";
            // line 38
            echo call_user_func_array($this->env->getFilter('notice')->getCallable(), [_gettext("Only slaves started with the --report-host=host_name option are visible in this list.")]);
            echo "
          <br>
        </div>
      </li>
      <li>
        <a href=\"";
            // line 43
            echo PhpMyAdmin\Url::getFromRoute("/server/replication");
            echo "\" data-post=\"";
            echo PhpMyAdmin\Url::getCommon(($context["url_params"] ?? null), "");
            echo "\" id=\"master_addslaveuser_href\">
          ";
            // line 44
            echo _gettext("Add slave replication user");
            // line 45
            echo "        </a>
      </li>
";
        }
        // line 48
        if (($context["master_add_user"] ?? null)) {
            // line 49
            echo "    ";
            echo ($context["master_add_slave_user"] ?? null);
            echo "
";
        } elseif ( !        // line 50
($context["clear_screen"] ?? null)) {
            // line 51
            echo "    </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "server/replication/master_replication.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 51,  142 => 50,  137 => 49,  135 => 48,  130 => 45,  128 => 44,  122 => 43,  114 => 38,  109 => 35,  100 => 32,  96 => 31,  93 => 30,  89 => 29,  82 => 25,  78 => 24,  69 => 17,  67 => 16,  59 => 11,  56 => 10,  54 => 9,  49 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/replication/master_replication.twig", "C:\\Apache24\\htdocs\\phpmyadmin\\templates\\server\\replication\\master_replication.twig");
    }
}
