<?php

	if (isset($_SESSION['admin']) && $_SESSION["admin"]=="1") {
		require 'views/header_in.phtml';
	}
	elseif(isset($_SESSION['email']) && $_SESSION["admin"]!="1")  
	{
		require "views/header_user.phtml";
	}
	else {
		require 'views/header.phtml';		
	}

?>