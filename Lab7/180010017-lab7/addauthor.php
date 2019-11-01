<?php
	require_once "login.php";

	$conn = mysqli_connect($hostname,$user,$password,$database);

	if(!$conn)
		die("Error while updating titles.<br/>".mysqli_connect_error());
	else {
		echo "Connected. <br/>";
	}
	if(isset($_POST['author']) && empty($_POST['author'])==false && isset($_POST['publisher']) && empty($_POST['publisher'])==false){

		$query = "INSERT INTO {$table1} VALUES('{$_POST['author']}','{$_POST['publisher']}')";

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
