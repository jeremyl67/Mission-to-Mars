<?php 
	
	if (isset($_GET["id"] ))
	{ 
	
	
		$res = mysqli_query($db,' SELECT * FROM voyage WHERE id="'.$_GET['id'].'"  ');
		$voyage = mysqli_fetch_assoc($res);
		$voyage["classe_eco"]=$voyage["prix"]+($voyage["classe_eco"]*$voyage["prix"]/100);
		$voyage["classe_business"]=$voyage["prix"]+($voyage["classe_business"]*$voyage["prix"]/100);
		$voyage["premiere_classe"]=$voyage["prix"]+($voyage["premiere_classe"]*$voyage["prix"]/100);
	}

		
	

	if (empty($voyage)) 
	{
		$error = " Aucun départ ou destination n'est répertoriée";
	} 
	else 
	{
		
		require 'views/tarif.phtml';
	}
 ?>