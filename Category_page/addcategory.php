<?php
  session_start();
  //checking if user is logged in,If not redirect to login page
  if(!isset($_SESSION['admin']))
  {
    header("Location:index.php?page=admin");
  }
  // if the session runs the first time
  if(!isset($_SESSION['addcategory']['name']))
  {
    $_SESSION['addcategory']['name'] = "";
  }
 ?>
<h1>Add new category</h1>
<form method="post" action="index.php?page=confirmcategory"/>
  <p><input type="text" value="<?php echo $_SESSION['addcategory']['name']; ?>" name="name" size="40" maxlength="50"/></p>
  <p><input type="submit" name="submit" value="Add"/></p>
</form>
<p><a href="index.php?page=admin">Go back</a></p>
