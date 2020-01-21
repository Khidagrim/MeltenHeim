<?php

/* backoffice/biome/biome-detail.html.twig */
class __TwigTemplate_55d225eb4dc4ed9eb729f5ceda80ac7658c9ebdc0c10d7dc1b1ab5625bbfa4f4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/biome/biome-detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'additional_css' => array($this, 'block_additional_css'),
            'h1' => array($this, 'block_h1'),
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
        echo "  Biome - 
";
    }

    // line 6
    public function block_additional_css($context, array $blocks = array())
    {
        // line 7
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/biome.css")), "html", null, true);
        echo " \">
  <style>
    .biome__detail
    {
      background-image:url(\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/images/biome/" . twig_get_attribute($this->env, $this->source, ($context["biome"] ?? null), "image", array())))), "html", null, true);
        echo "\");
    }
  </style>
";
    }

    // line 15
    public function block_h1($context, array $blocks = array())
    {
        // line 16
        echo "  Biome
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "<section class=\"biome__detail\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/images/biome/" . twig_get_attribute($this->env, $this->source, ($context["biome"] ?? null), "image", array())))), "html", null, true);
        echo "')\">
  <div id=\"menu\">
    <button id='accueil' data-page=\"../biome\"><div>Biome ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["biome"] ?? null), "type", array()), "html", null, true);
        echo "</div></button>
  </div>

  <section class=\"biome__handler\">
    <p class=\"biome__handler--text\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["biome"] ?? null), "description", array()), "html", null, true);
        echo "</p>
  </section>

</section>
";
    }

    // line 32
    public function block_additional_js($context, array $blocks = array())
    {
        // line 33
        echo "  <script  src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/biome.js")), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/biome/biome-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 33,  96 => 32,  87 => 26,  80 => 22,  74 => 20,  71 => 19,  66 => 16,  63 => 15,  55 => 11,  47 => 7,  44 => 6,  39 => 3,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}
  Biome - 
{% endblock %}

{% block additional_css %}
  <link rel=\"stylesheet\" href=\"{{url('/assets/css/biome.css')}} \">
  <style>
    .biome__detail
    {
      background-image:url(\"{{url('/assets/images/biome/'~biome.image)}}\");
    }
  </style>
{% endblock %}
{% block h1 %}
  Biome
{% endblock %}

{% block content %}
<section class=\"biome__detail\" style=\"background-image:url('{{url('/assets/images/biome/' ~ biome.image) }}')\">
  <div id=\"menu\">
    <button id='accueil' data-page=\"../biome\"><div>Biome {{biome.type}}</div></button>
  </div>

  <section class=\"biome__handler\">
    <p class=\"biome__handler--text\">{{biome.description}}</p>
  </section>

</section>
{% endblock %}

{% block additional_js %}
  <script  src=\"{{url('/assets/js/biome.js')}}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}
", "backoffice/biome/biome-detail.html.twig", "C:\\xampp\\htdocs\\dashboard\\MeltenHeim\\app\\Views\\backoffice\\biome\\biome-detail.html.twig");
    }
}
