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

/* install/view/template/install/step_3.twig */
class __TwigTemplate_16f906761df6b90aa925f684cf8af33b extends Template
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
        yield ($context["header"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container\">
      <h1>";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h1>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-cogs\"></i> ";
        // line 10
        yield ($context["text_step_3"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-step-3\">
          <fieldset>
            <legend>";
        // line 14
        yield ($context["text_db_connection"] ?? null);
        yield "</legend>
            <div class=\"row\">
              <div class=\"col-md-4 order-md-2\">
                <div class=\"alert alert-info\">
                  <p>";
        // line 18
        yield ($context["text_help"] ?? null);
        yield "</p>
                  <ul class=\"text-info\">
                    <li><strong><a href=\"https://beget.com/p169567/ru/kb/manual/mysql/\" target=\"_blank\">Beget - Настройка MySql</a></strong></li>
                    <li><strong><a href=\"https://docs.cpanel.net/cpanel/databases/mysql-databases/\" target=\"_blank\">";
        // line 21
        yield ($context["text_cpanel"] ?? null);
        yield "</a></strong></li>
                    <li><strong><a href=\"https://support.plesk.com/hc/en-us/articles/12377341716759-How-to-create-a-database-in-Plesk\" target=\"_blank\">";
        // line 22
        yield ($context["text_plesk"] ?? null);
        yield "</a></strong></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-md-8 order-md-1\">
                <div class=\"row\">
                  <div class=\"col-12 col-md-6 mb-3\">
                    <label for=\"input-db-driver\" class=\"form-label\">";
        // line 29
        yield ($context["entry_db_driver"] ?? null);
        yield "</label>
                    <select name=\"db_driver\" id=\"input-db-driver\" class=\"form-control\">
                      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["drivers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["driver"]) {
            // line 32
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "value", [], "any", false, false, false, 32);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "text", [], "any", false, false, false, 32);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['driver'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "                    </select>
                    <div id=\"error-db-driver\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-hostname\" class=\"form-label\">";
        // line 38
        yield ($context["entry_db_hostname"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"db_hostname\" value=\"localhost\" placeholder=\"";
        // line 39
        yield ($context["entry_db_hostname"] ?? null);
        yield "\" id=\"input-db-hostname\" class=\"form-control\"/>
                    <div id=\"error-db-hostname\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-username\" class=\"form-label\">";
        // line 43
        yield ($context["entry_db_username"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"db_username\" value=\"root\" placeholder=\"";
        // line 44
        yield ($context["entry_db_username"] ?? null);
        yield "\" id=\"input-db-username\" class=\"form-control\"/>
                    <div id=\"error-db-username\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3\">
                    <label for=\"input-db-password\" class=\"form-label\">";
        // line 48
        yield ($context["entry_db_password"] ?? null);
        yield "</label>
                    <input type=\"password\" name=\"db_password\" value=\"\" placeholder=\"";
        // line 49
        yield ($context["entry_db_password"] ?? null);
        yield "\" id=\"input-db-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-database\" class=\"form-label\">";
        // line 52
        yield ($context["entry_db_database"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"db_database\" value=\"\" placeholder=\"";
        // line 53
        yield ($context["entry_db_database"] ?? null);
        yield "\" id=\"input-db-database\" class=\"form-control\"/>
                    <div id=\"error-db-database\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3\">
                    <label for=\"input-db-prefix\" class=\"form-label\">";
        // line 57
        yield ($context["entry_db_prefix"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"db_prefix\" value=\"oc_\" placeholder=\"";
        // line 58
        yield ($context["entry_db_prefix"] ?? null);
        yield "\" id=\"input-db-prefix\" class=\"form-control\"/>
                    <div id=\"error-db-prefix\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-port\" class=\"form-label\">";
        // line 62
        yield ($context["entry_db_port"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"db_port\" value=\"3306\" placeholder=\"";
        // line 63
        yield ($context["entry_db_port"] ?? null);
        yield "\" id=\"input-db-port\" class=\"form-control\"/>
                    <div id=\"error-db-port\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 db-advanced\">
                    <label for=\"input-db-advanced\" class=\"form-label\">";
        // line 67
        yield ($context["entry_db_advanced"] ?? null);
        yield "</label>
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"advanced\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"advanced\" value=\"1\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-advanced\" class=\"form-check-input collapsed\"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          <div class=\"db-advanced\">
            <div id=\"collapse-advanced\" class=\"collapse\">
              <fieldset>
                <legend>";
        // line 80
        yield ($context["text_db_advanced"] ?? null);
        yield "</legend>
                <div class=\"row\">
                  <div class=\"col-md-4 order-md-2\">
                    <div class=\"alert alert-info\">";
        // line 83
        yield ($context["text_db_ssl"] ?? null);
        yield "</div>
                  </div>
                  <div class=\"col-md-8 order-md-1\">
                    <div class=\"row\">
                      <div class=\"mb-3\">
                        <label for=\"input-db-ssl-key\" class=\"form-label\">";
        // line 88
        yield ($context["entry_db_ssl_key"] ?? null);
        yield "</label>
                        <textarea name=\"db_ssl_key\" placeholder=\"";
        // line 89
        yield ($context["entry_db_ssl_key"] ?? null);
        yield "\" id=\"input-db-ssl-key\" rows=\"5\" class=\"form-control\">";
        yield ($context["db_ssl_key"] ?? null);
        yield "</textarea>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"input-db-ssl-cert\" class=\"form-label\">";
        // line 92
        yield ($context["entry_db_ssl_cert"] ?? null);
        yield "</label>
                        <textarea name=\"db_ssl_cert\" placeholder=\"";
        // line 93
        yield ($context["entry_db_ssl_cert"] ?? null);
        yield "\" id=\"input-db-ssl-cert\" rows=\"5\" class=\"form-control\">";
        yield ($context["db_ssl_cert"] ?? null);
        yield "</textarea>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"input-db-ssl-ca\" class=\"form-label\">";
        // line 96
        yield ($context["entry_db_ssl_ca"] ?? null);
        yield "</label>
                        <textarea name=\"db_ssl_ca\" placeholder=\"";
        // line 97
        yield ($context["entry_db_ssl_ca"] ?? null);
        yield "\" id=\"input-db-ssl-ca\" rows=\"5\" class=\"form-control\">";
        yield ($context["db_ssl_ca"] ?? null);
        yield "</textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
          <fieldset>
            <legend>";
        // line 106
        yield ($context["text_db_administration"] ?? null);
        yield "</legend>
            <div class=\"row\">
              <div class=\"col-md-8\">
                <div class=\"row mb-3\">
                  <div class=\"col-12 col-md-6 required\">
                    <label for=\"input-username\" class=\"form-label\">";
        // line 111
        yield ($context["entry_username"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"username\" value=\"admin\" id=\"input-username\" class=\"form-control\"/>
                    <div id=\"error-username\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 required\">
                    <label for=\"input-password\" class=\"form-label\">";
        // line 116
        yield ($context["entry_password"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"password\" value=\"\" id=\"input-password\" class=\"form-control\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"required\">
                  <label for=\"input-email\" class=\"form-label\">";
        // line 122
        yield ($context["entry_email"] ?? null);
        yield "</label>
                  <input type=\"text\" name=\"email\" value=\"\" id=\"input-email\" class=\"form-control\"/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            </div>
          </fieldset>
          <div class=\"row\">
            <div class=\"col-md-8\">
              <div class=\"row\">
                <div class=\"col\"><a href=\"";
        // line 132
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-light\">";
        yield ($context["button_back"] ?? null);
        yield "</a></div>
                <div class=\"col text-end\"><button type=\"submit\" id=\"button-continue\" class=\"btn btn-primary\">";
        // line 133
        yield ($context["button_continue"] ?? null);
        yield "</button></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-db-driver').on('change', function(e) {
    e.preventDefault();

    if (\$(this).val() == 'mysqli') {
        \$('.db-advanced').show();
    } else {
        \$('.db-advanced').hide();
    }
});

\$('#input-db-driver').trigger('change');

\$('#form-step-3').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=install/step_3.save&language=";
        // line 161
        yield ($context["language"] ?? null);
        yield "',
        type: 'post',
        data: \$('#form-step-3').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-continue').prop('disabled', true);
        },
        complete: function() {
            \$('#button-continue').prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$(element).find('.is-invalid').removeClass('is-invalid');
            \$(element).find('.invalid-feedback').removeClass('d-block');

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-step-3').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 199
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/view/template/install/step_3.twig";
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
        return array (  370 => 199,  329 => 161,  298 => 133,  292 => 132,  279 => 122,  270 => 116,  262 => 111,  254 => 106,  240 => 97,  236 => 96,  228 => 93,  224 => 92,  216 => 89,  212 => 88,  204 => 83,  198 => 80,  182 => 67,  175 => 63,  171 => 62,  164 => 58,  160 => 57,  153 => 53,  149 => 52,  143 => 49,  139 => 48,  132 => 44,  128 => 43,  121 => 39,  117 => 38,  111 => 34,  100 => 32,  96 => 31,  91 => 29,  81 => 22,  77 => 21,  71 => 18,  64 => 14,  57 => 10,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container\">
      <h1>{{ heading_title }}</h1>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-cogs\"></i> {{ text_step_3 }}</div>
      <div class=\"card-body\">
        <form id=\"form-step-3\">
          <fieldset>
            <legend>{{ text_db_connection }}</legend>
            <div class=\"row\">
              <div class=\"col-md-4 order-md-2\">
                <div class=\"alert alert-info\">
                  <p>{{ text_help }}</p>
                  <ul class=\"text-info\">
                    <li><strong><a href=\"https://beget.com/p169567/ru/kb/manual/mysql/\" target=\"_blank\">Beget - Настройка MySql</a></strong></li>
                    <li><strong><a href=\"https://docs.cpanel.net/cpanel/databases/mysql-databases/\" target=\"_blank\">{{ text_cpanel }}</a></strong></li>
                    <li><strong><a href=\"https://support.plesk.com/hc/en-us/articles/12377341716759-How-to-create-a-database-in-Plesk\" target=\"_blank\">{{ text_plesk }}</a></strong></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-md-8 order-md-1\">
                <div class=\"row\">
                  <div class=\"col-12 col-md-6 mb-3\">
                    <label for=\"input-db-driver\" class=\"form-label\">{{ entry_db_driver }}</label>
                    <select name=\"db_driver\" id=\"input-db-driver\" class=\"form-control\">
                      {% for driver in drivers %}
                        <option value=\"{{ driver.value }}\">{{ driver.text }}</option>
                      {% endfor %}
                    </select>
                    <div id=\"error-db-driver\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-hostname\" class=\"form-label\">{{ entry_db_hostname }}</label>
                    <input type=\"text\" name=\"db_hostname\" value=\"localhost\" placeholder=\"{{ entry_db_hostname }}\" id=\"input-db-hostname\" class=\"form-control\"/>
                    <div id=\"error-db-hostname\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-username\" class=\"form-label\">{{ entry_db_username }}</label>
                    <input type=\"text\" name=\"db_username\" value=\"root\" placeholder=\"{{ entry_db_username }}\" id=\"input-db-username\" class=\"form-control\"/>
                    <div id=\"error-db-username\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3\">
                    <label for=\"input-db-password\" class=\"form-label\">{{ entry_db_password }}</label>
                    <input type=\"password\" name=\"db_password\" value=\"\" placeholder=\"{{ entry_db_password }}\" id=\"input-db-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-database\" class=\"form-label\">{{ entry_db_database }}</label>
                    <input type=\"text\" name=\"db_database\" value=\"\" placeholder=\"{{ entry_db_database }}\" id=\"input-db-database\" class=\"form-control\"/>
                    <div id=\"error-db-database\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3\">
                    <label for=\"input-db-prefix\" class=\"form-label\">{{ entry_db_prefix }}</label>
                    <input type=\"text\" name=\"db_prefix\" value=\"oc_\" placeholder=\"{{ entry_db_prefix }}\" id=\"input-db-prefix\" class=\"form-control\"/>
                    <div id=\"error-db-prefix\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-port\" class=\"form-label\">{{ entry_db_port }}</label>
                    <input type=\"text\" name=\"db_port\" value=\"3306\" placeholder=\"{{ entry_db_port }}\" id=\"input-db-port\" class=\"form-control\"/>
                    <div id=\"error-db-port\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 db-advanced\">
                    <label for=\"input-db-advanced\" class=\"form-label\">{{ entry_db_advanced }}</label>
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"advanced\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"advanced\" value=\"1\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-advanced\" class=\"form-check-input collapsed\"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          <div class=\"db-advanced\">
            <div id=\"collapse-advanced\" class=\"collapse\">
              <fieldset>
                <legend>{{ text_db_advanced }}</legend>
                <div class=\"row\">
                  <div class=\"col-md-4 order-md-2\">
                    <div class=\"alert alert-info\">{{ text_db_ssl }}</div>
                  </div>
                  <div class=\"col-md-8 order-md-1\">
                    <div class=\"row\">
                      <div class=\"mb-3\">
                        <label for=\"input-db-ssl-key\" class=\"form-label\">{{ entry_db_ssl_key }}</label>
                        <textarea name=\"db_ssl_key\" placeholder=\"{{ entry_db_ssl_key }}\" id=\"input-db-ssl-key\" rows=\"5\" class=\"form-control\">{{ db_ssl_key }}</textarea>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"input-db-ssl-cert\" class=\"form-label\">{{ entry_db_ssl_cert }}</label>
                        <textarea name=\"db_ssl_cert\" placeholder=\"{{ entry_db_ssl_cert }}\" id=\"input-db-ssl-cert\" rows=\"5\" class=\"form-control\">{{ db_ssl_cert }}</textarea>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"input-db-ssl-ca\" class=\"form-label\">{{ entry_db_ssl_ca }}</label>
                        <textarea name=\"db_ssl_ca\" placeholder=\"{{ entry_db_ssl_ca }}\" id=\"input-db-ssl-ca\" rows=\"5\" class=\"form-control\">{{ db_ssl_ca }}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
          <fieldset>
            <legend>{{ text_db_administration }}</legend>
            <div class=\"row\">
              <div class=\"col-md-8\">
                <div class=\"row mb-3\">
                  <div class=\"col-12 col-md-6 required\">
                    <label for=\"input-username\" class=\"form-label\">{{ entry_username }}</label>
                    <input type=\"text\" name=\"username\" value=\"admin\" id=\"input-username\" class=\"form-control\"/>
                    <div id=\"error-username\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 required\">
                    <label for=\"input-password\" class=\"form-label\">{{ entry_password }}</label>
                    <input type=\"text\" name=\"password\" value=\"\" id=\"input-password\" class=\"form-control\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"required\">
                  <label for=\"input-email\" class=\"form-label\">{{ entry_email }}</label>
                  <input type=\"text\" name=\"email\" value=\"\" id=\"input-email\" class=\"form-control\"/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            </div>
          </fieldset>
          <div class=\"row\">
            <div class=\"col-md-8\">
              <div class=\"row\">
                <div class=\"col\"><a href=\"{{ back }}\" class=\"btn btn-light\">{{ button_back }}</a></div>
                <div class=\"col text-end\"><button type=\"submit\" id=\"button-continue\" class=\"btn btn-primary\">{{ button_continue }}</button></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-db-driver').on('change', function(e) {
    e.preventDefault();

    if (\$(this).val() == 'mysqli') {
        \$('.db-advanced').show();
    } else {
        \$('.db-advanced').hide();
    }
});

\$('#input-db-driver').trigger('change');

\$('#form-step-3').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=install/step_3.save&language={{ language }}',
        type: 'post',
        data: \$('#form-step-3').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-continue').prop('disabled', true);
        },
        complete: function() {
            \$('#button-continue').prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$(element).find('.is-invalid').removeClass('is-invalid');
            \$(element).find('.invalid-feedback').removeClass('d-block');

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-step-3').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "install/view/template/install/step_3.twig", "H:\\rabota\\OSPanel\\domains\\opencart-4-1\\install\\view\\template\\install\\step_3.twig");
    }
}
