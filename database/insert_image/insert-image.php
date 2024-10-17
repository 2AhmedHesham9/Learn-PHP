<?php
error_reporting(0);
/*
!install colorfyl comments extension
   & My Function
   ! Some Alert
   ^ Some stuff
   ? Questions
   * Highlights
   ~ Arrow Function
*/
// TODO colorful
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$db = mysqli_connect("localhost", "root", "", "images");

	//^ Get all the submitted data from the form
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder =  'images/' . $filename;
	echo $filename . ' <br> ' . $tempname;


	$sql = "INSERT INTO image (filename) VALUES ('$filename')";
	// $sql2 = "delete from image where 1";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname,  $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="content">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" required />
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
			</div>
		</form>
	</div>
	<div id="display-image">
		<?php
		$query = " select * from image ";
		$result = mysqli_query($db, $query);

		while ($data = mysqli_fetch_assoc($result)) {
		?>
			<img src="<?php echo $data['filename']; ?>">

		<?php
		}
		?>
	</div>
</body>

</html>