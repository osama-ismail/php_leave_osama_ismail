<?php
// $userid = mysql_real_escape_string($_GET['id']);
require "lib.php";
  

  $data2=showEmployeeId($_GET['id']); 


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
<form method="post" action="updateEmployee.php">
            <?php foreach($data2 as $user): ?>
          <input name="edit_id_employee" type="text" value=<?=$user['id_employee']?>> 
               
                <input name="edit_name" type="text" value= <?=$user['name']?>> 
                <input name="edit_email" type="text" value= <?=$user['email']?>> 

               <button type="submit">edit</button>
        
                <?php endforeach; ?>


        



</body>
</html>