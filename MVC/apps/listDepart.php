<?php 

	$count = 0;
	$listDepart = [];
	
	$json = file_get_contents('voyage.json');
	$temp = json_decode($json, true);

	while ($count < sizeof($temp)) {
		if (!in_array($temp[$count]['depart'], $listDepart)) {
			$listDepart[] = $temp[$count]['depart'];
			$text = $temp[$count]['depart'];
		}
		require 'views/select.phtml';
		$count++;
	}


?>