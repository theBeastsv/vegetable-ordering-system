
<div class="row">
<div class="col-sm-12">
<div class="panel panel-default">
<div class="panel-heading">
	 <i class="fa fa-external-link-square"></i> temp_order_cart <div class="panel-tools"> </div>
 </div>
 <div class="panel-body">
 <form class="form-horizontal" role="form" method="post" action="forms/tempordercart.php"><div class="form-group">
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
												Selectedcolor
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Selectedcolor" class="form-control  validate[required] text-input" id="selectedcolor" name="selectedcolor">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Selectedsize
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Selectedsize" class="form-control  validate[required] text-input" id="selectedsize" name="selectedsize">
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
												Sessionvalue
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Sessionvalue" class="form-control  validate[required] text-input" id="sessionvalue" name="sessionvalue">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Mrp_payable_after_discount
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Mrp_payable_after_discount" class="form-control  validate[required] text-input" id="mrp_payable_after_discount" name="mrp_payable_after_discount">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Mrp_sale
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Mrp_sale" class="form-control  validate[required] text-input" id="mrp_sale" name="mrp_sale">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Isconvertedtoorder
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Isconvertedtoorder" class="form-control  validate[required] text-input" id="isconvertedtoorder" name="isconvertedtoorder">
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