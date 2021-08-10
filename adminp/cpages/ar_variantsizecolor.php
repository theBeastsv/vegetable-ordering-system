
<div class="row">
<div class="col-sm-12">
<div class="panel panel-default">
<div class="panel-heading">
	 <i class="fa fa-external-link-square"></i> size_color <div class="panel-tools"> </div>
 </div>
 <div class="panel-body">
 <form class="form-horizontal" role="form" method="post" action="forms/variantsizecolor.php"><span><input type="hidden" placeholder="Companyid" class="form-control  " id="companyid" name="companyid" value="0"></span> <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Color_name
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Color_name" class="form-control  validate[required] text-input" id="color_name" name="color_name">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Size_name
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Size_name" class="form-control  validate[required] text-input" id="size_name" name="size_name">
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
												Product_masterid
											</label>
											<div class="col-sm-9">
												<div class="input-group">
		<select class="form-control  validate[required] text-input" id="product_masterid" name="product_masterid"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'productmaster','rowId','',$limit,1,' rowId ASC');
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
													<div class="col-sm-2 col-sm-offset-8">
														<button class="btn btn-blue next-step btn-block">
															submit <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div></form></div>
												</div>
												</div>
												</div>