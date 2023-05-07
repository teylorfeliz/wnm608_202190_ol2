<?php

include "../lib/php/function.php";


$filename = "../data/users.json";

$users = file_get_json($filename);

$empty_user = (object)[
    "name"=>"",
    "type"=>"",
    "email"=>"",
    "classes"=>[]

];


//file_put_contents json_encode explode $=POST
//CRUD,Create Read Update Delete

//Print_p([$_GET,$_POST]);

if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case "update":
            $users[$_GET['id']]-> name = $_POST['user-name'];
            $users[$_GET['id']]-> type = $_POST['user-type'];
            $users[$_GET['id']]-> email = $_POST['user-email'];
            $users[$_GET['id']]-> classes = explode(",", $_POST['user-classes']);

            file_put_contents($filename,json_encode($users));
            header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;
        case "create":
            $empty_user -> name = $_POST['user-name']
            $empty_user -> type = $_POST['user-type'];
            $empty_user -> email = $_POST['user-email'];
            $empty_user -> classes = explode(",", $_POST['user-classes']);

            $id = count($users);

            $users[] = $empty_user;

            file_put_contents ($filename,json_decode($users));
            header("location:{$_SERVER['PHP_SELF']}?id=$id");
            break;
        case "delete":
            array_splice($users,$_GET['id'],1);
            file_put_contents($filename,json_encode($users));
            header ("location:{$_SERVER['PHP_SELF']}");
            break;
    }
}



function showUserPage($user) {

$save = $$GLOBALS['save'];
if($user->name==""){
    $user_name = '<div class ="form-control">
    <label class ="form-label">Name</label>
    <input required= true type="text" value"" name="name" class ="form-inputs">
    </div>';
}else {
    $user_name ='<h2>'.$user->name.'</h2>'.'<input required = true style="display:none" name="name" type="text" value="'.$user->name.'">';
}

$classes = implode(",", $user->classes);


//heredoc


echo <<<HTML
<nav class="nav nav-crumbs">
    <ul>
        <li><a href="admin/users.php">Back</a></li>
    </ul>
</nav>

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
        <input type="text" required=true value="$user->type" name="type" class="form-inputs">
    </div>
    <div class="form-control">
        <label class="form-label">Email</label>
        <input type="email" required=ture value="$user->emaiil" name="email" class="form-inputs"> 
    </div>
    <div class="form-control">
        <label class="form-label">classes</label>
        <input type="email" required=ture value="$user->classes" name="email" class="form-inputs">
    </div>
    <div class="form-control">
        <input style= "background-color: #1f49c4" type="submit" name="save" class="form-button card dark" value="$save">
    </div>
    <div class="form-control">
        <input style= "background-color: transparent; color:#1f49c4; " type="submit" name="delete" class="form-button card soft" value="Delete">
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
            $save = "sucessfully saved";
            header("Refresh:1;");

        }
    };

    if(isset($_POST['delete'])){

        unset($users[$_GET['id']]);
        header("location: http://jaeyoung-park.com/jywebsite/aau/wnm608/park.jaeyoung/admin/users.php");
        file_put_json("../data/users.json", array_values($users));
    };
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Admin Oage</title>

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
                    <li><a href="admin/users.php">User List</li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">

    	<div class="card soft">

            <?php

            if(isset($_GET['id'])) {
                showUserPage($users[$_GET['id']]);
            } else {
                $new_user = (object)[
                    "name"=>"",
                    "type"=>"",
                    "email"=>"",
                    "classes"=>[]
                    ];
                showUserPage($new_user);
                //print_p($new_user->name);
                //echo $new_user->name;
            }
             else {

            ?>

    		<h2>User List</h2>

            <nav class="nav">
                <ul>
                <?php
            $count = count($users);

    		for($i=0;$i<count($users);$i++){
    			echo"<li>
    			 <a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
    			 </li>";
    		
    		};
        echo "<div class='form-control'>
        <a href='admin/usesrs.php?id={$count}' class'basic-button'>Add User</a>
        </div>";

 			?>
                 </ul>
             </nav>

         <?php }?>
    	</div>
    </div>

</body>
</html>