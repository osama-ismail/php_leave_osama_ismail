<?php
session_start();
    if(!empty($_SESSION['user'])){
        header("LOCATION:index.php");
    }
require "lib.php";
if(isset($_POST['email'])){
    $email=$_POST['email'];
        $password=$_POST['password'];
        // $newPassword=newHash($password);
        if($_POST['SelectType']=="1")
        {
            $userData=loginEmployee( $email, $password );
            if(!empty( $userData)){
                $_SESSION['user']= $userData;
                header("LOCATION: ./New folder/Leave_form.html");  
            }
            else{
                echo "invalid user data";
            }

        }
        else{        
            $userData=login( $email, $password );
            if(!empty( $userData)){
                $_SESSION['user']= $userData;
                header("LOCATION: addNew.php");  
            }
            else{
                echo "invalid user data";
            }
        }
       
}


include "login.html";



?>