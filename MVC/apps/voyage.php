<?php
	$res = mysqli_query($db,' SELECT * FROM voyage' );


	while ($voyage = mysqli_fetch_assoc($res))
	{
		$note_res=mysqli_query($db,'SELECT AVG(note) AS note FROM comments WHERE id_voyage='.$voyage["id"]." GROUP BY id_voyage");
		$note=mysqli_fetch_assoc($note_res);
		$voyage['note'] = $note['note'];
		require 'views/voyage.phtml';
		
		
	}
	
		
?>
