<?php

$error="";
$nom="";
$date="";
$depart="";
$destination="";
$prix="";
$resume="";
$classe_eco="";
$classe_business="";
$premiere_classe="";
var_dump($_POST);
$aaaaa="";

if (isset($_POST["submit"]) )
{
	var_dump($error);
		$depart=$_POST["depart"];
		$nom=$_POST["nom"];
		$resume=$_POST["resume"];
		$date=$_POST["date"];
		$destination=$_POST["destination"];
		$prix=$_POST["prix"];
		$classe_eco=$_POST["classe_eco"];
		$classe_business=$_POST["classe_business"];
		$premiere_classe=$_POST["premiere_classe"];
	if ( empty($_POST["nom"]))
	{ 
		$error="l'entrée nom est vide";
		var_dump($error);
		
		
	}
	elseif ( empty($_POST["date"]))
	{ 
		$error="l'entrée nom est vide";
		var_dump($error);
		
		
	}
	elseif ( empty($_POST["resume"]))
	{ 
		$error="l'entrée nom est vide";
		var_dump($error);
		
		
	}
	elseif ( empty($_POST["depart"]))
	{ 
		$error="l'entrée  est vide";
		var_dump($error);
		
		
	}
	else if (empty($_POST["destination"]))
	{
		$error="l'entrée  est vide";
		var_dump($error);
		
	}
	else if (empty($_POST["prix"]) && (gettype($_POST["prix"])!="integer"||gettype($_POST["prix"])!="double"))
	{
		$error="l'entrée prix est vide et/ou ce ne sont pas des nombres";
		var_dump(gettype($_POST["prix"]));
		var_dump($error);
		
	}
	else if(empty($_POST["classe_eco"])&&empty($_POST["classe_business"])&&empty($_POST["premiere_classe"]))
	{
		$error="vous n'avez pas choisi votre classe";
		var_dump($error);
	}
		
	if (empty($error))
	{
		$json=file_get_contents("stock.json");
		$stock = json_decode($json, true);
		
		$stockInput = array(
			"depart" => $depart,
			"nom" => $nom,
			"resume" => $resume,
			"date" => $date,
			"destination" => $destination,
			"prix" => $prix,
			"classe_business" =>  $classe_business,
			"classe_eco" => $classe_eco,
			"premiere_classe" => $premiere_classe
			
		);
		$json=file_get_contents("voyage.json");
		$stock = json_decode($json, true);
		$stock[] = $stockInput;
		// array_push($stock,$stockInput);
		$json=json_encode($stock);
		file_put_contents("voyage.json", $json);
		header("Location: index.php?page=home");
		exit; 
	}
		

}


	// require ("views/login.phtml");
?>