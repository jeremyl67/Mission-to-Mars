<?php 

	
	$choixdepart = "";
	$choixdestination = "";
	
	
	
		

	$depart = "";
	$destination = "";
 

	if (!isset($_POST['depart']))
	{
		$error = 'cocher le sesk wesh';
	} else {
		$depart = mysqli_real_escape_string($db,$_POST['depart']);
	}


	if (!isset($_POST['destination']))
	{
		$error = 'cocher le sesk wesh';
	} else {
		$destination = mysqli_real_escape_string($db,$_POST['destination']);
	}

	require 'views/recherche.phtml'; 

	
	

?>
