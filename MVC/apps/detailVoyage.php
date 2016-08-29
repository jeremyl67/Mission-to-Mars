
<?php

	$depart;
	$destination="";
	$voyage="";
	if (isset($_POST["depart"], $_POST["destination"]))
	{ 
	
		$depart=mysqli_real_escape_string($db,$_POST["depart"]);
		$destination=mysqli_real_escape_string($db,$_POST["destination"]);
		$res = mysqli_query($db,' SELECT * FROM voyage WHERE depart="'.$depart.'" AND destination="'.$destination.'"');
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