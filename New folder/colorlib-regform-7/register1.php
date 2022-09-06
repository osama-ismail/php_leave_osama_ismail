<?php 
session_start();

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <form action="addNew.php" method="post">

            <!-- <input type="text" name="email" id="your_name" placeholder="Your Name"/> -->
            <button type="submit" class="btn btn-success" style="    margin-left: 15px;
            " name="back" id="signin" value="back">back</button>
                
            </form>
            <form action="addNew.php" method="post">

<!-- <input type="text" name="email" id="your_name" placeholder="Your Name"/> -->
<button type="submit" class="btn btn-success" style="    margin-left: 15px;
" name="information" id="information" value="back">employees information</button>
    
</form>
        <form action="register.php" method="post">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Add a new employee</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="name" placeholder="Employee Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Employee Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Employee Password"/>
                            </div>

                            <!-- <div class="form-group"> -->
       
                
                            <select name="adminSelect" id="cars">
                            <option value="">choose Admin</option>
                            <?php foreach($data as $user): ?>

                            <option value=<?=$user['id']?>><?=$user['name']?></option>
                            <?php endforeach; ?>  
                             </select>
               
                            <!-- </div> -->
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Add"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="jawwal.jpg" alt="sing up image"></figure>
                        <!-- <a href="#" class="signup-image-link">back</a> -->
                    </div>
                </div>
            </div>
        </section>
    </form>
   
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>