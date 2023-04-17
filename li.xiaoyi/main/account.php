<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Account</title>
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