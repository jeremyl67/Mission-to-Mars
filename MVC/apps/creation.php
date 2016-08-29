<?php 

	if (isset($_GET['id']))
	{
		$id=intval(($_GET["id"]));
		$res = mysqli_query($db,' SELECT * FROM voyage WHERE id='.$id);
	

	$voyage = mysqli_fetch_assoc($res);

		
				$nom = $voyage["nom"];
				$depart = $voyage["depart"];
				$destination = $voyage["destination"];
				$prix = intval($voyage["prix"]);
				$classe_eco = intval($voyage["classe_eco"]);
				$classe_business = intval($voyage["classe_business"]);
				$premiere_classe = intval($voyage["premiere_classe"]);
				$date = $voyage['date'];
				$resume = $voyage["resume"];
				$url = $voyage["url"];
				$id = $voyage['id'];
				
		// 	}
		// 	$i++;
		// }
		$action = 'edit';
	}
	else
	{
		$action = 'create';
	}

	require("views/creation.phtml");
 ?>
