<?php
		include "db.php";
		include "functions.php";
		
		readData();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Read Page</title>
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