<?php

/* backoffice/characters/characgen.html.twig */
class __TwigTemplate_a0acb18e482fd8a19a0d1a0419a29d01023c76fc966416a14c3de0014e3e9dfa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/characters/characgen.html.twig", 1);
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
        echo "  Characters Generator
";
    }

    // line 6
    public function block_additional_css($context, array $blocks = array())
    {
        // line 7
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/fight.css")), "html", null, true);
        echo " \">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/characgen.css")), "html", null, true);
        echo " \">
";
    }

    // line 10
    public function block_h1($context, array $blocks = array())
    {
        // line 11
        echo "  Characters Generator
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<section>
    <div id=\"menu\">
        <button id='accueil' data-page=\"index\"><div>Characters Generator</div></button>
    </div>
    <div data-url=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/")), "html", null, true);
        echo "\"></div>
    <section class=\"creatureSelect\">
        <select class=\"creatures\" id=\"selectRace\">
        <option>Race</option>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["races"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["race"]) {
            // line 24
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["race"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["race"], "Nom", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['race'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </select>
        <select class=\"creatures\" id=\"selectClasse\">
            <option>Classes</option>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 30
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "Nom", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </select>
        <input id=\"lvlInput\" type=\"number\" value=\"1\">
        <button id=\"getCrea\" class=\"blue bootstrapButton\">Create</button>
    </section>
</section>
<section class=\"creatureArea\"></section>
";
    }

    // line 40
    public function block_additional_js($context, array $blocks = array())
    {
        // line 41
        echo "  <script  src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/characgen.js.")), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/characters/characgen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  127 => 40,  117 => 32,  106 => 30,  102 => 29,  97 => 26,  86 => 24,  82 => 23,  75 => 19,  69 => 15,  66 => 14,  61 => 11,  58 => 10,  52 => 8,  47 => 7,  44 => 6,  39 => 3,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}
  Characters Generator
{% endblock %}

{% block additional_css %}
  <link rel=\"stylesheet\" href=\"{{url('/assets/css/fight.css')}} \">
  <link rel=\"stylesheet\" href=\"{{url('/assets/css/characgen.css')}} \">
{% endblock %}
{% block h1 %}
  Characters Generator
{% endblock %}

{% block content %}
<section>
    <div id=\"menu\">
        <button id='accueil' data-page=\"index\"><div>Characters Generator</div></button>
    </div>
    <div data-url=\"{{url('/')}}\"></div>
    <section class=\"creatureSelect\">
        <select class=\"creatures\" id=\"selectRace\">
        <option>Race</option>
            {% for race in races %}
                <option value=\"{{race.id}}\">{{race.Nom}}</option>
            {% endfor %}
        </select>
        <select class=\"creatures\" id=\"selectClasse\">
            <option>Classes</option>
                {% for classe in classes %}
                    <option value=\"{{classe.id}}\">{{classe.Nom}}</option>
                {% endfor %}
            </select>
        <input id=\"lvlInput\" type=\"number\" value=\"1\">
        <button id=\"getCrea\" class=\"blue bootstrapButton\">Create</button>
    </section>
</section>
<section class=\"creatureArea\"></section>
{% endblock %}

{% block additional_js %}
  <script  src=\"{{url('/assets/js/characgen.js.')}}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}
", "backoffice/characters/characgen.html.twig", "C:\\xampp\\htdocs\\dashboard\\MeltenHeim\\app\\Views\\backoffice\\characters\\characgen.html.twig");
    }
}
