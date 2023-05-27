<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");

$save = "Save Changes";




function showUserPage($user) {


$save = $GLOBALS['save'];
if($user->name==""){
    $user_name = '<div class="form-control">
        <label class="form-label">Name</label>
        <input required=ture type="text" value="" name="name" class="form-inputs">
        </div>';
} else {
    $user_name = '<h2>'.$user->name.'</h2>'.'<input required=ture style="display:none" name="name" type="text" value="'.$user->name.'">';
}

$classes = implode(", ", $user->classes);
    // print_p($user);
    // herrdoc

echo <<<HTML
<nav class="nav nav-crumbs">
    <ul>
        <li><a href="admin/users.php">Back</a></li>
    </ul>
</nav>
<div>

    


    <form action="" method="post" name="userData">
    $user_name
        <div class="form-control">
            <label class="form-label">Type</label>
            <input type="text" required=ture value="$user->type" name="type" class="form-inputs">
        </div>
            <div class="form-control">
            <label class="form-label">Email</label>
            <input type="email" required=ture value="$user->email" name="email" class="form-inputs">
        </div>
        <div class="form-control">
            <label class="form-label">Class</label>
            <input type="text" required=ture value="$classes" name="classes" class="form-inputs">
        </div>

        <div class="form-control">
            <input style="background-color: #053426" type="submit" name="save" class="form-button card dark" value="$save">
        </div>

        <div class="form-control">
            <input style="background-color: transparent; color: #053426 ;" type="submit" name="delete" class="form-button card hard" value="Delete">
        </div>

        <!--<input type="submit" value="submit" name="submit">-->
    </form>


</div>
HTML;
}


 ?>

<?php 
   

    if(isset($_POST['save'])){

        if(isset($users[$_GET['id']])){
            $users[$_GET['id']]->name = $_POST['name'];
            $users[$_GET['id']]->type = $_POST['type'];
            $users[$_GET['id']]->email = $_POST['email'];
            $users[$_GET['id']]->classes = preg_split("/[\s,]+/",$_POST['classes']);
        } else {
            $users[$_GET['id']] = (object)[
                "name"=>$_POST['name'],
                "type"=>$_POST['type'],
                "email"=>$_POST['email'],
                "classes"=>preg_split("/[\s,]+/",$_POST['classes']),
            ];
            // $users[$_GET['id']]['name'] = $_POST['name'];
        }

        array_values($users);
        file_put_json("../data/users.json", $users);
        $save = "sucessfully saved!";
        

    };

    if(isset($_POST['delete'])){

        unset($users[$_GET['id']]);
        // header("location: http://joyshih.com/wnm608/Shih.Yuhuan/admin/users.php");
        file_put_json("../data/users.json", array_values($users));

    };

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- <base href="http://joyshih.com/wnm608/Shih.Yuhuan/"> -->

	<link rel="stylesheet" type="text/css" href="../lib/css/styleguide.css?=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="../lib/css/gridsystem.css?=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="../css/storetheme.css?=<?=time()?>">
	<link href = 'https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&display=swap'  rel = 'stylesheet'  type = 'text/css' >  
	<link rel="stylesheet" href="../css/drop_down_menu.css?=<?=time()?>">
	<script src="https://kit.fontawesome.com/c45d543d64.js?=<?=time()?>" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <base href="../">

</head>
<body>

<header class="navbar text-main-medium">
	<div class="container">
            <div class="flex-none">
                <h1 style="font-size:26px">User Admin</h1>
            </div>
                <div class="flex-stretch"></div>
                <nav class="nav nav-flex flex-none">
                    <ul>
                        <li>
                            <a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
                        <li>
                        <a href='<?= $_SERVER['PHP_SELF']."?id=".count($users) ?>'>Add User</a></li>
                    </ul>
                </nav>
        </div>
        
    </header>

    <div class="container">
        <div class="card soft">

            <?php
                if(isset($_GET['id'])) {
                    if(isset($users[$_GET['id']])){
                        showUserPage($users[$_GET['id']]);
                    } else {
                        $new_user = (object)[
                            "name"=>"",
                            "type"=>"",
                            "email"=>"",
                            "classes"=>[]
                        ];

                        showUserPage($new_user);
                        // print_p($new_user->name);
                        // echo $new_user->name;
                    }
                    
                } else {

            ?>
            <nav class="nav">
                <ul>
 			<?php 

            $count = count($users);
 			for($i=0;$i<$count;$i++){
 				echo "<li>
 				<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>				
 				</li>";
 			};
            
                echo "<div class='form-control'>
                <a href='admin/users.php?id={$count}' class='basic-button'>Add User</a>
                </div>";

 			?>
                </ul>
            </nav>



            <?php } ?>




 		</div>
 	</div>

 	
 </body>
 </html>