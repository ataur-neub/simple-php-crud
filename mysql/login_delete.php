<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php deleteRows();?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Page</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
		<div class="col-md-6">
			<h1 class="text-center">DELETE</h1>
			<form action="login_delete.php" method="POST">
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

				<input type="submit" name="submit" value="Delete" class="btn btn-primary">
				
			</form>

			
		</div>
		
	</div>

</body>
</html>