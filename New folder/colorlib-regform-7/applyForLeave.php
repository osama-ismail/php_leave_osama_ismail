<?php
        echo "osama";

    if(isset($_POST['leave'])){
        // if(!empty($_POST['ba']))
        echo "osama";
        // header("LOCATION: index.php");
    
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <form method="applyForLeave.php" action="post">
    <input type="submit" class="btn btn-success" name="leave"  value="apply for a leave"/>

</form>
</body>
</html>