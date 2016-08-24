<?php
 
	$json = file_get_contents('voyage.json');
	$temp = json_decode($json, true);
	$voyage =[];
	
	$i=0;
	while ($i<sizeof($temp))
	{
		$voyage=$temp[$i];
		// var_dump($voyage);
		$i++;
	require ("views/voyage.phtml");
	}
		
?>
