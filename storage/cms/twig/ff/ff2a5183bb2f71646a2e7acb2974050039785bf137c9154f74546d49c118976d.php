<?php

/* C:\xampp\htdocs\acme/themes/acme/pages/about.htm */
class __TwigTemplate_e15d607b36c8263196bd87fcb1f5d361b42e703f9ed874c717d6cf8ae4590697 extends Twig_Template
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
        echo "<h1>About us </h1>
<p>This is the about page</p>
<hr>
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About us </h1>
<p>This is the about page</p>
<hr>
{% component 'resourcesLinks' %}", "C:\\xampp\\htdocs\\acme/themes/acme/pages/about.htm", "");
    }
}
