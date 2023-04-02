<?php 

include "../lib/php/functions.php";

$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/users.json");

//print_p($notes);

?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart</title>
	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../lib/css/gridsystem.css">	
	<link rel="stylesheet" href="../css/storetheme.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Jowelry</h1>
			</div>
			<div class="flex-stretch"></div>
				<nav class="flex-none nav">
				<ul class="container display-flex">
				<li><a href="index.php">Home</a></li>
				<li><a href="collections.php">Collections</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="cart.php">Cart</a></li>
			</ul>
				</nav>
		</div>
	</header>
	<div class="container">
		<div class="card soft">
			<h2>Notes</h2>
			<?php 

			for($i=0;$i<count($notes_object->notes);$i++){
				echo "<li>{$notes_object->notes[$i]}</li>";
			}


			 ?>

		</div>

		<div class="card soft">
			<h2>Users</h2>

			<?php 

			for($i=0;$i<count($users_array);$i++){
				echo "<li>
					<strong>{$users_array[$i]->name}</strong>
					<span>{$users_array[$i]->type}</span>
				</li>";
			}


			 ?>

		</div>
	</div>


</body>
</html>