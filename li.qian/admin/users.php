<?php

include "../lib/php/functions.php";


$users = file_get_json("../data/users.json");







function showUserPage($user) {

$classes = implode(",", $user->classes);

	// heredoc
echo <<<HTML

<nav class="nav nav-clumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>

<div style="padding:2em;">
	<h2>$user->name</h2>

	<form>
		<label for="type">Type:</label><br>
		<input style="width: 300px; margin-bottom: 5px; margin-top: 3px;" type="text" name="type" placeholder="$user->type"><br>
		<label for="email">Email:</label><br>
		<input style="width: 300px; margin-bottom: 5px; margin-top: 3px;" type="text" name="email" placeholder="$user->email"><br>
		<label for="classes">Classes:</label><br>
		<input style="width: 300px; margin-bottom: 5px; margin-top: 3px;" type="text" name="classes" placeholder="$classes"><br>
		<input style="margin-top: 10px;" type="submit" value="Submit">
	</form>

</div>
HTML;
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Admin Page</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		

		<div class="card soft">

			<?php

			if(isset($_GET['id'])) {
				showUserPage($users[$_GET['id']]);
			}else {

			?>
			<h2>User List</h2>


			<nav class="nav">
				<ul>

			<?php

			for($i=0;$i<count($users
			);$i++){
				echo "<li>
					<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>	
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




<!-- 	
	<div>
	<strong>Type</strong>
	<span>$user->type</span>
	</div>
	<div>
	<strong>Email</strong>
	<span>$user->email</span>
	</div>
	<div>
	<strong>Classes</strong>
	<span>$classes</span>
	</div> 
-->