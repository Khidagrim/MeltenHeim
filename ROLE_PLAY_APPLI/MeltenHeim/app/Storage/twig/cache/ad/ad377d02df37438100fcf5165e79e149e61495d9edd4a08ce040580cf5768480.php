<?php

/* backoffice/tag/edit.html.twig */
class __TwigTemplate_9d71b8fe39711df83756e90436b34674d208dc49413ff94dd3b18d52d14400bd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/tag/edit.html.twig", 1);
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
<h1 class=\"text-light\">Modifier le Tag :<b> ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tag"] ?? null), "nom", array()), "html", null, true);
        echo " </b></h1>
<p class=\"text-light\">Indiquer les données de ce Tag.</p>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/tag/update/" . twig_get_attribute($this->env, $this->source, ($context["tag"] ?? null), "id", array())))), "html", null, true);
        echo "\" method=\"post\">
  
  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Nom : </label>
    <div class=\"col-sm-2\">
      <input name=\"nom\" type=\"text\" class=\"form-control\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tag"] ?? null), "nom", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Mettre a jour le Tag</button>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/tag")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>

</form>
";
    }

    public function getTemplateName()
    {
        return "backoffice/tag/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  58 => 12,  50 => 7,  45 => 5,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les Tags{% endblock %}
{% block content %}

<h1 class=\"text-light\">Modifier le Tag :<b> {{tag.nom}} </b></h1>
<p class=\"text-light\">Indiquer les données de ce Tag.</p>
<form action=\"{{ url( '/backoffice/tag/update/' ~ tag.id )}}\" method=\"post\">
  
  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Nom : </label>
    <div class=\"col-sm-2\">
      <input name=\"nom\" type=\"text\" class=\"form-control\" value=\"{{tag.nom}}\">
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Mettre a jour le Tag</button>
      <a href=\"{{ url( '/backoffice/tag' )}}\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>

</form>
{% endblock %}", "backoffice/tag/edit.html.twig", "C:\\xampp\\htdocs\\dashboard\\Lanius\\app\\Views\\backoffice\\tag\\edit.html.twig");
    }
}
