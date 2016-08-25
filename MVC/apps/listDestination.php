<?php 

	$count = 0;
	$listDestination = [];
	
	$json = file_get_contents('voyage.json');
	$temp = json_decode($json, true);

	while ($count < sizeof($temp)) {
		if (!in_array($temp[$count]['destination'], $listDestination)) {
			$listDestination[] = $temp[$count]['destination'];
			$text = $temp[$count]['destination'];
		}
		require 'views/select.phtml';
		$count++;
	}


?>