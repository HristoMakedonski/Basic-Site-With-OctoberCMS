<?php

/* C:\xampp\htdocs\acme/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_b48a47980f7baf5e58ec16b71d7a876665fe02509bd366010dafa7f1ea452cb1 extends Twig_Template
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
        echo "<h1>Contact Us</h1>
<form>
    <div class=\"form-group\">
        <label>Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
     <div class=\"form-group\">
        <label>Email</label>
        <input type=\"text\" class=\"form-control\">
    </div>
     <div class=\"form-group\">
        <label>Message</label>
        <textarea class=\"form-control\"></textarea>
    </div>
    <button type=\"submit\">Submit</buton>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact Us</h1>
<form>
    <div class=\"form-group\">
        <label>Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
     <div class=\"form-group\">
        <label>Email</label>
        <input type=\"text\" class=\"form-control\">
    </div>
     <div class=\"form-group\">
        <label>Message</label>
        <textarea class=\"form-control\"></textarea>
    </div>
    <button type=\"submit\">Submit</buton>
</form>", "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/contact.htm", "");
    }
}
