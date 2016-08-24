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
		$json=file_get_contents("stock.json");
		$stock = json_decode($json, true);
		$id = uniqid();
		
		$stockInput = array(
			"id"=>$id,
			"depart" => $depart,
			"nom" => $nom,
			"resume" => $resume,
			"date" => $date,
			"destination" => $destination,
			"prix" => $prix,
			"classe_business" =>  $classe_business,
			"classe_eco" => $classe_eco,
			"premiere_classe" => $premiere_classe,
			"url"=>$url
		);
		$json=file_get_contents("voyage.json");
		$stock = json_decode($json, true);
		$stock[] = $stockInput;
		// array_push($stock,$stockInput);
		$json=json_encode($stock);
		file_put_contents("voyage.json", $json);
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
		$json=file_get_contents("voyage.json");
		$stock = json_decode($json, true);
		$id = $_POST["id"];
		
		
		$json=file_get_contents("voyage.json");
		$stock = json_decode($json, true);
	
			$i = 0;
			while($i < sizeof($stock))
			{
				if($stock[$i]["id"] == $id)
				{	
					$date = date("d F Y \à h:i");
					$this_Article = array(
						"nom"=>$nom,
						"depart" => $depart,
						"destination" => $_POST["destination"],
						"prix" => $_POST["prix"],
						"classe_eco" => $_POST["classe_eco"],
						"classe_business" => $_POST["classe_business"],
						"premiere_classe" => $_POST["premiere_classe"],
						"date" => $_POST["date"],
						"resume" => $_POST["resume"],
						"url" => $_POST["url"],
						"id"=>$_POST["id"]
					);
					$stock[$i] = $this_Article;
					// array_splice($stock, $i, 1, [$this_Article]);

					$json=json_encode($stock);
					file_put_contents("voyage.json", $json);

				}

			$i++;
			}
					header("Location: index.php?page=voyage");
		 			exit;
			
		}




	
?>