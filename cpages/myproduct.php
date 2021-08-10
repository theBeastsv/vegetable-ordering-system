<?
$myselelrId=$_SESSION['KesOnUserId'];
// CHECK SELLER ACCOUNT ACTIVATED OR NOT

    $CheckSellersql = "SELECT * FROM seller_master WHERE buyerId='$myselelrId'";
   	$MySellerActivated=$conn->query($CheckSellersql);
	$MySellerActivateds= $MySellerActivated->fetchAll()  ;
	
	$ifSeller = $MySellerActivated->rowCount();
	
	if($ifSeller==0){
		$mymessage='<div class="alert alert-danger fade in"> 
     <strong>Warning!</strong> you are not registered as seller . if you want to sell products online click here to <a href="enseller.php" class="alert-link">Enroll as seller </a> 
 </div>';
	}else{
		$tabId=1;
		  $mymessage=showAllproducts($tabId);
		
		}
	
?><div class="container" style="padding-top:15px;">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3" style="padding:5px;">
                          <h2>My Products</h2>
                          <div class="blog-row"  style="padding:15px;">
                          <?
                        
						  echo $mymessage;
						  ?>
                           </div>
                       
                        <div class="mb10"></div><!-- space -->
 
                            </div><!-- End .row -->
 

                        <aside class="col-md-3 col-md-pull-9 sidebar">
                           
                           <? include("incfiles/myaccount_ader.php");?><!-- End .widget --><!-- End .widget --><!-- End .widget -->
                        </aside>
                    </div><!-- End .row -->
                </div>