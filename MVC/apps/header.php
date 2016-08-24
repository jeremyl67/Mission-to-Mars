<?php

	if (isset($_SESSION['email']) && $_SESSION["email"]=="admin@admin.fr") {
		require 'views/header_in.phtml';
	}
	elseif(isset($_SESSION['email']) && $_SESSION["email"]!="admin@admin.fr") 
	{
		require "views/header_user.phtml";
	}
	else {
		require 'views/header.phtml';		
	}

?>