<?php

/* home.html.twig */
class __TwigTemplate_715884c0f4b20f803cd26256dd1506e2f9935e5829f00ac285835b23da4c5e05 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'additional_css' => array($this, 'block_additional_css'),
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
        echo "Home";
    }

    // line 3
    public function block_additional_css($context, array $blocks = array())
    {
        // line 4
        echo "<style>
html {
  font-size: 22px
}
</style>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
  <div class=\"container\">
    <h1>Alphacorp > accueil</h1>
    <p class=\"description\">
      Ce site se destine à tous les élèves ... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic modi ea animi odio, voluptatibus officiis repellat eius id ipsa sapiente suscipit eos architecto nesciunt culpa ducimus nihil doloremque vitae pariatur?
    </p>
  </div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  52 => 10,  43 => 4,  40 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block title %}Home{% endblock %}
{% block additional_css %}
<style>
html {
  font-size: 22px
}
</style>
{% endblock %}
{% block content %}

  <div class=\"container\">
    <h1>Alphacorp > accueil</h1>
    <p class=\"description\">
      Ce site se destine à tous les élèves ... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic modi ea animi odio, voluptatibus officiis repellat eius id ipsa sapiente suscipit eos architecto nesciunt culpa ducimus nihil doloremque vitae pariatur?
    </p>
  </div>
{% endblock %}
", "home.html.twig", "C:\\xampp\\htdocs\\dashboard\\__Alphacorp\\alphacorp\\app\\Views\\home.html.twig");
    }
}
