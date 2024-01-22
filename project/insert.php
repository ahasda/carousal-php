<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="jquery.js"></script>

<body>
		<center>
			
			<h1>Insert Employee</h1>

			<form method="" action="post" id="family">
				<label>Name</label>
				<input type="text" name="name" id="name">
				<br><br>
				<label>email</label>
				<input type="email" name="email" id="email">
				<br><br>
				<label>salary</label>
				<input type="number" name="salary" id="salary">
				<br><br>

				<input type="submit" name="submit" id="submit">
			</form>

		</center>


		<script>
			
			$(document).ready(function(){
				$(document).on('submit','#family',function(){
					event.preventDefault();

					let data = $(this).serialize();

					$.ajax({

						url: 'data.php',
						data : data,
						method: "post",

						success: function(data){
							console.log(data);
						}

					})
				})
			})

		</script>


</body>
</html>