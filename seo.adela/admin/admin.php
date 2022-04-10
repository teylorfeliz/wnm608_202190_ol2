<?php

include "../lib/php/functions.php";


$users = file_get_json("../data/users.json");


function showUserPage ($user) {

	$classes = implode(", ",$user->classes);

echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
	<li><a href="admin/users.php" class="back">< Back</a></li>
	</ul>
</nav>


HTML;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>

<header>
	<div class="headername">
		<div class="logo">
			<a href="index.php">
				<img src="img/whitelogo.png" alt="logo" class="logoimg">
			</a>
		</div>

		<nav>
				<ul class="nav-division">	
					<li><a href="admin/users.php" class="admin">User Admin</a></li>
				</ul>
		</nav>

		<ul class="cta">
			</li><a class="login" href="admin/users.php"><button>User List</button></a></li>
		</ul>

	</div>
</header>


<div class="styleguidecontainer">
			<h3>User List</h3>
				<form>
					<input type="text" placeholder="Name" class="form-input"><br>
					<input type="text" placeholder="Type" class="form-input"><br>
					<input type="text" placeholder="Email" class="form-input"><br>
					<input type="number" placeholder="Classes" class="form-input">
				</form>

</div>


<div class="styleguidecontainer">

	<div class="card soft">

		<?php

		if(isset($_GET['id']))  {
			showUserPage($users[$_GET['id']]);
		} else {

		
		?>
		<h2>User List</h2>
		 
		 <nav class="nav">
		 	<ul class="user">
		 		
		 <?php

		 for($i=0;$i<count($users);$i++){
		 	echo "<li>
		 	<a href = 'admin/users.php?id=$i'>{$users[$i]->name}</a>
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