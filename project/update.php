<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 

$con = mysqli_connect('localhost','root','','project') or die();

if (isset($_GET['id'])) {
	// code...
}

$data = mysqli_query($con , );
	


	foreach ($data->fetch_array() as $key => $value) {
		// code...

		$meta[$key] = $value;

	}


	 ?>

	<center>
			
			<h1>update Employee</h1>

			   <div class="container">
        <div class="card position-absolute p-3 bg-white" style="top: 80px; right: 40px;">
            <h4>Form Details</h4>
            <form class="form" method="post" action="submit.php" enctype="multipart/form-data">
                <input type="text" class="form-control" name="name" placeholder="Name">
                <br>
                <input type="email" class="form-control" name="email" placeholder="Email">
                <br>
                <input type="file" class="form-control" name="file">

                <br><br>

                <input type="submit" name="submit" class="btn btn-warning" value="submit">
            </form>

        </div>
    </div>

		</center>

</body>
</html>