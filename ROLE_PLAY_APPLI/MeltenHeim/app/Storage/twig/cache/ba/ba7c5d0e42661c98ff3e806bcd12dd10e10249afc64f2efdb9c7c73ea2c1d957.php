<?php

/* games/defi-1.html.twig */
class __TwigTemplate_20dbed872a030f85605ed581bcb588b429a9436731658e830f8b7176f87d2701 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("games/template.html.twig", "games/defi-1.html.twig", 1);
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
        echo "Defi - ";
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
\t\t\t<div id=\"letters\" class=\"d-flex flex-wrap w-75 justify-content-between\"></div>
\t\t</div>
  </div>
  <div class=\"d-flex justify-content-center\">
  \t<form action=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array((("/classe/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "classroom", array()), "code", array())) . "/addScore"))), "html", null, true);
        echo "\" method=\"post\">
  \t\t<input type=\"hidden\" value=\"\" name=\"score\">
  \t\t<input type=\"hidden\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["challenge"] ?? null), "id", array()), "html", null, true);
        echo "\" name=\"challenge_id\">
  \t\t<input type=\"hidden\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id", array()), "html", null, true);
        echo "\" name=\"children_id\">
  \t\t<input type=\"hidden\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "classroom", array()), "id", array()), "html", null, true);
        echo "\" name=\"classroom_id\">
  \t\t<button id=\"FIN\" class=\"btn btn-success\"> J'ai fini :) !</button>
  \t</form>
  </div>
";
    }

    // line 32
    public function block_specific_js($context, array $blocks = array())
    {
        // line 33
        echo "<script>
\$(document).ready(function(){
var Score = 0;
var letterArray = (\"ABCDEFGHIJKLMNOPQRSTUVWXYZ\").split(\"\");
var LastRandomNum = -1;

for(var i =0,n=letterArray.length;i<n;i++)
{
\tvar text = \"<button id=\\\"\"+letterArray[i]+\"\\\" class=\\\"btn btn-primary d-flex align-items-start buttonGame\\\" style=\\\"height:35px;width:60px\\\" ><p>\"+letterArray[i]+\"</p></button>\";

\t\$(\"#letters\").append(text);
}

gameLettersNum = \$(\"#invLetters p\").length;


function callALetter()
{
\tvar rand = Math.round(Math.random() * gameLettersNum + 1);
\tconsole.log(\"rand letter = \" + rand);

\twhile(rand === LastRandomNum || rand>gameLettersNum)
\t{
\t\trand = Math.round(Math.random() * gameLettersNum +1 );
\t}
\tLastRandomNum = rand;
\t\$('.tempLetter').remove();
\tvar theLetter = \$('#invLetters p:nth-of-type('+rand+')');
\tvar url = \"";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/img/abécédaire/")), "html", null, true);
        echo "\";
  \$('#gameLetters').append('<img class=\"tempLetter\" src=\"'+url+ theLetter.attr('data-image')+'\" data-name=\"'+ theLetter.attr('data-name') +'\" alt=\"'+ theLetter.attr('data-name') +'\">')
}

callALetter();

\$('.buttonGame').click(function(){

\tif(\$(this).attr(\"id\") == \$(\".tempLetter\").attr(\"data-name\"))
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
callALetter();
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
        return "games/defi-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 61,  109 => 33,  106 => 32,  97 => 27,  93 => 26,  89 => 25,  84 => 23,  69 => 10,  56 => 8,  52 => 7,  47 => 5,  44 => 4,  41 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"games/template.html.twig\" %}
{% block title %}Defi - {{challenge.code}}{% endblock %}
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
var letterArray = (\"ABCDEFGHIJKLMNOPQRSTUVWXYZ\").split(\"\");
var LastRandomNum = -1;

for(var i =0,n=letterArray.length;i<n;i++)
{
\tvar text = \"<button id=\\\"\"+letterArray[i]+\"\\\" class=\\\"btn btn-primary d-flex align-items-start buttonGame\\\" style=\\\"height:35px;width:60px\\\" ><p>\"+letterArray[i]+\"</p></button>\";

\t\$(\"#letters\").append(text);
}

gameLettersNum = \$(\"#invLetters p\").length;


function callALetter()
{
\tvar rand = Math.round(Math.random() * gameLettersNum + 1);
\tconsole.log(\"rand letter = \" + rand);

\twhile(rand === LastRandomNum || rand>gameLettersNum)
\t{
\t\trand = Math.round(Math.random() * gameLettersNum +1 );
\t}
\tLastRandomNum = rand;
\t\$('.tempLetter').remove();
\tvar theLetter = \$('#invLetters p:nth-of-type('+rand+')');
\tvar url = \"{{ url( '/assets/img/abécédaire/' ) }}\";
  \$('#gameLetters').append('<img class=\"tempLetter\" src=\"'+url+ theLetter.attr('data-image')+'\" data-name=\"'+ theLetter.attr('data-name') +'\" alt=\"'+ theLetter.attr('data-name') +'\">')
}

callALetter();

\$('.buttonGame').click(function(){

\tif(\$(this).attr(\"id\") == \$(\".tempLetter\").attr(\"data-name\"))
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
callALetter();
});

\$('#FIN').click(function(){

\t\$('input[name=\"score\"]').val(Score);

});

});\t

</script>
{% endblock %}", "games/defi-1.html.twig", "C:\\xampp\\htdocs\\dashboard\\__Alphacorp\\alphacorp\\app\\Views\\games\\defi-1.html.twig");
    }
}
