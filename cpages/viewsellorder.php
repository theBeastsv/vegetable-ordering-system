 <div class="container" style="padding-top:15px;">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3" style="padding:5px;">
                          
                          <div class="blog-row"  style="padding:15px;">
                          <?
						  $myorders=showorderdetail_seller();
						   echo $myorders;
						?>
						</div>
                       
                        <div class="mb10"></div><!-- space -->
 
                            </div><!-- End .row -->
 

                        <aside class="col-md-3 col-md-pull-9 sidebar">
                           
                           <? include("incfiles/myaccount_ader.php");?><!-- End .widget --><!-- End .widget --><!-- End .widget -->
                        </aside>
                    </div><!-- End .row -->
                </div>