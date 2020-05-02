<?php
	if(isset($_POST['submit'])){
		$username= $_POST['username'];
		$password= $_POST['password'];

		if (strlen($username<10)){
			echo "username must be less than 10";
		}

		elseif(strlen($username>4)){
			echo "yes it is working";
		}

		
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="form.php" method="POST">
		<input type="text" name="username" placeholder="enter your username">
		<input type="password" name="password" placeholder="enter your password">
		<br>
		<input type="submit" name="submit">
		
	</form>
	<div class="container">
		<div class="form-group">
			
		</div>
	</div>
</body>
</html>