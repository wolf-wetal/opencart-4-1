<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/view/template/design/theme_list.twig */
class __TwigTemplate_04c470063d46076ebd33a1c7ac85270f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<form id=\"form-theme\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#theme\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th>";
        // line 7
        yield ($context["column_route"] ?? null);
        yield "</th>
          <th>";
        // line 8
        yield ($context["column_store"] ?? null);
        yield "</th>
          <th>";
        // line 9
        yield ($context["column_status"] ?? null);
        yield "</th>
          <th>";
        // line 10
        yield ($context["column_date_added"] ?? null);
        yield "</th>
          <th class=\"text-end\">";
        // line 11
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 15
        if (($context["themes"] ?? null)) {
            // line 16
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 17
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "theme_id", [], "any", false, false, false, 18);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "route", [], "any", false, false, false, 19);
                yield "</td>
              <td>";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "store", [], "any", false, false, false, 20);
                yield "</td>
              <td>";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "status", [], "any", false, false, false, 21);
                yield "</td>
              <td>";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "date_added", [], "any", false, false, false, 22);
                yield "</td>
              <td class=\"text-end text-nowrap\"><a href=\"";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "edit", [], "any", false, false, false, 23);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a> <button type=\"button\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "delete", [], "any", false, false, false, 23);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_delete"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "        ";
        } else {
            // line 27
            yield "          <tr>
            <td class=\"text-center\" colspan=\"6\">";
            // line 28
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 31
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 35
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 36
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/design/theme_list.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  142 => 36,  138 => 35,  132 => 31,  126 => 28,  123 => 27,  120 => 26,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  82 => 17,  77 => 16,  75 => 15,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-theme\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#theme\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th>{{ column_route }}</th>
          <th>{{ column_store }}</th>
          <th>{{ column_status }}</th>
          <th>{{ column_date_added }}</th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if themes %}
          {% for theme in themes %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ theme.theme_id }}\" class=\"form-check-input\"/></td>
              <td>{{ theme.route }}</td>
              <td>{{ theme.store }}</td>
              <td>{{ theme.status }}</td>
              <td>{{ theme.date_added }}</td>
              <td class=\"text-end text-nowrap\"><a href=\"{{ theme.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a> <button type=\"button\" value=\"{{ theme.delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"6\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "admin/view/template/design/theme_list.twig", "H:\\rabota\\OSPanel\\domains\\opencart-4-1\\admin\\view\\template\\design\\theme_list.twig");
    }
}
