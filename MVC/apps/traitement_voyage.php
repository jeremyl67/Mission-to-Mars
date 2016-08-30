<?php 

	if ( isset($_POST["action"],$_POST["id"],$_POST["note"], $_SESSION['id']) && $_POST["action"]=="comment")
	{
			$comment = mysqli_real_escape_string($db,$_POST["comment"]);
			$voyage_id = intval($_POST["id"]);
			$user_id=intval($_SESSION["id"]);
			$note=intval($_POST["note"]);
		
		
		 if(empty($note))
		{
			$error="vous n'avez pas noté";
		}
		else if($note>5 || $note<0)
		{
			$error="la note doit etre comprise entre 0 et 5";
		}
		else if(strlen($comment)<10)
		{
			$error="votre texte est trop court";
		}
		else	
		{
			var_dump("trait".$_POST);
			
			$query = "INSERT INTO comments (comment,id_user,id_voyage,note) VALUES ('".$comment."','".$user_id."','".$voyage_id."','".$note."')";
			mysqli_query($db, $query);
			$id = mysqli_insert_id($db);	
			
			header("Location: index.php?page=voyage");
			exit;	
		}
	}
 ?>