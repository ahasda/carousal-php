<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="jquery.js"></script>
</head>

		<style>
				

		</style>

<body>

	<div class="container">
		<div class="row">
			<h1>Show are employee data</h1>

			<div class="col-sm-12">
				<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fname</th>
      <th scope="col">Email</th>
      <th scope="col">Salary</th>
    </tr>
  </thead>
<?php 

$con = mysqli_connect('localhost','root','','project') or die();

$query = mysqli_query($con , 'SELECT * FROM `employee`');

	if ($query) {
		// code...
		while ($row = mysqli_fetch_array($query)) {
			// code...

 ?>

  <tbody>
    <tr>
      <th><?php echo $row['id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['salary']; ?></td>
      <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary text-dark">Update Page</a></td>
      
    </tr>
  </tbody>

  <?php 

	}
	}
   ?>
</table>
			</div>
		</div>
	</div>

</body>
</html>