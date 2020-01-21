<?php

/* home.html.twig */
class __TwigTemplate_20af5a126ce4acbe1bcea102f06bb9c9049edc26119943e91531361499dcf380 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'additional_css' => array($this, 'block_additional_css'),
            'content' => array($this, 'block_content'),
            'additional_js' => array($this, 'block_additional_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "  Home
";
    }

    // line 6
    public function block_additional_css($context, array $blocks = array())
    {
        // line 7
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/index.css")), "html", null, true);
        echo " \">
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "  <div id=\"titre\">
    <h1>MeltenHeim</h1>
  </div>
  <div id=\"menu\">
    <button data-page=\"worldMap\"><div>Carte Monde</div></button>
    <button data-page=\"biome\"><div>Biomes</div></button>
    <button data-page=\"events\"><div>Générateur Événements</div></button>
    <button data-page=\"fight\"><div>Gestionnaire Combats</div></button>
    <button data-page=\"loots\"><div>Générateur Butins</div></button>
    <button data-page=\"dice\"><div>Lanceur de Dés</div></button>
    <button data-page=\"story\"><div>Histoire</div></button>
    <button data-page=\"creature\"><div>Livre Monstre</div></button>
    <button data-page=\"naturalBook\"><div>Livre Nature</div></button>
    <button data-page=\"characGen\"><div>Générateur de Persos</div></button>
  </div>
";
    }

    // line 28
    public function block_additional_js($context, array $blocks = array())
    {
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
        return array (  75 => 28,  56 => 11,  53 => 10,  46 => 7,  43 => 6,  38 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}
  Home
{% endblock %}

{% block additional_css %}
  <link rel=\"stylesheet\" href=\"{{url('/assets/css/index.css')}} \">
{% endblock %}

{% block content %}
  <div id=\"titre\">
    <h1>MeltenHeim</h1>
  </div>
  <div id=\"menu\">
    <button data-page=\"worldMap\"><div>Carte Monde</div></button>
    <button data-page=\"biome\"><div>Biomes</div></button>
    <button data-page=\"events\"><div>Générateur Événements</div></button>
    <button data-page=\"fight\"><div>Gestionnaire Combats</div></button>
    <button data-page=\"loots\"><div>Générateur Butins</div></button>
    <button data-page=\"dice\"><div>Lanceur de Dés</div></button>
    <button data-page=\"story\"><div>Histoire</div></button>
    <button data-page=\"creature\"><div>Livre Monstre</div></button>
    <button data-page=\"naturalBook\"><div>Livre Nature</div></button>
    <button data-page=\"characGen\"><div>Générateur de Persos</div></button>
  </div>
{% endblock %}

{% block additional_js %}
{% endblock %}



", "home.html.twig", "C:\\xampp\\htdocs\\dashboard\\MeltenHeim\\app\\Views\\home.html.twig");
    }
}
