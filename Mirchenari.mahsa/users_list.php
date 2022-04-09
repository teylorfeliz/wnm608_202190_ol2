
<?php

    include "lib/php/functions.php";


    $users = file_get_json("data/users.json");





function showUserPage($user){


$classes = implode(",", $user ->classes);
// heredc
    echo <<<HTML
    <nav class="nav nav-crumbs";>
        <ul>
            <li><a href="users_list.php"> < Back</a></li>
        </ul>
    </nav>
    <div>
        <h2>$User </h2>
        <div>
            <strong>Name:</strong>
          <input type="text" placeholder="$user->name" class="form-input">
        </div>
        <div>
            <strong>Type:</strong>
          <input type="text" placeholder="$user->type" class="form-input">
        </div>
        <div>
            <strong>Email:</strong>
         <input type="text" placeholder="$user->email" class="form-input">
        </div>      
         <div>
            <strong>Classes:</strong>
              <input type="text" placeholder="$classes" class="form-input">
        </div> 
         <div class="form-control">
                <button class="form-button">Submit</button>
            </div>
            <nav class="nav nav-crumbs";>
        <ul>
            <li><a href="data/users.json"> Add New User > </a></li>
        </ul>
    </nav>
    
    </div>
    HTML;    
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>User Admin</title>

<meta name="viewport" content="width=device-width">





<link rel="stylesheet"href="lib/css/styleguide.css">
 


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
                   
                    
                     <li><a href="users_list.php">User List</a></li>
                </ul>
            </nav>
        </div>
    </header>




<div class="container">
    <div class="card light">

             <?php

             if(isset($_GET['id'])){
                showUserPage($users[$_GET['id']]);

             } else{


               ?>
     
        <h2>Users List</h2>
        <nav class="nav">
            <ul>

        <?php


            for($i=0;$i< count($users);$i++){
                echo  "<li>
             <a href='users_list.php?id=$i'>{$users[$i] ->name}</a>
                   </li>";
            
            }
            
        ?>
         </ul>
      </nav>

  <?php } ?>
    </div>
</div>




</body>


</html>