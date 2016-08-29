<?php
	
	$ask = mysqli_query($db,' SELECT * FROM comments WHERE id_voyage='.$voyage["id"] );
	// $comments = mysqli_fetch_assoc($ask);
	// var_dump($comments);
	// var_dump("a".mysqli_error($db));
	
	while($comments = mysqli_fetch_assoc($ask))
	{
		require 'views/comment.phtml';
	}
	
	// require 'views/comment.phtml';
		
		
	
	
	
		
	
		
?>
