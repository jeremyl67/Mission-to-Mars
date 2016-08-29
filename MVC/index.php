<?php
	//var_dump($_POST);
	session_start();
	$db = mysqli_connect("localhost", "root", "troiswa", "centauri");
	


	$erase="";
	$error = '';
	$page = 'home';
	$access = [
		"home", 
		"login-register", 
		"creation", 
		"recherche", 
		"destinations", 
		"billets",
		"logout",
		"voyage",
		"tarif",
		"comment"];
	$db= mysqli_connect("localhost","root","troiswa","centauri");

	
	if (isset($_GET['page']) && in_array($_GET['page'], $access))
	{
		$page = $_GET['page'];
	}
	
	$accessTraitement = [
		"creation",  
		"login-register", 
		"logout",
		"erase",
		"voyage"];
	
	if (isset($_GET['page']) && in_array($_GET['page'], $accessTraitement)) {
		require 'apps/traitement_'.$_GET['page'].'.php';
	}

	require 'apps/skel.php';
?>