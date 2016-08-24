<?php 
/*$depart1="";
$destination="";
$json=file_get_contents("stock.json");
$stock = json_decode($json, true);
		$i=0;
		while($i<sizeof($stock))
		{
		
			$depart1="<option value='<?=$stock[$i]['depart']'><?=$stock[$i]['depart']'></option>";
			$i++;
		var_dump($depart1)
		}
		
		header("Location: index.php?page=recherche");
		exit;*/
?>	


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
						
?>