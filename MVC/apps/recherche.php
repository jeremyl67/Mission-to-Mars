<?php 

$json=file_get_contents("voyage.json");
	$stock = json_decode($json, true);
	$i=0;
	$choixdepart = "";
	$choixdestination="";
	while($i<sizeof($stock))
	{
		$choixdepart .= "<option>".$stock[$i]["depart"]."</option>\n";
		$i++;
	}

	
	$i=0;
	
	while($i<sizeof($stock))
	{
	
		$choixdestination.= "<option>".$stock[$i]["destination"]."</option><br>";
		$i++;
		
	}

		
	$depart = "";
	$destination = "";
	$choixdepart = "";
	$choixdestination = "";
 

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
	
	$i = 0;
	
	// var_dump($_POST['depart'], $_POST['destination']);

	while ($i < sizeof($temp)) {
		if ($temp[$i]['depart'] == $depart && $temp[$i]['destination'] == $destination) {
			$list[] = $temp;
			$nom = $temp[$i]['nom'];
			$date = $temp[$i]['date'];
			$resume = $temp[$i]['resume'];
			$prix = $temp[$i]['prix'];
		} 

		$collect[] = get_fields();
		var_dump($collect);
		
		$choixdepart .= "<option>" . $temp[$i]['depart'] . "</option>\n";
		$choixdestination .= "<option>" . $temp[$i]['destination'] . "</option>\n";
		
		$i++;
	}



	if (empty($list)) {
		$error = " Aucun départ ou destination n'est répertoriée";
	}
	

	require 'views/recherche.phtml'; 

?>
