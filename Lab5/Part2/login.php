<?php 
	if($_POST["input_box"] == "eval" && $_POST["pass_box"] == "eva"){
		// echo "Location: " . $_SERVER["HTTP_HOST"] . "/lab5.2/album.php";
		// header("Location: " . "http://localhost:8080/lab5.2/album.php");
		header("Location: /180010017-lab5-part2/album.php");
		// include("album.php");
		die();
	}
	else 
		echo "Wrong Credentials !! </br>";
?>