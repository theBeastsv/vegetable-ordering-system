
<div class="row">
<div class="col-sm-12">
<div class="panel panel-default">
<div class="panel-heading">
	 <i class="fa fa-external-link-square"></i> product_image <div class="panel-tools"> </div>
 </div>
 <div class="panel-body">
 <form class="form-horizontal" role="form" method="post" action="forms/product_image.php"><div class="form-group">
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
												Imagename
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Imagename" class="form-control  validate[required] text-input" id="imagename" name="imagename">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Product_color
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Product_color" class="form-control  validate[required] text-input" id="product_color" name="product_color">
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