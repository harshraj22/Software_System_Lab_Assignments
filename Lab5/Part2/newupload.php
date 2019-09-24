<!DOCTYPE html>
<html>
<head>
	<title>Upload Pics</title>
	<style type="text/css">
		body{
			  position: absolute;
			  width: 300px;
			  height: 200px;
			  z-index: 15;
			  top: 50%;
			  left: 50%;
			  margin: -100px 0 0 -150px;
		}
	</style>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="image">
		<button type="submit">Upload</button>
	</form>

	<br>

	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="text" name="delete">
		<button type="submit">Delete</button>
	</form>

</body>
</html>