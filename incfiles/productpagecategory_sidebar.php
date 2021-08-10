<aside class="col-md-3 sidebar shop-sidebar home-shop-sidebar">
<div class="widget brands-widget">
    <h3 class="widget-title">ACTION</h3>
    <ul>
        <?
         
							if($_SESSION['KesOnUserId']==''){
								echo '<li><a href="login.php">Login</a></li>
								<li><a href="register.php">Register</a></li>';
							}else{
								echo ' <li><a href="myaccount.php">My Account</a></li>
								<li><a href="myprofile.php">Profile</a></li>
								<li><a href="mycart.php">My Cart</a></li>
								<li><a href="myorders.php">My ORDERS</a></li>
								<li><a href="trackorder.php">Track Order</a></li>
								<li><a href="logout.php">Logout</a></li>
								';
								}
							?>
                            
		 
          
    </ul>
</div>
<div class="widget category-widget">
    <h3 class="widget-title">Categories</h3>
   
    <ul>
     <?
	$bsbs=getCategory_side(0);
	echo $bsbs;
    ?>
       
    </ul>
</div><!-- End .widget -->

<!-- End .widget --><!-- End .widget -->

<div class="widget">
    <div class="owl-carousel banner-widget-slider">
        <div class="banner">
            <a href="#" title="Shop Now">
                <img src="assets/images/banners/banner1.jpg" alt="Banner">
            </a>
        </div><!-- End .banner -->

        <div class="banner">
            <a href="#" title="Shop Now">
                <img src="assets/images/banners/banner2.jpg" alt="Banner">
            </a>
        </div><!-- End .banner -->
    </div><!-- End .banner-widget-slider -->
</div><!-- End .widget -->
</aside>