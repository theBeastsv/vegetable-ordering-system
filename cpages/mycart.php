<?
$myIp= ipCheck() ;
 $masterUserId=$_SESSION['KesOnUserId'];
if($masterUserId==''){
$buyerid=0;
}else{
$buyerid=$masterUserId;
	}
$sessionvalue=session_id();
 $mycartsql = "SELECT * FROM temp_order_cart WHERE   createdip='$myIp' AND  (buyerid='$buyerid' OR sessionvalue='$sessionvalue') AND isconvertedtoorder='0'";
  
		$mycartsqlquery=$conn->query($mycartsql);
		$myCartdara= $mycartsqlquery->fetchAll()  ;
 		$xrows_found = $mycartsqlquery->rowCount();
		
		

?><div class="dropdown header-dropdown cart-dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>
                                    <i class="fa fa-shopping-bag"></i>
                                    <span class="dcart-total-count"><?=$xrows_found ;?></span>
                                </span>
                            </a>
							<? if($xrows_found>0){
								 
								$fincart='';
								$overallamount=0;
								$tins=0;
                                foreach( $myCartdara as $cartRow ) {
										$mycart_productid=$cartRow['productid'];
										$mycart_quantity=$cartRow['quantity'];
										$mycart_mrp_payable=$cartRow['mrp_payable_after_discount'];
										$mycart_selectedcolor=$cartRow['selectedcolor'];
										$mycart_selectedsize=$cartRow['selectedsize'];
										$totalAmount_thisprd=$mycart_mrp_payable*$mycart_quantity;
										$overallamount=$overallamount+$totalAmount_thisprd;
										
										$imageurl= getPicForThisProduct($mycart_productid,'THUMB');
										$prdName=getProductName($mycart_productid);
										
										if($tins<3){
										$fincart=$fincart.'<div class="product">
                                        <figure>
                                            <a href="#">
                                                <img src="'.$imageurl.'" alt="Product">
                                            </a>
                                        </figure>
                                        <div class="product-meta">
                                            <h5 class="product-title">
                                                <a href="#">'.$prdName.'</a>
                                            </h5>
                                            <div class="product-price-container">
                                                <span class="product-price">'.CURRENCY_DEFAULT.''.$mycart_mrp_payable.'</span>
                                            </div><!-- End .product-price-container -->
                                            <span class="product-quantity">x '.$mycart_quantity.'</span>
                                        </div><!-- End .product-meta -->
                                        <a href="#" class="delete-btn" title="Delete Product"><i class="fa fa-trash"></i></a>
                                    </div><!-- End .product -->';
										}else{
										$fincart= '<div class="product">
                                        <figure>
                                            <a href="#">
                                                <img src="assets/images/products/thumbs/product1.jpg" alt="Product">
                                            </a>
                                        </figure>
                                        <div class="product-meta">
                                            <h5 class="product-title">
                                                <a href="#">MULTIPLE PRODUCTS</a>
                                            </h5>
                                           
                                            <span class="product-quantity">Click HERE to view Cart</span>
                                        </div><!-- End .product-meta -->
                                        
                                    </div><!-- End .product -->';	
											}
											$tins=$tins+1;
								}
								 $overallamount = number_format($overallamount, 2, '.', '');
								 $shipping_price=getShippingPrice($overallamount);
								 $netpayable=$overallamount+$shipping_price;
								 $netpayable = number_format($netpayable, 2, '.', '');
		
								?>
                            <div class="dropdown-menu">
                                <p><?=$xrows_found;?> item(s) in your cart - <span><?=CURRENCY_DEFAULT;?> <?=$overallamount;?></span></p>
                                <div class="dcart-products">
                               <?
								echo $fincart;
								?>
                                    
                                    
                                </div><!-- End .dcart-products -->

                                <div class="dcart-action-container">
                                    <div class="dcart-action-info">
                                        <p>Shipping: <span><?=CURRENCY_DEFAULT;?><?=$shipping_price;?></span></p>
                                        <p>Tax: <span>Free</span></p>
                                        <p>Total: <span><?=CURRENCY_DEFAULT;?><?=$overallamount;?></span></p>
                                        <p>Payable: <span><?=CURRENCY_DEFAULT;?><?=$netpayable;?></span></p>
                                    </div><!-- End .dcart-action-info -->

                                    <div class="dcart-action">
                                        <a href="mycart.php" class="btn btn-gray btn-sm">View Cart</a>
                                        <a href="checkout.php" class="btn btn-custom btn-sm">Checkout</a>
                                    </div><!-- End .dcart-action -->
                                </div><!-- End .dcart-action-container -->
                            </div><!-- End .dropdown-menu -->
                            <? } ?>
                        </div>