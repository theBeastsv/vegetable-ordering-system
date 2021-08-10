<header class="header sticky-header">
                <div class="header-top">
                    <div class="container">
                        <div class="dropdown header-dropdown pull-right">
                            <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Merchant</a>

                            <ul class="dropdown-menu">
                                <li><a href="desiregister.php">Seller</a></li>
                                <li><a href="#">Logistic</a></li>
                                <li><a href="adminp/login.php">Admin</a></li> 
                            </ul>
                        </div><!-- End .header-dropdown -->

                        <div class="dropdown header-dropdown pull-right">
                            <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Currency</a>

                            <ul class="dropdown-menu">
                                <li><a href="#">Rupees</a></li>
                                
                            </ul>
                        </div><!-- End .header-dropdown -->

                        <ul class="top-menu pull-right"><!--
                            <li class="active"><a href="#">Home</a></li>-->
                            <li><a href="termscon.php">Terms & Condition</a></li>
                            <li><a href="contactus.php">Contact</a></li>
                        </ul>

                       
                            <?
							 
							if($_SESSION['KesOnUserId']==''){
								echo ' <div class="top-text pull-left hidden-sm hidden-xs">
                            We create the best templates for you. Join us Now!
                        </div><!-- End .top-text -->

                        <div class="top-links pull-left"><a href="login.php">Login</a>
                            <a href="register.php">Register</a></div>';
							}else{
								echo ' <div class="top-text pull-left hidden-sm hidden-xs">
                            Welcome <strong>'.$_SESSION['KesUseFname'].'</strong>
                        </div><!-- End .top-text -->

                        <div class="top-links pull-left"><a href="myaccount.php">My Account</a> <a href="logout.php">Logout</a></div>';
								}
							?>
                        <!-- End .top-links -->
                    </div><!-- End .container -->
                </div><!-- End .header-top -->

                <div class="header-inner">
                    <div class="container">
                        <a href="index.php" class="site-logo" title="Simple - Multipurpose Template">
                           <img src="assets/images/logo.png" alt="Simple Logo">
                            <span class="sr-only">Vegitable Order</span>
                        </a>
					<div  id="mycartsd">
                        <div class="dropdown header-dropdown cart-dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>
                                    <i class="fa fa-shopping-bag"></i>
                                    <span class="dcart-total-count">0</span>
                                </span>
                            </a>

                            <div class="dropdown-menu">
                                <p>0 item(s) in your cart </p>
                                <div class="dcart-products">
                                 </div><!-- End .dcart-products --><!-- End .dcart-action-container -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cartdropdown -->
</div>
                        <div class="header-info-boxes">
                            <div class="header-info-box">
                                <i class="fa fa-truck"></i>
                                <div class="info-box-title">Track Order</div>
                                <p>No charge for shipping</p>
                            </div><!-- End .header-info-box -->

                            <div class="header-info-box">
                                <i class="fa fa-support"></i>
                                <div class="info-box-title"></div>
                                
                            </div><!-- End .header-info-box -->

                            <div class="header-info-box">
                                <i class="fa fa-phone"></i>
                                <div class="info-box-title">Support</div>
                                <p><a href="tel:<?=COMP_SUPNUM;?>"><?=COMP_SUPNUM;?></a></p>
                            </div><!-- End .header-info-box -->
                        </div><!-- End header-info-boxes -->
                    </div><!-- End .container -->
                </div><!-- End .header-inner -->

                <div class="header-bottom">
                    <div class="container">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-container" aria-expanded="false">
                            <span class="toggle-text">Menu</span>
                            <span class="toggle-wrapper">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="main-nav-container">
                          <ul class="nav navbar-nav">
                              
                                <li class="dropdown">
                                    <a href="index.php">Home </a> </li>
                                <li style="background-color:#ff84d5"><a href="listalldesigners.php">Seller</a></li> 
                              
                                <?
 $mycategory= getCategory(0);
		echo $mycategory;
								?> 
                                       
            
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Right  Sidebar<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Four Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Left  Sidebar<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Four Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">No Sidebar<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Five Columns</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                       <li><a href="#">Put on Auction</a></li>
                                    </ul>
                                </li>
                               <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact<span class="angle"></span></a>
                                  <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Contact Us</a></li>
                                      <li><a href="#">Support</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown search-dropdown pull-right">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="visible-inline-xs">Search</span><i class="fa fa-search"></i></a>
                                  <div class="dropdown-menu " role="menu">
                                      <form action="#">
                                          <input type="search" class="form-control" placeholder="Search..." required>
                                          <button type="submit" class="btn btn-custom"><i class="fa fa-search"></i></button>
                                      </form>
                                  </div>
                              </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- End .container -->
                </div><!-- End .header-bottom -->
            </header><!-- End .header -->