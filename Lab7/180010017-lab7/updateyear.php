<?php
	require_once "login.php";

	$conn = mysqli_connect($hostname,$user,$password,$database);

	if(!$conn)
		die("Error while updating year.<br/>".mysqli_connect_error());
	else {
		echo "Connected. <br/>";
	}
	if(isset($_POST['title']) && empty($_POST['title'])==false && isset($_POST['year']) && empty($_POST['year'])==false){
		$title = trim($_POST['title']);
		$query = "UPDATE {$table2} SET year={$_POST['year']} WHERE title LIKE '%{$title}%'";

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
