
<div class="row">
<div class="col-sm-12">
<div class="panel panel-default">
<div class="panel-heading">
	 <i class="fa fa-external-link-square"></i> discountmaster <div class="panel-tools"> </div>
 </div>
 <div class="panel-body">
 <form class="form-horizontal" role="form" method="post" action="forms/discountmaster.php"><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Prdcategory
											</label>
											<div class="col-sm-9">
												<div class="input-group">
		<select class="form-control  validate[required] text-input" id="prdcategory" name="prdcategory"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'product_category','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
 			echo '<option value="'.$tats.'">'.$tats.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Product_id
											</label>
											<div class="col-sm-9">
												<div class="input-group">
		<select class="form-control  validate[required] text-input" id="product_id" name="product_id"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'productmaster','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
 			echo '<option value="'.$tats.'">'.$tats.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Startdate
											</label>
											<div class="col-sm-9">
												
<div class="input-group"><input class="form-control validate[required] text-input date-picker_future" type="text" data-date-viewmode="years" data-date-format="yyyy-mm-dd"  id="startdate" name="startdate"><span class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Till_date
											</label>
											<div class="col-sm-9">
												
<div class="input-group"><input class="form-control validate[required] text-input date-picker_future" type="text" data-date-viewmode="years" data-date-format="yyyy-mm-dd"  id="till_date" name="till_date"><span class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Discount_type
											</label>
											<div class="col-sm-9">
												<div class="input-group"> 
		<select class="form-control  validate[required] text-input" id="discount_type" name="discount_type"><option value="">Select One</option> <option value="Percentage">Percentage</option> <option value="Flat">Flat</option> </select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Discount_value
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Discount_value" class="form-control  validate[required] text-input" id="discount_value" name="discount_value">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Applytoallproducts
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Applytoallproducts" class="form-control  validate[required] text-input" id="applytoallproducts" name="applytoallproducts">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Minimum_purchase
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Minimum_purchase" class="form-control  validate[required] text-input" id="minimum_purchase" name="minimum_purchase">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Discountkeycode
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Discountkeycode" class="form-control  validate[required] text-input" id="discountkeycode" name="discountkeycode">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Isactive
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Isactive" class="form-control  validate[required] text-input" id="isactive" name="isactive">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Wimci
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Wimci" class="form-control  validate[required] text-input" id="wimci" name="wimci">
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