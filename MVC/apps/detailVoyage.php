<?php 

	$count = 0;
	$voyage;


	$json = file_get_contents('voyage.json');
	$temp = json_decode($json, true);

	while ($count < sizeof($temp)) {
		if ($temp[$count]['depart'] == $depart && $temp[$count]['destination'] == $destination) {
			$voyage = $temp[$count];
		}
			
		$count++;
	}


	if (empty($voyage)) {
		$error = " Aucun départ ou destination n'est répertoriée";
	} else {
		require 'views/detailVoyage.phtml';
	}
	
?>