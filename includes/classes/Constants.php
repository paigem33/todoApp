<?php
    class Constants {
        //public means it exists outside of the class, static means you dont have to create an instance of the class before you can use it, like we did with $account = new Account
        public static $passwordsDoNoMatch = "Your passwords don't match";
        public static $passwordsNotAlphanumeric = "Your passwords can only contain numbers and letters";
        public static $passwordsLength = "Your password must be between 5 and 30 characters";
        public static $emailInvalid = "Your emails is invalid";
        public static $emailsDoNotMatch =  "Your emails don't match";
        public static $usernameCharacters ="Your username must be between 5 and 25 characters";
        public static $usernameTaken = "This username is already in use";
        public static $emailTaken = "This email is already in use";
        public static $loginFailed = "Your username or password was incorrect";
    }
?>