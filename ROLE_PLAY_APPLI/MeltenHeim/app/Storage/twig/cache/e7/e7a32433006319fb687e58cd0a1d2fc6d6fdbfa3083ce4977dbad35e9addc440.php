<?php

/* backoffice/template.html.twig */
class __TwigTemplate_576e88e9bab0eeb6297ff1898ad9e15b3970a044cf5abd4f7ffe7f3069cef643 extends Twig_Template
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

<body style=\"background-color:#000000\">
<div class=\"wrapper\">
  <!-- Sidebar  -->
  <nav id=\"sidebar\">
    <div class=\"sidebar-header text-center\">
        <h3>Lanius <span class=\"text-black-50\">BackOffice</span></h3>
    </div>
    <ul class=\"list-unstyled components\">
      <li>
        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice")), "html", null, true);
        echo "\">
          <i class=\"fas fa-search\"></i>
          Consultation
        </a>
      </li>
      <li>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/tag")), "html", null, true);
        echo "\">
          <i class=\"fas fa-tag\"></i>
          Les tags
        </a>
      </li>
      <li>
        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/video")), "html", null, true);
        echo "\">
          <i class=\"fas fa-video\"></i>
          Les videos
        </a>
        <ul>
          <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/video")), "html", null, true);
        echo "\">Liste</a></li>
          <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/video/add")), "html", null, true);
        echo "\">Ajouter</a></li>
        </ul>
      </li>
    </ul>
  <input type=\"text\" readonly class=\"form-control\" value=\"Par Tristan Charial\">
  </nav>

  <!-- Page Content  -->
  <div id=\"content\">
    <nav style=\"position:sticky;top:0px;z-index:10000\" class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
      <div class=\"container-fluid\">
        <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info\">
            <i class=\"fas fa-bars\"></i>
        </button>
      </div>
    </nav>

    <div class=\"content-wrapper\">
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Suppression d'un élément</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
              </div>
              <div class=\"modal-body\">
                <p>Etes vous sûr de vouloir continuer?</p>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" id=\"verifyNo\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger \" data-dismiss=\"modal\" id=\"verifyYes\">Supprimer</button>
              </div>
            </div>
          </div>
        </div>
      ";
        // line 88
        $this->displayBlock('content', $context, $blocks);
        // line 89
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
        // line 114
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/app-bo.js")), "html", null, true);
        echo "\"></script>
  ";
        // line 115
        $this->displayBlock('specific_js', $context, $blocks);
        // line 116
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

    // line 88
    public function block_content($context, array $blocks = array())
    {
    }

    // line 115
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
        return array (  199 => 115,  194 => 88,  189 => 21,  184 => 11,  178 => 116,  176 => 115,  172 => 114,  145 => 89,  143 => 88,  103 => 51,  99 => 50,  91 => 45,  82 => 39,  73 => 33,  60 => 22,  58 => 21,  54 => 20,  44 => 13,  39 => 11,  27 => 1,);
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

<body style=\"background-color:#000000\">
<div class=\"wrapper\">
  <!-- Sidebar  -->
  <nav id=\"sidebar\">
    <div class=\"sidebar-header text-center\">
        <h3>Lanius <span class=\"text-black-50\">BackOffice</span></h3>
    </div>
    <ul class=\"list-unstyled components\">
      <li>
        <a href=\"{{ url( '/backoffice' ) }}\">
          <i class=\"fas fa-search\"></i>
          Consultation
        </a>
      </li>
      <li>
        <a href=\"{{ url( '/backoffice/tag' ) }}\">
          <i class=\"fas fa-tag\"></i>
          Les tags
        </a>
      </li>
      <li>
        <a href=\"{{ url( '/backoffice/video' ) }}\">
          <i class=\"fas fa-video\"></i>
          Les videos
        </a>
        <ul>
          <li><a href=\"{{ url( '/backoffice/video' ) }}\">Liste</a></li>
          <li><a href=\"{{ url( '/backoffice/video/add' ) }}\">Ajouter</a></li>
        </ul>
      </li>
    </ul>
  <input type=\"text\" readonly class=\"form-control\" value=\"Par Tristan Charial\">
  </nav>

  <!-- Page Content  -->
  <div id=\"content\">
    <nav style=\"position:sticky;top:0px;z-index:10000\" class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
      <div class=\"container-fluid\">
        <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info\">
            <i class=\"fas fa-bars\"></i>
        </button>
      </div>
    </nav>

    <div class=\"content-wrapper\">
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Suppression d'un élément</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
              </div>
              <div class=\"modal-body\">
                <p>Etes vous sûr de vouloir continuer?</p>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" id=\"verifyNo\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger \" data-dismiss=\"modal\" id=\"verifyYes\">Supprimer</button>
              </div>
            </div>
          </div>
        </div>
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

</html>", "backoffice/template.html.twig", "C:\\xampp\\htdocs\\dashboard\\Lanius\\app\\Views\\backoffice\\template.html.twig");
    }
}
