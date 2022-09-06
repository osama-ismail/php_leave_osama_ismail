!<?php
  require "lib.php";
  

  $data=showAllData();  
// if(isset($_POST['']))
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
<form action="edit.php" method="post">
<table border=1>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>email</th>
            </tr>
            <?php foreach($data as $user): ?>
            <tr>
                <th><?=$user['id_employee']?></th>
                <th><?=$user['name']?></th>
                <th><?=$user['email']?></th>
                <th><button type="submit"><a href="edit.php?id=<?=$user['id_employee']?>">edit</a></button></th>
            </tr>
                <?php endforeach; ?>


        </table>
    </form>
</body>
</html>