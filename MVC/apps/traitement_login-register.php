<?php 
	
	if(isset($_POST['login'])) {
		if(isset($_POST['email'], $_POST['password'])) {

			$email = $_POST['email'];
			$password = $_POST['password'];

			if (empty($email)) {
				$error = " Merci de remplir le champ email";
			} else if (empty($password)) {
				$error = " Merci de remplir le champ password";
			} else {
				$bien = " Tout se passe bien pour le moment ! ";

				$res = mysqli_query($db, "SELECT email, password FROM users");

				while ($array = mysqli_fetch_assoc($res)) {
					if ($array['email'] == $email && $array['password']) {
						$_SESSION['email'] = $email;
						header('Location: index.php?page=home');
						exit;
					} else {
						$error = " l'email ou le mot de passe ne sont incorrects";
					}
				}
			} 
		}
	}

	if(isset($_POST['register'])) {
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
				$bien = 'tout va bien jusque la';

				$connect = mysqli_query($db, "SELECT email, nom, prenom, rue, code_postal, ville, tel, password FROM users");
				$array = mysqli_fetch_assoc($connect);

				if ($array == true) {
					$insert = 
						mysqli_query(
							$db, "INSERT INTO users (email,
													nom,
													prenom,
													rue,
													code_postal,
													tel,
													ville,
													password) 
										VALUES ('$email',
												'$nom',
												'$prenom',
												'$adresse',
												'$cp',
												'$tel',
												'$ville',
												MD5('$password'))");
				}
			} 
		}
	}

?>