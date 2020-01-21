<?php 

if(isset($_POST))
{
	if(isset($_POST["tagAdd"]))
	{
		$insert = "INSERT into tags (Libel) values(:Libel) ";
		$stmt=$dbh->prepare($insert)->execute([
			':Libel'=> $_POST["tagName"],
		]);
	}

	if(isset($_POST["tagModif"]))
	{
		
		$update = "UPDATE tags set Libel=\"{$_POST["nouvName"]}\" where idTags= \"{$_POST["tag"]}\" ";
		$stmt=$dbh->exec($update);
	}

	if(isset($_POST["tagSuppr"]))
	{
		
		$delete = "DELETE from tags where idTags = \"{$_POST["tags"]}\"";
		$stmt=$dbh->exec($delete);
	}

	if(isset($_POST["buttonAdd"]))
	{
		if((!empty($_POST["lienVideo"]))&&(!empty($_POST["resume"]))&&(!empty($_POST["lienWord"]))&&(!empty($_POST["usesGen"]))&&(!empty($_POST["image"]))&&(!empty($_POST["titreVideo"])))
		{

		$sql = "INSERT into video (resume,lienWord,usesGen,image,lienVideo,titre,lienInternet) values (:resume,:lienWord,:usesGen,:image,:lienVideo,:titreVideo,:lienInternet)";
		$stmt=$dbh->prepare($sql)->execute([
		 ':resume' => $_POST['resume'],
		 ':lienWord' => $_POST['lienWord'],
		 ':usesGen' => $_POST['usesGen'],
		 ':image' => $_POST['image'],
		 ':lienVideo' => $_POST['lienVideo'],
		 ':titreVideo' => $_POST['titreVideo'],
			':lienInternet' => $_POST['lienInternet'],
		]);

		$idVideo = $dbh->lastInsertId('idVideo');

		foreach ($_POST as $key => $value) 
		{
			if($key === "lienWordN".preg_replace("/[^0-9,.]/", "", $key))
			{
				$insert = "insert into word (idVideo,lienOtherWord) values(:idVideo,:lienOtherWord)";
				$stmt = $dbh->prepare($insert)->execute([
					':idVideo' => $idVideo,
					'lienOtherWord' => $_POST[$key],
				]);

			}
		}


		//r($stmt);
			


			for($i=0;$i<5;$i++)
			{
				if(($_POST["tags".$i]!==0)&&(isset($idVideo)))
				{
					$sql = "INSERT into posseder (idVideo,idTags) values(:idVideo,:idTags)";
					$stmt=$dbh->prepare($sql)->execute([
					':idVideo' => $idVideo,
			 		':idTags' => $_POST["tags".$i],
					]);
				}
			}
		}
	}
	if(isset($_POST["update"]))
	{
		$update = "UPDATE video set resume=\"{$_POST["resume"]}\",lienWord=\"{$_POST["lienWord"]}\",usesGen=\"{$_POST["usesGen"]}\",lienVideo=\"{$_POST["lienVideo"]}\",image=\"{$_POST["image"]}\",titre=\"{$_POST["titreVideo"]}\",lienInternet=\"{$_POST["lienInternet"]}\" where idVideo =\"{$_POST["idVideo"]}\"";

		$dbh->exec($update);

		$select = "select idTags from posseder where idVideo = \"{$_POST["idVideo"]}\" ";
		$arrayOfTags2 = $dbh->query($select)->fetchall();



   // r($arrayOfTags2);
		foreach ($_POST as $key => $value) 
		{
				if($key === "destroy".preg_replace("/[^0-9,.]/", "", $key))
				{
					//echo"delete";
					$delete = "DELETE from posseder where idVideo = \"{$_POST["idVideo"]}\" and idTags = $value ";
					$dbh->exec($delete);
				}

			  if($key === "insert".preg_replace("/[^0-9,.]/", "", $key))
				{
						//echo"insert";
						$insert = "INSERT into posseder(idVideo,idTags) values(:idVideo,:idTags) ";
						$stmt = $dbh->prepare($insert)->execute([
							':idVideo' => $_POST["idVideo"],
							':idTags' => $value,
						]);
				}

				if($key === "lienWordN".preg_replace("/[^0-9,.]/", "", $key))
				{
					$insert = "INSERT into word(idVideo,lienOtherWord) values(:idVideo,:lienOtherWord)";
					$stmt = $dbh->prepare($insert)->execute([
						':idVideo' => $_POST["idVideo"],
						':lienOtherWord' => $value,
					]);

				}

				if($key === "destroyL".preg_replace("/[^0-9,.]/", "", $key))
				{
					//echo"delete";
					$txt = trim($value);
					$delete = "DELETE from word where idVideo = \"{$_POST["idVideo"]}\" and lienOtherWord = \"$txt\" ";
					$dbh->exec($delete);
				}

			
		}

	}

	if(isset($_POST["delete"]))
	{
		$delete = "DELETE from word where idVideo = \"{$_POST["idVideo"]}\"";
		$dbh->exec($delete);

		$delete = "DELETE from posseder where idVideo = \"{$_POST["idVideo"]}\"";
		$dbh->exec($delete);

		$delete = "DELETE from video where idVideo = \"{$_POST["idVideo"]}\"";
		$dbh->exec($delete);
	}
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Application</title>
  <link href="assets/css/style2.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<div>
			<h6><a href="./index.php">Consultation</a></h6>
		</div>
		<div>
			<h6><a href="./index2.php">Modification</a></h6>
		</div>
	</header>
	<main>
		<?php
		if(!isset($_POST["videoChange"]))
		{
		echo"  
		<section id=\"sc1\">
			<form action=\"./index2.php\" method=\"post\">
				<button name=\"buttonAdd\" type=\"submit\">Ajouter une video</button>
				<div>
					<h6>La Video</h6>
					<input type=\"text\" name=\"titreVideo\" placeholder=\"Titre de la vidéo\">
					<input type=\"text\" name=\"lienVideo\" placeholder=\"nom de la video et son extention\">
					<textarea name=\"resume\" cols=\"30\" rows=\"10\" placeholder=\"Resumé de la video\"></textarea>
					<div id=\"buttonContainer\"><input type=\"text\" name=\"lienWord\" placeholder=\"Lien vers le document word\"><input id=\"button\" value=\"+\" type=\"button\"></div>
					<input type=\"text\" name=\"lienInternet\" placeholder=\"Lien Internet\">
					<input type=\"text\" name=\"usesGen\" placeholder=\"Utilisation générale\">
					<input type=\"text\" name=\"image\" placeholder=\"nom de l'image et son extention\">
				</div>

				<div class=\"tags\">
					<h6>Les tags</h6>";
						for($i=0;$i<5;$i++)
						{
							echo'<select name="tags'.$i.'" class="tags"><option value="0">Choisir</option>';
							fillSelect($dbh);
							echo"</select>";
						}
				echo"	
				</div>
			</form>
		</section>";
	}
		?>
		<?php 
			if (!isset($_POST["videoChange"])) 
						{
							echo"
								<div>
								<article>
									<form action=\"./index2.php\" method=\"post\">
										<button name=\"tagAdd\" type=\"submit\">Ajouter Un tag</button>
										<input type=\"text\" name=\"tagName\" placeholder=\"nom du tag\">
									</form>
								</article>";
								echo"
								<article>
									<form action=\"./index2.php\" method=\"post\">
										<button name=\"tagModif\" type=\"submit\">Modifier Un tag</button>
										<select name=\"tag\" class=\"tags\"><option value=\"0\">Choisir</option>";

							fillSelect($dbh);
							echo"</select><input type=\"text\" name=\"nouvName\" placeholder=\"Le nouveau nom\">
									</form>
								</article>";
								echo"
								<article>
									<form action=\"./index2.php\" method=\"post\">
										<button name=\"tagSuppr\" type=\"submit\">Supprimer Un tag</button>
										<select name=\"tags\" class=\"tags\"><option value=\"0\">Choisir</option>";
										fillSelect($dbh);
								echo"</select>
									</form>
								</article></div>";

						}
		 ?>
		<section id="sc2"<?php if(count($_POST)===1){echo" style=\" width:100%; \"";} ?> >
			<form action="./index2.php" method="post">
				<?php 
			//	r($_POST);
					if (!isset($_POST["videoChange"])) 
					{

						echo"
						<button type=\"submit\">Modifier la video</button>
						<div>
									<h6>Choisir la vidéo</h6>
									<select name=\"videoChange\">";
						$select = "select idVideo, lienVideo from video ";
						$tabOfModifVid = $dbh->query($select)->fetchall();
						foreach ($tabOfModifVid as $key => $value) 
						{
							echo "<option value = \"{$value['idVideo']}\" class=\"video\"> {$value['lienVideo']} </option>";
						}
					}
					echo"</select></div>";
				 ?>
				<div id="divmodif">
					<?php 
						if (isset($_POST["videoChange"])) 
						{
							$select = "select idVideo,resume,lienWord,usesGen,lienVideo,image,titre,lienInternet from video where idVideo = {$_POST["videoChange"]} ";
							$arrayOfVideo = $dbh->query($select)->fetchall();
							//r($arrayOfVideo);
							echo "
							<div class=\"middle\">
								<button type=\"submit\" name=\"update\" >Modifier la video</button>
							</div>
							<h6>La Video</h6>
					<input type=\"text\" name=\"titreVideo\" placeholder=\"le titre\" value=\"{$arrayOfVideo[0]["titre"]}\">
					<input type=\"text\" name=\"lienVideo\" placeholder=\"le lien video\" value=\"{$arrayOfVideo[0]["lienVideo"]}\">
					<textarea name=\"resume\" placeholder=\"le resumé\" cols=\"30\" rows=\"10\">{$arrayOfVideo[0]["resume"]}</textarea>
					<h6>Les liens words</h6>
					<div id=\"buttonContainer\"><input type=\"text\" name=\"lienWord\" placeholder=\"le Lien Word\" value=\"{$arrayOfVideo[0]["lienWord"]}\"><input id=\"button\" value=\"+\" type=\"button\"></div>";


					$select = "select lienOtherWord,idOtherWord from word where idVideo = {$_POST["videoChange"]}";
					$arrayOtherWords = $dbh->query($select)->fetchall();
					$ephem = 0;
					//r($arrayOtherWords);
					foreach ($arrayOtherWords as $key => $value) 
					{
						echo"<div class=\"buttonContainer\" data-names=\"{$value["idOtherWord"]}\" name=\"lienOtherWord".$ephem."\" ><input type=\"text\" placeholder=\"le lien Word\" value=\"{$value["lienOtherWord"]}\"><input class=\"buttonRemove\" value=\"-\" type=\"button\"></div>";
						$ephem++;
					}

					echo"
					<h6>Autre</h6>
					<input type=\"text\" placeholder=\"le lien Internet\" name=\"lienInternet\" value=\"{$arrayOfVideo[0]["lienInternet"]}\">
					<input type=\"text\" placeholder=\"l'utilisation générale\" name=\"usesGen\" value=\"{$arrayOfVideo[0]["usesGen"]}\">
					<input type=\"text\" name=\"image\" placeholder=\"l'image\" value=\"{$arrayOfVideo[0]["image"]}\">
					<input class='inv' readonly type=\"text\" name=\"idVideo\" value=\"{$arrayOfVideo[0]["idVideo"]}\">
					";
						$select = "select tags.idTags,tags.Libel from posseder,tags where tags.idTags = posseder.idTags and idVideo = {$arrayOfVideo[0]["idVideo"]} ";
						$arrayOfTags = $dbh->query($select)->fetchall();
						//r($arrayOfTags);
						echo"<div id=\"T\">";
						foreach ($arrayOfTags as $key => $value) 
						{
							echo"<input class=\"tagounets\" datas-name=\"{$value["idTags"]}\" value=\"{$value["Libel"]}\" readonly>";
						}
						echo"
						</div>
						<select class=\"select\"><option value=\"0\">Choisir</option>";
										fillSelect($dbh);
								echo"</select>
					
						<div class=\"middle\"><input type=\"button\" id=\"deletes\" value =\"Supprimer la video\"</div>";

							}
					 ?>
				</div>
			</form>
		</section>
	</main>
	<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
	<script>
	$(document).ready(function(){
		var countOfOtherword = 0,
		countOfRemoveWords = 0;

		$("#buttonContainer>input:nth-of-type(2)").click(function(){
			$("#buttonContainer").after('<input type=\"text\" class="otherWord" name=\"lienWordN'+countOfOtherword+'\" placeholder=\"Lien vers le document word\">');
			countOfOtherword ++;
		});

		$(".buttonContainer>input:nth-of-type(2)").click(function(){

			var name = $(this).parent(".buttonContainer").attr('data-names');
			console.log(name);
			$(this).prev("input").removeAttr('name');
			$(this).prev("input").attr('name', "destroyL"+name).css({height: 0+"px",opacity:0});
			$(this).remove();


		});


			$(".tagounets").click(function(){
						var txt = $(this).attr('datas-name');
						console.log(txt);
						if($(this).attr('name'))
						{
							$(this).removeAttr('style');
							$(this).removeAttr('name');
						}

					 else
						{
							$(this).css('background-color', 'red');
							$(this).attr('name', txt);
						}

					});

			$(".select").change(function(){
				if($(".select option:selected").text() !== "Choisir")
				{
					$('#T')
						.append('<input class="green" datas-name="'+ $(".select option:selected").attr("value")+'" name="'+ $(".select option:selected").attr("value")+'" value="'+ $(".select option:selected").text().trim() +'" readonly />');

					$(".green").click(function(){
						$(this).remove();
					});
			}
		});

			$('button[name="update"]').click(function(){

					$(".tagounets").each(function() {
						if($(this).attr('name'))
						{
							$(this).attr({
								name: 'destroy'+$(this).attr('datas-name'),
								value: $(this).attr('datas-name')
							});
						}
					});
				
				
					$(".green").each(function(){
						if($(this).attr('name'))
						{
							$(this).attr({
								name: 'insert'+$(this).attr('datas-name'),
								value: $(this).attr('datas-name')
							});
						}
					});
			});

			$('#deletes').click(function(){
					$('form').append('<div class="attention"><p>Vous aller supprimer entierement les informations concernant cette vidéo. Etes vous sûr de vouloir continuer?</p><div><button name ="delete" id="true">OUI</button><input type="button" id="non" value="NON"></div></div>');
					$('#non').click(function(){
									$('.attention').remove();

			});

			



			});
	});

	</script>

	</body>
</html>
	
