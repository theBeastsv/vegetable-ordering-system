<? session_start();
include("../config/config.php"); 
include("../config/masterconfig.php"); 
$myIp= ipCheck() ;
$pid=$_REQUEST['pid'];
 $mysession_id=session_id();
$masterUserId=$_SESSION['KesOnUserId'];
 
$buyerid=$masterUserId;
 
$dateceated=date("Y-m-d G:i:s");


$marts="delete from temp_order_cart WHERE productid='$pid' AND (buyerid='$buyerid' OR sessionvalue='$mysession_id') AND isconvertedtoorder='0' AND createdip='$myIp'";
 
	$myquery=$conn->query($marts); 
 
$myIp= ipCheck() ;
 $masterUserId=$_SESSION['KesOnUserId'];
if($masterUserId==''){
$buyerid=0;
}else{
$buyerid=$masterUserId;
	}
$sessionvalue=session_id();
 $mySqlKart = "SELECT * FROM temp_order_cart WHERE   createdip='$myIp' AND  (buyerid='$buyerid' OR sessionvalue='$sessionvalue') AND isconvertedtoorder='0'";
 		$mySKLkart=$conn->query($mySqlKart);
		$myKartdara= $mySKLkart->fetchAll()  ;
 		$KartRowfound = $mySKLkart->rowCount();
		
		
		
?><div class="container" id="masterconf">
                    <div class="table-responsive">
                      <form id="mycartho" action="forms/upkart.php" method="post" enctype="multipart/form-data"><table class="table table-bordered">
                            <thead>
                                <tr>
                                     <th style="width:40%">Product</th> 
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <? if($KartRowfound>0){
								 
								$fincart='';
								$overallamount=0;
								$tins=0;
                                foreach( $myKartdara as $KrtRow ) {
										$mycart_productid=$KrtRow['productid'];
										$productIdcode =str_pad($mycart_productid, 10, "0", STR_PAD_LEFT);
										$mycart_quantity=$KrtRow['quantity'];
										$mycart_rowId=$KrtRow['rowId'];
										$mycart_mrp_payable=$KrtRow['mrp_payable_after_discount'];
										$mrp_sale=$KrtRow['mrp_sale'];
										$mycart_selectedcolor=$KrtRow['selectedcolor'];
										$mycart_selectedsize=$KrtRow['selectedsize'];
										$totalAmount_thisprd=$mycart_mrp_payable*$mycart_quantity;
										$overallamount=$overallamount+$totalAmount_thisprd;
										 $limits=1;
										///////////// PRODUCT NAME ///////////////
										$mcxvshow= show_selecttable($debug,$limitstring,$conn,'productmaster','rowId,product_name,in_stock_quantity','WHERE rowId=\''.$mycart_productid.'\'',$limits,1,' rowId ASC');
										foreach( $mcxvshow as $sxsxgbw ) { 
										$product_name=$sxsxgbw['product_name'];
										$in_stock_quantity=$sxsxgbw['in_stock_quantity'];
										}
										///////////// PRODUCT NAME ///////////////
										
										///////////// PRODUCT PHOTO ///////////////
										
										$mcxvshow= show_selecttable($debug,$limitstring,$conn,'product_image','rowId,imagename_tr','WHERE productid=\''.$mycart_productid.'\'',$limits,1,' rowId ASC');
										foreach( $mcxvshow as $ssxgbw ) { 
										$imagename_tr=$ssxgbw['imagename_tr'];
										}
										///////////// PRODUCT PHOTO ///////////////
										
										
										$fincart=$fincart.' <tr>
                                     <td class="info-col"><input name="temordId[]" type="hidden" value="'.$mycart_rowId.'">
                                        <div class="product">
                                            <figure>
                                                <a href="product.php?prdId='.$mycart_productid.'" target="_blank" title="'.$product_name.'">
                                                    <img src="'.$imagename_tr.'" alt="Product image" class="product-image"> 
                                                </a>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title"><a href="product.php?prdId='.$mycart_productid.'" target="_blank">'.ucwords(strtolower($product_name)).'</a></h3>
                                                <ul>
                                                    <li><span>Code:</span> '.$productIdcode.'</li>
													 <li><span>Size:</span> '.strtoupper($mycart_selectedsize).'</li>
                                                    <li><span>Color:</span> '.$mycart_selectedcolor.'</li> 
													<li><span>Price:</span> '.$mrp_sale.'</li>
                                                </ul>
                                            </div>
                                        </div><!-- End .product -->
                                    </td>  
                                    <td class="price-col">'.CURRENCY_DEFAULT.''.$mycart_mrp_payable.'</td>
                                    <td class="quantity-col">
                                       <input name="quanti'.$mycart_rowId.'" id="quanti'.$mycart_rowId.'" type="text" class="form-control validate[required,custom[integer],min[0],max['.$in_stock_quantity.']] " value="'.$mycart_quantity.'"  >
                                    </td>
                                    <td class="subtotal-col">'.CURRENCY_DEFAULT.''.$totalAmount_thisprd.'</td>
                                    <td class="delete-col">
                                        <a href="javascript:void(0)" onClick="jistremcart(\''.$mycart_productid.'\');" class="delete-btn" title="Delete product"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>';	
											 
								}
								 $overallamount = number_format($overallamount, 2, '.', '');
								 $shipping_price=getShippingPrice($overallamount);
								 $netpayable=$overallamount+$shipping_price;
								 $netpayable = number_format($netpayable, 2, '.', '');
							}
							
							echo $fincart;
							
							
								?>
                                
                                  <tfoot>
                            <tr>
                            	<td colspan="5" align="right"><input name="" class="btn btn-custom btn-sm" type="submit" value="Update Cart"></td>
                            </tr>
                            </tfoot>
                            </tbody>
                        </table>
                        </form>
                    </div><!-- End .table-responsive -->
                </div><!-- End .container -->

                <div class="mb10"></div><!-- margin -->

                <? include("../cpages/billingshipping.php");?><!-- End .container -->