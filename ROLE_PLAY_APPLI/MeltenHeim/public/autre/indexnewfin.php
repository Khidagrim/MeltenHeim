<?php  
$datas = $_POST;

$select = "select idTags,Libel from tags ";
$tabOfTags = $dbh->query($select)->fetchAll();

//r($tabOfTags);	
//r($datas);	

$select = "select video.idVideo,resume,lienWord,usesGen from video";
$tabOfVideo = $dbh->query($select)->fetchAll();

$affichearrayVideo = array();

$i=0;
foreach ($datas as $key => $value) 
{
	if($key !== "search")
	{
		$select = "select idVideo from posseder where idTags = $value";
		$affichearrayVideo[$i] = $dbh->query($select)->fetchall();
		$i++;
	}
}     

//r($affichearrayVideo);                                  

$etoilearray = array();

foreach ($affichearrayVideo as $key => $value) 
{
	foreach ($value as $key2 => $value2) 
	{
		foreach ($value2 as $key3 => $value3) 
		{
			if(empty($etoilearray[$value3]))
			{
				$etoilearray[$value3] = 1;
			}
			else
			{
				$etoilearray[$value3] += 1;
			}	
		}
	}
}

//$etoilearray = array_unique($etoilearray);                     // dans arrayetoile se trouve le nombre de tags correspondant a la video.

arsort($etoilearray);

//r($etoilearray);r($tabOfVideo);	

$arrayOfVideo = array();
$length = 0;
foreach ($etoilearray as $key => $value) 
{
	foreach ($tabOfVideo as $key2 => $value2)
	 {
	 	if($key == $value2["idVideo"])
	 	{
	 		$length++;
	 	}
	}
}

foreach ($etoilearray as $key => $value) 
{
	foreach ($tabOfVideo as $key2 => $value2)
	 {
	 	if($key == $value2["idVideo"])
	 	{
	 		creaContent($dbh,$value,$value2["idVideo"],$value2["resume"],$value2["lienWord"],$value2["usesGen"],$arrayOfVideo,$tabOfVideo,$length,$tabOfTags,$affichearrayVideo,$datas);
	 		$arrayOfVideo[]=$value2["idVideo"];
	 	}
	}
}
//r($arrayOfVideo);
echo"</main>
<input type='text' value='Par Tristan Charial' readonly>
<script src='https://code.jquery.com/jquery-3.0.0.min.js'></script>
<script src='assets/js/app.js'></script>
</body>
</html>";





?>




	 