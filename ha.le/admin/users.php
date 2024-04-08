<?php

include "../lib/php/functions.php";


// $filename = "notes.json"; 
// $file = file_get_contents($filename);
// $notes_object = json_decode($file);

// $filename = "notes.json"; 
// $file = file_get_contents($filename);
// $notes_object = json_decode($file);

$users = file_get_json("../data/users.json");






function showUserPage($user) {

$classes = implode(", ", $user->classes);

// heredoc
echo <<<HTML
<div class="layout-main-col">
	<nav class="nav nav-crumbs">
		<ul>
			<li><a href="admin/users.php">Back</a></li>
		</ul>
	</nav>
	<div>
		<h4 class="space-before-paragraph space-after-paragraph">$user->name</h4>
		<div>
			<strong>Phone:</strong>
			<span>$user->phone</span>
		</div>
		<div>
			<strong class="space-before-paragraph">Email:</strong>
			<span>$user->email</span>
		</div>
		<div>
			<strong class="space-before-paragraph">Address:</strong>
			<span>$user->address</span>
		</div>
	</div>
</div>
<div class="layout-main-col">
	<div class="container">
		<div>
			<h4 class="space-after-paragraph">User Form</h4>
			<form action="" method="post">
				<label class="form-label" for="user-name">Name</label>
				<input type="text" placeholder="Enter your name" class="form-input" name="user-name" id="user-name" value="$user->name">
				<label class="form-label" for="user-phone">Phone</label>
				<input type="text" placeholder="Enter your phone number" class="form-input" name="user-phone" id="user-phone" value="$user->phone">
				<label class="form-label" for="user-email">Email</label>
				<input type="text" placeholder="Enter your email address" class="form-input" name="user-email" id="user-email" value="$user->email">
				<label class="form-label" for="user-address">Address</label>
				<input type="text" placeholder="Enter your shipping address" class="form-input" name="user-address" id="user-address" value="$user->address">

				<div class="form-control">
					<input type="submit" class="form-button" value="Save">
				</div>
			</form>
		</div>
	</div>

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
		<div class="container layout-header">
			<div class="layout-aside">
			</div>
				
			<div class="layout-main">
				<div class="layout-main-cols">
					<div class="display-flex flex-align-center">
						<div>
							<a href="admin/users.php"><h1 style="font-family: var(--font-sans);">Users Admin</h1></a>
						</div>
					</div>
					<div class="layout-main-col display-flex flex-align-center">
						<nav class="nav nav-crumbs">
							<ul>
								<li><a href="admin/users.php">USER LIST</a></li>
							</ul>
						</nav> 
					</div>
				</div>
			</div>
		</div>
	</header>


	<div class="container layout-body">

		<div class="layout-aside"></div>

		<div class="layout-main">
			<div class="layout-main-cols">
				<?php 

				if(isset($_GET['id'])) {
						showUserPage($users[$_GET['id']]);
				} else {

				?>

				<div class="layout-main-col">
					<h4 class="space-after-paragraph">User List</h4>

					<nav class="nav">
						<ul>
							
							<?php

							for($i=0;$i<count($users);$i++){
								echo "<li>
									<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
								</li>";
							}

							?>
						</ul>
					</nav>

					<?php  } ?>
				</div>
			</div>
		</div>
	</div>


	<?php include "../parts/footer.php"; ?>




</body>
</html>