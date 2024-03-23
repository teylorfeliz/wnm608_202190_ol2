<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/header.php"; ?>


	<div class="container layout-body">


		<?php include "parts/navbar.php"; ?>

		<div class="layout-main">

			<div class="layout-main-cols">
				<div class="layout-main-col">
					<h4>CONTACT US</h4>
				</div>
				<div class="layout-main-col">
					<div class="container">
						<div>
							<h4>SEND US AN EMAIL</h4>
							<form>
								<label class="form-label">First Name</label>
								<input type="text" placeholder="" class="form-input">
								<label class="form-label">Last Name</label>
								<input type="text" placeholder="" class="form-input">
								<label class="form-label">Email</label>
								<input type="text" placeholder="" class="form-input">
								<label class="form-label">Message</label>
								<div class="form-control">
									<form>
										<textarea type="search" class="message-box" placeholder=""></textarea> 
									</form>
								</div> 
								<div class="form-control">
									<a href="#" class="form-button">SUBMIT</a>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>

		</div>



	</div>


	<?php include "parts/footer.php"; ?>


</body>
</html>