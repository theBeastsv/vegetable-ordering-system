<? 
	
	$pagegetdata=$_REQUEST['toeditdata']; 
	 
	$mafvshow= show_selecttable($debug,$limitstring,$conn,'invoice_master','*',"WHERE rowId=\"$pagegetdata\"",$limit,1,' rowId ASC');
	
	foreach( $mafvshow as $row ) {} ?>
	
				<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-external-link-square"></i>invoicemaster<div class="panel-tools"></div>
								</div>
								<div class="panel-body">
			   <form class="form-horizontal" role="form" method="post" action="forms/ediinvoicemaster.php">
			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />
			   <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Orderid
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Orderid" class="form-control  validate[required] text-input" id="orderid" name="orderid" value="<?=$row['orderid'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Userid
											</label>
											<div class="col-sm-9">
												
<div class="input-group">
		<select class="form-control  validate[required] text-input" id="userid" name="userid"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'user_buyer','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
			if($tats==$row['userid']){$simd="selected";}else{$simd="";}
 			echo '<option value="'.$tats.'" '.$simd .'>'.$tats.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Total_order_price_withoutshipping
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Total_order_price_withoutshipping" class="form-control  validate[required] text-input" id="total_order_price_withoutshipping" name="total_order_price_withoutshipping" value="<?=$row['total_order_price_withoutshipping'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Total_order_price
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Total_order_price" class="form-control  validate[required] text-input" id="total_order_price" name="total_order_price" value="<?=$row['total_order_price'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Shipping_price
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Shipping_price" class="form-control  validate[required] text-input" id="shipping_price" name="shipping_price" value="<?=$row['shipping_price'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Orderplaceing_name
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Orderplaceing_name" class="form-control  validate[required] text-input" id="orderplaceing_name" name="orderplaceing_name" value="<?=$row['orderplaceing_name'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Shipp_orderplaceing_name
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Shipp_orderplaceing_name" class="form-control  validate[required] text-input" id="shipp_orderplaceing_name" name="shipp_orderplaceing_name" value="<?=$row['shipp_orderplaceing_name'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Shipp_companyname
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Shipp_companyname" class="form-control  validate[required] text-input" id="shipp_companyname" name="shipp_companyname" value="<?=$row['shipp_companyname'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Companyname
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Companyname" class="form-control  validate[required] text-input" id="companyname" name="companyname" value="<?=$row['companyname'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Bill_address
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Bill_address" class="form-control  validate[required] text-input" id="bill_address" name="bill_address" value="<?=$row['bill_address'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Shipp_address
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Shipp_address" class="form-control  validate[required] text-input" id="shipp_address" name="shipp_address" value="<?=$row['shipp_address'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Bill_citys
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Bill_citys" class="form-control  validate[required] text-input" id="bill_citys" name="bill_citys" value="<?=$row['bill_citys'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Shipp_citys
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Shipp_citys" class="form-control  validate[required] text-input" id="shipp_citys" name="shipp_citys" value="<?=$row['shipp_citys'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Bill_states
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Bill_states" class="form-control  validate[required] text-input" id="bill_states" name="bill_states" value="<?=$row['bill_states'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Shipp_states
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Shipp_states" class="form-control  validate[required] text-input" id="shipp_states" name="shipp_states" value="<?=$row['shipp_states'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Bill_countrys
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Bill_countrys" class="form-control  validate[required] text-input" id="bill_countrys" name="bill_countrys" value="<?=$row['bill_countrys'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Shipp_countrys
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Shipp_countrys" class="form-control  validate[required] text-input" id="shipp_countrys" name="shipp_countrys" value="<?=$row['shipp_countrys'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Bill_postalcode
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Bill_postalcode" class="form-control  validate[required] text-input" id="bill_postalcode" name="bill_postalcode" value="<?=$row['bill_postalcode'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Shipp_postalcode
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Shipp_postalcode" class="form-control  validate[required] text-input" id="shipp_postalcode" name="shipp_postalcode" value="<?=$row['shipp_postalcode'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Bill_emailid
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Bill_emailid" class="form-control  validate[required] text-input" id="bill_emailid" name="bill_emailid" value="<?=$row['bill_emailid'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Shipp_emailid
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Shipp_emailid" class="form-control  validate[required] text-input" id="shipp_emailid" name="shipp_emailid" value="<?=$row['shipp_emailid'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Bill_mobilenumbers
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Bill_mobilenumbers" class="form-control  validate[required] text-input" id="bill_mobilenumbers" name="bill_mobilenumbers" value="<?=$row['bill_mobilenumbers'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Shipp_mobilenumbers
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Shipp_mobilenumbers" class="form-control  validate[required] text-input" id="shipp_mobilenumbers" name="shipp_mobilenumbers" value="<?=$row['shipp_mobilenumbers'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Dateceated
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Dateceated" class="form-control  validate[required] text-input" id="dateceated" name="dateceated" value="<?=$row['dateceated'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Createdip
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Createdip" class="form-control  validate[required] text-input" id="createdip" name="createdip" value="<?=$row['createdip'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Curwek
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Curwek" class="form-control  validate[required] text-input" id="curwek" name="curwek" value="<?=$row['curwek'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Orderadditionalinfo
											</label>
											<div class="col-sm-9">
												<textarea class="form-control  validate[required] text-input" id="orderadditionalinfo" name="orderadditionalinfo"  placeholder="Orderadditionalinfo" ><?=$row['orderadditionalinfo'];?></textarea> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Refaddressid
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Refaddressid" class="form-control  validate[required] text-input" id="refaddressid" name="refaddressid" value="<?=$row['refaddressid'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Paymentstatus
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Paymentstatus" class="form-control  validate[required] text-input" id="paymentstatus" name="paymentstatus" value="<?=$row['paymentstatus'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Paymenttype
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Paymenttype" class="form-control  validate[required] text-input" id="paymenttype" name="paymenttype" value="<?=$row['paymenttype'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Payment_comment
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Payment_comment" class="form-control  validate[required] text-input" id="payment_comment" name="payment_comment" value="<?=$row['payment_comment'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Commentsorder
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Commentsorder" class="form-control  validate[required] text-input" id="commentsorder" name="commentsorder" value="<?=$row['commentsorder'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Carnumber
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Carnumber" class="form-control  validate[required] text-input" id="carnumber" name="carnumber" value="<?=$row['carnumber'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Nameoncard
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Nameoncard" class="form-control  validate[required] text-input" id="nameoncard" name="nameoncard" value="<?=$row['nameoncard'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Expiremonth
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Expiremonth" class="form-control  validate[required] text-input" id="expiremonth" name="expiremonth" value="<?=$row['expiremonth'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Xxyear
											</label>
											<div class="col-sm-9">
												
<div class="input-group"><input class="form-control validate[required] text-input date-picker" type="text" data-date-viewmode="years" data-date-format="yyyy-mm-dd"  id="xxyear" name="xxyear" value="<?=$row['xxyear'];?>"><span class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Verificationcode
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Verificationcode" class="form-control  validate[required] text-input" id="verificationcode" name="verificationcode" value="<?=$row['verificationcode'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Order_confirmed
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Order_confirmed" class="form-control  validate[required] text-input" id="order_confirmed" name="order_confirmed" value="<?=$row['order_confirmed'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Confirmationtime
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Confirmationtime" class="form-control  validate[required] text-input" id="confirmationtime" name="confirmationtime" value="<?=$row['confirmationtime'];?>"> 
											</div>
										</div><div class="form-group">
													<div class="col-sm-2 col-sm-offset-8">
														<button class="btn btn-blue next-step btn-block">
															submit <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div></form></div>
												</div>
												</div>
												</div>