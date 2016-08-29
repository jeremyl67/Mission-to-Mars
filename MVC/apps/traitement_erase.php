<?php

if (isset($_POST['action'], $_POST['id']) && $_POST['action'] == 'erase')
{
	$id = $_POST['id'];
	$query = "DELETE FROM voyage WHERE id=".$id;
	mysqli_query($db, $query);
	
	header("Location: index.php?page=voyage");
	exit;

		
}
?>