<?php
	require_once "login.php";

	$conn = mysqli_connect($hostname,$user,$password,$database);

	if(!$conn)
		die("Error while updating year.<br/>".mysqli_connect_error());
	else {
		echo "Connected. <br/>";
	}
	if(isset($_POST['title']) && empty($_POST['title'])==false){
		$title = trim($_POST['title']);
		$query = "SELECT * FROM {$table2} WHERE title LIKE '%{$title}%'";

		$result = mysqli_query($conn,$query);

		if(!$result)
			die("Error while adding data.<br/>".mysqli_error($conn));
		else{
			// echo "Successful updating. <br/>";
			$rows1 = mysqli_num_rows($result);

			echo "The details for {$table2} are : <br/><br/>";
			for($i=0;$i<$rows1;$i++){
				$cur_row = mysqli_fetch_row($result);
				echo "Title : ".$cur_row[0]." <br/>";
				echo "Author : ".$cur_row[1]." <br/>";
				echo "Year : ".$cur_row[2]." <br/>";
				echo "<hr>";
			}			
		}
	}
	else {
		echo "Please fill all the details correctly. <br/>";
	}

?>