
<?php

    include "../lib/php/functions.php";




    $notes_object = file_get_json("notes.json");
    $users_array = file_get_json("../data/users.json");



// print_p($notes) ;

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Reading Data</title>

<meta name="viewport" content="width=device-width">




<link rel="stylesheet"href="../lib/css/styleguide.css">
    <link rel="stylesheet"href="../lib/css/gridsystem.css">
    <link rel="stylesheet"href="../lib/css/carousel.css">
    <link rel="stylesheet"href="../css/storetheme.css">

<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>


</head>
<body>
 
    <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <h1>NIMANY</h1>
            </div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="product_list.php">PRODUCTS</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                      <li><a href="login.php">LOGIN</a></li>
                </ul>
            </nav>
        </div>
    </header>




<div class="container">
    <div class="card light">
        <h2>Notes</h2>

        <?php


            for($i=0;$i<count($notes_object ->notes);$i++){
                echo "<li>{$notes_object->notes[$i]}</li>";
            }
        ?>

    </div>
        <div class="card light">
        <h2>Users</h2>

        <?php


            for($i=0;$i< count($users_array);$i++){
                echo  "<li>
                    <strong>{$users_array[$i]->name}</strong>
                    <span>{$users_array[$i]->type}</span>
                   </li>";
            }
            
        ?>

    </div>
</div>








</body>


</html>
