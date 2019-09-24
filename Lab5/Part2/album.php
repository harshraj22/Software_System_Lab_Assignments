<?php 
	session_start();
	if(!isset($_SESSION["counter"])){
		$_SESSION["counter"] = 0;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Your Album</title>
	<style type="text/css">
		.fit {
		    width: 480px; 
		    height: 320px; 
		}
		.btn {
			padding: 10px;
		}
		body{
			position: absolute;
			width: 300px;
			height: 200px;
			z-index: 15;
			top: 45%;
			left: 45%;
			margin: -100px 0 0 -150px;
		}

	</style>
</head>
<body>
	<?php 

		$pics = scandir("images", 1);
		// We store information about the current number of images visited in global variable ($_SESSION['counter'])

		if(isset($_POST["next"]))
			$_SESSION["counter"] = min($_SESSION["counter"]+1,count(scandir("./images")) - 3);
		elseif(isset($_POST["prev"]))
			$_SESSION["counter"] = max(0,$_SESSION["counter"]-1);
		elseif(isset($_POST["first"]))
			$_SESSION["counter"] = 0;
		elseif(isset($_POST["last"]))
			$_SESSION["counter"] = count(scandir("./images")) - 3;

		echo "<img src='images/{$pics[$_SESSION["counter"]]}' class='fit'> ";
		echo "<br/><span class='pics'> {$pics[$_SESSION["counter"]]} </span><br/><hr/>";
	?>

	<form method="post" class="btn">
		<button type="submit" name="next">Next</button>
		<button type="submit" name="prev">Prev</button>
		<button type="submit" name="last">Last</button>
		<button type="submit" name="first">First</button>
	</form>

	<!-- Each time, we redirect the page to itself and pass new set of post associative array -->
	<form method="post" action="newupload.php" class="btn">
		<button type="submit">Upload / Delete</button>
	</form>

</body>
</html>