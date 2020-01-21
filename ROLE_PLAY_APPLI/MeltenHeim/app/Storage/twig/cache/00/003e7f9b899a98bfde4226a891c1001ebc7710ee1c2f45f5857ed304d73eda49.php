<?php

/* backoffice/events/events.html.twig */
class __TwigTemplate_30d14dc8aac40d22f02543d4573289765bdba8ed53fe24a439b3dd036cae791c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/events/events.html.twig", 1);
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/biome.css")), "html", null, true);
        echo " \">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/events.css")), "html", null, true);
        echo " \">
";
    }

    // line 10
    public function block_h1($context, array $blocks = array())
    {
        // line 11
        echo "  Générateur d'Événements
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<div data-url=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/")), "html", null, true);
        echo "\"></div>
<section>
  <div id=\"menu\">
    <button id='accueil' data-page=\"index\"><div>Générateur d'Événements</div></button>
  </div>

  <section class=\"biomes__handler\">
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biomes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["biome"]) {
            // line 23
            echo "    <div class=\"biome__handler--item\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/images/biome/" . twig_get_attribute($this->env, $this->source, $context["biome"], "image", array())))), "html", null, true);
            echo "')\">
      <button class=\"biome__handler--button\"  data-color=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biome"], "color", array()), "html", null, true);
            echo "\">
        <h6 class=\"biome__handler--title\" data-biome=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biome"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biome"], "type", array()), "html", null, true);
            echo "</h6>
      </button>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </section>
  <article class=\"events__handler\">
    <h6 class=\"events__handler--title\" data-item=\"Titre\">Le titre de l'events</h6>
    <div>
      <div class=\"events__handler--texts\" >
        <p class=\"events__handler--description\" >
          <b>DESCRIPTION :: </b><p data-item=\"Description\">description plus ou moins exaustive de l'evenement Lorem ipsum dolor amet....</p>
        </p>  
        <p class=\"events__handler--loot\">
          <b>LOOT :: </b><p data-item=\"loot\">Le loot qui est peut être gagné.... dépends de plein de chose ou pas... le mj décidera de trancher</p>
        </p>
      </div>
      <div class=\"events__handler--image\" data-item=\"Image\" style=\"background-image:url('";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/images/events/")), "html", null, true);
        echo "')\">
      </div>    
    </div>
  </article> 
</section>

";
    }

    // line 49
    public function block_additional_js($context, array $blocks = array())
    {
        // line 50
        echo "  <script  src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/events.js")), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/events/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 50,  130 => 49,  119 => 41,  105 => 29,  93 => 25,  89 => 24,  84 => 23,  80 => 22,  69 => 15,  66 => 14,  61 => 11,  58 => 10,  52 => 8,  47 => 7,  44 => 6,  39 => 3,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}
  Biome
{% endblock %}

{% block additional_css %}
<link rel=\"stylesheet\" href=\"{{url('/assets/css/biome.css')}} \">
  <link rel=\"stylesheet\" href=\"{{url('/assets/css/events.css')}} \">
{% endblock %}
{% block h1 %}
  Générateur d'Événements
{% endblock %}

{% block content %}
<div data-url=\"{{url('/')}}\"></div>
<section>
  <div id=\"menu\">
    <button id='accueil' data-page=\"index\"><div>Générateur d'Événements</div></button>
  </div>

  <section class=\"biomes__handler\">
    {% for biome in biomes %}
    <div class=\"biome__handler--item\" style=\"background-image:url('{{url('/assets/images/biome/' ~ biome.image)}}')\">
      <button class=\"biome__handler--button\"  data-color=\"{{biome.color}}\">
        <h6 class=\"biome__handler--title\" data-biome=\"{{biome.id}}\">{{biome.type}}</h6>
      </button>
    </div>
    {% endfor %}
  </section>
  <article class=\"events__handler\">
    <h6 class=\"events__handler--title\" data-item=\"Titre\">Le titre de l'events</h6>
    <div>
      <div class=\"events__handler--texts\" >
        <p class=\"events__handler--description\" >
          <b>DESCRIPTION :: </b><p data-item=\"Description\">description plus ou moins exaustive de l'evenement Lorem ipsum dolor amet....</p>
        </p>  
        <p class=\"events__handler--loot\">
          <b>LOOT :: </b><p data-item=\"loot\">Le loot qui est peut être gagné.... dépends de plein de chose ou pas... le mj décidera de trancher</p>
        </p>
      </div>
      <div class=\"events__handler--image\" data-item=\"Image\" style=\"background-image:url('{{url('/assets/images/events/')}}')\">
      </div>    
    </div>
  </article> 
</section>

{% endblock %}

{% block additional_js %}
  <script  src=\"{{url('/assets/js/events.js')}}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}
", "backoffice/events/events.html.twig", "C:\\xampp\\htdocs\\dashboard\\MeltenHeim\\app\\Views\\backoffice\\events\\events.html.twig");
    }
}
