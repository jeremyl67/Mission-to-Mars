<?php 

	
	$choixdepart = "";
	$choixdestination = "";
	
	
	
		

	$depart = "";
	$destination = "";
 

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

	require 'views/recherche.phtml'; 

	
	

?>
