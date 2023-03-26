<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	echo "<div>Hello World</div>";

	echo "<div>GoodBye</div>";

	?>

	<hr>
	<div>This is my name</div>
	<div>

	<?php

	$firstname = YuHuan;
	$lastname = Shih;
	$fullname = "$firstname $lastname";

	echo $fullname;

	?>

	<hr>
	
	<?php

	$colors = array("red","green","blue");

	echo $colors[2];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
	";

	echo count($colors);

	?>

	<div style="color:<?= $colors[1] ?>">
		This text is green
	</div>

	<hr>
	<?php 

	$colorsAssociative = [
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f"
	];

	echo $colorsAssociative['green'];


	 ?>
	 <hr>
	 <?php
	
	 // Casting
	 $c =  "$a";
	 $d = $c*1;

	 $colorsObject = (object)$colorsAssociative;

	 // echo $colorsObject;


	 ?>

	 <?php 

	 print_r($colors);
	 echo "<hr>";
	 print_r($colorsAssociative);
	 echo "<hr>";
	 echo "<pre>",print_r($colorsObject),"</pre>";

	  ?>
	

</body>
</html>