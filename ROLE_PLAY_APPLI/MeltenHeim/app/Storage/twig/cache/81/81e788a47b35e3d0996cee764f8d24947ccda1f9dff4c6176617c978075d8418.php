<?php

/* backoffice/creatures/creatures.html.twig */
class __TwigTemplate_f69e141736e6fcf25cd7505cb78027e337b4ab75e5d463dbbd51fc18291e3681 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/creatures/creatures.html.twig", 1);
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
        echo "  Creature
";
    }

    // line 6
    public function block_additional_css($context, array $blocks = array())
    {
        // line 7
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/creature.css")), "html", null, true);
        echo " \">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/caracSheet.css")), "html", null, true);
        echo " \">
";
    }

    // line 10
    public function block_h1($context, array $blocks = array())
    {
        // line 11
        echo "  Biome
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
    <button id='accueil' data-page=\"index\"><div>Recueil des Créatures</div></button>
  </div>
  <section class=\"app\">
    <aside class=\"sidebar\">
    <header>Menu</header>
      <nav class=\"sidebar-nav\">
        <ul>
          ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["creatures"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["biome"]) {
            // line 26
            echo "            <li>
              <a href=\"#\"><i class=\"ion-bag\"></i> <span>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biome"], "type", array()), "html", null, true);
            echo "</span></a>
              <ul class=\"nav-flyout\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["biome"], "creatures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["creature"]) {
                // line 30
                echo "                  <li>
                    <a href=\"#\" class=\"change-sheet\" data-creature=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "id", array()), "html", null, true);
                echo "\"><i class=\"ion-heart-broken\"></i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["creature"], "Nom", array()), "html", null, true);
                echo "</a>
                  </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "              </ul>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </ul>
      </nav>
    </aside>
  </section>
</section>
<section class=\"sheetContainer\" style=\"background-image:url('";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/images/bg_parchemin.jpg")), "html", null, true);
        echo "')\">
  <h1>Creature Sheet</h1>
  <section class=\"sheet\">
    <article class=\"sheet__leftSection\">
      <div class=\"sheet__topSection--character\">
        <ul class=\"stats__item\">
          <h6>Creature</h6>
          <li class=\"character__item \" data-item=\"Nom\">Nom : </li>
          <li class=\"character__item\" data-item=\"Prenom\">Prenom : </li>
          <li class=\"character__item\" data-item=\"Age\">Age : </li>
          <li class=\"character__item\" data-item=\"Taille\">Taille : </li>
          <li class=\"character__item\" data-item=\"Race\">Race : </li>
          <li class=\"character__item\" data-item=\"Class\">Class : </li>
          <li class=\"character__item\" data-item=\"Sexe\">Sexe : </li>
        </ul>
        <ul class=\"stats__item\">
          <h6 >Stats : </h6>
          <li data-item=\"Vie\" >Vie : </li>
          <li data-item=\"Force\">Force : </li>
          <li data-item=\"Dext\">Dext : </li>
          <li data-item=\"Init\">Init : </li>
          <li data-item=\"Symbiose\">Symbiose : </li>
          <li data-item=\"Rage\">Rage : </li>
          <li data-item=\"Mag\">Mag : </li>
          <li data-item=\"Mana\">Mana : </li>
          <li data-item=\"Armure_phy\">Armure_phy : </li>
          <li data-item=\"Armure_mag\">Armure_mag : </li>
        </ul>
      </div>
    </article>
    <article class=\"sheet__rightSection\" data-item=\"Image\">
      
    </article>
  </section>
  <article>
    <textarea data-item=\"Description\" row=\"50\" col=\"20\" style=\"width: 1042px; height: 130px;background-color:rgb(51,51,51)\"></textarea>
  </article>
</section>
";
    }

    // line 81
    public function block_additional_js($context, array $blocks = array())
    {
        // line 82
        echo "<script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/functions/functions.js")), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/creature.js")), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/creatures/creatures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 83,  174 => 82,  171 => 81,  128 => 42,  121 => 37,  113 => 34,  102 => 31,  99 => 30,  95 => 29,  90 => 27,  87 => 26,  83 => 25,  69 => 15,  66 => 14,  61 => 11,  58 => 10,  52 => 8,  47 => 7,  44 => 6,  39 => 3,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}
  Creature
{% endblock %}

{% block additional_css %}
  <link rel=\"stylesheet\" href=\"{{url('/assets/css/creature.css')}} \">
  <link rel=\"stylesheet\" href=\"{{url('/assets/css/caracSheet.css')}} \">
{% endblock %}
{% block h1 %}
  Biome
{% endblock %}

{% block content %}
<div data-url=\"{{url('/')}}\"></div>
<section>
  <div id=\"menu\">
    <button id='accueil' data-page=\"index\"><div>Recueil des Créatures</div></button>
  </div>
  <section class=\"app\">
    <aside class=\"sidebar\">
    <header>Menu</header>
      <nav class=\"sidebar-nav\">
        <ul>
          {% for biome in creatures %}
            <li>
              <a href=\"#\"><i class=\"ion-bag\"></i> <span>{{biome.type}}</span></a>
              <ul class=\"nav-flyout\">
                {% for creature in biome.creatures %}
                  <li>
                    <a href=\"#\" class=\"change-sheet\" data-creature=\"{{creature.id}}\"><i class=\"ion-heart-broken\"></i>{{creature.Nom}}</a>
                  </li>
                {% endfor %}
              </ul>
            </li>
            {% endfor %}
        </ul>
      </nav>
    </aside>
  </section>
</section>
<section class=\"sheetContainer\" style=\"background-image:url('{{url('/assets/images/bg_parchemin.jpg')}}')\">
  <h1>Creature Sheet</h1>
  <section class=\"sheet\">
    <article class=\"sheet__leftSection\">
      <div class=\"sheet__topSection--character\">
        <ul class=\"stats__item\">
          <h6>Creature</h6>
          <li class=\"character__item \" data-item=\"Nom\">Nom : </li>
          <li class=\"character__item\" data-item=\"Prenom\">Prenom : </li>
          <li class=\"character__item\" data-item=\"Age\">Age : </li>
          <li class=\"character__item\" data-item=\"Taille\">Taille : </li>
          <li class=\"character__item\" data-item=\"Race\">Race : </li>
          <li class=\"character__item\" data-item=\"Class\">Class : </li>
          <li class=\"character__item\" data-item=\"Sexe\">Sexe : </li>
        </ul>
        <ul class=\"stats__item\">
          <h6 >Stats : </h6>
          <li data-item=\"Vie\" >Vie : </li>
          <li data-item=\"Force\">Force : </li>
          <li data-item=\"Dext\">Dext : </li>
          <li data-item=\"Init\">Init : </li>
          <li data-item=\"Symbiose\">Symbiose : </li>
          <li data-item=\"Rage\">Rage : </li>
          <li data-item=\"Mag\">Mag : </li>
          <li data-item=\"Mana\">Mana : </li>
          <li data-item=\"Armure_phy\">Armure_phy : </li>
          <li data-item=\"Armure_mag\">Armure_mag : </li>
        </ul>
      </div>
    </article>
    <article class=\"sheet__rightSection\" data-item=\"Image\">
      
    </article>
  </section>
  <article>
    <textarea data-item=\"Description\" row=\"50\" col=\"20\" style=\"width: 1042px; height: 130px;background-color:rgb(51,51,51)\"></textarea>
  </article>
</section>
{% endblock %}
{% block additional_js %}
<script src=\"{{url('/assets/js/functions/functions.js')}}\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script src=\"{{url('/assets/js/creature.js')}}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}


", "backoffice/creatures/creatures.html.twig", "C:\\xampp\\htdocs\\dashboard\\MeltenHeim\\app\\Views\\backoffice\\creatures\\creatures.html.twig");
    }
}
