<?php
if (isset($_POST['submit']))
{
	
	$json=file_get_contents("voyage.json");
	$stock = json_decode($json, true);
	$nom = $_POST["id"];
	$i = 0;
	while($i < sizeof($stock))
	{
		if($stock[$i]["nom"] == $nom)
		{
			array_splice($stock, $i, 1);

			$stock=json_encode($stock);
			$stock=file_put_contents("voyage.json", $stock);
		}

	$i++;
	}
	header("Location: index.php?page=voyage");
	exit;
}
?>