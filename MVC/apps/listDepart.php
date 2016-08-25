<?php 

	$res = mysqli_query($db, "SELECT depart FROM voyage");

	while ($entree = mysqli_fetch_assoc($res)) {
		$text = $entree['depart'];
		require 'views/select.phtml';
	}
?>