<?php

include "../lib/php/functions.php";



$users = file_get_json("../data/users.json");






function showUserPage ($user) {

	$classes = implode(", ",$user->classes);

//heredoc
echo <<<HTML

<div class="container">
				<div class="display-flex flex-align-center">
					<div class="flex-stretch">
					<h2>User Editor Form</h2>
					<div class="container" id="forms">
						<div class="card soft">
							<form>
								<div class="form-control">
									<label class="form-label">User</label>
									<input type="text" placeholder="$user->name" class="form-input">
								</div>

								<div class="form-control">
									<label class="form-label">Type</label>
									<input type="text" placeholder="$user->type" class="form-input">

								</div>

								<div class="form-control">
									<label class="form-label">Classes</label>
									<input type="text" placeholder="$classes" class="form-input">
								</div>

								<div class="form-control">
									<label class="form-label">Email</label>
									<input type="email" placeholder="$user->email" class="form-input">
								</div>



								<div class="form-control">
									<button type="button" value="submit" class="form-button">Submit</button>
								</div>

								<div class="form-control">
									<button type="button" value="cancel" class="form-button">Cancel</button>
								</div>

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
	
	<?php include "../parts/meta.php"; ?>


	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	<?php include '../parts/navbar.php';?>


<nav class="nav nav-crumbs">
	<ul>
	<li><a href="admin/users.php" class="back"> ⏎ BACK </a></li>
	</ul>
</nav>


<div class="container">

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














