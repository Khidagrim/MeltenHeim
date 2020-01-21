<?php

/* backoffice/classroom/score.html.twig */
class __TwigTemplate_b141f7fd64e82b0225a6fe053985c2dac1eabeb72667f3c93ea108866b2b6efd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/classroom/score.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        echo "BackOffice | Ajouter un enfant";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<h1>La classe : ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "description", array()), "html", null, true);
        echo "</h1>
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array((("/classe/" . twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "code", array())) . "/addSingleChild"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter un autre enfant</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Pseudo</th>
      <th scope=\"col\">Avatar</th>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
            // line 15
            echo "        <th scope=\"col\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "code", array()), "html", null, true);
            echo "</b></th>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </tr>
  </thead>
  <tbody>
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 21
            echo "  ";
            $context["pos"] = 0;
            // line 22
            echo "    <tr>
      <th scope=\"row\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "id", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "pseudo", array()), "html", null, true);
            echo "</td>
      <td><img src=\"";
            // line 25
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/img/avatar/" . twig_get_attribute($this->env, $this->source, $context["child"], "avatar", array())))), "html", null, true);
            echo "\" style=\"height:149px;\" alt=\"#\"></img></td>
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
                // line 27
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, $context["child"], "score", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[($context["pos"] ?? null)] ?? null) : null), "challenge_id", array()) == twig_get_attribute($this->env, $this->source, $context["challenge"], "id", array()))) {
                    // line 28
                    echo "            <th><p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, $context["child"], "score", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[($context["pos"] ?? null)] ?? null) : null), "score", array()), "html", null, true);
                    echo "</p></th>
            ";
                    // line 29
                    $context["pos"] = (($context["pos"] ?? null) + 1);
                    // line 30
                    echo "          ";
                } else {
                    // line 31
                    echo "            <th><p>Pas encore</p></th>
          ";
                }
                // line 33
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</tbody>



";
    }

    public function getTemplateName()
    {
        return "backoffice/classroom/score.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 36,  126 => 34,  120 => 33,  116 => 31,  113 => 30,  111 => 29,  106 => 28,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  84 => 22,  81 => 21,  77 => 20,  72 => 17,  63 => 15,  59 => 14,  49 => 7,  45 => 6,  42 => 5,  39 => 4,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | Ajouter un enfant{% endblock %}

{% block content %}

<h1>La classe : {{classroom.description}}</h1>
<a href=\"{{ url('/classe/' ~ classroom.code ~ '/addSingleChild')}}\" class=\"btn btn-primary\">Ajouter un autre enfant</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Pseudo</th>
      <th scope=\"col\">Avatar</th>
      {% for challenge in challenges %}
        <th scope=\"col\"><b>{{ challenge.code }}</b></th>
      {% endfor %}
    </tr>
  </thead>
  <tbody>
  {% for child in children %}
  {% set pos = 0 %}
    <tr>
      <th scope=\"row\">{{ child.id }}</th>
      <td>{{ child.pseudo }}</td>
      <td><img src=\"{{ url( '/assets/img/avatar/' ~ child.avatar) }}\" style=\"height:149px;\" alt=\"#\"></img></td>
        {% for challenge in challenges %}
          {% if child.score[pos].challenge_id == challenge.id %}
            <th><p>{{child.score[pos].score}}</p></th>
            {% set pos = pos + 1 %}
          {% else %}
            <th><p>Pas encore</p></th>
          {% endif %}
        {% endfor %}
    </tr>
{% endfor %}
</tbody>



{% endblock %}

", "backoffice/classroom/score.html.twig", "C:\\xampp\\htdocs\\dashboard\\__Alphacorp\\alphacorp\\app\\Views\\backoffice\\classroom\\score.html.twig");
    }
}
