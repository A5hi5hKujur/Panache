<?php
  session_start();
  // Check to see if user is loging out
  if(isset($_GET['action']))
  {
    if($_GET['action']=="logout")
    {
      unset($_SESSION['admin']);
    }
  }
  //if login form has been submitted, check if passward matches
  if(isset($_POST['login']))
  {
    $login_sql = "SELECT * FROM user WHERE username ='".$_POST['username']."' AND password='".sha1($_POST['password'])."'";
    if($login_query = mysqli_query($dbconnect,$login_sql))
    {
      $login_rs = mysqli_fetch_assoc($login_query);
      $_SESSION['admin']=$login_rs['username'];
    }
  }
  if(isset($_SESSION['admin'])||isset($_SESSION['ashish']))
  {
    include("Login/cpanel.php");
  }
  else {
    include("Login/login.php");
  }
 ?>
