<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php updateTable(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
		<div class="col-md-6">
			<h1 class="text-center">Update</h1>
			<form action="login_update.php" method="POST">
				<div class="group">
					<label for="username">UserName</label>
					<input type="text" name="username"  class="form-control">
				</div>

				<div class="group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>

				<div class="form-group">
					<select name="id" id="">
						<?php
							showAllData();
							

						?>
						
					</select>
				</div>

				<input type="submit" name="submit" value="Update" class="btn btn-primary">
				
			</form>

			
		</div>
		
	</div>

</body>
</html>