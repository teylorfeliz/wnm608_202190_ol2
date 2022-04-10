<?php

include "../lib/php/functions.php";


$users = file_get_json("../data/users.json");






function showUserPage ($user) {

	$classes = implode(", ",$user->classes);

//heredoc
echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
	<li><a href="admin/users.php" class="back">< Back</a></li>
	</ul>
</nav>
<div class="form-control">
	<h2>$user->name</h2>
	<form>
	<div>
		<strong>Type</strong>
		<input type="text" placeholder="$user->type" class="form-input">
	</div>
	<div>
		<strong>Email</strong>
		<input type="text" placeholder="$user->email" class="form-input">
	</div>
	<div>
		<strong>Classes</strong>
		<input type="number" placeholder="$classes" class="form-input">
	</div>
	</form>
</div>

<div class="form-control2">
	<input type="button" class="form-button2" value="Cancel">
	<input type="button" class="form-button2" value="Save">
</div>
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

	<div class="card soft">

		<?php

		if(isset($_GET['id']))  {
			showUserPage($users[$_GET['id']]);
		} else {

		
		?>
		<h2 class="ulist">User List</h2>
		 
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