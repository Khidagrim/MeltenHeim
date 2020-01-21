<?php

/**
Redirige vers une commande.
@param  string  la commande.
 */
function redirect($url) {

	header('Location: ' . ROOT_URL . $url);
}

/**
Retourne l'URL vers une commande.
@param  string  la commande.
 */
function url($url = '') {

	echo ROOT_URL . $url;
}

function isLogin() {
	return isset( $_SESSION['login'] );
}

function getRandomString($length = 6) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';

	for ($i = 0; $i < $length; $i++) {
		$string .= $characters[mt_rand(0, strlen($characters) - 1)];
	}

	return $string;
}


  function to_camel_case( $str, array $noStrip = [] )
  {
    $str = trim( mb_strtolower( $str,'UTF-8') );
    $str = ucwords($str);
    $str = str_replace(" ", "", $str);
    $str = lcfirst($str);
    return $str;
  }


  function createCode($limit)
  {
  	return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
  }

  function isAdmin() {
  return isset( $_SESSION[ 'role' ]) && $_SESSION[ 'role' ] == 'admin' ;
}

function isEns() {
  return isset( $_SESSION[ 'role' ]) && $_SESSION[ 'role' ]== 'ens' ;
}


function fillSelect($dbh)
{
  $select  = "select idTags,Libel from tags order by Libel ";
  $tab = $dbh->query($select)->fetchAll();


  foreach($tab as $value)
  {
    echo "<option value = \"{$value['idTags']}\" class=\"Tags\"> {$value['Libel']} </option>";
  
  }
}

function fillSelectuses($dbh)
{
  $select  = "select idUtilisation,libelUti from utilisations ";
  $tab = $dbh->query($select)->fetchAll();

  foreach($tab as $value)
  {
    echo "<option value = \"{$value['idUtilisation']}\" class=\"uses\"> {$value['libelUti']} </option>";
    
  }
}




function creaContent($dbh,$nbEtoiles,$idVideo,$resume,$lienWord,$usesGen,$arrayOfVideo,$tabOfVideo,$length,$tabOfTags,$affichearrayVideo,$datas)
{

if(!in_array($idVideo,$arrayOfVideo))
{
  $select = "select Libel from tags,posseder where tags.idTags = posseder.idTags and posseder.idVideo = $idVideo";
  $GoodTags = $dbh->query($select)->fetchall();
  //r($GoodTags);
  $numero = 1+count($arrayOfVideo);

  /*if(!empty($arrayOfVideo))
  {
    echo"<div id='espace'></div>
    <hr/>
    <div id='espace'></div>";
  }*/
  echo"
   <section id=".$numero.">
      <div id='sec1'>
        <div>
          <div>
            <p id='number'>".$numero."/".$length."</p>
          </div>
          <div class='etoiles'>
          " ;

          $select = "select titre,lienInternet from video where idVideo = $idVideo";
          $titreEtInternet = $dbh->query($select)->fetchall();

          for($i=0;$i<$nbEtoiles;$i++)
          {
            echo"<img src='./assets/img/etoile.png' alt='etoile'>";
          } 
          for($j=0;$j<5-$nbEtoiles;$j++)
          {
            echo"<img src='./assets/img/etoileG.png' alt='etoile'>";
          }
            echo"
          </div>
        </div>
        <div>
          <input type=\"text\" readonly value=\"{$titreEtInternet[0]["titre"]}\">
        </div>
        <div>
          <div>
            <div class='up'></div>
            <div class='down'></div>
          </div>
          ";
            $select = "select image,lienVideo from video where idVideo = $idVideo";
            $img = $dbh->query($select)->fetchall();
            if(empty(trim($img["0"]["image"])))
            {
              $message = "ImageDeFond.png";
            }
            else
            {
              $message = $img["0"]["image"];
            }
            $message2 = $img["0"]["lienVideo"];

          echo"<a href=\"./assets/video/$message2\"><div class=\"imgBG\" style=\"background-image:url('./assets/image/$message')\"></div></a> 
        </div>
        <div class=\"words\">
          <a href=\"./assets/word/$lienWord\"><input type='text' value='$lienWord' readonly></a>
        </div>";

        $select = "select lienOtherWord from word,video where word.idVideo = video.idVideo";
        $tabWords = $dbh->query($select)->fetchall();

        foreach ($tabWords as $key => $value) 
        {
          echo"<div class=\"words\">
          <a href=\"./assets/word/{$value["lienOtherWord"]}\"><input type='text' value='".trim($value["lienOtherWord"])."' readonly></a>
        </div>";
        }

        echo"<div class=\"words linkInt\">
          <a href=\"{$titreEtInternet[0]["lienInternet"]}\" target=\"blank\"><input type='text' value=\"{$titreEtInternet[0]["lienInternet"]}\" readonly></a>
        </div>
      </div>
      <div id='sec2'>
        <textarea name='' id='' cols='30' rows='10' readonly >Résumé : $resume</textarea>
      </div>
      <div id='sec3'>
        <div>
          ";

        
          //r($tabOfVideo);
          echo"<p><strong>Utilisations : </strong><br/>";
          foreach ($tabOfVideo as $key => $value) {
            if($value["idVideo"] === $idVideo)
            {
              echo"{$value["usesGen"]}";
            }
          }
        echo"</p></div>";

        
        $j=0;
        echo"<div>";

        foreach ($GoodTags as $key => $value) {
          foreach ($value as $key2 => $value2) {
            echo"<div><p>$value2</p></div>";
          }
        }
      echo"</div>";

        echo"
      </div>
    </section>
";


}





}


function creaContent2($dbh,$nbEtoiles,$idVideo,$resume,$lienWord,$usesGen,$image,$titre,$lienInternet,$lienVideo,$numero,$length)
{
  /*$leTexte = $tabText["resume"];
  echo"$leTexte<hr><hr> ";*/


echo"
   <section id=".$numero.">
      <div id='sec1'>
        <div>
          <div>
            <p id='number'>".$numero."/".$length."</p>
          </div>
          <div class='etoiles'>
        ";
        for($i=0;$i<$nbEtoiles;$i++)
          {
            echo"<img src='./assets/img/etoile.png' alt='etoile'>";
          } 
          for($j=0;$j<5-$nbEtoiles;$j++)
          {
            echo"<img src='./assets/img/etoileG.png' alt='etoile'>";
          }

          echo"
          </div>
        </div>
        <div>
          <input type=\"text\" readonly value=\"$titre\" placeholder = \"Le Titre\">
        </div>
        <div>
          <div>
            <div class='up'></div>
            <div class='down'></div>
          </div>
          ";

          if(empty(trim($image)))
            {
              $message = "ImageDeFond.png";
            }
            else
            {
              $message = $image;
            }
            $message2 = $lienVideo;

            echo"<a href=\"./assets/video/$message2\"><div class=\"imgBG\" style=\"background-image:url('./assets/image/$message')\"></div></a> 
        </div>
        <div class=\"words\">
          <a href=\"./assets/word/$lienWord\"><input type='text' value='$lienWord' placeholder=\"le Lien Word\" readonly></a>
        </div>";

        $select = "select lienOtherWord from word,video where word.idVideo = video.idVideo";
        $tabWords = $dbh->query($select)->fetchall();

        foreach ($tabWords as $key => $value) 
        {
          echo"<div class=\"words\">
          <a href=\"./assets/word/{$value["lienOtherWord"]}\"><input type='text' value='{$value["lienOtherWord"]}' placeholder=\"Un autre lien Word\" readonly></a>
        </div>";
        }

        echo"<div class=\"words\">
          <input type='text' value=\"$lienInternet\" placeholder=\"Le Lien Internet\"  readonly>
        </div>
      </div>
      <div id='sec2'>
        <textarea name='' id='' cols='30' rows='10' readonly >Résumé : $resume</textarea>
      </div>
      <div id='sec3'>
        <div>
          ";




          echo"<p><strong>Utilisations : </strong><br/>$usesGen</p></div>";
        
        $j=0;
        echo"<div>";

        $select = "select tags.Libel from tags,video,posseder where tags.idTags = posseder.idTags and posseder.idVideo = video.idVideo";
        $tabOfTags = $dbh->query($select)->fetchall();

        foreach ($tabOfTags[0] as $key => $value) {
            echo"<div><p>$value</p></div>";
          
        }
      echo"</div>";

        echo"
      </div>
    </section>
";


}


 ?>