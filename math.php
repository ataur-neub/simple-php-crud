<?php
	echo pow(2,3) . "<br>";

	echo strlen("hasbi rabbi jallala mafi kalbi gairullah.") . "<br>";
	echo rand() . "<br>";

	echo rand(1,10);

	echo "<br>";
?>

<?php

	$x=11;
	$y=22;

	function add(){
		$z=$GLOBALS['x'] + $GLOBALS['y'];

		echo $z;
	}

	add();

	echo "<br>";

	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];

?>