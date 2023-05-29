<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Account</title>
	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<?php include "../parts/navbar.php"; ?>
	<div class="container">
		<form>
					<div class="form-control display-flex flex-align-center">
						<div class="flex-none">
							<label class="form-label">First Name</label></div>
						<div class="flex-stretch">
							<input type="password" placeholder="First Name" class="form-input"></div>
						<div class="flex-none">
							<label class="form-label">Last Name</label></div>
						<div class="flex-stretch">
							<input type="search" placeholder="Last Name" class="form-input"></div>
					</div>
					<div class="form-control">
						<label class="form-label">Address Line1</label>
						<input type="text" placeholder="Address Line 1" class="form-input">
					</div>
					<div class="form-control">
						<label class="form-label">Address Line2</label>
						<input type="number" placeholder="Address Line 2" class="form-input">
					</div>
					<div class="form-control display-flex flex-align-center">
						<div class="flex-none">
							<label class="form-label">Email Address</label></div>
						<div class="flex-stretch">
							<input type="password" placeholder="Email Address" class="form-input"></div>
						<div class="flex-none">
							<label class="form-label">Phone Number</label></div>
						<div class="flex-stretch">
							<input type="search" placeholder="Phone Number" class="form-input"></div>
					</div>
				</form>
	</div>
</body>
</html>