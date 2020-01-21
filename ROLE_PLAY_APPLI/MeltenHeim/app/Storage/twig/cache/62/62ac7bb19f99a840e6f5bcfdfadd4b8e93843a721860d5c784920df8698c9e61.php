<?php

/* backoffice/video/add.html.twig */
class __TwigTemplate_f611dbebaed3994729503612c13a19ef7a601b17f094046feb85e337ad3b00f8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/video/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'specific_css' => array($this, 'block_specific_css'),
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
        echo "BackOffice | les Videos";
    }

    // line 3
    public function block_specific_css($context, array $blocks = array())
    {
        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/style.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<h1 class=\"text-light\">Ajouter une Video</h1>
<p class=\"text-light\">Indiquer les données de cette Video.</p>
<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/video/save")), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Titre : </label>
    <div class=\"col-sm-4\">
      <input name=\"titre\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Choisir une image : </label>
    <div class=\"custom-file mb-3 col-sm-4\">
      <input type=\"file\" name=\"image\" class=\"custom-file-input \">
      <label for=\"image\" class=\"custom-file-label removeText\"></label>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Nom de la Video ( + .mp4, .avi, ect..): </label>
    <div class=\"col-sm-4\">
      <input name=\"lienVideo\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Resumé de la video :</label>
    <div class=\"col-sm-4\">
      <textarea name=\"resume\" type=\"text\" class=\"form-control\"></textarea>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Utilisation générale :</label>
    <div class=\"col-sm-4\">
      <textarea name=\"usesGen\" type=\"text\" class=\"form-control\"></textarea>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Lien Word : </label>
    <div class=\"col-sm-4\">
      <input name=\"lienWord\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Lien Internet : </label>
    <div class=\"col-sm-4\">
      <input name=\"lienInternet\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row text-light\" >
    <hr>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Tags : </label>
    <div class=\" d-flex col-sm-9\">
      <p id=\"up\" class=\"btn btn-secondary\">+</p>
      <p class=\"btn btn-secondary down\">-</p>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Liens Words Supplémentaires : </label>
    <div class=\" d-flex col-sm-9\">
      <p id=\"upWord\" class=\"btn btn-secondary\">+</p>
      <p class=\"btn btn-secondary down\">-</p>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Utilisations supplémentaires : </label>
    <div class=\" d-flex col-sm-9\">
      <p id=\"upUses\" class=\"btn btn-secondary\" style=\"max-height:38px\">+</p>
      <p class=\"btn btn-secondary down\" style=\"max-height:38px\">-</p>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer la nouvelle vidéo</button>
      <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/video")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>


</form>
";
    }

    // line 101
    public function block_specific_js($context, array $blocks = array())
    {
        // line 102
        echo "<script>

\$(document).ready(function(){
  var numbers = 0;

  \$(\"#up\").click(function(){

    addaSelect();

  });

  \$(\"#upWord\").click(function(){

    addaInput();

  });

  \$(\"#upUses\").click(function(){

    addaTextArea();

  });

  \$(\".down\").click(function(){
    \$(this).siblings('.selectRemove:last-of-type').remove();
  });


  function addaSelect()
  {
    var text = '<select name=\"tag'+numbers+'\" id=\"'+numbers+'\" class=\"form-control selectRemove\" style=\"max-width:125px\">";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo "<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "nom", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select>';
    \$(\"#up\").before(text);
    numbers++;
  }

  function addaInput()
  {
    var text = '<input name=\"LienOtherWord'+numbers+'\" id=\"Word'+numbers+'\" class=\"form-control selectRemove\" style=\"max-width:125px\">';
    \$(\"#upWord\").before(text);
    numbers++;
  }

  function addaTextArea()
  {
    var text = '<textarea name=\"otherUses'+numbers+'\" cols=\"20\" rows=\"3\" id=\"Textarea'+numbers+'\" class=\"form-control selectRemove col-4\" ></textarea>';
    \$(\"#upUses\").before(text);
    numbers++;
  }

  \$(\"input[type=file]\").change(function() {
    filename = this.files[0].name
    \$(\"label[for=image]\").text(filename);
  });

});

  </script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/video/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 132,  159 => 102,  156 => 101,  145 => 93,  59 => 10,  54 => 7,  51 => 6,  44 => 4,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les Videos{% endblock %}
{% block specific_css %}
  <link href=\"{{url('/assets/css/style.css')}}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}
{% block content %}

<h1 class=\"text-light\">Ajouter une Video</h1>
<p class=\"text-light\">Indiquer les données de cette Video.</p>
<form action=\"{{ url( '/backoffice/video/save' )}}\" method=\"post\" enctype=\"multipart/form-data\">

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Titre : </label>
    <div class=\"col-sm-4\">
      <input name=\"titre\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Choisir une image : </label>
    <div class=\"custom-file mb-3 col-sm-4\">
      <input type=\"file\" name=\"image\" class=\"custom-file-input \">
      <label for=\"image\" class=\"custom-file-label removeText\"></label>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Nom de la Video ( + .mp4, .avi, ect..): </label>
    <div class=\"col-sm-4\">
      <input name=\"lienVideo\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Resumé de la video :</label>
    <div class=\"col-sm-4\">
      <textarea name=\"resume\" type=\"text\" class=\"form-control\"></textarea>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Utilisation générale :</label>
    <div class=\"col-sm-4\">
      <textarea name=\"usesGen\" type=\"text\" class=\"form-control\"></textarea>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Lien Word : </label>
    <div class=\"col-sm-4\">
      <input name=\"lienWord\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Lien Internet : </label>
    <div class=\"col-sm-4\">
      <input name=\"lienInternet\" type=\"text\" class=\"form-control\">
    </div>
  </div>

  <div class=\"form-group row text-light\" >
    <hr>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Tags : </label>
    <div class=\" d-flex col-sm-9\">
      <p id=\"up\" class=\"btn btn-secondary\">+</p>
      <p class=\"btn btn-secondary down\">-</p>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Liens Words Supplémentaires : </label>
    <div class=\" d-flex col-sm-9\">
      <p id=\"upWord\" class=\"btn btn-secondary\">+</p>
      <p class=\"btn btn-secondary down\">-</p>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Utilisations supplémentaires : </label>
    <div class=\" d-flex col-sm-9\">
      <p id=\"upUses\" class=\"btn btn-secondary\" style=\"max-height:38px\">+</p>
      <p class=\"btn btn-secondary down\" style=\"max-height:38px\">-</p>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer la nouvelle vidéo</button>
      <a href=\"{{ url( '/backoffice/video' )}}\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>


</form>
{% endblock %}

{% block specific_js %}
<script>

\$(document).ready(function(){
  var numbers = 0;

  \$(\"#up\").click(function(){

    addaSelect();

  });

  \$(\"#upWord\").click(function(){

    addaInput();

  });

  \$(\"#upUses\").click(function(){

    addaTextArea();

  });

  \$(\".down\").click(function(){
    \$(this).siblings('.selectRemove:last-of-type').remove();
  });


  function addaSelect()
  {
    var text = '<select name=\"tag'+numbers+'\" id=\"'+numbers+'\" class=\"form-control selectRemove\" style=\"max-width:125px\">{% for tag in tags %}<option value=\"{{tag.id}}\">{{tag.nom}}</option>{% endfor %}</select>';
    \$(\"#up\").before(text);
    numbers++;
  }

  function addaInput()
  {
    var text = '<input name=\"LienOtherWord'+numbers+'\" id=\"Word'+numbers+'\" class=\"form-control selectRemove\" style=\"max-width:125px\">';
    \$(\"#upWord\").before(text);
    numbers++;
  }

  function addaTextArea()
  {
    var text = '<textarea name=\"otherUses'+numbers+'\" cols=\"20\" rows=\"3\" id=\"Textarea'+numbers+'\" class=\"form-control selectRemove col-4\" ></textarea>';
    \$(\"#upUses\").before(text);
    numbers++;
  }

  \$(\"input[type=file]\").change(function() {
    filename = this.files[0].name
    \$(\"label[for=image]\").text(filename);
  });

});

  </script>
{% endblock %}", "backoffice/video/add.html.twig", "C:\\xampp\\htdocs\\dashboard\\Lanius\\app\\Views\\backoffice\\video\\add.html.twig");
    }
}
