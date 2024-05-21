<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/header.php"; ?>


	<div class="layout-body">


		<?php include "parts/navbar.php"; ?>

		<div class="layout-main">

			<div class="layout-main-cols">
				<div class="layout-main-col">
					<h4 class="space-after-paragraph">CUSTOMER SERVICE</h4>
					<p>Monday to Friday, 9 a.m. to 8 p.m. (EST time)<br>Saturdays and Sundays from 9 a.m. to 5 p.m. (EST time)</p>

					<p>Feel free to contact us. We will get back to you as soon as possible!</p>
				</div>
				<div class="layout-main-col">
					<div class="container">
						<div>
							<h4 class="space-after-paragraph">Give us a call</h4>
								<p>Customer Service: (+1) 408 088 099</p>

							<div class="space"></div>
							<h4 class="space-after-paragraph">Send us an email</h4>
							<form>
								<div class="form-control display-flex flex-align-center">
									<div class="flex-stretch">
										<label class="form-label">FULL NAME</label>
										<input type="text" placeholder="" class="form-input">
									</div>
								</div>
								<div class="form-control display-flex flex-align-center">
									<div class="flex-stretch">
										<label class="form-label">EMAIL</label>
										<input type="text" placeholder="" class="form-input">
									</div>
								</div>
								<div class="form-control display-flex flex-align-center">
									<div class="flex-stretch">
										<label class="form-label">MESSAGE</label>
										<form>
											<textarea type="search" class="form-text-box" placeholder=""></textarea> 
										</form>
									</div>
								</div>
								<div class="space"></div>
								<div class="form-control">
									<a href="contact.php" class="form-button">SUBMIT</a>
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