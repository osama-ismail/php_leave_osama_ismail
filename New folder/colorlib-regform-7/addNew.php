<?php
if(isset($_POST['addEmployee'])){
    if(!empty($_POST['addEmployee']))
    header("LOCATION: register1.php");

}
if(isset($_POST['back'])){
    // if(!empty($_POST['ba']))
    header("LOCATION: addNew.php");


}
if(isset($_POST['addDepartment'])){
    // if(!empty($_POST['ba']))
    header("LOCATION: department.php");


}
if(isset($_POST['information'])){
    // if(!empty($_POST['ba']))
    header("LOCATION: employeesInfo.php");


}
if(isset($_POST['editPassword'])){
    // if(!empty($_POST['ba']))
    header("LOCATION: ./site1/Home.php");


}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Main css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
    <!-- <form method="" actio="post"> -->
        <!-- <button  name="addEmployee" class="btn btn-success" type="submit">Add a new employee</button> -->
        <!-- <input type="text" name="email" id="your_name" placeholder="Your Name"/> -->

        <!-- <input type="submit" name="addEmployee" > -->
        <!-- <input type="submit" class="form-submit" value="Log in"/> -->

    <!-- </form> -->
    <form action="" method="post">

    <!-- <input type="text" name="email" id="your_name" placeholder="Your Name"/> -->

    <input type="submit" class="btn btn-success" name="addEmployee" id="signin" value="add new employee"/>
    <input type="submit" class="btn btn-success" name="addDepartment" id="signin1" value="add new Department"/>
    <input type="submit" class="btn btn-success" name="editPassword" id="signin" value="edii your password"/>

    
    </form>
    
</body>
</html>