<?php
	$name =  $_GET['name'];
	$age = $_GET['age'];
	$file = fopen("details.txt", "w+") or die("Unable to open file!");

	fwrite($file, $name);
	fwrite($file, $age);

	echo "Data Writen to the  File!!";
	fclose($file);
?>
