<?
$KesOnSELLERID=$_SESSION['KesOnSELLERID'];
 ?><div class="container" style="padding-top:15px;">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3" style="padding:5px;">
                          <h2>My Products > Edit Product</h2>
                          
                          <div class="row">
                         <div class="col-md-12"> 
                             <div role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                <li class=""><a href="myproduct.php" >My Products</a></li>
                                <li class=""><a href="addnewproduct.php">Add New Products</a></li>
                                <li class="active"><a href="myorderssel.php">My Orders</a></li>
<li class=""><a href="sellerprofileed.php">Edit Seller Profile</a></li>
                                </ul>

                                <!-- Tab Panes -->
                                <div class="tab-content">
                                
                          <div class="blog-row"  style="padding:15px;">
                          <? $getAllOrder=getMyAllOrderHistory(); 
						  echo $getAllOrder;
						  ?>
                            </div>
                            </div><!-- End .row -->
  </div><!-- End .tab-content -->
                            </div><!-- end role[tabpanel] -->

                        </div>
                    </div>

                        <aside class="col-md-3 col-md-pull-9 sidebar">
                           
                           <? include("incfiles/myaccount_ader.php");?><!-- End .widget --><!-- End .widget --><!-- End .widget -->
                        </aside>
                    </div><!-- End .row -->
                </div>