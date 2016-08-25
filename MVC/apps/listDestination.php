<?php 

	$res = mysqli_query($db, "SELECT destination FROM voyage");

	while ($entree = mysqli_fetch_assoc($res)) {
		$text = $entree['destination'];
		require 'views/select.phtml';
	}
?>