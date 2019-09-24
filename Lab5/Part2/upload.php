<!DOCTYPE html>
<html>
<head>
	<title>Upload </title>
	<style type="text/css">
		.btn{
			padding: 30px;
		}
		body{
			margin: 0;
			padding: 0;
		}
		.container{
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
	<div class="container">
		<?php 
			
			if(!isset($_POST["delete"])){
				$accept = 1;
				$pre_installed_images = 5;

				$target_folder = "images/";

				$filename = $target_folder.$_FILES["image"]["name"];
		
				if($_FILES["image"]["type"] != "image/jpeg"){
					echo "Wrong File Type ! <br/><br/>";
					$accept = 0;
				}
				elseif($_FILES["image"]["size"] > 200000){
					echo "File Too Large ( > 200KB ). <br/><br/>";
					$accept = 0;
				}
				elseif(count(scandir("./images"))-2 == 10){
					echo "Max 10 images can be there .<br/><br/>";
					$accept = 0;
				}
				elseif(file_exists($filename)){
					echo "The given file already exists. <br/><br/>";
					echo $filename."<br/>";
					$accept = 0;
				}
		
				if($accept){
					if(!move_uploaded_file($_FILES["image"]["tmp_name"], $filename)){	
						echo "some error occured while uploading .<br/><br/>";
						echo $filename;
					}
					else 
						echo "successfully saved .<br/><br/>";
				}
			}
			else{
				$file_to_check = "images/" . $_POST["delete"];
				if(!file_exists($file_to_check))
					echo "Given file doesn't exists. <br/><br/>";
				elseif(unlink($file_to_check))
					echo "File deleted successfully. <br/><br/>";
				else 
					echo "Couldn't delete the file. <br/><br/>";
			}
		?>

		<form action="album.php" method="post" class="btn">
			<button type="submit">Back</button>
		</form>

	</div>

</body>
</html>