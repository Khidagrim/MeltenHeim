<?php

/* backoffice/login.html.twig */
class __TwigTemplate_4a4c3f3b9f33f1891750e312143069f40661fbdeeee5e4604b0c886fbe09276b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "backoffice/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">

  <h2>Identifiez-vous</h2>
  <form action=\".\\login\" method=\"post\">
    <label for=\"login\"></label><input type=\"text\" name=\"login\" id=\"login\"/>
    <label for=\"password\"></label><input type=\"password\" name=\"password\" id=\"password\"/>
    <button id=\"buttonLogin\"></button>
  </form>


</div>
";
    }

    public function getTemplateName()
    {
        return "backoffice/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block title %}Login{% endblock %}
{% block content %}
<div class=\"container\">

  <h2>Identifiez-vous</h2>
  <form action=\".\\login\" method=\"post\">
    <label for=\"login\"></label><input type=\"text\" name=\"login\" id=\"login\"/>
    <label for=\"password\"></label><input type=\"password\" name=\"password\" id=\"password\"/>
    <button id=\"buttonLogin\"></button>
  </form>


</div>
{% endblock %}", "backoffice/login.html.twig", "I:\\xampp-www\\alphacorp\\app\\Views\\backoffice\\login.html.twig");
    }
}
