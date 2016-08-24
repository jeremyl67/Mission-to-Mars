<?php 
<<<<<<< HEAD



=======
>>>>>>> 0539bdb924cb185fc10137b239c61a9e71c8afbf
		
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

	
	if (!isset($_POST['destination']))
	{
		$error = 'cocher le sesk wesh';
	} else {
		$destination = $_POST['destination'];
	}


	$json = file_get_contents('voyage.json');
	$temp = json_decode($json, true);
	$list = [];
<<<<<<< HEAD
	foreach ($temp as $voyage) {
		  
		if ($voyage['depart'] == $depart && $voyage['destination'] == $destination) {
=======
>>>>>>> 90d72e0d4cd810c72a552ed4dc4b159410c78da2
	
	$i = 0;
	
<<<<<<< HEAD
	$choixdepart = "";
	$choixdestination = "";
	
	while($i<sizeof($temp))
	{
		echo "aaaa";
		if($choixdepart!=$temp[$i]['depart'])
			{ 
				echo "bbbbb";
		
			$choixdepart .= "<option>".$temp[$i]["depart"]."</option>\n";
			}

		$i++;
	}

	
	$i=0;
	
	while($i<sizeof($temp))
	{
		
			
		$choixdestination.= "<option>".$temp[$i]["destination"]."</option><br>";
		
		$i++;
		
=======
	// var_dump($_POST['depart'], $_POST['destination']);

	while ($i < sizeof($temp)) {
		if ($temp[$i]['depart'] == $depart && $temp[$i]['destination'] == $destination) {
			$list[] = $temp;
			$nom = $temp[$i]['nom'];
			$date = $temp[$i]['date'];
			$resume = $temp[$i]['resume'];
			$prix = $temp[$i]['prix'];
		} 
		
		$choixdepart .= "<option>" . $temp[$i]['depart'] . "</option>\n";
		$choixdestination .= "<option>" . $temp[$i]['destination'] . "</option>\n";
		
		$i++;
	}



	if (empty($list)) {
		$error = " Aucun départ ou destination n'est répertoriée";
>>>>>>> 90d72e0d4cd810c72a552ed4dc4b159410c78da2
	}
	

	require 'views/recherche.phtml'; 

?>
