<?php  
$datas = $_POST["search"];

//var_dump($datas);

$select = "SELECT idVideo,resume from video";
$tableau = $dbh->query($select)->fetchall();

$nbEtoiles = 5;

$num = 1;
$taille = 0;
//r($tableau);

foreach ($tableau as $key => $value) 
{
	if(strstr($value["resume"] , $datas))
	{
		$taille++;
	}
}




foreach ($tableau as $key => $value) 
{
	if(strstr($value["resume"] , $datas))
	{
		//echo"strstr({$value["resume"]},$datas)";
		$select = "select * from video where idVideo = {$value["idVideo"]} ";
		$ephem = $dbh->query($select)->fetchall();
		//r($ephem);
		creaContent2($dbh,5,$value["idVideo"],$ephem[0]["resume"],$ephem[0]["lienWord"],$ephem[0]["usesGen"],$ephem[0]["image"],$ephem[0]["titre"],$ephem[0]["lienInternet"],$ephem[0]["lienVideo"],$num,$taille);
		$num++;
	}
}






/*foreach ($etoilearray as $key => $value) 
{
	foreach ($tabOfVideo as $key2 => $value2)
	 {
	 	if($key == $value2["idVideo"])
	 	{
	 		creaContent($dbh,$value,$value2["idVideo"],$value2["resume"],$value2["lienWord"],$value2["usesGen"],$arrayOfVideo,$tabOfVideo,$length,$tabOfTags,$affichearrayVideo,$datas);
	 		$arrayOfVideo[]=$value2["idVideo"];
	 	}
	}
}*/
//r($arrayOfVideo);
echo"</main>
<input type='text' value='Par Tristan Charial' readonly>
<script src='https://code.jquery.com/jquery-3.0.0.min.js'></script>
<script src='assets/js/app.js'></script>
</body>
</html>";





?>




	 