<?php

/* backoffice/tag/add.html.twig */
class __TwigTemplate_9521d90aac7872579a4d41c49480b930a82f24557e7b78b8a4612b41f0801021 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/tag/add.html.twig", 1);
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
        echo "BackOffice | les Tags";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1 class=\"text-light\">Ajouter un Tag</h1>
<p class=\"text-light\">Indiquer les données de ce Tag.</p>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/tag/save")), "html", null, true);
        echo "\" method=\"post\">

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Nom : </label>
    <div class=\"col-sm-2\">
      <input name=\"nom\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer le nouveau Tag</button>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/challenges")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>

</form>
";
    }

    public function getTemplateName()
    {
        return "backoffice/tag/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  47 => 7,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les Tags{% endblock %}
{% block content %}

<h1 class=\"text-light\">Ajouter un Tag</h1>
<p class=\"text-light\">Indiquer les données de ce Tag.</p>
<form action=\"{{ url( '/backoffice/tag/save' )}}\" method=\"post\">

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Nom : </label>
    <div class=\"col-sm-2\">
      <input name=\"nom\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer le nouveau Tag</button>
      <a href=\"{{ url( '/backoffice/challenges' )}}\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>

</form>
{% endblock %}", "backoffice/tag/add.html.twig", "C:\\xampp\\htdocs\\dashboard\\Lanius\\app\\Views\\backoffice\\tag\\add.html.twig");
    }
}
