<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");

$save = "Save Changes";


$save = $GLOBALS['save'];
$users = $GLOBALS['users'];


if($user->name==""){    
    $user_name = '<div class="form-control">
        <label class="form-label">Name</label>
        <input required=ture type="text" value="" name="name" class="form-inputs">
        </div>';

} else {
    $user_name = '<h2>'.$user->name.'</h2>'.'<input required=ture style="display:none" name="name" type="text" value="'.$user->name.'">';
}



    if(isset($_GET['action'])) {

        switch($_GET['action']) {
            case "Update":
                // print_p($users);
                // $users[$_GET['id']]->name = $_POST['name'];
                $users[$_GET['id']]->type = $_POST['type'];
                $users[$_GET['id']]->email = $_POST['email'];
                $users[$_GET['id']]->classes = preg_split("/[\s,]+/",$_POST['classes']);
                
                file_put_json("../data/users.json", $users);
                header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
                break;

            case "delete":
                array_splice($users,$_GET['id'],1);
                file_put_json("../data/users.json", $users);
                header("location:{$_SERVER['PHP_SELF']}");
                break;
            
           
        }
    }



  
    // if(isset($_POST['delete'])){

    //     unset($users[$_GET['id']]);
    //     header("location: http://joyshih.com/wnm608/Shih.Yuhuan/admin/users.php");
    //     file_put_json("../data/users.json", array_values($users));

    // };
    


function showUserPage($user) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "Create" : "Update";
$classes = implode(", ", $user->classes);

$display = <<<HTML
    <div><h2>{$user->name}</h2>
    
        <div>
            <strong>Type</strong>
            <span>$user->type</span>
        </div>
        <div>
            <strong>Email</strong>
            <span>$user->email</span>
        </div>
        <div>
            <strong>Classes</strong>
            <span>$classes</span>
        </div>
    </div>
    HTML;

    $form = <<<HTML

    <form action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate" method="post" name="userData">
    $user_name
        <div class="form-control">
            <label class="form-label" for="user-type">Name</label>
            <input type="text" required=ture value="$user->name" name="name" id="name" class="form-inputs" placeholder="Enter your name">
        </div>
        <div class="form-control">
            <label class="form-label" for="user-type">Type</label>
            <input type="text" required=ture value="$user->type" name="type" id="type" class="form-inputs" placeholder="Enter your type">
        </div>
            <div class="form-control">
            <label class="form-label" for="user-email">Email</label>
            <input type="email" required=ture value="$user->email" name="email" id="email" class="form-inputs" placeholder="Enter your email">
        </div>
        <div class="form-control">
            <label class="form-label" for="user-classes">Class</label>
            <input type="text" required=ture value="$classes" name="classes" id="classes" class="form-inputs" placeholder="Enter your classes">
        </div>

        <div class="form-control">
            <input style="background-color: #053426" type="submit" name="save" class="form-button card dark" value="$createorupdate">
        </div>

        <div class="form-control">
            <input style="background-color: transparent; color: #053426 ;" type="submit" name="delete" class="form-button card hard" value="Delete">
        </div>      
    </form>
HTML;

$output = $id == "new" ? $form :
    "<div class='grid gap'>
    <div class='col-xs-12 col-md-7'>$display</div>
    <div class='col-xs-12 col-md-5'>$form</div>
    </div>";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML
<nav class="display-flex">
    <div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
    <div class="flex-none">$delete</div>
</nav>

$output
HTML;

}



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
                  <li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
                  <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
              </ul>
          </nav>
        
    </header>

 	<div class="container">
 		<div class="card soft">

            <?php
                if(isset($_GET['id'])) {
                    if($_GET['id']=="new"){

                        $new_user = (object)[
                            "name"=>"",
                            "type"=>"",
                            "email"=>"",
                            "classes"=>[]
                        ];

                        showUserPage($new_user);

                        if(isset($_POST['save'])){
                            $id = count($users);
                            $users[$id]->name = $_POST['name'];
                            $users[$id]->type = $_POST['type'];
                            $users[$id]->email = $_POST['email'];
                            $users[$id]->classes = preg_split("/[\s,]+/",$_POST['classes']);
                            file_put_json("../data/users.json", $users);
                            header("location:{$_SERVER['PHP_SELF']}?id=$id");
                        }


                    } else if ($user = $users[$_GET['id']]){
                        
                        showUserPage($user);

               
                        
                
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
            
                // echo "<div class='form-control'>
                // <a href='admin/users.php?id={$count}' class='basic-button'>Add User</a>
                // </div>";

 			?>
                </ul>
            </nav>



            <?php } ?>




 		</div>
 	</div>

 	
 </body>
 </html>