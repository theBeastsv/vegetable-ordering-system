<? 
	
	$pagegetdata=$_REQUEST['toeditdata']; 
	 
	$mafvshow= show_selecttable($debug,$limitstring,$conn,'product_category','*',"WHERE rowId=\"$pagegetdata\"",$limit,1,' rowId ASC');
	
	foreach( $mafvshow as $row ) {} ?>
	
				<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-external-link-square"></i>product_category<div class="panel-tools"></div>
								</div>
								<div class="panel-body">
			   <form class="form-horizontal" role="form" method="post" action="forms/ediproduccategory.php">
			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />
			   <span><input type="hidden" placeholder="Companyid" class="form-control  " id="companyid" name="companyid" value="<?=$row['companyid'];?>"> </span> <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Category Name
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Category Name" class="form-control  validate[required] text-input" id="category_name" name="category_name" value="<?=$row['category_name'];?>"> 
											</div>
										</div>
                                        <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												HSN Code
											</label>
											<div class="col-sm-3">
												<input type="text" placeholder="HSN Code" class="form-control  validate[required] text-input" id="hsn_code" name="hsn_code" value="<?=$row['hsn_code'];?>"> 
											</div>
                                            <div class="col-sm-3"><label for="form-field-1" class="col-sm-2 control-label">
												HSN TAX
											</label>
                                            </div>
                                            <div class="col-sm-3">
                                            <input type="text" placeholder="HSN Code" class="form-control  validate[required] text-input" id="hsn_tax" name="hsn_tax" value="<?=$row['hsn_tax'];?>"> 
                                            </div>
										</div>
                                        <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Parent_category
											</label>
											<div class="col-sm-9">
												
<div class="input-group">
		<select class="form-control  validate[required] text-input" id="parent_category" name="parent_category"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'brandsmaster','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
			if($tats==$row['parent_category']){$simd="selected";}else{$simd="";}
 			echo '<option value="'.$tats.'" '.$simd .'>'.$tats.'</option>' ;
				
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