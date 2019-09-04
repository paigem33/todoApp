<?php

    session_status();
    $_SESSION['user_id'] = 1;
    
    $host = "localhost";
    $user = "paigem33";                     //Your Cloud 9 username
    $pass = "winston";                                  //Remember, there is NO password by default!
    $db = "todoApp";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    
    $db = new PDO('mysql:dbname=todoApp;host=localhost', 'paigem33', 'winston');

?>