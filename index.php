<?php

    echo 'working';
    require_once 'init.php';
    
    $itemsQuery = $connection->prepare("
        SELECT id, name, done
        FROM items
        WHERE user = :user
    ");
    echo $itemsQuery;
    
    // $itemsQuery->execute([
    //         'user' => $_SESSION['user_id']
    //     ]);
        
    // $items = $itemsQuery->rowCount() ? $itemsQuery : [];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
</head>
<body>
    <h1>todoapp</h1>
</body>
</html>