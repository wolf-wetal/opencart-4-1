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

/* install/view/template/common/footer.twig */
class __TwigTemplate_1997603ca37ff6fe2accf690e28bc082 extends Template
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
        yield "<footer class=\"pb-4\">
  <div class=\"container text-center\">
    <a href=\"http://opencart-russia.ru\" target=\"_blank\">";
        // line 3
        yield ($context["text_project"] ?? null);
        yield "</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://forum.opencart-russia.ru/threads/ustanovka.10297/\" target=\"_blank\">";
        yield ($context["text_documentation"] ?? null);
        yield "</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://forum.opencart-russia.ru\" target=\"_blank\">";
        yield ($context["text_support"] ?? null);
        yield "</a>
\t\t<br/>
    ";
        // line 5
        yield ($context["text_footer"] ?? null);
        yield "
  </div>
</footer>
</div>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/view/template/common/footer.twig";
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
        return array (  55 => 5,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"pb-4\">
  <div class=\"container text-center\">
    <a href=\"http://opencart-russia.ru\" target=\"_blank\">{{ text_project }}</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://forum.opencart-russia.ru/threads/ustanovka.10297/\" target=\"_blank\">{{ text_documentation }}</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://forum.opencart-russia.ru\" target=\"_blank\">{{ text_support }}</a>
\t\t<br/>
    {{ text_footer }}
  </div>
</footer>
</div>
</body>
</html>", "install/view/template/common/footer.twig", "H:\\rabota\\OSPanel\\domains\\opencart-4-1\\install\\view\\template\\common\\footer.twig");
    }
}
