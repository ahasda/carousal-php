<?php 

$con = mysqli_connect('localhost','root','','project') or die();

$name = $_POST['name'];
$email = $_POST['email'];
$salary = $_POST['salary'];

$query = mysqli_query($con , "INSERT INTO `employee`(`name`, `email`, `salary`) VALUES('$name','$email','$salary')");

if ($query) {
	// code...
	echo "successgully submit ";
}else{
	echo "something went wrong😶";
}



 ?>