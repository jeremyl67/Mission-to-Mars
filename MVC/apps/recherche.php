<?php 
		
	$depart = "";
	$destination = "";
 

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
	

	require 'views/recherche.phtml'; 

?>


// <?php 
		
// 	$depart = "";
// 	$destination = "";
// 	$choixdepart = "";
// 	$choixdestination = "";
 

// 	if (!isset($_POST['depart']))
// 	{
// 		$error = 'cocher le sesk wesh';
// 	} else {
// 		$depart = $_POST['depart'];
// 	}


// 	if (!isset($_POST['destination']))
// 	{
// 		$error = 'cocher le sesk wesh';
// 	} else {
// 		$destination = $_POST['destination'];
// 	}


// 	$json = file_get_contents('voyage.json');
// 	$temp = json_decode($json, true);
// 	$listDepart = [];
// 	$listDestination = [];
// 	$voyage;

// 	$i = 0;
	

// 	while ($i < sizeof($temp))
// 	{
// 		if (!in_array($temp[$i]['depart'], $listDepart))
// 			$listDepart[] = $temp[$i]['depart'];
// 		if (!in_array($temp[$i]['destination'], $listDestination))
// 			$listDestination[] = $temp[$i]['destination'];
// 		if ($temp[$i]['depart'] == $depart && $temp[$i]['destination'] == $destination)
// 			$voyage = $temp[$i];
// 		$i++;
// 	}
// 	$choixdepart = "<option>".implode("</options><option>", $listDepart)."</option>\n";
// 	$choixdestination = "<option>".implode("</options><option>", $listDestination)."</option>\n";

// 	if (empty($voyage)) {
// 		$error = " Aucun départ ou destination n'est répertoriée";
// 	}
	

// 	require 'views/recherche.phtml'; 

// ?>