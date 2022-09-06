<!DOCTYPE html>
<?php
$cookie_value="";
$cookie_name="user";
if($_POST){
$cookie_name = "user";
$cookie_value = $_POST['name'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}
?>
<html>
<body>

<?php
// if(!isset($_COOKIE[$cookie_name])) {
//      echo "Cookie named '" . $cookie_name . "' hasn't saved!";
// } else {
//      echo "Cookie '" . $cookie_name . "' has saved!<br>";
//      echo "hello " . $_COOKIE[$cookie_name];
// }
?>
<?php

?>
    <?php  if((empty($_COOKIE['user']))): ?>
        <div>hello <?=$_COOKIE['user']?></div>
        <?php  else : ?>

<form action="hello.php" method="post">
    <div>enter your name</div>
    <input name="name" type="text">
    <button type="submit">submit</button>
</form>
<?php endif  ?>
</body>
<!-- </html> -->