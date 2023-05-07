<html>

<div class="container">
		<div class="card soft" style="text-align: center;">
			<h2 style="padding-bottom:20px;">Category</h2>
			<script>
			const makeNav = (classes='') => {
				const links = [ 'All RVs', 'Drivable','Destination Delivery'];
				let ran = Math.floor(Math.random()*links.length);
				document.write(`
				<div>
					<nav class="${classes}">
						<ul>
						${links.reduce((r,o,i)=>{
							return r+`<li class="${ran==i?'active':''}"><a href="#">${o}</a></li>`;
						},``)}
						</ul>
					</nav>
				</div>
				`);
			}
		</script>
		<script>makeNav('nav nav-material')</script>
		</div>
	</div>



	<div class="container">
		<div class="grid gap xs-small md-medium"> 
				<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
					<img src="https://res.cloudinary.com/outdoorsy/image/upload/c_limit,w_2880,h_2160/t_odw,a_exif,q_auto,f_auto,h_720,w_720,c_fit/v1674580902/p/rentals/342373/images/nmgaofvra6n2sddtqfni.jpg">
				<figcaption>
						<div class="caption-body">
							<div>2021 Forest River Ibex</div>
							<div>$150</div>
						</div>
					</figcaption>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
					<img src="https://res.cloudinary.com/outdoorsy/image/upload/c_limit,w_2880,h_2160/t_odw,a_exif,q_auto,f_auto,h_720,w_720,c_fit/v1681618152/p/rentals/354867/images/slo6mq1wxktwhmhun7ca.jpg">
					<figcaption>
						<div class="caption-body">
							<div>2020 Forest River Coachmen Leprechaun</div>
							<div>$160</div>
						</div>
					</figcaption>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
					<img src="https://res.cloudinary.com/outdoorsy/image/upload/c_limit,w_2880,h_2160/t_odw,a_exif,q_auto,f_auto,h_720,w_720,c_fit/v1677451971/undefined/rentals/347074/images/a0qbwtudfcmce5iqq5sc.jpg">
					<figcaption>
						<div class="caption-body">
							<div>Almost New! 2022 Dutchmen 17 BH</div>
							<div>$150</div>
						</div>
					</figcaption>
				</div>
		</div>		
	</div>
<div class="container">
	<div class="grid gap xs-small md-medium"> 
	<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
					<img src="https://res.cloudinary.com/outdoorsy/image/upload/c_limit,w_2880,h_2160/t_odw,a_exif,q_auto,f_auto,h_720,w_720,c_fit/v1655676183/p/rentals/264418/images/fbod4kbotgofyl6uabl0.jpg">
					<figcaption>
						<div class="caption-body">
						<div>2021 Forest River Ibex</div>
						<div>$130</div>
					</div>
					</figcaption>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
					<img src="https://res.cloudinary.com/outdoorsy/image/upload/c_limit,w_2880,h_2160/t_odw,a_exif,q_auto,f_auto,h_720,w_720,c_fit/v1654994222/p/rentals/306670/images/uqgqoljrvi6ydqecbhtl.jpg">
					<figcaption>
						<div class="caption-body">
						<div>Desert Star: Thor Tranquility AWD</div>
						<div>$280</div>
							</div>
					</figcaption>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
					<img src="https://res.cloudinary.com/outdoorsy/image/upload/c_limit,w_2880,h_2160/t_odw,a_exif,q_auto,f_auto,h_720,w_720,c_fit/v1656211260/p/rentals/311218/images/iqsi8smsvvlunq8duolo.jpg">
					<figcaption>
						<div class="caption-body">
						<div>2016 Forest River Coachmen Freelander</div>
						<div>$200</div>
						</div>
					</figcaption>
				</div>
	</div>		
</div>
</html>