<?php

/* games/defi-2.html.twig */
class __TwigTemplate_48f36a0e940f62bbb21bcfec188aa40f37231924ad95672e83c4694ae9b81861 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("games/template.html.twig", "games/defi-2.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'specific_js' => array($this, 'block_specific_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "games/template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Defi 2 - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["challenge"] ?? null), "code", array()), "html", null, true);
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"d-flex align-items-center flex-column\">
\t<p><b>Description: </b> ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["challenge"] ?? null), "description", array()), "html", null, true);
        echo " </p>
\t\t<div id=\"invLetters\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["challenge"] ?? null), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 8
            echo "\t\t\t<p class=\"d-none\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["letter"], "letter", array()), "html", null, true);
            echo "\" data-image=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["letter"], "image", array()), "html", null, true);
            echo "\"  >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["letter"], "letter", array()), "html", null, true);
            echo "</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t</div>
\t\t<div id=\"jeu\" class=\"d-flex flex-column justify-content-center align-items-center\" style=\"width:75vw;height:75vh\">
\t\t\t<div id=\"game\" class=\"border border-primary h-75 w-100\">
\t\t\t\t<div id=\"hud\" class=\"d-flex justify-content-between\">
\t\t\t\t\t<p id=\"point\" class=\"text-secondary\">Points:</p>
\t\t\t\t\t<p id=\"textSuccess\" class=\"text-secondary mr-3 font-weight-bold\"></p>
\t\t\t\t</div>
\t\t\t\t<div id=\"gameLetters\" class=\"h-75 w-100 d-flex justify-content-center align-items-center\"></div>
\t\t\t</div>
\t\t\t<input type=\"text\" class=\"form-control mt-3 mb-3\" id=\"rep\">
\t\t\t<button class=\"btn btn-primary\" id=\"verif\">Verifier</button>
\t\t\t<div id=\"letters\" class=\"d-flex flex-wrap w-75 justify-content-between\"></div>
\t\t</div>
  </div>
  <div class=\"d-flex justify-content-center\">
  \t<form action=\"";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array((("/classe/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "classroom", array()), "code", array())) . "/addScore"))), "html", null, true);
        echo "\" method=\"post\">
  \t\t<input type=\"hidden\" value=\"\" name=\"score\">
  \t\t<input type=\"hidden\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["challenge"] ?? null), "id", array()), "html", null, true);
        echo "\" name=\"challenge_id\">
  \t\t<input type=\"hidden\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id", array()), "html", null, true);
        echo "\" name=\"children_id\">
  \t\t<input type=\"hidden\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "classroom", array()), "id", array()), "html", null, true);
        echo "\" name=\"classroom_id\">
  \t\t<button id=\"FIN\" class=\"btn btn-success\"> J'ai fini :) !</button>
  \t</form>
  </div>
";
    }

    // line 34
    public function block_specific_js($context, array $blocks = array())
    {
        // line 35
        echo "<script>
\$(document).ready(function(){
var Score = 0;
var wordArray = [\"ABA\",\"CA\",\"EBAB\",\"BAC\",\"BEC\",\"EAB\"];
var LastRandomNum = -1;
var splittedWord;
gameWordsNum = wordArray.length;

//---------------------------------------------------------------//A function //

function callAWord()
{
\tvar rand = Math.round(Math.random() * gameWordsNum - 1);

\twhile(rand === LastRandomNum || rand>=gameWordsNum || rand<0)
\t{
\t\trand = Math.round(Math.random() * gameWordsNum - 1);
\t}
\tconsole.log(rand)
\tLastRandomNum = rand;
\t\$('.tempWord').remove();

  splittedWord = wordArray[rand].split(\"\")

\tfor(var i =0,n = splittedWord.length;i<n;i++)
\t{
\t\tvar theLetter = \$('#invLetters p[data-name=\"'+splittedWord[i]+'\"] ');
\t\tvar url = \"";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/img/abécédaire/")), "html", null, true);
        echo "\";

  \$('#gameLetters').append('<div class=\\\"tempWord\\\"><img class=\"tempLetter\" src=\"'+url+ theLetter.attr('data-image')+'\" data-name=\"'+ theLetter.attr('data-name') +'\" alt=\"'+ theLetter.attr('data-name') +'\"></div>');
\t}
}
//---------------------------------------------------------------//End function //
callAWord();

\$('#verif').click(function(){

\tconsole.log(\"spword = \"+ splittedWord.join(\"\") +\" the reponse = \"+ \$('#rep').val() )

\tif(splittedWord.join(\"\").toLowerCase() == \$('#rep').val().toLowerCase())
\t{
\t\t\$(\"#textSuccess\").text(\"BRAVO ! :)\").addClass('text-success').removeClass('text-danger');
\t\tScore ++;
\t}
\telse
\t{
\t\t\$(\"#textSuccess\").text(\"Essaye Encore :(\").addClass('text-danger').removeClass('text-success');
\t\tScore --;
\t}
\t\$(\"#point\").text(\"Point : \" + Score);
callAWord();
\$('#rep').val(\"\");
});

\$('#FIN').click(function(){

\t\$('input[name=\"score\"]').val(Score);

});

});\t

</script>
";
    }

    public function getTemplateName()
    {
        return "games/defi-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 62,  111 => 35,  108 => 34,  99 => 29,  95 => 28,  91 => 27,  86 => 25,  69 => 10,  56 => 8,  52 => 7,  47 => 5,  44 => 4,  41 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"games/template.html.twig\" %}
{% block title %}Defi 2 - {{challenge.code}}{% endblock %}
{% block content %}
  <div class=\"d-flex align-items-center flex-column\">
\t<p><b>Description: </b> {{challenge.description}} </p>
\t\t<div id=\"invLetters\">
\t\t{% for letter in challenge.images %}
\t\t\t<p class=\"d-none\" data-name=\"{{letter.letter}}\" data-image=\"{{letter.image}}\"  >{{letter.letter}}</p>
\t\t{% endfor %}
\t\t</div>
\t\t<div id=\"jeu\" class=\"d-flex flex-column justify-content-center align-items-center\" style=\"width:75vw;height:75vh\">
\t\t\t<div id=\"game\" class=\"border border-primary h-75 w-100\">
\t\t\t\t<div id=\"hud\" class=\"d-flex justify-content-between\">
\t\t\t\t\t<p id=\"point\" class=\"text-secondary\">Points:</p>
\t\t\t\t\t<p id=\"textSuccess\" class=\"text-secondary mr-3 font-weight-bold\"></p>
\t\t\t\t</div>
\t\t\t\t<div id=\"gameLetters\" class=\"h-75 w-100 d-flex justify-content-center align-items-center\"></div>
\t\t\t</div>
\t\t\t<input type=\"text\" class=\"form-control mt-3 mb-3\" id=\"rep\">
\t\t\t<button class=\"btn btn-primary\" id=\"verif\">Verifier</button>
\t\t\t<div id=\"letters\" class=\"d-flex flex-wrap w-75 justify-content-between\"></div>
\t\t</div>
  </div>
  <div class=\"d-flex justify-content-center\">
  \t<form action=\"{{ url( '/classe/' ~ session.classroom.code ~ '/addScore' )}}\" method=\"post\">
  \t\t<input type=\"hidden\" value=\"\" name=\"score\">
  \t\t<input type=\"hidden\" value=\"{{challenge.id}}\" name=\"challenge_id\">
  \t\t<input type=\"hidden\" value=\"{{child.id}}\" name=\"children_id\">
  \t\t<input type=\"hidden\" value=\"{{session.classroom.id}}\" name=\"classroom_id\">
  \t\t<button id=\"FIN\" class=\"btn btn-success\"> J'ai fini :) !</button>
  \t</form>
  </div>
{% endblock %}
{% block specific_js %}
<script>
\$(document).ready(function(){
var Score = 0;
var wordArray = [\"ABA\",\"CA\",\"EBAB\",\"BAC\",\"BEC\",\"EAB\"];
var LastRandomNum = -1;
var splittedWord;
gameWordsNum = wordArray.length;

//---------------------------------------------------------------//A function //

function callAWord()
{
\tvar rand = Math.round(Math.random() * gameWordsNum - 1);

\twhile(rand === LastRandomNum || rand>=gameWordsNum || rand<0)
\t{
\t\trand = Math.round(Math.random() * gameWordsNum - 1);
\t}
\tconsole.log(rand)
\tLastRandomNum = rand;
\t\$('.tempWord').remove();

  splittedWord = wordArray[rand].split(\"\")

\tfor(var i =0,n = splittedWord.length;i<n;i++)
\t{
\t\tvar theLetter = \$('#invLetters p[data-name=\"'+splittedWord[i]+'\"] ');
\t\tvar url = \"{{ url( '/assets/img/abécédaire/' ) }}\";

  \$('#gameLetters').append('<div class=\\\"tempWord\\\"><img class=\"tempLetter\" src=\"'+url+ theLetter.attr('data-image')+'\" data-name=\"'+ theLetter.attr('data-name') +'\" alt=\"'+ theLetter.attr('data-name') +'\"></div>');
\t}
}
//---------------------------------------------------------------//End function //
callAWord();

\$('#verif').click(function(){

\tconsole.log(\"spword = \"+ splittedWord.join(\"\") +\" the reponse = \"+ \$('#rep').val() )

\tif(splittedWord.join(\"\").toLowerCase() == \$('#rep').val().toLowerCase())
\t{
\t\t\$(\"#textSuccess\").text(\"BRAVO ! :)\").addClass('text-success').removeClass('text-danger');
\t\tScore ++;
\t}
\telse
\t{
\t\t\$(\"#textSuccess\").text(\"Essaye Encore :(\").addClass('text-danger').removeClass('text-success');
\t\tScore --;
\t}
\t\$(\"#point\").text(\"Point : \" + Score);
callAWord();
\$('#rep').val(\"\");
});

\$('#FIN').click(function(){

\t\$('input[name=\"score\"]').val(Score);

});

});\t

</script>
{% endblock %}", "games/defi-2.html.twig", "C:\\xampp\\htdocs\\dashboard\\__Alphacorp\\alphacorp\\app\\Views\\games\\defi-2.html.twig");
    }
}
