<?php

/* backoffice/fight/fight.html.twig */
class __TwigTemplate_0ea32c3a04d8c72b29b1d5d32f81bd2ebb1240db4c5a0bde0b8838208c3d8502 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/fight/fight.html.twig", 1);
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/fight.css")), "html", null, true);
        echo " \">
";
    }

    // line 9
    public function block_h1($context, array $blocks = array())
    {
        // line 10
        echo "  Gestionnaire de Combats
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "  <div id=\"menu\">
    <button id='accueil' data-page=\"index\"><div>Gestionnaire de Combat</div></button>
  </div>
  <div data-url=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/")), "html", null, true);
        echo "\"></div>
<section class=\"creatureSelect\">
  <select class=\"creatures\" id=\"selectCrea\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["creatures"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["creature"]) {
            // line 21
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "Nom", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </select>
  <input id=\"lvlInput\" type=\"number\" value=\"1\">
  <button id=\"getCrea\" class=\"blue bootstrapButton\">Create</button>
</section>
<section class=\"creatureArea\">
</section>
";
    }

    // line 31
    public function block_additional_js($context, array $blocks = array())
    {
        // line 32
        echo "  <script  src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/fight.js")), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/fight/fight.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 32,  101 => 31,  91 => 23,  80 => 21,  76 => 20,  70 => 17,  65 => 14,  62 => 13,  57 => 10,  54 => 9,  47 => 7,  44 => 6,  39 => 3,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}
  Biome
{% endblock %}

{% block additional_css %}
  <link rel=\"stylesheet\" href=\"{{url('/assets/css/fight.css')}} \">
{% endblock %}
{% block h1 %}
  Gestionnaire de Combats
{% endblock %}

{% block content %}
  <div id=\"menu\">
    <button id='accueil' data-page=\"index\"><div>Gestionnaire de Combat</div></button>
  </div>
  <div data-url=\"{{url('/')}}\"></div>
<section class=\"creatureSelect\">
  <select class=\"creatures\" id=\"selectCrea\">
    {% for creature in creatures %}
      <option value=\"{{creature.id}}\">{{creature.Nom}}</option>
    {% endfor %}
  </select>
  <input id=\"lvlInput\" type=\"number\" value=\"1\">
  <button id=\"getCrea\" class=\"blue bootstrapButton\">Create</button>
</section>
<section class=\"creatureArea\">
</section>
{% endblock %}

{% block additional_js %}
  <script  src=\"{{url('/assets/js/fight.js')}}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}
", "backoffice/fight/fight.html.twig", "C:\\xampp\\htdocs\\dashboard\\MeltenHeim\\app\\Views\\backoffice\\fight\\fight.html.twig");
    }
}
