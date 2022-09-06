<?php
session_start();

$dataw=showEmployeeId($_SESSION['user']['id'],"1");
function showEmployeeId($value,$dd){
    $con= mysqli_connect("localhost","root","","first_pro");
    $myq= mysqli_query($con,"SELECT `id_employee`,`name`,`reason` FROM `employee` where `id_admin`='".$value."' AND `leave_approve`='".$dd."' ");
    $data1=[];
   while($res=mysqli_fetch_assoc($myq)){
    $data1[]=$res;
    // print_r($data);
   }
   return  $data1;
 }

 
    // if(!empty($_POST['id1'])){
        // echo $_get['id1'];
        $ahmad=$_GET['id1'];
        $osama="0";
        $con= mysqli_connect("localhost","root","","first_pro");
  $sql = "UPDATE `employee` SET `leave_approve`='".$osama."'WHERE `id_employee`='".$ahmad."'";
  if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $con->error;
  }
    // }
 


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
    <table border="1">
    <tr>
    <th>employee name</th>
    <th>employee id</th>
    <th>reason</th>

</tr>
<form method="get" action="approve.php">
<?php foreach($dataw as $user): ?>
    <tr>
                <th><?=$user['id_employee']?></th>
                <th><?=$user['name']?></th>
                <th><?=$user['reason']?></th>
                <th><button type="submit" ><a  href="approve.php?id1=<?=$user['id_employee']?>">approve</a></button></th>
</tr>
                <?php endforeach; ?>
</form>
</table>

</body>
</html>