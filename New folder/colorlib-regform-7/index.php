<?php
    // session_start();

    require "lib.php";
    if(empty($_SESSION['user'])){
        header("LOCATION:login.php");
    }

    $data=showAllData();    
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
        <table border=1>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>email</th>
            </tr>
            <?php foreach($data as $user): ?>
            <tr>
                <th><?=$user['id']?></th>
                <th><?=$user['name']?></th>
                <th><?=$user['email']?></th>
                <th><button><a href="edit.php">edit</a></button></th>
            </tr>
                <?php endforeach; ?>


        </table>

    </form>
</body>
</html>