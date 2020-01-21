<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Application</title>
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
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
		<form action="./index.php" method="post">
			<section>
				<div id="tags">
					<?php
						for($i=0;$i<5;$i++)
						{
							echo'<select name="'.$i.'" class="tags"><option value="0">Choisir</option>';
							fillSelect($dbh);
							echo"</select>";
						}
					?>
				</div>
			</section>
			<section>
				<button type="submit">Rechercher</button>
				<input type="text" id="motCle" name="search" placeholder="Rechercher par mots clés">
			</section>
		</form>
		<?php
		if(!empty($_POST))//sil est plein
		{
			if($_POST["search"] ==="")
			{
				include("./indexnewfin.php");
			}
			else
			{
				include("./indexnewfinV2.php");
			}
			
		}

		else
		{
			echo"
			</main>
		<script src=\"https://code.jquery.com/jquery-3.0.0.min.js\"></script>
		<script src=\"assets/js/app.js\"></script>
		</body>
		</html>
			";
		}
	?>
