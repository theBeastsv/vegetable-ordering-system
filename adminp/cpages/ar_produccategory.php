
<div class="row">
<div class="col-sm-12">
<div class="panel panel-default">
<div class="panel-heading">
	 <i class="fa fa-external-link-square"></i> product_category <div class="panel-tools"> </div>
 </div>
 <div class="panel-body">
 <form class="form-horizontal" role="form" method="post" action="forms/produccategory.php"><span><input type="hidden" placeholder="Companyid" class="form-control  " id="companyid" name="companyid" value="0"></span> <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Category Name
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Category Name" class="form-control  validate[required] text-input" id="category_name" name="category_name">
											</div>
										</div>
                                         <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">HSN Code
											</label>
											<div class="col-sm-3">
												<input type="text" placeholder="HSN CODE" class="form-control  validate[required] text-input" id="hsn_code" name="hsn_code">
											</div>
                                            <div class="col-sm-3">
                                            <label for="form-field-1" class="col-sm-12 control-label">HSN tax
											</label>
                                            </div>
                                            <div class="col-sm-3">
                                            <input type="text" placeholder="Tax In %" class="form-control  validate[required] text-input" id="hsn_tax" name="hsn_tax" value="0.00">
                                            </div>
										</div>
                                        <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Parent_category
											</label>
											<div class="col-sm-9">
												<div class="input-group">
		<select class="form-control  validate[required] text-input" id="parent_category" name="parent_category"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'product_category','*','WHERE parentlevel=\'0\'',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats			=$ssrow['rowId'];
			$category_name=$ssrow['category_name'];
 			echo '<option value="'.$tats.'">'.$category_name.'</option>' ;
				
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