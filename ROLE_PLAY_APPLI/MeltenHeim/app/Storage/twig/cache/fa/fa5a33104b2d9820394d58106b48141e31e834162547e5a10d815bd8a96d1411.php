<?php

/* defi.html.twig */
class __TwigTemplate_a25bda1da714bd674e6897e7e9a92d389df04a5ffe55d13e08236ace3fb3f645 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "defi.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'specific_js' => array($this, 'block_specific_js'),
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
        echo "Les défis";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"container\">
    <h1>Alphacorp > accueil</h1>
    <p class=\"description\">
      Demarre le jeu en utilisant ton pseudo et choisi ton défi.
    </p>
  </div>

\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
            // line 12
            echo "\t\t\t<div>
\t\t\t\t<h4><b>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "code", array()), "html", null, true);
            echo "</b></h4> 
\t      <p>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\"></th>
      <th scope=\"col\">Pseudo</th>
\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
            // line 24
            echo "\t\t    <th scope=\"col\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "code", array()), "html", null, true);
            echo "</b></th>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </tr>
  </thead>
  <tbody>
  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 30
            echo "    <tr>
      <th scope=\"row\"><img src=\"";
            // line 31
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/img/avatar/" . twig_get_attribute($this->env, $this->source, $context["child"], "avatar", array())))), "html", null, true);
            echo "\" style=\"height:149px;\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "pseudo", array()), "html", null, true);
            echo "\"></th>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "pseudo", array()), "html", null, true);
            echo "</td>
\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
                // line 34
                echo "\t\t    <th><a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(((((("/classe/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "classroom", array()), "code", array())) . "/defi/") . twig_get_attribute($this->env, $this->source, $context["child"], "id", array())) . "/") . twig_get_attribute($this->env, $this->source, $context["challenge"], "id", array())))), "html", null, true);
                echo "\" class=\"btn btn-primary\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "id", array()), "html", null, true);
                echo "\">JOUER</a></th>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
";
    }

    // line 41
    public function block_specific_js($context, array $blocks = array())
    {
        // line 42
        echo "<script type=\"text/javascript\">
</script>
";
    }

    public function getTemplateName()
    {
        return "defi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  142 => 41,  137 => 38,  130 => 36,  119 => 34,  115 => 33,  111 => 32,  105 => 31,  102 => 30,  98 => 29,  93 => 26,  84 => 24,  80 => 23,  72 => 17,  63 => 14,  59 => 13,  56 => 12,  52 => 11,  43 => 4,  40 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}Les défis{% endblock %}
{% block content %}
  <div class=\"container\">
    <h1>Alphacorp > accueil</h1>
    <p class=\"description\">
      Demarre le jeu en utilisant ton pseudo et choisi ton défi.
    </p>
  </div>

\t{% for challenge in challenges %}
\t\t\t<div>
\t\t\t\t<h4><b>{{ challenge.code }}</b></h4> 
\t      <p>{{ challenge.description }}</p>
\t\t\t</div>
\t{% endfor %}

<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\"></th>
      <th scope=\"col\">Pseudo</th>
\t\t\t{% for challenge in challenges %}
\t\t    <th scope=\"col\"><b>{{ challenge.code }}</b></th>
\t\t\t{% endfor %}
    </tr>
  </thead>
  <tbody>
  {% for child in children %}
    <tr>
      <th scope=\"row\"><img src=\"{{ url( '/assets/img/avatar/' ~ child.avatar ) }}\" style=\"height:149px;\" alt=\"{{child.pseudo}}\"></th>
      <td>{{ child.pseudo }}</td>
\t\t\t{% for challenge in challenges %}
\t\t    <th><a href=\"{{url( '/classe/' ~ session.classroom.code ~ '/defi/' ~ child.id ~ '/' ~ challenge.id )}}\" class=\"btn btn-primary\" id=\"{{ challenge.id }}\">JOUER</a></th>
\t\t\t{% endfor %}
    </tr>
{% endfor %}

{% endblock %}

{% block specific_js %}
<script type=\"text/javascript\">
</script>
{% endblock %}", "defi.html.twig", "C:\\xampp\\htdocs\\dashboard\\__Alphacorp\\alphacorp\\app\\Views\\defi.html.twig");
    }
}
