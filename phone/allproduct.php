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
session_start();
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
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php"><img src=""></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Cart<i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
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
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="allproduct.php">All Product</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="ProductSearch.php">Search</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
<?php
 include 'pagination.php';
while ($row = mysqli_fetch_assoc($result)){

            
?>
                <div class="col-md-3 col-sm-6">

                    <div class="single-shop-product">

                        <div class="product-upper">

                            <img src="img/<?=$row["shoe_image"]?>" alt="">
                        </div>
                        <h2><a href="ProductDetail.php?id=<?=$row["shoe_id"]?>&brand=<?=$row["shoes_brand"]?>&type=<?=$row["shoe_type"]?>&color=<?=$row["shoe_color"]?>"><?=$row["shoe_name"]?>(<?=$row["shoe_color"]?>)</a></h2>
                        <div class="product-carousel-price">
                            <ins><?=$row["shoe_price"]?></ins>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" href="ProductDetail.php?id=<?=$row["shoe_id"]?>&brand=<?=$row["shoes_brand"]?>&type=<?=$row["shoe_type"]?>&color=<?=$row["shoe_color"]?>">Details</a>
   
                        </div>                       
                    </div>
                </div>
                <?php
            }
                ?>
            </div>
        </div>
</div>
   <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
<?php include 'pagination.php';
?>
                            <li>
                            <?php 
            if ($current_page > 1 && $total_page > 1){
                $previous_page = $current_page-1;
                echo '<a href="allproduct.php?page=<?=$previous_page?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>';
            }
            for ($i = 1; $i <= $total_page; $i++){
                if ($i == $current_page){
                    echo '<span>'.$i.'</span>';
                }
                else{
                    echo '<a href="allproduct.php?page='.$i.'">'.$i.'</a>';
                }
            }
            if ($current_page < $total_page && $total_page > 1){
                $next_page = $current_page+1;
                echo '<a href="allproduct.php?page=<?=$next_page?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>';
            }
           ?>
                            </li>                   
                          </ul>
                        </nav>                        
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
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>