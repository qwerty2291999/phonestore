<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
<?php
require_once 'connection.php';
require_once 'sessions.php';
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
            <?php
                        
                        if(isset($_SESSION['user']))
        {
                             ?>
                            <li><a href=""><i class="fa fa-user"></i>Welcome : <?=($_SESSION['user'])?> </a></li><li><a href="logout.php"><i class="fa fa-user"></i> Logout</a></li>
                            <?php
        }
        else
        {   
            ?>
                            <li><a href="loginform.php"><i class="fa fa-user"></i> Login</a></li>
           <?php
        }
            
            
                            
            ?>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="allproduct.php">All Product</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="ProductSearch.php">Search</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="#">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
<!--                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Related</h2>
                        <div class="thubmnail-recent">
<?php
$type = $_GET["type"];
$sql ="SELECT * FROM `shoesclass` WHERE `shoe_type` LIKE '%$type%'";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)){
?>
                            <h2><a href="single-product.html"><?=$row["shoes_brand"]?> <?=$row["shoe_type"]?> <?=$row["shoe_name"]?> (<?=$row["shoe_color"]?>)</a></h2>
                            <div class="product-sidebar-price">
                                <ins><?=$row["shoe_price"]?>&nbspVND</ins>
                            </div>
  <?php
}
                            ?>
                        </div>
                    </div>-->
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$sql ="SELECT * FROM `orderclass` WHERE `order_sessions` = '$sessionid' ";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)){
?>
                                       
                                        <tr class="cart_item">
                                        <td class="product-price">
                                        <form method="POST" action="deleteOrder.php">
                                            <input hidden="" type="text" name="id" value="<?=$row["order_id"]?>">
                                            <input type="submit" onclick="alert('Deleted')" value="Delete">
                                        </form>
                                        </td>
                                        

                                            <td class="product-thumbnail">
                                                <a href="ProductDetail.php?id=<?=$row["shoe_id"]?>&brand=<?=$row["shoes_brand"]?>&type=<?=$row["shoe_type"]?>"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/product-thumb-1.jpg"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="ProductDetail.php?id=<?=$row["shoe_id"]?>&brand=<?=$row["shoes_brand"]?>&type=<?=$row["shoe_type"]?>"><?=$row["shoe_name"]?>(<?=$row["shoe_color"]?>)</a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?=$row["shoe_price"]?>&nbspVND</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <form method="POST" action="updateQuantity.php">
                                                <div class="quantity buttons_added">

                                                    <input hidden type="text" name="oid" value="<?=$row["order_id"]?>">
                                                    <input hidden type="text" name="price" value="<?=$row["shoe_price"]?>">
                                                    <input type="number" size="4" value="<?=$row["shoe_quantity"]?>" min="1" step="1" name="quantity">
                                                    <input type="submit" value="Add">

                                                </div>
                                                </form>
                                            </td>


                                            <td class="product-subtotal">
                                                <span class="amount"><?=$row["shoe_totalprice"]?>&nbspVND</span> 
                                            </td>
                                        </tr>
                                        <?php
}
$sql ="SELECT SUM(shoe_totalprice) AS value_sum FROM orderclass WHERE `order_sessions` = '$sessionid' ";
$result = mysqli_query($conn,$sql); 
$row = $row = mysqli_fetch_array($result);
$sum = $row['value_sum'];
?>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <span class="amount">Total : <?=$sum?>&nbspVND&nbsp</span>
                                                <form method="POST" action="Payment.php">
                                                    <?php
$sql ="SELECT * FROM `orderclass` WHERE `order_sessions` = '$sessionid' ";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)){
?>
                                                <input hidden type="text" name="oid" value="<?=$row["order_id"]?>">
<?php }?>
                                                <input hidden type="text" name="total" value="<?=$sum?>">
                                                <input type="Submit" value="Payment">
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

<!--                            <div class="cart-collaterals">


                            <div class="cross-sells">
                                <h2>You may be interested in...</h2>
                                <ul class="products">
                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-2.jpg">
                                            <h3>Ship Your Idea</h3>
                                            <span class="price"><span class="amount">£20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                    </li>
                                </ul>
                            </div>
                            </div>-->
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
   <div class="brands-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="brand-list">
                            <a href="#"><img src="img/brand1.png"></a>
                            <a href="#"><img src="img/brand2.png"></a>
                            <a href="#"><img src="img/brand3.png"></a>
                            <a href="#"><img src="img/brand4.png"></a>
                            <a href="#"><img src="img/brand5.png"></a>
                        </div>
                </div>
            </div>
        </div>
    </div> 


   <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>Store</span></h2>
                        <p>Cai gi cung co</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Mobile Phones</a></li>
                            <li><a href="#">TVs</a></li>
                            <li><a href="#">Laptops</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>