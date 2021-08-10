<? 
	
	$pagegetdata=$_REQUEST['toeditdata']; 
	 
	$mafvshow= show_selecttable($debug,$limitstring,$conn,'discount_products','*',"WHERE rowId=\"$pagegetdata\"",$limit,1,' rowId ASC');
	
	foreach( $mafvshow as $row ) {} ?>
	
				<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-external-link-square"></i>discount products<div class="panel-tools"></div>
								</div>
								<div class="panel-body">
			   <form class="form-horizontal" role="form" method="post" action="forms/edidisprds.php">
			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />
			   <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Scheme Name
											</label>
											<div class="col-sm-9">
												
<div class="input-group">
		<select class="form-control  validate[required] text-input" id="scheme_name" name="scheme_name"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'discount_master','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
			if($tats==$row['scheme_name']){$simd="selected";}else{$simd="";}
 			echo '<option value="'.$tats.'" '.$simd .'>'.$tats.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Product Id
											</label>
											<div class="col-sm-9">
												
<div class="input-group">
		<select class="form-control  validate[required] text-input" id="product_id" name="product_id"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'productmaster','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
			if($tats==$row['product_id']){$simd="selected";}else{$simd="";}
 			echo '<option value="'.$tats.'" '.$simd .'>'.$tats.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Minimum Order
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Minimum Order" class="form-control  validate[required] text-input" id="minimum_order" name="minimum_order" value="<?=$row['minimum_order'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Start Date
											</label>
											<div class="col-sm-9">
												
<div class="input-group"><input class="form-control validate[required] text-input date-picker" type="text" data-date-viewmode="years" data-date-format="yyyy-mm-dd"  id="start_date" name="start_date" value="<?=$row['start_date'];?>"><span class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												End Date
											</label>
											<div class="col-sm-9">
												
<div class="input-group"><input class="form-control validate[required] text-input date-picker_future" type="text" data-date-viewmode="years" data-date-format="yyyy-mm-dd"  id="end_date" name="end_date" value="<?=$row['end_date'];?>"><span class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Discount Rate
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Discount Rate" class="form-control  validate[required,custom[integer],min[1],min[100]] text-input" id="discount_rate" name="discount_rate" value="<?=$row['discount_rate'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Discount Type
											</label>
											<div class="col-sm-9">
												<div class="input-group"> 
		<select class="form-control  validate[required] text-input" id="discount_type" name="discount_type"><option value="">Select One</option> <option value="Percentage" >Percentage</option> <option value="Flat" >Flat</option> </select> </div>
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