<?php 
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");
        //creates a new instance of the class
        $account = new Account($con);
    include("includes/handlers/register.php");
    include("includes/handlers/login.php");
    function getInputValue($name){
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }
?>


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register/Login</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/scripts/scripts.js"></script>
</head>
<body>

    <?php
        if(isset($_POST['signupButton'])){
            echo '<script>
                    $(document).ready(function(){
                        $("#login").hide();
                        $("#register").show();
                    }); 
                 </script>';
        } else {
            echo '<script>
                    $(document).ready(function(){
                        $("#login").show();
                        $("#register").hide();
                    });
                </script>';
        };
    ?>

    <div id="inputContainer">
        <div class="formSection">
            
            <form action="register.php" id="login" method="POST">
                <h1>Login</h1>
                <?php echo $account->getError(Constants::$loginFailed); ?>
                <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" name="loginUsername" required value="<?php getInputValue('loginUsername'); ?>">
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="loginPassword" required>
                <button type="submit" name="loginButton">Login</button>

                
            </form>

            <form action="register.php" id="register" method="POST">
                <h1>Register</h1>
                <?php echo $account->getError(Constants::$usernameCharacters); ?>
                <?php echo $account->getError(Constants::$usernameTaken); ?>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required value="<?php getInputValue('username'); ?>">

                <?php echo $account->getError(Constants::$emailInvalid); ?>
                <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                <?php echo $account->getError(Constants::$usernameTaken); ?>
                <label for="Email">Email</label>
                <input type="email" id="email" name="email" required value="<?php getInputValue('email'); ?>">

                <label for="email2">Confirm Email</label>
                <input type="email" id="email2" name="email2" required value="<?php getInputValue('email2'); ?>">

                <?php echo $account->getError(Constants::$passwordsLength); ?>
                <?php echo $account->getError(Constants::$passwordsNotAlphanumeric); ?>
                <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="password2">Confirm Password</label>
                <input type="password" id="password2" name="password2" required>

                <button type="submit" name="signupButton">Sign up</button>


            </form>
        </div>
        <div class="formButtons">
                <div class="hasAccount">
                    <span id="loginForm">Sign in</span>
                </div>
                <div class="hasAccount">
                    <span id="registerForm">Sign up</span>
                </div>
            </div>
    </div>
</body>
</html>