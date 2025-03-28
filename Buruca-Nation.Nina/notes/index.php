ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
	<?php 


	phpinfo(); 


	echo "<div> Hello World </div>";
	echo "<div> Goodbye World </div>";

	//Variables
	$a = 5;

	echo $a;


	//String Interpolation
	echo "<div> I have $a things</div>";
	echo '<div> I have $a things</div>';




	//Number
	//Integer
	$b = 15;
	//Float
	$b = 0.576;

	$b = 10;



	//String
	$name = "Yerguy2";

	//BooLean
	$isOn = true;





	//Math
	//PEMDAS
	echo (5 - 4) * 2;

	//Concentration
	echo "<div>b + a" . " = c</div>";
	echo "<div>$b + $a = ".$a+$b."</div>";

	?>

	<hr>
	<div>This is my name</div>
	<div>

	<?php

	$firstname = "Nina"
	$lastname = "Buruca-Nation"
	$fullname = "$firstname $lastname";

	echo $fullname;

	?>

</body>
</html>