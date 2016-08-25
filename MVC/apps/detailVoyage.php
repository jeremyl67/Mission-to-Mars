<?php

	$voyage;

	$res = mysqli_query($db, "SELECT depart, destination, date, prix, nom, resume  FROM voyage");

	while ($array = mysqli_fetch_assoc($res)) {
		if ($array['depart'] == $depart && $array['destination'] == $destination) {
			$voyage = $array;
		}
	}

	if(empty($voyage)) {
		$error = " Un 'no' incredibilmente scortese che merita una spiegazione";
	} else {
		require 'views/detailVoyage.phtml';
	}
?>