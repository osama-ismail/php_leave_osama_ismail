<?php
    require "lib.php";
  if(isset($_POST['edit_id_employee']))
{
    $edit_id_employee=$_POST['edit_id_employee'];
    $edit_name=$_POST['edit_name'];
    $edit_email=$_POST['edit_email'];
    updateEmployee($edit_id_employee,$edit_name,$edit_email);
}

?>