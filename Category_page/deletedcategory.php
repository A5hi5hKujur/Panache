<?php
  session_start();
  //checking if user is logged in,If not redirect to login page
  if(!isset($_SESSION['admin']))
  {
    header("Location:index.php?page=admin");
  } 
    $delcat_sql = "DELETE FROM category WHERE categoryID=".$_GET['categoryID'];
    $dat_query = mysqli_query($dbconnect, $delcat_sql);
?>
<h1>Category Deleted</h1>
 <p>Category has been successfully deleted</p>
 <p><a href="index.php?page=admin">Return to admin panel</a></p>
