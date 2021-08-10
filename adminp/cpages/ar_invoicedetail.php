
<div class="row">
<div class="col-sm-12">
<div class="panel panel-default">
<div class="panel-heading">
	 <i class="fa fa-external-link-square"></i> invoicedetail <div class="panel-tools"> </div>
 </div>
 <div class="panel-body">
 <form class="form-horizontal" role="form" method="post" action="forms/invoicedetail.php"><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Invoiceid
											</label>
											<div class="col-sm-9">
												<div class="input-group">
		<select class="form-control  validate[required] text-input" id="invoiceid" name="invoiceid"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'invoice_master','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
 			echo '<option value="'.$tats.'">'.$tats.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Invoicestring
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Invoicestring" class="form-control  validate[required] text-input" id="invoicestring" name="invoicestring">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Buyerid
											</label>
											<div class="col-sm-9">
												<div class="input-group">
		<select class="form-control  validate[required] text-input" id="buyerid" name="buyerid"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'user_buyer','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
 			echo '<option value="'.$tats.'">'.$tats.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Seller Id
											</label>
											<div class="col-sm-9">
												<div class="input-group">
		<select class="form-control  validate[required] text-input" id="seller_id" name="seller_id"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'seller_master','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
 			echo '<option value="'.$tats.'">'.$tats.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Productid
											</label>
											<div class="col-sm-9">
												<div class="input-group">
		<select class="form-control  validate[required] text-input" id="productid" name="productid"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'productmaster','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
 			echo '<option value="'.$tats.'">'.$tats.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Productname
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Productname" class="form-control  validate[required] text-input" id="productname" name="productname">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Prdcolor
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Prdcolor" class="form-control  validate[required] text-input" id="prdcolor" name="prdcolor">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Prdsize
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Prdsize" class="form-control  validate[required] text-input" id="prdsize" name="prdsize">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Quantity
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Quantity" class="form-control  validate[required] text-input" id="quantity" name="quantity">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Unitprice
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Unitprice" class="form-control  validate[required] text-input" id="unitprice" name="unitprice">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Unitpricediscoutn
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Unitpricediscoutn" class="form-control  validate[required] text-input" id="unitpricediscoutn" name="unitpricediscoutn">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Discount_price
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Discount_price" class="form-control  validate[required] text-input" id="discount_price" name="discount_price">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Discount Id
											</label>
											<div class="col-sm-9">
												<div class="input-group">
		<select class="form-control  validate[required] text-input" id="discount_id" name="discount_id"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'user_buyer','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
 			echo '<option value="'.$tats.'">'.$tats.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Payableprice
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Payableprice" class="form-control  validate[required] text-input" id="payableprice" name="payableprice">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Order_confirmed
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Order_confirmed" class="form-control  validate[required] text-input" id="order_confirmed" name="order_confirmed">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Confirmationtime
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Confirmationtime" class="form-control  validate[required] text-input" id="confirmationtime" name="confirmationtime">
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