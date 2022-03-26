<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Log In Page </title>

	<?php include "parts/meta.php"; ?>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

<body>



<div class="loginbody">
	<section class="login-form">
		<h1>LOG IN</h1>
		<form action="">
			<div class="int-area">
				<label>ID:<input type="text" id="user_id" size="10"></label>
			</div>

			<div class="int-area">
				<label>Password: <input type="password" id="user_pw" size="10"></label>
			</div>

			<div class="btn-area">
				<button type="submit">LOGIN</button>
			</div>

			<div class="caption">
				<a href=""> Forgot Password? </a>
			</div>

		</form>
	</section>
</div>
</body>

</html>