<?php 
		
	$depart = "";
	$destination = "";
 

	if (!isset($_POST['depart']))
	{
		$error = 'cocher le sesk wesh';
	} else {
		$depart = $_POST['depart'];
	}

	// var_dump($depart);

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

	$i = 0;
	
	$choixdepart = "";
	$choixdestination = "";
	
	while($i<sizeof($temp))
	{
		$choixdepart .= "<option>".$temp[$i]["depart"]."</option>\n";
		$i++;
	}

	
	$i=0;
	
	while($i<sizeof($temp))
	{
	
		$choixdestination.= "<option>".$temp[$i]["destination"]."</option><br>";
		$i++;
		
	}
	

	require 'views/recherche.phtml'; 

?>
