<?php include "db.php" ?>

<?php

		function showAllData(){
				$query="SELECT * FROM users";
				global $connection;
				$result=mysqli_query($connection,$query);

				if(!$result){
					die("query failed" . mysqli_error());
				}

				while ($rows=mysqli_fetch_assoc($result)) {
										$id=$rows['id'];
					echo "<option value='$id'>$id</option>";
										
				}
		}

		function updateTable(){
			global $connection;
			$username=$_POST['username'];
			$password=$_POST['password'];
			$id=$_POST['id'];

			$query="UPDATE users SET ";
			$query .="username='$username', ";
			$query .="password='$password' ";
			$query .="WHERE id=$id ";

			$result=mysqli_query($connection,$query);

			if(!$result){
				die("database update failed" .mysqli_error($connection));
			}
		}