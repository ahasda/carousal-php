<?php 

$con = mysqli_connect('localhost','root','','proj') or die();

if (isset($_REQUEST['submit'])) {
	// code...
	$name = $_POST['name'];
	$email = $_POST['email'];
	$img = $_FILES['file'];


	$img_name = $_FILES['file']['name'];
	$img_typ = $_FILES['file']['type'];
	$img_temp = $_FILES['file']['tmp_name'];


	$location = "upload/";
	$img = $location.$img_name;

	$target = "upload/";
	$finalImage = $target.$img_name;

	// echo $name ."  ". $email ."  ". $finalImage;

	move_uploaded_file($img_temp, $finalImage);
		// code...


	$select = mysqli_query($con , "SELECT * FROM `image` WHERE `email` = '$email'");
	// echo "<pre>";
	// print_r(mysqli_num_rows($select));
	// die();
	if (mysqli_num_rows($select)!= 0) {
			// code...
		while ($id = mysqli_fetch_array($select)) {
			// code...
			$id = $id['id'];
			$num = mysqli_query($con , "UPDATE `image` SET `img`='$finalImage',`name`='$name',`email`='$email'WHERE `id` = '$id'");
			if ($num) {
				// code...
				echo "<script>alert('Susscessfully Updated');window.location.href='navbar.php'</script>";

			}else{
				echo "<script>alert('Error updating');window.location.href='navbar.php'</script>";

			}
	
		}

	}
	else{

		$query = mysqli_query($con , "INSERT INTO `image`(`img`, `name`, `email`) VALUES ('$finalImage','$name','$email')");

		if ($query) {
			// code...
			echo "<script>alert('Susscessfully Submitted');window.location.href='navbar.php'</script>";

		}else{
			echo "<script>alert('Error');window.location.href='navbar.php'</script>";

		}
	}


}




 ?>