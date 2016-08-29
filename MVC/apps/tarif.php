<?php 
	
	if (isset($_GET["id"] ))
	{ 

		$res = mysqli_query($db,' SELECT * FROM voyage WHERE id="'.intval($_GET['id']).'"  ');
		$voyage = mysqli_fetch_assoc($res);
	
		if($voyage)
		{
			$voyage["classe_eco"]=$voyage["prix"]+($voyage["classe_eco"]*$voyage["prix"]/100);
			$voyage["classe_business"]=$voyage["prix"]+($voyage["classe_business"]*$voyage["prix"]/100);
			$voyage["premiere_classe"]=$voyage["prix"]+($voyage["premiere_classe"]*$voyage["prix"]/100);
			require 'views/tarif.phtml';
		}
		else 
		{
			$error = " Aucun départ ou destination n'est répertoriée";
		}
	}
	else
	{
		$error = " Aucun départ ou destination n'est répertoriée";
	}

 ?>