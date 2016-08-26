<?php 


	$res = mysqli_query($db,' SELECT DISTINCT destination FROM voyage' );
	$text="";

	while ($voyage = mysqli_fetch_assoc($res))
{
			$text = $voyage['destination'];
			require 'views/select.phtml';
	
}



?>