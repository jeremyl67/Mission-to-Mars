<?php
	$res = mysqli_query($db,' SELECT * FROM voyage' );


	while ($voyage = mysqli_fetch_assoc($res))
	{
		
		require 'views/voyage.phtml';
		
		
	}
	
		
?>
