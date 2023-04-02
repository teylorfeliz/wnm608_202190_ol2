<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");


//file_put_contents json_encode explode $_POST
//CRUD, Create Read Update Delete


function showUserPage($user){

	$classes = implode("," ,$user->classes);

	//heredoc
	echo <<<HTML
	<nav class="nav nav-crumbs">
		<ul>
			<li><a href ="users.php">Back</a></li>
		</ul>
	</nav>

	<div>
		<form>
				<label class="form-label">Name</label>
				<input type="text" placeholder="Name" class="form-input" value="$user->name">
				<label class="form-label">Type</label>
				<input type="text" placeholder="Type" class="form-input" value="$user->type">
				<label class="form-label">Email</label>
				<input type="text" placeholder="Email" class="form-input" value="$user->email">
				<label class="form-label">Classes</label>
				<input type="text" placeholder="Classes" class="form-input" value="$classes">
		</form>
	</div>
	<button>Submit</button>
	HTML;
}









?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Admin Page</title>
	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../lib/css/gridsystem.css">	
	<link rel="stylesheet" href="../css/storetheme.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
				<nav class="flex-none nav nav-flex">
				<ul>
				<li><a href="users.php">User List</a></li>
				</ul>
				</nav>
		</div>
	</header>
	<div class="container">
		
		<div class="card soft">
			<?php 
			
			if(isset($_GET['id'])){
				showUserPage($users[$_GET['id']]);
			} else{


			 ?>

			<h2>User List</h2>


		<nav class="nav">
		<ul>
			<?php 

			for($i=0;$i<count($users);$i++){
				echo "<li>
					<a href='users.php?id=$i'>{$users[$i]->name}</a>
				</li>";
			}
			?>

		</ul>
		</nav>

		<?php } ?>

		</div>
	</div>


</body>
</html>