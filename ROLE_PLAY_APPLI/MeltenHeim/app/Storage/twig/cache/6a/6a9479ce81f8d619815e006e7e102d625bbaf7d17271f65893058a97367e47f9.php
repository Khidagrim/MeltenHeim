<?php

/* backoffice/biome/biome.html.twig */
class __TwigTemplate_54a09a6473bb45a5b20ccbebcf75b65687986a4afe1624e64efc76863312b10a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/biome/biome.html.twig", 1);
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
        echo "  Biome
";
    }

    // line 6
    public function block_additional_css($context, array $blocks = array())
    {
        // line 7
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/biome.css")), "html", null, true);
        echo " \">
";
    }

    // line 9
    public function block_h1($context, array $blocks = array())
    {
        // line 10
        echo "  Biome
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<section>
  <div id=\"menu\">
    <button id='accueil' data-page=\"index\"><div>Biomes</div></button>
  </div>

  <section class=\"biomes__handler\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biomes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["biome"]) {
            // line 21
            echo "    <div class=\"biome__handler--item\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/images/biome/" . twig_get_attribute($this->env, $this->source, $context["biome"], "image", array())))), "html", null, true);
            echo "')\">
      <button data-page=\"biome/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biome"], "id", array()), "html", null, true);
            echo "\" class=\"biome__handler--button\" data-color=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biome"], "color", array()), "html", null, true);
            echo "\">
        <h6 class=\"biome__handler--title\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biome"], "type", array()), "html", null, true);
            echo "</h6>
      </button>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  </section>
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
        return "backoffice/biome/biome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  105 => 32,  98 => 27,  88 => 23,  82 => 22,  77 => 21,  73 => 20,  65 => 14,  62 => 13,  57 => 10,  54 => 9,  47 => 7,  44 => 6,  39 => 3,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}
  Biome
{% endblock %}

{% block additional_css %}
  <link rel=\"stylesheet\" href=\"{{url('/assets/css/biome.css')}} \">
{% endblock %}
{% block h1 %}
  Biome
{% endblock %}

{% block content %}
<section>
  <div id=\"menu\">
    <button id='accueil' data-page=\"index\"><div>Biomes</div></button>
  </div>

  <section class=\"biomes__handler\">
    {% for biome in biomes %}
    <div class=\"biome__handler--item\" style=\"background-image:url('{{url('/assets/images/biome/' ~ biome.image)}}')\">
      <button data-page=\"biome/{{biome.id}}\" class=\"biome__handler--button\" data-color=\"{{biome.color}}\">
        <h6 class=\"biome__handler--title\">{{biome.type}}</h6>
      </button>
    </div>
    {% endfor %}
  </section>
</section>

{% endblock %}

{% block additional_js %}
  <script  src=\"{{url('/assets/js/biome.js')}}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}
", "backoffice/biome/biome.html.twig", "C:\\xampp\\htdocs\\dashboard\\MeltenHeim\\app\\Views\\backoffice\\biome\\biome.html.twig");
    }
}
