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
		$author = $_POST['author'];
		$year = $_POST['year'];
		$query = "DELETE FROM ${table2} WHERE title='{$title}' AND author='{$author}' AND year='{$year}'";


		// $query = "DELETE FROM ${table2} WHERE title='{$_POST['title']}' AND author='{$_POST['author']}' AND year='{$_POST['year']}'";

		$result = mysqli_query($conn,$query);

		if(!$result)
			die("Error while deleting data.<br/>".mysqli_error($conn));
		else
			echo "Successful deleted. <br/>";

	}
	else {
		echo "Please fill all the details correctly. <br/>";
	}

?>
