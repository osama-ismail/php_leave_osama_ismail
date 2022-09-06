<?php
  session_start();
  if(isset($_POST['newPassword'])){
    if(!empty($_POST['newPassword'])){

    if($_POST['oldPassword']==$_SESSION['user']['password']){
    editPassword($_POST['oldPassword'],$_POST['newPassword']);
    echo "password done!";

  }

    else{
      echo "password wrong!";
    }}
  }
  function editPassword($oldPass,$newPass){
    $con= mysqli_connect("localhost","root","","first_pro");
    $sql = "UPDATE `user` SET `password`='".$newPass."'WHERE `id`='".$_SESSION['user']['id']."'";
    if ($con->query($sql) === TRUE) {
      echo "password updated successfully";
    } else {
      echo "Error updating password: " . $con->error;
    }


  }

  ?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" "="" defer=""></script>
    <meta name="generator" content="Nicepage 4.17.10, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>

  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-29a7"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
       
    <section class="u-align-center u-clearfix u-section-1" id="carousel_d3a5">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-grey-5 u-layout-cell u-size-22 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <div class="u-image u-image-circle u-preserve-proportions u-image-1" alt="" data-image-width="720" data-image-height="1080"></div>
                </div>
              </div>
              <div class="u-align-center u-bottom-right-radius-50 u-container-style u-layout-cell u-palette-3-base u-shape-round u-size-38 u-top-right-radius-50 u-layout-cell-2" style="backgroun-color:green">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-2">
                  <div class="u-form u-form-1">
                    <form action="Home.php" method="POST">
                      <div class="u-form-group u-form-name u-form-group-1">


                        <label for="name-f2a8" class="u-label u-label-1">Name</label>
                        <input type="text" placeholder="Enter your Name" id="name-f2a8" name="name" class="u-input u-input-rectangle u-white u-input-1" value=<?=$_SESSION['user']['name']?>>
                      </div>
                      <br>

                      <!-- <div class="u-form-group u-form-select u-form-group-2">
                        <label for="select-8e9d" class="u-form-control-hidden u-label u-label-2">Select</label>
                        <div class="u-form-select-wrapper">
                          <select id="select-8e9d" name="select" class="u-input u-input-rectangle u-white u-input-2">
                            <option value="Item 1">Item 1</option>
                            <option value="Item 2">Item 2</option>
                            <option value="Item 3">Item 3</option>
                          </select>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                      </div> -->
                        <!-- <label for="phone-447e" class="u-label u-label-3">Enter your password</label> -->
                        <!-- <input type="password" placeholder="Enter your password"  name="oldPassword"> -->
                        <div class="u-form-group u-form-name u-form-group-1">
                        <label for="name-f2a8" class="u-label u-label-1">your old password</label>

<input type="password" name="oldPassword" class="u-input u-input-rectangle u-white u-input-3" >
<br>
<label for="name-f2a8" class="u-label u-label-1">your new password</label>

<!-- <label  class="u-label u-label-3">Enter new password</label> -->
<input type="password" name="newPassword" class="u-input u-input-rectangle u-white u-input-3" >


                        </div>
                        
                      <!-- <div class="u-form-group u-form-message u-form-group-4">
                        <label for="message-f2a8" class="u-label u-label-4">Message</label>
                        <textarea placeholder="Enter your message" rows="4" cols="50" id="message-f2a8" name="message" class="u-input u-input-rectangle u-white u-input-4" required=""></textarea>
                      </div> -->
                        <input type="submit" value="submit" >
                    
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  
    
    
    
  
</body></html>