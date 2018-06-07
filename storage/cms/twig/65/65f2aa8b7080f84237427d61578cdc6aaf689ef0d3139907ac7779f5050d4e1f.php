<?php

/* C:\xampp\htdocs\acme/themes/acme/pages/home.htm */
class __TwigTemplate_18bcc05090fea05597e15d5a7b70b12dca25f28e157818d707e49df662145d70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"jumbotron\">
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</h1>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_description", array()), "html", null, true);
        echo "</p>
    <p>
        <a href=\"{'about'|page}\" class=\"btn btn-default\">Read more </a>
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <h1>{{this.theme.site_name}}</h1>
    <p>{{this.theme.site_description}}</p>
    <p>
        <a href=\"{'about'|page}\" class=\"btn btn-default\">Read more </a>
    </p>
</div>", "C:\\xampp\\htdocs\\acme/themes/acme/pages/home.htm", "");
    }
}
