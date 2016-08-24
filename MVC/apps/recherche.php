<?php 

/*$depart1=array();
$go="";
$destination="";

$depart1="";
$destination="";
$json=file_get_contents("voyage.json");
$stock = json_decode($json, true);

		$i=0;
		
		while($i<sizeof($stock))
		{
		
			$go= "<option>".$stock[$i]["depart"]."</option><br>";
			$i++;
		}*/
		
		
	$depart="";
	$destination="";
 

	if (!isset($_POST['depart']))
	{
		$error = 'cocher le sesk wesh';
	} else {
		$depart = $_POST['depart'];
	}


	if (!isset($_POST['destination']))
	{
		$error = 'cocher le sesk wesh';
	} else {
		$destination = $_POST['destination'];
	}


	$json = file_get_contents('voyage.json');
	$temp = json_decode($json, true);
	$list = [];
	foreach ($temp as $voyage) {
		// var_dump($voyage, $depart, $destination);
		if ($voyage['depart'] == $depart && $voyage['destination'] == $destination) {
	
			$list[] = $voyage;
		} else {
			$error = "Aucun départ ou destination n'est répertorié ";
		}
	}
	

			require 'views/recherche.phtml'; 





?>
