<?php
function register($username,$email,$password,$adminSelect){
   $con= mysqli_connect("localhost","root","","first_pro");
    mysqli_query($con,"INSERT INTO `employee` (`name`,`email`,`password`,`id_admin`) 
    values('$username','$email','$password','$adminSelect')");
    $result=mysqli_affected_rows($con);

    if($result==1)
    return true;
    else{ return false;}
}
function login($email,$password){
    $con= mysqli_connect("localhost","root","","first_pro");
    $myq= mysqli_query($con,"SELECT *FROM `USER` WHERE `EMAIL`='$email' AND `PASSWORD`='$password'");
   $result=mysqli_fetch_assoc($myq);   
   return $result;
 }
 function loginEmployee($email,$password){
   $con= mysqli_connect("localhost","root","","first_pro");
   $myq= mysqli_query($con,"SELECT *FROM `employee` WHERE `EMAIL`='$email' AND `PASSWORD`='$password'");
  $result=mysqli_fetch_assoc($myq);   
  return $result;
}
 
 function newHash($newPassword){
    return sha1($newPassword);
 }
 function showAllData(){
    $con= mysqli_connect("localhost","root","","first_pro");
    $myq= mysqli_query($con,"SELECT `id_employee`,`name`,`email` FROM `employee`");
    $data=[];
   while($res=mysqli_fetch_assoc($myq)){
    $data[]=$res;
    // print_r($data);
   }
   return  $data;
 }
 function showAllData22(){
  $con= mysqli_connect("localhost","root","","first_pro");
  $myq= mysqli_query($con,"SELECT `id`,`name`,`email` FROM `user`");
  $data=[];
 while($res=mysqli_fetch_assoc($myq)){
  $data[]=$res;
  // print_r($data);
 }
 return  $data;
}
 function showEmployeeId($value){
   $con= mysqli_connect("localhost","root","","first_pro");
   $myq= mysqli_query($con,"SELECT `id_employee`,`name`,`email` FROM `employee` where `id_employee`='".$value."' ");
   $data1=[];
  while($res=mysqli_fetch_assoc($myq)){
   $data1[]=$res;
   // print_r($data);
  }
  return  $data1;
}

function updateEmployee($edit_id_employee,$edit_name,$edit_email){
  $con= mysqli_connect("localhost","root","","first_pro");
  $sql = "UPDATE `employee` SET `name`='".$edit_name."',`email`='".$edit_email."'WHERE `id_employee`='".$edit_id_employee."'";
  if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $con->error;
  }
}


?>