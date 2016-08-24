<?php
	//var_dump($_POST);
	session_start();
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
		"voyage"];
	
	if (isset($_GET['page']) && in_array($_GET['page'], $access))
	{
		$page = $_GET['page'];
	}
	
	$accessTraitement = [
		"creation", 
		"recherche", 
		"login-register", 
		"logout",
		"erase"];
	
	if (in_array($_GET['page'], $accessTraitement)) {
		require 'apps/traitement_'.$_GET['page'].'.php';
	}
	
	require 'apps/skel.php';
?>