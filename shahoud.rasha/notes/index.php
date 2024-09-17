<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
	echo "Hello World";

//variables

	$a = 5;

	echo $a;


//String Interprolation

	echo "<div> I have $a things</div>";


	echo '<div> I have $a things</div>';


	//number
	//integer
	$b =15;
	//float
	$b=0.576;

	$b=10;

	//strings
	$name = "Yerguy2";

	//boolean

	$isOn = true;


	//Math
	//PEMDAS

	echo (5 - 4) * 2;

	//Concatenation

	echo "<div> b + a" . " = c</div>";

	echo "<div> $b + $a =" .($a+$b)."</div>";





	?>



	<hr>
	<div>
		Yhis is my name
	</div>
	<div>
		<?php 

		$firstname = "Rasha";
		$lastname = "Shahoud";
		$fullname = "$firstname $lastname";

		echo $fullname;


		 ?>

		 <hr>

		 <?php 
		 //superglobal
		 //?name=Joey
		 echo "<a href='?name=Joey'>visit</a>";
		 echo "<div>My name is {$_GET['name']} </div>";

		 //?name=joey&type=h1
		 echo "<a href='?name=joey&type=textarea'>visit</a>";
		 echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";


		  ?>


		  <hr>

		  <?php 


		 //Arrays
		  $colors = array("red","green","blue");

		  echo $colors[0];


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

		   //associative Array

		   $colorsAssociative =[
		   	"red" => "#f00",
		   	"green" => "#0f0",
		   	"blue" => "#00f"

		   ];

		   echo $colorsAssociative['green'];


		    ?>

		    <hr>
		    <?php 

		    //casting 

		    $c = "$a";
		    $d = $c*2;

		    $colorsObject = (object)$colorsAssociative;

		    //echo $colorsObject;

		    echo "<hr>";

		    // Array index notation

		    echo $colors[0]."<br>";
		    echo $colorsAssociative['red']."<br>";
		    echo $colorsAssociative[$colors[0]]."<br>";



		    // object property notation


		    echo $colorsObject->red."<br>";
		    echo $colorsObject->{$colors[0]}."<br>";

		     ?>



		     <hr>

		     <?php 


		     print_r($colors);
		     echo "<hr>";
		     print_r($colorsAssociative);
		     echo"<hr>";
		     print_r($colorsObject);
		     echo "<pre>",print_r($colorsObject),"</pre>";



		     // function

		     function print_p($v) {
		     echo "<pre>",print_r($v),"</pre>";
		     }

		     print_p($_GET);

		      ?>











	</div>
</body>
</html>