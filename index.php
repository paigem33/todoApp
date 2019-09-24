<?php 
    include("includes/config.php");
    include("includes/classes/Account.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
    <div id="mainContainer">
        <nav>
                <p class="logo"><i class="fas fa-check-double"></i>Double Check</p>
                <div class="mainNav">
                <a href="index.php">Home</a>
            <?php
                if($_SESSION['userLoggedIn']) { //You have to set that somewhere else just like $logged
                ?>
                    <a href="addList.php">New List</a>
                    <a href="profile.php">Profile</a>
                    <p>Sign out</p>
                    </div>
                <?php } else { ?>
                    <a href="register.php">Sign in</a>
                    </div>
                <?php
                }
            ?>
            
        </nav>
    </div>
</body>
</html>