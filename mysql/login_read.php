<?php
		include "db.php";
		$query="SELECT * FROM users";

		$result=mysqli_query($connection,$query);

		if(!$result){
			die("query failed" . mysqli_error());
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
			<?php
				while($rows=mysqli_fetch_assoc($result)){

			?>

				<pre>
					<?php
					print_r($rows);
					?>
				</pre>
				<?php
				}
				?>

			
		</div>
		
	</div>

</body>
</html>