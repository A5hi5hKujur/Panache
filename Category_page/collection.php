<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="Category_page/category.css"/>
  </head>
  <body>
    <?php
      // If categoryID is not set, redirect back to index page
      if(!isset($_GET['collectionID']))
      {
        header("Location:index.php");
      }
      // Select all stock items beloging to the collectionID
      $stock_sql = "SELECT stock.thumbnail,stock.stockID, stock.name, stock.price, collection.name AS colname FROM stock JOIN collection ON stock.collectionID=collection.collectionID WHERE stock.collectionID=".$_GET['collectionID'];
      if($stock_query = mysqli_query($dbconnect, $stock_sql))
      {
        $stock_rs = mysqli_fetch_assoc($stock_query);
      }
     ?>
     <?php if(mysqli_num_rows($stock_query)==0)
     {
        echo "OUT OF STOCK";      // Create a "OUT OF STOCK BOX"
     }
        else{
      ?>
      
      <div class="category-content">
      <h1><?php echo $stock_rs['colname']; ?></h1>
          <div class="category-item-container">
            <?php do { ?>
            <div class="category-item">
              <img height="300px" width="230px" src="Media/stock/<?php echo $stock_rs['thumbnail']; ?>" alt="<?php echo $stock_rs['thumbnail']; ?>"/>
              <a href="index.php?page=item&stockID=<?php echo $stock_rs['stockID']; ?>"><div class="category-item-detail">
                <p><?php echo $stock_rs['name']; ?></p>
                <strong>Rs.<?php echo $stock_rs['price']; ?></strong>
              </div></a>
            </div>
            <?php } while ($stock_rs = mysqli_fetch_assoc($stock_query)); ?>
          </div>
      </div>
      <?php } ?>
    </body>
</html>
