<?php
	require_once "login.php";

	$conn = mysqli_connect($hostname,$user,$password,$database);

	if(!$conn)
		die("Error while updating titles.<br/>".mysqli_connect_error());
	else {
		echo "Connected. <br/>";
	}
	if(isset($_POST['title']) && empty($_POST['title'])==false && isset($_POST['author']) && empty($_POST['author'])==false && isset($_POST['year'])){
		$title = trim($_POST['title']);
		$author = trim($_POST['author']);
		$year = trim($_POST['year']);
		$query = "INSERT INTO ${table2} VALUES('{$title}','{$author}','{$year}')";

		// $query = "INSERT INTO ${table2} VALUES('{$_POST['title']}','{$_POST['author']}','{$_POST['year']}')";

		$result = mysqli_query($conn,$query);

		if(!$result)
			die("Error while adding data.<br/>".mysqli_error($conn));
		else
			echo "Successful updating. <br/>";
	}
	else {
		echo "Please fill all the details correctly. <br/>";
	}

?>
