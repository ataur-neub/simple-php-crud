<?php
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

		$connection=mysqli_connect('localhost','root','','loginapp');
		if(!$connection){
			die("error");
			
		}

		$query="INSERT INTO users(username,password)";
		$query .="VALUES('$username','$password')";
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
		<div class="col-md-6">
			<form action="login.php" method="POST">
				<div class="form-group">
					<label for="username">UserName</label>
					<input type="text" name="username" class="form-control">

				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</form>
		</div>
		
	</div>

</body>
</html>