<?php

/* backoffice/video/edit.html.twig */
class __TwigTemplate_e111fbdfe39f4f4149c354d050fca2c2129d2d3f0e41787cbbd00e6a4a571e8b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/video/edit.html.twig", 1);
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
<h1 class=\"text-light\">Modifier la Video : <b>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "titre", array()), "html", null, true);
        echo "</b></h1>
<h6 class=\"text-light\">Indiquer les données à modifier de cette Video.</h6>
<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/video/update/" . twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "id", array())))), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Titre : </label>
    <div class=\"col-sm-2\">
      <input name=\"titre\" type=\"text\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "titre", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Choisir une image : </label>
    <div class=\"custom-file mb-3 col-sm-6\">
      <input type=\"file\" name=\"image\" class=\"custom-file-input\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "image", array()), "html", null, true);
        echo "\">
      <label for=\"image\" class=\"custom-file-label col-6 removeText\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "image", array()), "html", null, true);
        echo "</label>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Nom de la Video ( + .mp4, .avi, ect..): </label>
    <div class=\"col-sm-4\">
      <input name=\"lienVideo\" type=\"text\" class=\"form-control\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "lienVideo", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Resumé de la video :</label>
    <div class=\"col-sm-4\">
      <textarea name=\"resume\" type=\"text\" class=\"form-control\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "resume", array()), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Utilisation générale :</label>
    <div class=\"col-sm-4\">
      <textarea name=\"usesGen\" type=\"text\" class=\"form-control\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "usesGen", array()), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Lien Word : </label>
    <div class=\"col-sm-4\">
      <input name=\"lienWord\" type=\"text\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "lienWord", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Lien Internet : </label>
    <div class=\"col-sm-4\">
      <input name=\"lienInternet\" type=\"text\" class=\"form-control\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "lienInternet", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Tags Existants : </label>
    <div class=\"col d-flex flex-wrap tagContainer\">
      ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 66
            echo "        <input style=\"max-height:25px\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", array()), "html", null, true);
            echo "\" readonly class=\" mr-1 mt-1 tagDiv badge badge-pill badge-secondary d-flex justify-content-center align-items-center tag\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "nom", array()), "html", null, true);
            echo "\">
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Autre Liens Words Existants : </label>
    <div class=\"col d-flex flex-wrap wordContainer\">
      ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["words"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
            // line 75
            echo "        <div class=\"col-3 d-flex\"><input data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["word"], "id", array()), "html", null, true);
            echo "\" readonly class=\"form-control word\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["word"], "lienOtherWord", array()), "html", null, true);
            echo "\"><p class=\"btn btn-danger\">X</p></div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Autres Utilisations Existantes : </label>
    <div class=\"col d-flex flex-wrap useContainer\">
      ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["uses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aUse"]) {
            // line 84
            echo "        <div class=\"col-3 d-flex\"><textarea data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aUse"], "id", array()), "html", null, true);
            echo "\" cols=\"30\" readonly class=\"use\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aUse"], "Description", array()), "html", null, true);
            echo "</textarea><p class=\"btn btn-danger\">X</p></div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aUse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer la nouvelle vidéo</button>
      <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/video")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>
</form>

<div class=\"container\">
  <h6 class=\"text-light\">Ajouter des <b>Tags</b> à cette video :</h6>
  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Ajouter Tags : </label>
    <div class=\" d-flex col-sm-9\">
      <select name=\"idTags\" class=\"form-control\" style=\"max-width:125px\">
        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allTags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aTag"]) {
            // line 104
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aTag"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aTag"], "nom", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aTag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "      </select>
      <button id=\"addTag\" class=\"btn btn-secondary\">Ajouter le tag</button>
    </div>
  </div>
</div>

<div class=\"container\">
  <h6 class=\"text-light\">Ajouter des <b>Words</b> à cette video :</h6>
  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Ajouter Word : </label>
    <div class=\" d-flex col-sm-9\">
      <input type=\"text\" class=\"form-control\">
      <button id=\"addWord\" class=\"btn btn-secondary\">Ajouter le word</button>
    </div>
  </div>
</div>

<div class=\"container\">
  <h6 class=\"text-light\">Ajouter des <b>Utilisations</b> à cette video :</h6>
  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Ajouter Utilisation : </label>
    <div class=\" d-flex col-sm-9\">
      <textarea cols=\"30\" rows=\"10\"></textarea>
      <button id=\"addUse\" class=\"btn btn-secondary\" style=\"max-height:40px\">Ajouter l'utilisation</button>
    </div>
  </div>
</div>
";
    }

    // line 134
    public function block_specific_js($context, array $blocks = array())
    {
        // line 135
        echo "<script>

\$(document).ready(function(){

  \$(\"input[type=file]\").change(function() {
    filename = this.files[0].name
    \$(\"label[for=image]\").text(filename);
  });
//------------------------------------------------------------------ || Add a Tag || -------------------------------------------------------------------//
  \$(\"#addTag\").click(function(){
    var tagId = \$(this).parent(\"div\").children('select').children('option:selected').attr('value');

    \$.post(\"";
        // line 147
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/video/addSingleTag/" . twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "id", array())))), "html", null, true);
        echo "\", {idTags: tagId}, function(data) {
      var datas = data.split('||');
      addTag(datas[0],datas[1]);

      \$(\".tagContainer input\").click(function(){
        var theTag = \$(this);
        var tagId = \$(this).attr('data-id');
        \$.post(\"";
        // line 154
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/video/removeSingleTag/" . twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "id", array())))), "html", null, true);
        echo "\", {idTag: tagId}, function() {
          theTag.remove();
        });
      });
    });
  });

  function addTag(id,name)
  {
    var text = \"<input readonly style=\\\"max-height:25px\\\" class=\\\" mr-1 mt-1 tagDiv badge badge-pill badge-secondary d-flex justify-content-center align-items-center tag\\\" value=\\\"\"+name+\"\\\" data-id=\\\"\"+id+\"\\\" >\";
    \$(\".tagContainer\").append(text)
  }

//------------------------------------------------------------------ || Add a Word || -------------------------------------------------------------------//
  \$(\"#addWord\").click(function(){

    var textWord = \$(this).siblings('input').val();

    \$.post(\"";
        // line 172
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/video/addSingleWord/" . twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "id", array())))), "html", null, true);
        echo "\",{lienOtherWord: textWord} ,function(data) {
      var datas = data.split('||');
      addWord(datas[0],datas[1]);

      \$(\".wordContainer p\").click(function(){
        var theWord = \$(this).siblings('input');
        var wordId = theWord.attr('data-id');
        console.log(wordId)
        \$.post(\"";
        // line 180
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/video/removeSingleWord/" . twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "id", array())))), "html", null, true);
        echo "\", {idWord: wordId}, function() {
          theWord.parent('div').remove();
        });

      });
    });
  });

  function addWord(id,name)
  {
    var text = '<div class=\"col-3 d-flex\"><input data-id=\"'+id+'\" readonly class=\"form-control word\" value=\"'+name+'\"><p class=\"btn btn-danger\">X</p><div>';
    \$(\".wordContainer\").append(text)
  }

  //------------------------------------------------------------------ || Add a Use || -------------------------------------------------------------------//

  \$(\"#addUse\").click(function(){

    var textUses = \$(this).siblings('textarea').val();
    console.log(textUses);

    \$.post(\"";
        // line 201
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/video/addSingleUse/" . twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "id", array())))), "html", null, true);
        echo "\", {Description: textUses}, function(data) {
      var datas = data.split('||');
      addUse(datas[0],datas[1]);
      console.log(datas);

      \$(\".useContainer p\").click(function(){
        var theUse = \$(this).siblings('textarea');
        var useId = theUse.attr('data-id');
        console.log(useId);
        \$.post(\"";
        // line 210
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/video/removeSingleUse/" . twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "id", array())))), "html", null, true);
        echo "\", {idUse: useId}, function() {
          theUse.parent('div').remove();
        });

      });
    });
  });

  function addUse(id,name)
  {
     var text = \"<div class=\\\"col-4 d-flex\\\"><textarea data-id=\\\"\"+id+\"\\\" readonly cols=\\\"30\\\" class=\\\"use\\\">\"+name+\"</textarea><p class=\\\"btn btn-danger\\\">X</p></div>\";
    \$(\".useContainer\").append(text)
  }

  //------------------------------------------------------------------ || Delete a Tag || -------------------------------------------------------------------//

  \$(\".tagContainer input\").click(function(){
    var theTag = \$(this);
    var tagId = \$(this).attr('data-id');
    \$.post(\"";
        // line 229
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/video/removeSingleTag/" . twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "id", array())))), "html", null, true);
        echo "\", {idTag: tagId}, function() {
      theTag.remove();
    });

  });

  //------------------------------------------------------------------ || Delete a Word || -------------------------------------------------------------------//

  \$(\".wordContainer p\").click(function(){
    var theWord = \$(this).siblings('input');
    var wordId = theWord.attr('data-id');
    console.log(wordId)
    \$.post(\"";
        // line 241
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/video/removeSingleWord/" . twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "id", array())))), "html", null, true);
        echo "\", {idWord: wordId}, function() {
      theWord.parent('div').remove();
    });

  });

  //------------------------------------------------------------------ || Delete a Use || -------------------------------------------------------------------//

  \$(\".useContainer p\").click(function(){
    var theUse = \$(this).siblings('textarea');
    var useId = theUse.attr('data-id');
    console.log(useId);
    \$.post(\"";
        // line 253
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/video/removeSingleUse/" . twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "id", array())))), "html", null, true);
        echo "\", {idUse: useId}, function() {
      theUse.parent('div').remove();
    });

  });


});

  </script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/video/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 253,  405 => 241,  390 => 229,  368 => 210,  356 => 201,  332 => 180,  321 => 172,  300 => 154,  290 => 147,  276 => 135,  273 => 134,  242 => 106,  231 => 104,  227 => 103,  213 => 92,  205 => 86,  194 => 84,  190 => 83,  182 => 77,  171 => 75,  167 => 74,  159 => 68,  148 => 66,  144 => 65,  134 => 58,  124 => 51,  114 => 44,  104 => 37,  94 => 30,  84 => 23,  80 => 22,  70 => 15,  62 => 10,  57 => 8,  54 => 7,  51 => 6,  44 => 4,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les Videos{% endblock %}
{% block specific_css %}
  <link href=\"{{url('/assets/css/style.css')}}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}
{% block content %}

<h1 class=\"text-light\">Modifier la Video : <b>{{video.titre}}</b></h1>
<h6 class=\"text-light\">Indiquer les données à modifier de cette Video.</h6>
<form action=\"{{ url( '/backoffice/video/update/' ~ video.id )}}\" method=\"post\" enctype=\"multipart/form-data\">

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Titre : </label>
    <div class=\"col-sm-2\">
      <input name=\"titre\" type=\"text\" class=\"form-control\" value=\"{{video.titre}}\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Choisir une image : </label>
    <div class=\"custom-file mb-3 col-sm-6\">
      <input type=\"file\" name=\"image\" class=\"custom-file-input\" value=\"{{video.image}}\">
      <label for=\"image\" class=\"custom-file-label col-6 removeText\">{{video.image}}</label>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Nom de la Video ( + .mp4, .avi, ect..): </label>
    <div class=\"col-sm-4\">
      <input name=\"lienVideo\" type=\"text\" class=\"form-control\" value=\"{{video.lienVideo}}\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Resumé de la video :</label>
    <div class=\"col-sm-4\">
      <textarea name=\"resume\" type=\"text\" class=\"form-control\">{{video.resume}}</textarea>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Utilisation générale :</label>
    <div class=\"col-sm-4\">
      <textarea name=\"usesGen\" type=\"text\" class=\"form-control\">{{video.usesGen}}</textarea>
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Lien Word : </label>
    <div class=\"col-sm-4\">
      <input name=\"lienWord\" type=\"text\" class=\"form-control\" value=\"{{video.lienWord}}\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Lien Internet : </label>
    <div class=\"col-sm-4\">
      <input name=\"lienInternet\" type=\"text\" class=\"form-control\" value=\"{{video.lienInternet}}\">
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Tags Existants : </label>
    <div class=\"col d-flex flex-wrap tagContainer\">
      {% for tag in tags %}
        <input style=\"max-height:25px\" data-id=\"{{tag.id}}\" readonly class=\" mr-1 mt-1 tagDiv badge badge-pill badge-secondary d-flex justify-content-center align-items-center tag\" value=\"{{tag.nom}}\">
      {% endfor %}
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Autre Liens Words Existants : </label>
    <div class=\"col d-flex flex-wrap wordContainer\">
      {% for word in words %}
        <div class=\"col-3 d-flex\"><input data-id=\"{{word.id}}\" readonly class=\"form-control word\" value=\"{{word.lienOtherWord}}\"><p class=\"btn btn-danger\">X</p></div>
      {% endfor %}
    </div>
  </div>

  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Autres Utilisations Existantes : </label>
    <div class=\"col d-flex flex-wrap useContainer\">
      {% for aUse in uses %}
        <div class=\"col-3 d-flex\"><textarea data-id=\"{{aUse.id}}\" cols=\"30\" readonly class=\"use\">{{aUse.Description}}</textarea><p class=\"btn btn-danger\">X</p></div>
      {% endfor %}
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer la nouvelle vidéo</button>
      <a href=\"{{ url( '/backoffice/video' )}}\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>
</form>

<div class=\"container\">
  <h6 class=\"text-light\">Ajouter des <b>Tags</b> à cette video :</h6>
  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Ajouter Tags : </label>
    <div class=\" d-flex col-sm-9\">
      <select name=\"idTags\" class=\"form-control\" style=\"max-width:125px\">
        {% for aTag in allTags %}
          <option value=\"{{aTag.id}}\">{{aTag.nom}}</option>
        {% endfor %}
      </select>
      <button id=\"addTag\" class=\"btn btn-secondary\">Ajouter le tag</button>
    </div>
  </div>
</div>

<div class=\"container\">
  <h6 class=\"text-light\">Ajouter des <b>Words</b> à cette video :</h6>
  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Ajouter Word : </label>
    <div class=\" d-flex col-sm-9\">
      <input type=\"text\" class=\"form-control\">
      <button id=\"addWord\" class=\"btn btn-secondary\">Ajouter le word</button>
    </div>
  </div>
</div>

<div class=\"container\">
  <h6 class=\"text-light\">Ajouter des <b>Utilisations</b> à cette video :</h6>
  <div class=\"form-group row text-light\">
    <label class=\"col-sm-3 col-form-label\">Ajouter Utilisation : </label>
    <div class=\" d-flex col-sm-9\">
      <textarea cols=\"30\" rows=\"10\"></textarea>
      <button id=\"addUse\" class=\"btn btn-secondary\" style=\"max-height:40px\">Ajouter l'utilisation</button>
    </div>
  </div>
</div>
{% endblock %}
{% block specific_js %}
<script>

\$(document).ready(function(){

  \$(\"input[type=file]\").change(function() {
    filename = this.files[0].name
    \$(\"label[for=image]\").text(filename);
  });
//------------------------------------------------------------------ || Add a Tag || -------------------------------------------------------------------//
  \$(\"#addTag\").click(function(){
    var tagId = \$(this).parent(\"div\").children('select').children('option:selected').attr('value');

    \$.post(\"{{ url( '/backoffice/video/addSingleTag/' ~ video.id)}}\", {idTags: tagId}, function(data) {
      var datas = data.split('||');
      addTag(datas[0],datas[1]);

      \$(\".tagContainer input\").click(function(){
        var theTag = \$(this);
        var tagId = \$(this).attr('data-id');
        \$.post(\"{{ url( '/backoffice/video/removeSingleTag/' ~ video.id)}}\", {idTag: tagId}, function() {
          theTag.remove();
        });
      });
    });
  });

  function addTag(id,name)
  {
    var text = \"<input readonly style=\\\"max-height:25px\\\" class=\\\" mr-1 mt-1 tagDiv badge badge-pill badge-secondary d-flex justify-content-center align-items-center tag\\\" value=\\\"\"+name+\"\\\" data-id=\\\"\"+id+\"\\\" >\";
    \$(\".tagContainer\").append(text)
  }

//------------------------------------------------------------------ || Add a Word || -------------------------------------------------------------------//
  \$(\"#addWord\").click(function(){

    var textWord = \$(this).siblings('input').val();

    \$.post(\"{{ url( '/backoffice/video/addSingleWord/' ~ video.id)}}\",{lienOtherWord: textWord} ,function(data) {
      var datas = data.split('||');
      addWord(datas[0],datas[1]);

      \$(\".wordContainer p\").click(function(){
        var theWord = \$(this).siblings('input');
        var wordId = theWord.attr('data-id');
        console.log(wordId)
        \$.post(\"{{ url( '/backoffice/video/removeSingleWord/' ~ video.id)}}\", {idWord: wordId}, function() {
          theWord.parent('div').remove();
        });

      });
    });
  });

  function addWord(id,name)
  {
    var text = '<div class=\"col-3 d-flex\"><input data-id=\"'+id+'\" readonly class=\"form-control word\" value=\"'+name+'\"><p class=\"btn btn-danger\">X</p><div>';
    \$(\".wordContainer\").append(text)
  }

  //------------------------------------------------------------------ || Add a Use || -------------------------------------------------------------------//

  \$(\"#addUse\").click(function(){

    var textUses = \$(this).siblings('textarea').val();
    console.log(textUses);

    \$.post(\"{{ url( '/backoffice/video/addSingleUse/' ~ video.id)}}\", {Description: textUses}, function(data) {
      var datas = data.split('||');
      addUse(datas[0],datas[1]);
      console.log(datas);

      \$(\".useContainer p\").click(function(){
        var theUse = \$(this).siblings('textarea');
        var useId = theUse.attr('data-id');
        console.log(useId);
        \$.post(\"{{ url( '/backoffice/video/removeSingleUse/' ~ video.id)}}\", {idUse: useId}, function() {
          theUse.parent('div').remove();
        });

      });
    });
  });

  function addUse(id,name)
  {
     var text = \"<div class=\\\"col-4 d-flex\\\"><textarea data-id=\\\"\"+id+\"\\\" readonly cols=\\\"30\\\" class=\\\"use\\\">\"+name+\"</textarea><p class=\\\"btn btn-danger\\\">X</p></div>\";
    \$(\".useContainer\").append(text)
  }

  //------------------------------------------------------------------ || Delete a Tag || -------------------------------------------------------------------//

  \$(\".tagContainer input\").click(function(){
    var theTag = \$(this);
    var tagId = \$(this).attr('data-id');
    \$.post(\"{{ url( '/backoffice/video/removeSingleTag/' ~ video.id)}}\", {idTag: tagId}, function() {
      theTag.remove();
    });

  });

  //------------------------------------------------------------------ || Delete a Word || -------------------------------------------------------------------//

  \$(\".wordContainer p\").click(function(){
    var theWord = \$(this).siblings('input');
    var wordId = theWord.attr('data-id');
    console.log(wordId)
    \$.post(\"{{ url( '/backoffice/video/removeSingleWord/' ~ video.id)}}\", {idWord: wordId}, function() {
      theWord.parent('div').remove();
    });

  });

  //------------------------------------------------------------------ || Delete a Use || -------------------------------------------------------------------//

  \$(\".useContainer p\").click(function(){
    var theUse = \$(this).siblings('textarea');
    var useId = theUse.attr('data-id');
    console.log(useId);
    \$.post(\"{{ url( '/backoffice/video/removeSingleUse/' ~ video.id)}}\", {idUse: useId}, function() {
      theUse.parent('div').remove();
    });

  });


});

  </script>
{% endblock %}", "backoffice/video/edit.html.twig", "C:\\xampp\\htdocs\\dashboard\\Lanius\\app\\Views\\backoffice\\video\\edit.html.twig");
    }
}
