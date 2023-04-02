<?php

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");

function showUserPage($user) {

    $classes = implode(", ", $user->classes);

    // heredoc
    echo <<< HTML
    <style>
        .form {
            margin: 10px 0;
        }

        .form input {
            width: 300px;
        }
    </style>

    <nav class="nav nav-crumbs">
        <ul>
            <li><a href="admin/users.php">Back</a></li>
        </ul>
    </nav>
    <div>
        <h2>$user->name</h2>
        <div>
            <div class="label">
                <strong>Type</strong>
            </div>
            <div class="form">
                <input type="text" placeholder="$user->type">
            </div>
        </div>
        <div>
            <div class="label">
                <strong>Email</strong>
            </div>
            <div class="form">
                <input type="text" placeholder="$user->email">
            </div>
        </div>
        <div>
            <div class="label">
                <strong>Classes</strong>
            </div>
            <div class="form">
                <input type="text" placeholder="$classes">
            </div>
        </div>
        <div>
            <input type="submit">
        </div>
    </div>
    HTML;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Admin Page</title>

    <?php include "../parts/meta.php"?>
</head>
<body>
    <style>
        .card.soft {
            margin-top: 6em !important;
        }
    </style>
    
    <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <h1>User Admin</h1>
            </div>
            <div class="flex-stretch"></div>
            <div class="nav nav-flex flex-none">
                <ul>
                    <li><a href="admin/users.php">User List</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="card soft">
            <?php
                if (isset($_GET['id'])) {
                    showUserPage($users[$_GET['id']]);
                } else {
            ?>
            <h2>User List</h2>
            <nav class="nav">
                <ul>
                    <?php 
                        for ($i = 0; $i < count($users); $i++) {
                            echo "<li> 
                                <a href='admin/users.php?id=$i'> {$users[$i]->name} </a>
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