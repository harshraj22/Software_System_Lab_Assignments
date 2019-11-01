<?php
	require_once "login.php";

	$conn = mysqli_connect($hostname,$user,$password,$database);

	if(!$conn)
		die("Error while updating year.<br/>".mysqli_connect_error());
	else {
		echo "Connected. <br/>";
	}
	if(isset($_POST['title']) && empty($_POST['title'])==false){

		$parent_query = "SELECT * FROM {$table1} WHERE publisher='{$_POST['title']}'";

		$parent_result = mysqli_query($conn,$parent_query);
		if(!$parent_result)
			die("Error searching publisher<br/>".mysqli_error($conn));
		else {
			// echo "this is working <br/>";
			$rows_num = mysqli_num_rows($parent_result);

			echo "The details for Publisher '{$_POST['title']}' are : <br/><br/>";
			for($i=0;$i<$rows_num;$i++){
				$the_row = mysqli_fetch_row($parent_result);
				$cur_author = trim($the_row[0]);//----------------------------------------------

				$query = "SELECT * FROM {$table1} INNER JOIN {$table2} ON {$table1}.author={$table2}.author WHERE {$table1}.author='{$cur_author}'";

				$result = mysqli_query($conn,$query);

				if(!$result)
					die("Error while adding data.<br/>".mysqli_error($conn));
				else{
					$rows1 = mysqli_num_rows($result);

					// echo "The details for Publisher are : <br/><br/>";
					for($i=0;$i<$rows1;$i++){
						$cur_row = mysqli_fetch_row($result);
						echo "Author : ".$cur_row[0]." <br/>";
						echo "Publisher : ".$cur_row[1]." <br/>";
						echo "Title : ".$cur_row[2]." <br/>";
						echo "Year : ".$cur_row[4]."<br/>";
						echo "<hr>";
					}			
				}
			}
			echo "Thank You <br/>";
		}
	}
	else {
		echo "Please fill all the details correctly. <br/>";
	}

?>