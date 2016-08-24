<?php 

 

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

	// var_dump($depart, $destination);

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
	// var_dump($list);


	require 'views/recherche.phtml'; 




?>
