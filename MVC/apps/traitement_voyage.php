<?php 

	if ( isset($_POST["action"],$_POST["id"]) && $_POST["action"]=="comment")
	{
			
		$user_id=mysqli_real_escape_string($_SESSION["email"]);
		var_dump("trait".$_POST);
		
		$comment = mysqli_real_escape_string($_POST["comment"]);
		$voyage_id = intval($_POST["id"]);
		$query = "INSERT INTO comments (comment,id_user,id_voyage) VALUES ('".$comment."','".$user_id."','".$voyage_id."')";
		mysqli_query($db, $query);
		$id = mysqli_insert_id($db);	
		
		header("Location: index.php?page=voyage");
		exit;	
		}
 ?>