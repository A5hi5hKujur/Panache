<?php include("database/db_connection.php"); ?>   <!-- Linking Database to PHP -->
<html>
  <head>
    <title>Panache</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <script src="javascripts/jquery-3.1.0.js"></script>
    <script src="javascripts/jquery-3.1.0.min.js"></script>
    <script src="javascripts/hamburger.js"></script>
    <script src="javascripts/sidebar.js"></script>
    <script src="javascripts/content.js"></script>
    <script src="index.js"></script>
  </head>

  <body>
    <div class="main-content">                  <!-- Main Content begins here -->
      <?php if(!isset($_GET['page']))
      {
        include("PHP/cover.php");
      }
       ?>           <!-- Cover Section -->
      <?php include("PHP/navigation.php"); ?>       <!-- Navigation Section -->
      <div class="Content">                        <!-- The hompage content -->
        <?php  if(!isset($_GET['page']))
        {
          include("PHP/home_content.php");
          include("PHP/about.php");
        }
        else{
          $page = $_GET['page'];
          include("Category_page/$page.php");
        }
         ?>
      </div>
    </div>                                       <!-- Main Content Ends Here -->
    <?php include("PHP/footer.php"); ?>                <!-- Footer Section -->
  </body>
</html>
