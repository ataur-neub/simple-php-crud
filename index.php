<?php
	$id=15;
	print_r($_GET) . "<br>";
	echo "<br>";

	$button="click here";

?>

<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<a href="index.php?id=<?php echo $id; ?>"><?php echo $button ?></a>
</body>
</html>

<?php
echo "<br>";
	$password="myencryptedpassword";
	$salt="itmustbeatleast22characters";
	$hashFormat=$password . $salt;
	$password=crypt($password,$hashFormat);

	echo $password ."<br>";

?>



<?php

	$numberList=array(22,56,20,'Nuhash','Arafat','<h2>this html tag</h2>');
	//echo $numberList[4];
	print_r($numberList);
	/* this is associative array */
	echo "<br>";
	$associative_Array=array("First_Name"=>'Ataur',"Middle_Name"=>'Rahman',"Last_Name"=>'Selim');
	print_r($associative_Array);

	echo "<br>";

	echo $associative_Array['Last_Name'];
?>

