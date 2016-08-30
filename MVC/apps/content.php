<?php
	
	$ask = mysqli_query($db,' SELECT * FROM comments WHERE id_voyage='.$voyage["id"] );
	
	
	while($comments = mysqli_fetch_assoc($ask))
	{
		require 'views/comment.phtml';
	}
	
	
		
		
	
	
	
		
	
		
?>
