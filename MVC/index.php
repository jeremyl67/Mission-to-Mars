<?php
	//var_dump($_POST);
	session_start();
	$error = '';
	$page = 'home';
	$access = [
		"home", 
		"login-register", 
		"creation", 
		"recherche", 
		"destinations", 
		"billets"];
	
	if (isset($_GET['page']) && in_array($_GET['page'], $access))
	{
		$page = $_GET['page'];
	}
	
	$accessTraitement = [
		"creation", 
		"recherche", 
		"login-register", 
		"logout"];
	
	if (in_array($page, $accessTraitement)) {
		require 'apps/traitement_'.$page.'.php';
	}
	
	require 'apps/skel.php';
?>