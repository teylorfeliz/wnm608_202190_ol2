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
        if($_POST['name']){

            $users[$_GET['id']]->name = $_POST['name'];
            $users[$_GET['id']]->type = $_POST['type'];
            $users[$_GET['id']]->email = $_POST['email'];
            $users[$_GET['id']]->classes = preg_split("/[\s,]+/",$_POST['classes']);
            
            file_put_json("../data/users.json", $users);
            $save = "sucessfully saved!";
            header("Refresh:1;");
        }

    };

    if(isset($_POST['delete'])){

        unset($users[$_GET['id']]);
        header("location: http://joyshih.com/wnm608/Shih.Yuhuan/admin/users.php");
        file_put_json("../data/users.json", array_values($users));

    };

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>User Admin Page</title>


 	<?php include "../parts/meta.php"; ?>
 </head>
 <body>

 	<header class="navbar">
      <div class="container display-flex">
          <div class="flex-none">
              <h1>User Admin</h1>
          </div>
          <div class="flex-stretch"></div>
          <nav class="nav nav-flex flex-none">
              <ul>
                  <li><a href="admin/users.php">User List</a></li>
              </ul>
          </nav>
        
    </header>

 	<div class="container">
 		<div class="card soft">

            <?php
                if(isset($_GET['id'])) {
                    if($users[$_GET['id']]){
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
 			<h2>User List</h2>


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