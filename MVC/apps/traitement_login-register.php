<?php 
if(isset($_REQUEST['login'])) {
	if(isset($_POST['email'], $_POST['password'])) {

		$email = $_POST['email'];
		$password = $_POST['password'];

		if (empty($email)) {
			$error = " Merci de remplir le champ email";
		} else if (empty($password)) {
			$error = " Merci de remplir le champ password";
		} else {

			$res = mysqli_query($db,' SELECT * FROM users WHERE email="'.$_POST['email'].'" AND password=MD5("'.$_POST['password'].'")');
			$voyage = mysqli_fetch_assoc($res);
			if (!$voyage) {
				$error = " l'email ou le mot de passe ne sont incorrects";
			}
			else
			{
				$bien = " Tout se passe bien pour le moment ! ";
				$_SESSION["id"] = $voyage["id"];
				$_SESSION["admin"] = $voyage["admin"];
				$_SESSION['email'] = $voyage['email'];
				header("Location: index.php?page=home");
				exit;
			} 
		}
	} 
}

if(isset($_REQUEST['register'])) {
	if(isset($_POST['email'], $_POST['nom'], $_POST['prenom'], $_POST['password'], $_POST['password2'], $_POST['adresse'], $_POST['cp'], $_POST['ville'], $_POST['tel'])) {

		$email = $_POST['email'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$adresse = $_POST['adresse'];
		$cp = $_POST['cp'];
		$ville = $_POST['ville'];
		$tel = $_POST['tel'];
		$code_postal=$cp;
		$rue=$adresse;


		if (empty($email)) {
			$error = " Merci de remplir le champ email";
		} else if (empty($nom)) {
			$error = " Merci de remplir le champ username";
		} else if (empty($prenom)) {
			$error = " Merci de remplir le champ username";
		} else if (empty($password)) {
			$error = " Merci de remplir le champ password";
		} else if (empty($password2)) {
			$error = " Merci de remplir le champ password2";
		} else if ($password != $password2) {
			$error = " Merci de renseigner des mots de passe identique";
		} else if (empty($adresse)) {
			$error = " Merci de remplir le champ adresse";
		} else if (empty($cp)) {
			$error = " Merci de remplir le champ cp";
		} else if (empty($ville)) {
			$error = " Merci de remplir le champ ville";
		} else if (empty($tel)) {
			$error = " Merci de remplir le champ telephone";
		} else {
			var_dump($_POST);
			$bien = 'tout va bien jusque la';
			$query = "INSERT INTO users (email, nom,prenom, rue,code_postal,ville,tel,password) VALUES('".$email."', '".$nom."', '".$prenom."', '".$rue."', '".$code_postal."', '".$ville."', '".$tel."',MD5('".$password."'))";
			mysqli_query($db, $query);
			var_dump(mysqli_error($db));
			$id = mysqli_insert_id($db);

			
			
		} 
	}
}

?>