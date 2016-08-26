<?php
	$error="";
	$nom="";
	$date="";
	$depart="";
	$destination="";
	$prix="";
	$url="";
	$resume="";
	$classe_eco="";
	$classe_business="";
	$premiere_classe="";
	$id="";
	if (isset($_POST["action"]) && $_POST['action'] == 'create' && isset($_POST["nom"], $_POST["depart"])  && isset($_POST["destination"])  && isset($_POST["prix"])  && isset($_POST["classe_eco"]) && isset($_POST["classe_business"]) && isset($_POST["premiere_classe"]) && isset($_POST["date"]) && isset($_POST["resume"]) && isset($_POST["url"]))
	{
		$depart=$_POST["depart"];
		$url=$_POST["url"];
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
			require "apps/error.php";
			
			
		}
		elseif ( empty($_POST["date"]))
		{ 
			$error="l'entrée date est vide";
			require "apps/error.php";
			
			
		}
		elseif ( empty($_POST["resume"]))
		{ 
			$error="l'entrée resume est vide";
			require "apps/error.php";
			
			
		}
		elseif ( empty($_POST["depart"]))
		{ 
			$error="l'entrée  depart est vide";
			require "apps/error.php";
			
		}
		else if (empty($_POST["destination"]))
		{
			$error="l'entrée  desyination est vide";
			require "apps/error.php";
		}
		else if (empty($_POST["prix"]) && (gettype($_POST["prix"])!="integer"||gettype($_POST["prix"])!="double"))
		{
			$error="l'entrée prix est vide et/ou ce ne sont pas des nombres";
			require "apps/error.php";
			
		}
		else if(empty($_POST["classe_eco"])&&empty($_POST["classe_business"])&&empty($_POST["premiere_classe"]))
		{
			$error="vous n'avez pas choisi votre classe";
			require "apps/error.php";
		}
		if (empty($error))
		{

			
			$query = "INSERT INTO voyage (depart, destination,nom, resume,date,prix,classe_business,classe_eco,premiere_classe,url) VALUES('".$depart."', '".$destination."', '".$nom."', '".$resume."', '".$date."', '".$prix."', '".$classe_business."','".$classe_eco."','".$premiere_classe."', '".$url."')";
			mysqli_query($db, $query);
			$id = mysqli_insert_id($db);	


			
			header("Location: index.php?page=voyage");
			exit; 
		}
	}


	if ( isset($_POST["action"])&& $_POST['action'] == 'edit' && isset($_POST["nom"])&& isset($_POST["id"]) && isset($_POST["id"])  && isset($_POST["depart"])  && isset($_POST["destination"])  && isset($_POST["prix"])  && isset($_POST["classe_eco"]) && isset($_POST["classe_business"]) && isset($_POST["premiere_classe"]) && isset($_POST["date"]) && isset($_POST["resume"]) && isset($_POST["url"]) )
	{
		$nom = $_POST["nom"];
		$depart = $_POST["depart"];
		$destination = $_POST["destination"];
		$prix = $_POST["prix"];
		$classe_eco = $_POST["classe_eco"];
		$classe_business = $_POST["classe_business"];
		$premiere_classe = $_POST["premiere_classe"];
		$date = $_POST["date"];
		$resume = $_POST["resume"];
		$url = $_POST["url"];
		$id = $_POST["id"];
		

		
			
		
		$query = "UPDATE voyage SET depart='".$depart."', destination='".$destination."', nom='".$nom."' ,resume='".$resume."' ,date='".$date."' ,prix='".$prix."' ,classe_business='".$classe_business."' ,classe_eco='".$classe_eco."' ,premiere_classe='".$premiere_classe."' ,url='".$url."' WHERE id=".$id;
		mysqli_query($db, $query);
		
			header("Location: index.php?page=voyage");
 			exit;	
		}
	
?>