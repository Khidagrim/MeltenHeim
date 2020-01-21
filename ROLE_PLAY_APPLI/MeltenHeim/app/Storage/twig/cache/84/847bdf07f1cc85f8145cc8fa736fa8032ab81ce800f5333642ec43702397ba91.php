<?php

/* backoffice/template.html.twig */
class __TwigTemplate_38dade06cb95c3d04a9c3dd9a87db8893fdff88f3afc6e4468e2f9c021ea6d9a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'specific_css' => array($this, 'block_specific_css'),
            'content' => array($this, 'block_content'),
            'specific_js' => array($this, 'block_specific_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"robots\" content=\"all,follow\">

  <title>Galerie - ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <!-- Favicon-->
  <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/img/favicon.ico")), "html", null, true);
        echo "\">

  <!-- @@@ CSS -->
  <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\" rel=\"stylesheet\">
  <link href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/app-bo.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        // line 21
        $this->displayBlock('specific_css', $context, $blocks);
        // line 22
        echo "</head>

<body>
<div class=\"wrapper\">
  <!-- Sidebar  -->
  <nav id=\"sidebar\">
    <div class=\"sidebar-header text-center\">
        <h3>AlphaCorps <span class=\"text-black-50\">BackOffice</span></h3>
    </div>
    <ul class=\"list-unstyled components\">
      <p>Rôle: ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", array()), "html", null, true);
        echo " </p>

      ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", array()) == "admin")) {
            // line 35
            echo "      <li>
        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice")), "html", null, true);
            echo "\">
          <i class=\"fas fa-home\"></i>
          Accueil
        </a>
      </li>
      <li>
        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/admins")), "html", null, true);
            echo "\">
          <i class=\"fas fa-users-cog\"></i>
          Les admin
        </a>
      </li>

      <li>
        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/collections")), "html", null, true);
            echo "\">
          <i class=\"fas fa-book-reader\"></i>
          Les collections
        </a>
      </li>

      <li>
        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom")), "html", null, true);
            echo "\">
          <i class=\"fas fa-school\"></i>
          Les classes
        </a>
        <ul>
          <li><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom")), "html", null, true);
            echo "\">Liste</a></li>
          <li><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom/add")), "html", null, true);
            echo "\">Ajouter</a></li>
        </ul>
      </li>
      <li>
        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/challenges")), "html", null, true);
            echo "\">
          <i class=\"fas fa-certificate\"></i>
          Les défis
        </a>
      </li>
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 71
($context["session"] ?? null), "role", array()) == "ens")) {
            // line 72
            echo "      <li>
        <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array((("/classe/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "classroom", array()), "code", array())) . "/config"))), "html", null, true);
            echo "\">
          <i class=\"fas fa-home\"></i>
          Accueil
        </a>
      </li>

      <li>
        <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array((("/classe/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "classroom", array()), "code", array())) . "/edit"))), "html", null, true);
            echo "\">
          <i class=\"far fa-smile-beam\"></i>
          Les enfants
        </a>
      </li>
      <li>
        <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array((("/classe/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "classroom", array()), "code", array())) . "/selectChallenges"))), "html", null, true);
            echo "\">
          <i class=\"fas fa-certificate\"></i>
          Les défis
        </a>
      </li>
      <li>
        <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array((("/classe/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "classroom", array()), "code", array())) . "/score"))), "html", null, true);
            echo "\">
          <i class=\"fas fa-star-half-alt\"></i>
          Les Scores
        </a>
      </li>
      ";
        }
        // line 98
        echo "    </ul>

  </nav>

  <!-- Page Content  -->
  <div id=\"content\">

    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
      <div class=\"container-fluid\">

        <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info\">
            <i class=\"fas fa-bars\"></i>
        </button>
        <button class=\"btn btn-dark d-inline-block d-lg-none ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <i class=\"fas fa-align-justify\"></i>
        </button>
        ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", array(), "any", true, true)) {
            // line 115
            echo "        <a href=\".\\delog\">Se déconnecter</a>
        ";
        } else {
            // line 117
            echo "        <a href=\".\\login\">Se Connecter</a>
        ";
        }
        // line 119
        echo "
      </div>
    </nav>

    <div class=\"content-wrapper\">
      <section id=\"verify\" style=\"display:none\">
        <div>
          <p>Etes vous sur de vouloir continuer?</p>
        </div>
        <div>
          <button id=\"verifyYes\">Oui</button>
          <button id=\"verifyNo\">Non</button>
        </div>
      </section>
      ";
        // line 133
        $this->displayBlock('content', $context, $blocks);
        // line 134
        echo "    </div>

  </div>
    
  <!-- Dark Overlay element -->
  <div class=\"overlay\"></div>

</div>

  <!-- @@@ JS @@@ -->
  <script
    src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
    integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
    crossorigin=\"anonymous\"></script>
  <script 
    src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"
    integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
    crossorigin=\"anonymous\"></script>
  <script 
    src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"
    integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
    crossorigin=\"anonymous\"></script>

  <!-- jQuery Custom Scroller CDN -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js\"></script>
  <!-- Main File-->
  <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/app-bo.js")), "html", null, true);
        echo "\"></script>
  ";
        // line 161
        $this->displayBlock('specific_js', $context, $blocks);
        // line 162
        echo "</body>

</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
    }

    // line 21
    public function block_specific_css($context, array $blocks = array())
    {
    }

    // line 133
    public function block_content($context, array $blocks = array())
    {
    }

    // line 161
    public function block_specific_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "backoffice/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 161,  276 => 133,  271 => 21,  266 => 11,  260 => 162,  258 => 161,  254 => 160,  226 => 134,  224 => 133,  208 => 119,  204 => 117,  200 => 115,  198 => 114,  180 => 98,  171 => 92,  162 => 86,  153 => 80,  143 => 73,  140 => 72,  138 => 71,  130 => 66,  123 => 62,  119 => 61,  111 => 56,  101 => 49,  91 => 42,  82 => 36,  79 => 35,  77 => 34,  72 => 32,  60 => 22,  58 => 21,  54 => 20,  44 => 13,  39 => 11,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"robots\" content=\"all,follow\">

  <title>Galerie - {% block title %}{% endblock %}</title>
  <!-- Favicon-->
  <link rel=\"shortcut icon\" href=\"{{ url( '/assets/img/favicon.ico' ) }}\">

  <!-- @@@ CSS -->
  <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\" rel=\"stylesheet\">
  <link href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css\" rel=\"stylesheet\">
  <link href=\"{{ url( '/assets/css/app-bo.css' ) }}\" rel=\"stylesheet\">
  {% block specific_css %}{% endblock %}
</head>

<body>
<div class=\"wrapper\">
  <!-- Sidebar  -->
  <nav id=\"sidebar\">
    <div class=\"sidebar-header text-center\">
        <h3>AlphaCorps <span class=\"text-black-50\">BackOffice</span></h3>
    </div>
    <ul class=\"list-unstyled components\">
      <p>Rôle: {{session.role}} </p>

      {% if session.role == 'admin' %}
      <li>
        <a href=\"{{ url( '/backoffice' ) }}\">
          <i class=\"fas fa-home\"></i>
          Accueil
        </a>
      </li>
      <li>
        <a href=\"{{ url( '/backoffice/admins' ) }}\">
          <i class=\"fas fa-users-cog\"></i>
          Les admin
        </a>
      </li>

      <li>
        <a href=\"{{ url( '/backoffice/collections' ) }}\">
          <i class=\"fas fa-book-reader\"></i>
          Les collections
        </a>
      </li>

      <li>
        <a href=\"{{ url( '/backoffice/classroom' ) }}\">
          <i class=\"fas fa-school\"></i>
          Les classes
        </a>
        <ul>
          <li><a href=\"{{ url( '/backoffice/classroom' ) }}\">Liste</a></li>
          <li><a href=\"{{ url( '/backoffice/classroom/add' ) }}\">Ajouter</a></li>
        </ul>
      </li>
      <li>
        <a href=\"{{ url( '/backoffice/challenges' ) }}\">
          <i class=\"fas fa-certificate\"></i>
          Les défis
        </a>
      </li>
      {% elseif session.role == 'ens' %}
      <li>
        <a href=\"{{ url( '/classe/' ~ session.classroom.code ~ '/config' ) }}\">
          <i class=\"fas fa-home\"></i>
          Accueil
        </a>
      </li>

      <li>
        <a href=\"{{ url( '/classe/' ~ session.classroom.code ~ '/edit' ) }}\">
          <i class=\"far fa-smile-beam\"></i>
          Les enfants
        </a>
      </li>
      <li>
        <a href=\"{{ url( '/classe/' ~ session.classroom.code ~ '/selectChallenges' ) }}\">
          <i class=\"fas fa-certificate\"></i>
          Les défis
        </a>
      </li>
      <li>
        <a href=\"{{ url( '/classe/' ~ session.classroom.code ~ '/score' ) }}\">
          <i class=\"fas fa-star-half-alt\"></i>
          Les Scores
        </a>
      </li>
      {% endif %}
    </ul>

  </nav>

  <!-- Page Content  -->
  <div id=\"content\">

    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
      <div class=\"container-fluid\">

        <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info\">
            <i class=\"fas fa-bars\"></i>
        </button>
        <button class=\"btn btn-dark d-inline-block d-lg-none ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <i class=\"fas fa-align-justify\"></i>
        </button>
        {% if session.login is defined %}
        <a href=\".\\delog\">Se déconnecter</a>
        {% else %}
        <a href=\".\\login\">Se Connecter</a>
        {% endif %}

      </div>
    </nav>

    <div class=\"content-wrapper\">
      <section id=\"verify\" style=\"display:none\">
        <div>
          <p>Etes vous sur de vouloir continuer?</p>
        </div>
        <div>
          <button id=\"verifyYes\">Oui</button>
          <button id=\"verifyNo\">Non</button>
        </div>
      </section>
      {% block content %}{% endblock %}
    </div>

  </div>
    
  <!-- Dark Overlay element -->
  <div class=\"overlay\"></div>

</div>

  <!-- @@@ JS @@@ -->
  <script
    src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
    integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
    crossorigin=\"anonymous\"></script>
  <script 
    src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"
    integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
    crossorigin=\"anonymous\"></script>
  <script 
    src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"
    integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
    crossorigin=\"anonymous\"></script>

  <!-- jQuery Custom Scroller CDN -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js\"></script>
  <!-- Main File-->
  <script src=\"{{ url( '/assets/js/app-bo.js' ) }}\"></script>
  {% block specific_js %}{% endblock %}
</body>

</html>", "backoffice/template.html.twig", "C:\\xampp\\htdocs\\dashboard\\__Alphacorp\\alphacorp\\app\\Views\\backoffice\\template.html.twig");
    }
}
