<?php

include "../lib/php/function.php";


$users = file_get_json("../data/users.json");



function showUserPage($user) {

$classes = implode(",",$user->classes);


//heredoc
echo <<<HTML
<nav class="nav nav-crumbs">
    <ul>
        <li><a href="admin/user.php">&#60; Back</a></li>
    </ul>

</nav>
<div>
<form>
    <h2>$user->name</h2>
    <div>
        <label class="form-label">Type</label>
        <input type="text" placeholder="$user->type" class="form-input">
    </div>
    <div>
        <label class="form-label">Email</label>
        <input type="search" placeholder="$user->email" class="form-input">
    </div>
    <div>
        <label class="form-label">Classes</label>
        <input type="number" placeholder="$classes" class="form-input">
    </div>
</form>

    <div class="form-control">
        <button class="form-button">Submit</button>
    </div>

</div>
HTML;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include "../parts/meta.php";?>
    <title>User Admin Page</title>
</head>
<body>

<?php include "../parts/nav.php";?>

    <div class="container" id="productitem">       
        <div class="card soft">

            <?php
            
            if(isset($_GET['id'])){
                showUserPage($users[$_GET['id']]);
            } else {
            
            ?>

            <h2>User List</h2>

<nav class="nav">
    <ul>
            <?php
            
            for($i=0;$i<count($users);$i++){
                echo "<li>
                <a href='admin/user.php?id=$i'>{$users[$i]->name}</a>
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
