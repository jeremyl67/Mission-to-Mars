<?php 

	if (isset($_GET['id']))
	{
		$json = file_get_contents("voyage.json");
		$stock = json_decode($json, true);
		
		$i = 0;
		while($i < sizeof($stock))
		{
			if($stock[$i]["id"] == $_GET['id'])
			{	
				$bool = false;
				$this_Article = $stock[$i];
				$nom = $this_Article["nom"];
				$depart = $this_Article["depart"];
				$destination = $this_Article["destination"];
				$prix = intval($this_Article["prix"]);
				$classe_eco = intval($this_Article["classe_eco"]);
				$classe_business = intval($this_Article["classe_business"]);
				$premiere_classe = intval($this_Article["premiere_classe"]);
				$date = $this_Article['date'];
				$resume = $this_Article["resume"];
				$url = $this_Article["url"];
				$id = $_GET['id'];
				
			}
			$i++;
		}
		$action = 'edit';
	}
	else
	{
		$action = 'create';
	}

	require("views/creation.phtml");
 ?>
