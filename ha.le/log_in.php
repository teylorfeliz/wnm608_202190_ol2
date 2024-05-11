<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log in</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/header.php"; ?>


	<div class="layout-body">


		<?php include "parts/navbar.php"; ?>

		<div class="layout-main">

			<div class="layout-main-cols">
				<div class="layout-main-col">
					<div class="container">
						<h4 class="space-after-paragraph">Log In Into Your Account</h4>
						<div class="card hard" style="width: 70%">
							<form>
								<div class="form-control display-flex flex-align-center">
									<div class="flex-stretch">
										<label class="form-label">EMAIL ADDRESS</label>
										<input type="text" placeholder="" class="form-input">
									</div>
								</div>
								<div class="form-control display-flex flex-align-center">
									<div class="flex-stretch">
										<label class="form-label">PASSWORD</label>
										<input type="password" placeholder="" class="form-input">
									</div>
								</div>
							
								<div class="doublespace"></div>
								<div class="form-control">
									<a href="log_in.php" class="form-button">LOG IN</a>
								</div>
							</form>
						</div>
					</div>
					
				</div>

				<div class="layout-main-col"></div>

			</div>

		</div>



	</div>

	<?php include "parts/footer.php"; ?>


</body>
</html>