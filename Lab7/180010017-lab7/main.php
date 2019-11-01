<?php
	require_once 'login.php';
	$conn = mysqli_connect($host_name,$user,$password,$database);

	if(!$conn)
		die('Connection Failed. <br/>'.mysqli_connect_error());

	$query1 = "SELECT * FROM {$table1}";
	$result1 = mysqli_query($conn,$query1);

	if(!$result1)
		die("Failed during query. <br/>".mysqli_error($conn));

	$rows1 = mysqli_num_rows($result1);

	echo "<h1>The details for {$table1} are : </h1><br/>";
	for($i=0;$i<$rows1;$i++){
		$cur_row = mysqli_fetch_row($result1);
		echo "Author : ".$cur_row[0]." <br/>";
		echo "Publication : ".$cur_row[1]." <br/>";
		echo "<hr>";
	}

echo <<< _END
	<form enctype="multipart/form-data" method="POST" action="addauthor.php">
		Author : 
		<input type="text" name="author">
		Publisher : 	
		<input type="text" name="publisher">
		<button type="submit">Add a record</button>

	</form>

	<br/><br/>	
_END;
echo <<< _END
	<form enctype="multipart/form-data" method="POST" action="deleteauthor.php">
		Author : 
		<input type="text" name="author">
		Publisher : 	
		<input type="text" name="publisher">
		<button type="submit">Delete a record</button>

	</form>
	<hr>
	<br/>
_END;

echo <<< _END
	Find Details Corresponding To The Publisher :
	<form enctype="multipart/form-data" method="POST" action="querypublisher.php">
		Publisher : 
		<input type="text" name="title">
	<!--
		Author : 
		<input type="text" name="author">
		year : 
		<input type="number" name="year" min="1000" max="9999">
	-->

		<button type="submit">Search Publisher.</button>

	</form>
	<hr>
	<br/><br/><br/><br/><br/>
	==================================================================================================================================================================
_END;







	$query2 = "SELECT * FROM {$table2}";
	$result2 = mysqli_query($conn,$query2);

	if(!$result2)
		die("Failed during query. <br/>".mysqli_error($conn));

	$rows1 = mysqli_num_rows($result2);

	echo "<h1>The details for {$table2} are : </h1><br/>";
	for($i=0;$i<$rows1;$i++){
		$cur_row = mysqli_fetch_row($result2);
		echo "Title : ".$cur_row[0]." <br/>";
		echo "Author : ".$cur_row[1]." <br/>";
		echo "Year : ".$cur_row[2]." <br/>";
		echo "<hr>";
	}
	// echo "<br/><br/>";
echo <<< _END
	<form enctype="multipart/form-data" method="POST" action="addtitles.php">
		Title : 
		<input type="text" name="title">
		Author : 
		<input type="text" name="author">
		year : 
		<input type="number" name="year" min="1000" max="9999">

		<button type="submit">Add a record</button>

	</form>

	<br/><br/>	
_END;
echo <<< _END
	<form enctype="multipart/form-data" method="POST" action="deletetitles.php">
		Title : 
		<input type="text" name="title">
		Author : 
		<input type="text" name="author">
		year : 
		<input type="number" name="year" min="1000" max="9999">

		<button type="submit">Delete a record</button>

	</form>
	<hr>
	<br/><br/>	
_END;
echo <<< _END
	<form enctype="multipart/form-data" method="POST" action="updateyear.php">
		Title substring : 
		<input type="text" name="title">
	<!--
		Author : 
		<input type="text" name="author">
	-->
		year : 
		<input type="number" name="year" min="1000" max="9999">

		<button type="submit">Update year.</button>

	</form>
	<hr>
	<br/><br/>	
_END;


echo <<< _END
	Find Details Corresponding To The Book title :
	<form enctype="multipart/form-data" method="POST" action="querytitle.php">
		Title : 
		<input type="text" name="title">
	<!--
		Author : 
		<input type="text" name="author">
		year : 
		<input type="number" name="year" min="1000" max="9999">
	-->

		<button type="submit">Search Title.</button>

	</form>
	<hr>
	<br/><br/><br/><br/><br/>
_END;



?>