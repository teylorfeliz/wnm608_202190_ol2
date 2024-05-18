<?php

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json($filename);


$empty_user = (object)[
	"name"=>"",
	"phone"=>"",
	"email"=>"",
	"address"=>"",
	"classes"=>[]
];


// file_put_contents json_encode explode $_post
// CRUD, Create Read Update Delete


//print_p([$_GET,$_POST]);

if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case "update":
			$users[$_GET['id']]->name = $_POST['user-name'];
			$users[$_GET['id']]->phone = $_POST['user-phone'];
			$users[$_GET['id']]->email = $_POST['user-email'];
			$users[$_GET['id']]->address = $_POST['user-address'];
			$users[$_GET['id']]->classes = explode(", ", $_POST['user-classes']);

			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$empty_user->name = $_POST['user-name'];
			$empty_user->phone = $_POST['user-phone'];
			$empty_user->email = $_POST['user-email'];
			$empty_user->address = $_POST['user-address'];
			$empty_user->classes = explode(", ", $_POST['user-classes']);

			$id = count($users);

			$users[] = $empty_user;

			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			array_splice($users,$_GET['id'],1);
			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
}


if(isset($_POST['user-name'])) {
	$users[$_GET['id']]->name = $_POST['user-name'];
	$users[$_GET['id']]->phone = $_POST['user-phone'];
	$users[$_GET['id']]->email = $_POST['user-email'];
	$users[$_GET['id']]->address = $_POST['user-address'];
	$users[$_GET['id']]->classes = explode(", ", $_POST['user-classes']);

	file_put_contents($filename,json_encode($users));
}







function showUserPage($user) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$classes = implode(", ", $user->classes);

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

// heredoc
$displayandform =<<<HTML
<div class="layout-main-col">
	<nav class='nav nav-crumbs'>
		<div><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
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
		<div>
			<strong class="space-before-paragraph">Classes:</strong>
			<span>$classes</span>
		</div>
	</div>
	<div class="doublespace"></div>
	<div class="form-control">
		<input type="submit" class="form-button" style="background-color: var(--color-neutral-light); color: var(--color-neutral-medium);" value="DELETE">
	</div>
</div>
<div class="layout-main-col">
	<div>
		<h4 class="space-after-paragraph">$addoredit  User</h4>
		<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
			<label class="form-label" for="user-name">Name</label>
			<input type="text" placeholder="Enter your name" class="form-input" name="user-name" id="user-name" value="$user->name">
			<label class="form-label" for="user-phone">Phone</label>
			<input type="text" placeholder="Enter your phone number" class="form-input" name="user-phone" id="user-phone" value="$user->phone">
			<label class="form-label" for="user-email">Email</label>
			<input type="text" placeholder="Enter your email address" class="form-input" name="user-email" id="user-email" value="$user->email">
			<label class="form-label" for="user-address">Address</label>
			<input type="text" placeholder="Enter your shipping address" class="form-input" name="user-address" id="user-address" value="$user->address">
			<label class="form-label" for="user-classes">Classes</label>
			<input type="text" placeholder="Enter your classes" class="form-input" name="user-classes" id="user-classes" value="$classes">

			<div class="form-control">
				<input type="submit" class="form-button" value="Save">
			</div>
		</form>
	</div>
</div>
HTML; 


$form = <<<HTML
<div class="layout-main-col">
	<nav class='nav nav-crumbs'>
		<div class="display-flex"><a href="{$_SERVER['PHP_SELF']}" style="line-height: 1em">Back</a></div>
	</nav>
</div>
<div class="layout-main-col">
	<div class="container">
		<div>
			<h4 class="space-after-paragraph">$addoredit  User</h4>
			<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
				<label class="form-label" for="user-name">Name</label>
				<input type="text" placeholder="Enter your name" class="form-input" name="user-name" id="user-name" value="$user->name">
				<label class="form-label" for="user-phone">Phone</label>
				<input type="text" placeholder="Enter your phone number" class="form-input" name="user-phone" id="user-phone" value="$user->phone">
				<label class="form-label" for="user-email">Email</label>
				<input type="text" placeholder="Enter your email address" class="form-input" name="user-email" id="user-email" value="$user->email">
				<label class="form-label" for="user-address">Address</label>
				<input type="text" placeholder="Enter your shipping address" class="form-input" name="user-address" id="user-address" value="$user->address">
				<label class="form-label" for="user-classes">Classes</label>
				<input type="text" placeholder="Enter your classes" class="form-input" name="user-classes" id="user-classes" value="$classes">

				<div class="form-control">
					<input type="submit" class="form-button" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
HTML;


$output = $id == "new" ? $form : $displayandform;

echo <<<HTML
$output
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
		<div class="layout-header">
			<div class="layout-aside sitename">
				<a href="index.php"><h1 style="font-size: 1.4em; color: #d5d5d5;">CHICHAUS</h1></a>
			</div>
				
			<div class="layout-main">
				<div class="layout-main-cols">
					<div class="layout-main-col" style="flex-direction: row;">
						<div>
							<a href="admin/users.php"><h3 style="font-family: var(--font-sans); line-height: 1em">USER ADMIN</h3></a>
						</div> 
						
					</div>
					<div class="layout-main-col display-flex flex-align-center">
						<nav class="nav nav-flex">
							<ul>
								<li><a href="<?= $_SERVER['PHP_SELF'] ?> ">USER LIST</a></li>
								<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">ADD NEW USER</a></li>
							</ul>
						</nav> 
					</div>
				</div>
			</div>
		</div>
	</header>


	<div class="layout-body">
		<div class="layout-aside"></div>
		<div class="layout-main">
			<div class="layout-main-cols">
				<?php 

				if(isset($_GET['id'])) {
					showUserPage($_GET['id'] == "new" ? $empty_user : $users[$_GET['id']]);
				} else {

				?>

				<div class="layout-main-col">
					<h4 class="space-after-paragraph">User List</h4>

					<nav class="nav">
						<ul>
							
							<?php

							for($i=0;$i<count($users);$i++){
								echo "<li>
									<a href='admin/users.php?id=$i' style='font-size: 0.9em; padding: 0.5em 0; border-top: 1px solid var(--color-neutral-medium);'>{$users[$i]->name}</a>
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


	<footer class="layout-footer" style="background-color: var(--color-main-dark);">
		<div class="footer-credit display-flex">
			<div class="flex-none">
				<h6>© 2024 ChicHaus</h6>
			</div>
			
			<div class="flex-stretch"></div>
			<div class="flex-none">
				<h6>All rights reserved</h6>
			</div>
		</div>
			
	</footer>




</body>
</html>