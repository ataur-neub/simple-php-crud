<?php include "db.php" ?>

<?php

		function createRow(){
			if(isset($_POST['submit'])){
				global $connection;
				$username=$_POST['username'];
				$password=$_POST['password'];

				$username=mysqli_real_escape_string($connection,$username);
				$password=mysqli_real_escape_string($connection,$password);

				$hashFormat="$2y$10$";
				$salt="itmustbeatleast22characters";
				$hashF_and_salt=$hashFormat . $salt;
				$password=crypt($password,$hashF_and_salt);

				$query="INSERT INTO users(username,password) ";
				$query .="VALUES('$username','$password')";

				$result=mysqli_query($connection,$query);

				if(!$result){
					die("query failed" . mysqli_error());
				}
				else{
					echo "<h3 style='color:green;'>record created</h3>";
				}
		    }
		}

		function readData(){
			global $connection,$result;
			$query="SELECT * FROM users";

			$result=mysqli_query($connection,$query);

			if(!$result){
				die("query failed" . mysqli_error());
			}
		}

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
			if(isset($_POST['submit'])){
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
				else{
					echo "<h3 style='color:green'>Table has been updated</h3>";
				}
			}
		}


		function deleteRows(){
			if(isset($_POST['submit'])){
				global $connection;
				$username=$_POST['username'];
				$password=$_POST['password'];
				$id=$_POST['id'];

				$query="DELETE FROM users ";
				$query .="WHERE id=$id ";

				$result=mysqli_query($connection,$query);
				if(!$result){
					die("database query failed" .mysqli_error($connection));
				}
				else{
					echo "<h3 style='color:green'>Table has been delete</h3>";
				}
		    }
		}