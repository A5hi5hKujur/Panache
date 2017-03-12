<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="Category_page/item.css"/>
  </head>
  <body>
 <?php
  // Rederect back to index page if stockID has'nt been set
  if(!isset($_GET['stockID']))
  {
    header("Location: index.php");
  }
  $item_sql = "SELECT * FROM stock WHERE stockID=".$_GET['stockID'];
  if($item_query=mysqli_query($dbconnect, $item_sql))
  {
    $item_rs = mysqli_fetch_assoc($item_query);
    ?>
    <div class="item-container">
      <div class="item-block item-image">
        <img height="700px" width="550px" src="Media/stock/bigpicture/<?php echo $item_rs['bigphoto']; ?>" alt="<?php echo $item_rs['thumbnail']; ?>"/>
     </div>
     <div class="item-block item-detail">
       <p class="item-name"><?php echo $item_rs['name']; ?></p>
       <div class="item-price"><p class="item-currency">PRICE:</p><strong class="item-currency"><?php echo $item_rs['price']; ?></strong></div>
       <p class="item-topline"><?php echo $item_rs['topline']; ?></p>
       <p  class="item-size" style="font-weight:700; margin-top: 30px;">SIZE</p>
       <div class="size-container">
         <div class="size-unit"><p>S</p></div>
         <div class="size-unit"><p>M</p></div>
         <div class="size-unit"><p>L</p></div>
         <div class="size-unit"><p>XL</p></div>
       </div>
       <div class="button-container">
         <div class="button-unit buy-button"><p>BUY</p></div>
         <div class="button-unit cart-button"><p>ADD TO CART</p></div>
       </div>
       <p class="item-summary-heading" style="font-size:20px;margin-top:50px;font-weight:700;">PRODUCT SUMMARY</p>
       <p class="item-summary" style="font-weight:300;"><?php echo $item_rs['description']; ?></p>
     </div>
   </div>
<?php } ?>
</body>
</html>
