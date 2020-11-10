<?php

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: ../login.php');
		exit();
	}
?>