<?php
session_start();

    if(isset($_POST['q17_reasonFor'])){
        if(!empty($_POST['q17_reasonFor'])){
                            //   echo $_SESSION['user']['id_employee'];

                $reason=$_POST['q17_reasonFor'];

                $edit_id_employee=$_SESSION['user']['id_employee'];
                $con= mysqli_connect("localhost","root","","first_pro");
                $leave_approve="1";
                $sql = "UPDATE `employee` SET `leave_approve`='". $leave_approve."',`reason`='".$reason."'WHERE `id_employee`='".$edit_id_employee."'";
                if ($con->query($sql) === TRUE) {
                  echo "Record updated successfully";
                } else {
                  echo "Error updating record: " . $con->error;
                }
              
        }}
        
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
    <h3>Waiting for approval
</h3>

</body>
</html>