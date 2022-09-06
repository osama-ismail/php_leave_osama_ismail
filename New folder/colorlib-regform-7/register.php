
<?php
session_start();
if(empty($_SESSION['user'])){
    header("LOCATION:login.html");
}
require "lib.php";  
    if(isset($_POST['username'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $newPassword=newHash( $password);
        $adminSelect=$_POST['adminSelect'];
        echo $adminSelect;
        $result=register($username,$email,  $newPassword,$adminSelect);
       
        if($result==true)
        echo "user added succefuly";
    else{    
        echo "failed";
    }
    
    }
  
include "index.php";
?>

