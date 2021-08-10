<? 
$MasterOrderIdjk=$_SESSION['MasterOrderIdjk'];
$KesOnUserId	=$_SESSION['KesOnUserId'];
$userCity=			$_SESSION['KesUsemastercity']; 
$userState=		$_SESSION['KesUsestates'];
$userCountry=		$_SESSION['KesUsecountrys'];
 
$mcxvshow= show_selecttable($debug,$limitstring,$conn,'addressbillship','*','WHERE createdby=\''.$KesOnUserId.'\' AND typeofaddress=\'billing\'',$limit,1,' rowId ASC');
		foreach( $mcxvshow as $ssxgbw ) { 
			$Bill_names=$ssxgbw['names'];
			$Bill_emailId=$ssxgbw['emailId'];
			$Bill_mobilenumber=$ssxgbw['mobilenumber'];
			$Bill_address=$ssxgbw['address'];
			$Bill_citys=$ssxgbw['citys'];
			$Bill_states=$ssxgbw['states'];
			$Bill_countrys=$ssxgbw['countrys'];
			$Bill_postalcode=$ssxgbw['postalcode'];
			
			}
			
$mcxvshow= show_selecttable($debug,$limitstring,$conn,'addressbillship','*','WHERE createdby=\''.$KesOnUserId.'\' AND typeofaddress=\'shipping\'',$limit,1,' rowId ASC');
		foreach( $mcxvshow as $ssxgbw ) { 
				$Ship_names=$ssxgbw['names'];
			$Ship_emailId=$ssxgbw['emailId'];
			$Ship_mobilenumber=$ssxgbw['mobilenumber'];
			$Ship_address=$ssxgbw['address'];
			$Ship_citys=$ssxgbw['citys'];
			$Ship_states=$ssxgbw['states'];
			$Ship_countrys=$ssxgbw['countrys'];
			$Ship_postalcode=$ssxgbw['postalcode'];
			}
			


?> <div class="container">
                    <form action="confirmcheckout.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="mb30">Billing Details</h2>

                                <label>First name</label>
                                 <input type="text" class="form-control" placeholder="First name" id="Bill_names" name="Bill_names" value="<?=$Bill_names;?>">

                                

                                <label>Your email</label>
                                <input type="email" class="form-control" placeholder="Your email"  id="Bill_emailId" name="Bill_emailId" value="<?=$Bill_emailId;?>">

                                <label>Your phone</label>
                                <input type="text" class="form-control" placeholder="Your phone"  id="Bill_mobilenumber" name="Bill_mobilenumber" value="<?=$Bill_mobilenumber;?>">

                                <label>Your Address</label>
                                <input type="text" class="form-control" placeholder="Your fax"  id="Bill_address" name="Bill_address" value="<?=$Bill_address;?>">

                               
                                 <label>Your country</label>
                                <select name="countrys" class="form-control validate[required] text-input" id="countrys" onChange="loadallstates_sel(this.value,'laodstate');">
                                        <?
										$rtsh='<option value="">Select One</option>';
                                        $mcxvshow= show_selecttable($debug,$limitstring,$conn,'ud_countries','rowId,name','',$limits,1,' rowId ASC');
										foreach( $mcxvshow as $ssxgbw ) { 
										$name=$ssxgbw['name'];
										$rowIdCountry=$ssxgbw['rowId'];
										if($rowIdCountry==$userCountry){$bullcoun='selected';}else{$bullcoun='';}
										$rtsh=$rtsh.'<option value="'.$rowIdCountry.'" '.$bullcoun.'>'.$name.'</option>';
										}
										echo $rtsh;
										?>
                                    </select>

                                <label>Your region/state</label>
                                 <span id="laodstate"> 
                                 <?
                                 $thcbel='<select id="billingstate" name="billingstate" class="form-control" onChange="loadCityChange_sel(this.value,\'claodccity\')"><option value="">Select State</option>';
$mfshow= show_selecttable($debug,$limitstring,$conn,'ud_states','rowId,name,country_id','WHERE country_id=\''.$userCountry.'\'',$limit,1,' rowId ASC');
		foreach( $mfshow as $sxbw ) { 
			$name			=$sxbw['name'];
			$rowIdStateBill			=$sxbw['rowId'];
			if($rowIdStateBill==$userState){$fullesatet='selected';}else{$fullesatet='';}
			$thcbel=$thcbel.'<option value="'.$rowIdStateBill.'" '.$fullesatet.'> '.$name.'</option>'; 
			}
$thcbel=$thcbel.' </select>';
echo $thcbel;
								 ?></span>

                                <label>Your city</label>
                                  <span id="claodccity"> 
                                  <?
                                  $thbbel='<select id="billingmastercity" name="billingmastercity" class="form-control"><option value="">Select City</option>';
$uhow= show_selecttable($debug,$limitstring,$conn,'ud_cities','rowId,name,state_id','WHERE state_id=\''.$userState.'\'',$limit,1,' rowId ASC');
		foreach( $uhow as $suhow ) { 
			$name			=$suhow['name'];
			$rtcityId			=$suhow['rowId'];
			if($rtcityId==$userCity){$rths='selected';}else{$rths='';}
			$thbbel=$thbbel.'<option value="'.$rtcityId.'" '.$rths.'>'.$name.'</option>'; 
			}
$thbbel=$thbbel.' </select>';			
echo $thbbel;	
								  ?>
                                    </span>
                                
                                
                                <label>Postal Code</label>
                                <input type="text" class="form-control" placeholder="Your password"  id="Bill_postalcode" name="Bill_postalcode" value="<?=$Bill_postalcode;?>">
 								

                                
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6">
                                <h2 class="mb30">Shipping Detail</h2>

                                 <label>First name</label>
                                 <input type="text" class="form-control" placeholder="First name" id="Ship_names" name="Ship_names" value="<?=$Ship_names;?>">

                                

                                <label>Your email</label>
                                <input type="email" class="form-control" placeholder="Your email"  id="Ship_emailId" name="Ship_emailId" value="<?=$Ship_emailId;?>">

                                <label>Your phone</label>
                                <input type="text" class="form-control" placeholder="Your phone"  id="Ship_mobilenumber" name="Ship_mobilenumber" value="<?=$Ship_mobilenumber;?>">

                                <label>Your Address</label>
                                <input type="text" class="form-control" placeholder="Your fax"  id="Ship_address" name="Ship_address" value="<?=$Ship_address;?>">

                               
                                 <label>Your country</label>
                                <select name="shippcountrys" class="form-control validate[required] text-input" id="shippcountrys" onChange="loadallstates_sel(this.value,'shiplaodstate');">
                                        <?
										$rtsh='<option value="">Select One</option>';
                                        $mcxvshow= show_selecttable($debug,$limitstring,$conn,'ud_countries','rowId,name','',$limits,1,' rowId ASC');
										foreach( $mcxvshow as $ssxgbw ) { 
										$name=$ssxgbw['name'];
										$rowShipCounId=$ssxgbw['rowId'];
										if($rowShipCounId==$userCountry){$buxllcoun='selected';}else{$buxllcoun='';}
										$rtsh=$rtsh.'<option value="'.$rowShipCounId.'" '.$buxllcoun.'>'.$name.'</option>';
										}
										echo $rtsh;
										?>
                                    </select>

                                <label>Your region/state</label>
                                 <span id="shiplaodstate">  <?
                                 $thcbel='<select id="shippingstate" name="shippingstate" class="form-control" onChange="loadCityChange_sel(this.value,\'lvaodccity\')"><option value="">Select State</option>';
$mfshow= show_selecttable($debug,$limitstring,$conn,'ud_states','rowId,name,country_id','WHERE country_id=\''.$userCountry.'\'',$limit,1,' rowId ASC');
		foreach( $mfshow as $sxbw ) { 
			$name			=$sxbw['name'];
			$rowIdStateBill			=$sxbw['rowId'];
			if($rowIdStateBill==$userState){$fullesatet='selected';}else{$fullesatet='';}
			$thcbel=$thcbel.'<option value="'.$rowIdStateBill.'" '.$fullesatet.'> '.$name.'</option>'; 
			}
$thcbel=$thcbel.' </select>';
echo $thcbel;
								 ?></span>

                                <label>Your city</label>
                                  <span id="lvaodccity"> 
                                   <?
                                  $txxbbel='<select id="shippingmastercity" name="shippingmastercity" class="form-control"><option value="">Select City</option>';
$uhow= show_selecttable($debug,$limitstring,$conn,'ud_cities','rowId,name,state_id','WHERE state_id=\''.$userState.'\'',$limit,1,' rowId ASC');
		foreach( $uhow as $suhow ) { 
			$name			=$suhow['name'];
			$rtcityId			=$suhow['rowId'];
			if($rtcityId==$userCity){$rths='selected';}else{$rths='';}
			$txxbbel=$txxbbel.'<option value="'.$rtcityId.'" '.$rths.'>'.$name.'</option>'; 
			}
$txxbbel=$txxbbel.' </select>';			
echo $txxbbel;	
								  ?>
                                    </span>
                                
                                
                                <label>Postal Code</label>
                                <input type="text" class="form-control" placeholder="Your password"  id="Ship_postalcode" name="Ship_postalcode" value="<?=$Ship_postalcode;?>">
                                 <div class="mb15"></div><!-- margin -->
 
                            </div><!-- End .col-sm-6 -->
                        </div><!-- end .row -->
                   

                    <div class="mb50"></div><!-- margin -->

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:45%">Product</th> 
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th> 
                                </tr>
                            </thead>
                            <tbody>
                            <?
                            
							$mcxvshow= show_selecttable($debug,$limitstring,$conn,'invoice_master','*','WHERE rowId=\''.$MasterOrderIdjk.'\' AND order_confirmed=\'0\'',$limit,1,' rowId ASC');
		foreach( $mcxvshow as $ssxgbw ) { 
			$total_order_price_withoutshipping=number_format($ssxgbw['total_order_price_withoutshipping'], 2, '.', '');
			$total_order_price=number_format($ssxgbw['total_order_price'], 2, '.', '');
			$shipping_price=number_format($ssxgbw['shipping_price'], 2, '.', '');
			 
		}
		
							$mcxvshow= show_selecttable($debug,$limitstring,$conn,'invoice_detail','*','WHERE invoiceid=\''.$MasterOrderIdjk.'\' AND order_confirmed=\'0\'',$limit,1,' rowId ASC');
		foreach( $mcxvshow as $ssxgbw ) { 
			$prowIdid=$ssxgbw['rowId'];
			$productid=$ssxgbw['productid'];
			$productname=$ssxgbw['productname'];
			$prdcolor=$ssxgbw['prdcolor'];
			$prdsize=$ssxgbw['prdsize'];
			$quantity=$ssxgbw['quantity'];
			$unitprice=$ssxgbw['unitprice'];
			$unitpricediscoutn=$ssxgbw['unitpricediscoutn'];
			$discount_price=$ssxgbw['discount_price'];
			$discount_id=$ssxgbw['discount_id'];
			$payableprice=$ssxgbw['payableprice']; 
			$myPic=getPicForThisProduct($productid,'THUMB');
			$productIdcode =str_pad($productid, 10, "0", STR_PAD_LEFT);
			$payableprice=$payableprice*$quantity;
			$mcxvshow= show_selecttable($debug,$limitstring,$conn,'productmaster','rowId,product_name,in_stock_quantity','WHERE rowId=\''.$productid.'\'',$limits,1,' rowId ASC');
										foreach( $mcxvshow as $sxsxgbw ) { 
										$product_name=$sxsxgbw['product_name'];
										$in_stock_quantity=$sxsxgbw['in_stock_quantity'];
										}
										
										
			echo ' <tr>
                                    <td class="info-col">
                                        <div class="product">
                                            <figure>
                                                <a href="product.php" title="'.$productname.'">
                                                    <img src="'.$myPic.'" alt="'.$productname.'" class="product-image"> 
                                                </a>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title"><a href="product.php">'.$productname.'</a></h3>
                                                <ul>
                                                    <li><span>Code:</span> '.$productIdcode.'</li>
													<li><span>Size:</span> '.strtoupper($prdsize).'</li>
                                                    <li><span>Color:</span>  '.strtoupper($prdcolor).'</li>
                                                    <li align="right"><span>Price:</span>  '.number_format($unitprice, 2, '.', '').'</li>
                                                </ul>
                                            </div>
                                        </div><!-- End .product -->
                                    </td> 
                                    <td class="price-col" align="right">'.CURRENCY_DEFAULT.''.$unitpricediscoutn.'</td>
                                     <td class="quantity-col">
                                        '.$quantity.' 
                                    </td>
                                    <td class="subtotal-col" align="right">'.CURRENCY_DEFAULT.''.number_format($payableprice, 2, '.', '').'</td>
                                    
                                </tr>';
			}
			
			
							?>
                               
                               
                                <tr class="total-row">
                                    <td>Subtotal:</td>
                                    <td colspan="3" align="right"><?=CURRENCY_DEFAULT;?><?=number_format($total_order_price_withoutshipping, 2, '.', '');?></td>
                                </tr>
                                <tr class="total-row">
                                    <td>Shipping:</td>
                                    <td colspan="3" align="right"><?=CURRENCY_DEFAULT;?><?=number_format($shipping_price, 2, '.', '');?></td>
                                </tr>
                                <tr class="total-row">
                                    <td>Tax:</td>
                                    <td colspan="3" align="right"><?=CURRENCY_DEFAULT;?>0.00</td>
                                </tr>
                                <tr class="total-row">
                                    <td>Total:</td>
                                    <td colspan="3" align="right"><?=CURRENCY_DEFAULT;?><?=number_format($total_order_price, 2, '.', '');?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- End .table-responsive -->

                    <div class="checkout-action text-center">
                        <a href="category.php" class="btn btn-black">Continue Shopping</a>
                        <button type="submit" class="btn btn-custom">CONFIRM ORDER</button>
                    </div><!-- End .text-center -->
 </form>
                    <div class="mb90"></div><!-- margin -->
                </div><!-- End .container -->