<?php
	$name="selimsitecookie";
	$value=5100;
	$expiration=time() + (60*60*24*7);

	setcookie($name,$value,$expiration);

	echo "<br>";

?>
<?php

	if(isset($_COOKIE["selimsitecookie"])){

		$someoneName=$_COOKIE["selimsitecookie"];

		echo $someoneName;
	}

	else{
		$someoneName=" ";
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>cookie</title>
</head>
<body>

</body>
</html>