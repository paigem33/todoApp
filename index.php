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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/scripts/scripts.js"></script>

</head>
<body>
    <div id="mainContainer">
    <header>
        <div class="logo">
            <i class="fas fa-check-double"></i>
            <p>Double Check</p>
        </div>
        <div class="icon"><i class="fas fa-bars"></i></div>
        <nav class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                if($_SESSION['userLoggedIn']) { 
                ?>
                    <li><a href="addList.php">New List</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li>Sign Out</li>
                    </div>
                <?php } else { ?>
                    <li><a href="register.php">Sign In</a></li>
                    </div>
                <?php
                }
            ?>
            </ul>
            
            
        </nav>
    </header>
    </div>
</body>
</html>