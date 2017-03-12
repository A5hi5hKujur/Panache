<?php
  session_start();
  //checking if user is logged in,If not redirect to login page
  if(!isset($_SESSION['admin']))
  {
    header("Location:index.php?page=admin");
  }
  // check to see if user has submitted the add category form
  if(!isset($_POST['submit']))
  {
    header("Location:index.php?page=admin");
  }

  //set addcategory SessionHandler
  $_SESSION['addcategory']['name'] = $_POST['name'];
?>
<h1>Confirm category name</h1>
<p>You entered: <?php echo $_POST['name']; ?></p>
<p><a href="index.php?page=entercategory">Correct,continue..</a>  |  <a href="index.php?page=addcategory">OOps, go back..</a></p> 
