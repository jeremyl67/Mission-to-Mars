<?php 

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

	}
	

	require 'views/recherche.phtml'; 

?>
