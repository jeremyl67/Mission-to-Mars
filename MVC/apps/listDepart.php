<?php 

	$res = mysqli_query($db,' SELECT DISTINCT depart FROM voyage' );
	$text="";

	while ($voyage = mysqli_fetch_assoc($res))
{
			$text = $voyage['depart'];
			require 'views/select.phtml';
	
}

?>