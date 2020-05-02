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