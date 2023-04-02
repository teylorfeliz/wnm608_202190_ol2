<?php

include "../lib/php/functions.php";


$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/users.json");

// print_p($notes);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reading Data</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>

	<div class="container">


		<div class="card soft">
			<h2>Users</h2>

			<?php

			for($i=0;$i<count($users);$i++){
				echo "<li>
					<strong>{$users[$i]->name}</strong>
					<span>{$users[$i]->type}</span>
				</li>";
			}
 
			?>
		</div>
	</div>

</body>
</html>