
<?php

	$depart;
	$destination="";
	$voyage="";
	if (isset($_POST["depart"] )&& isset($_POST["destination"]))
	{ 
	
	
		$res = mysqli_query($db,' SELECT * FROM voyage WHERE depart="'.$_POST['depart'].'" AND destination="'.$_POST['destination'].'"');
		$voyage = mysqli_fetch_assoc($res);
	}

		
	

	if (empty($voyage)) 
	{
		$error = " Aucun départ ou destination n'est répertoriée";
	} 
	else 
	{
		require 'views/detailVoyage.phtml';
	}
?>