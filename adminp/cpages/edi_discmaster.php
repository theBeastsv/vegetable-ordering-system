<? 
	
	$pagegetdata=$_REQUEST['toeditdata']; 
	 
	$mafvshow= show_selecttable($debug,$limitstring,$conn,'discount_master','*',"WHERE rowId=\"$pagegetdata\"",$limit,1,' rowId ASC');
	
	foreach( $mafvshow as $row ) {} ?>
	
				<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-external-link-square"></i>discount master<div class="panel-tools"></div>
								</div>
								<div class="panel-body">
			   <form class="form-horizontal" role="form" method="post" action="forms/edidiscmaster.php">
			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />
			   <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Scheme Name
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Scheme Name" class="form-control  validate[required] text-input" id="scheme_name" name="scheme_name" value="<?=$row['scheme_name'];?>"> 
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
												Ending Date
											</label>
											<div class="col-sm-9">
												
<div class="input-group"><input class="form-control validate[required] text-input date-picker" type="text" data-date-viewmode="years" data-date-format="yyyy-mm-dd"  id="ending_date" name="ending_date" value="<?=$row['ending_date'];?>"><span class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Remark
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Remark" class="form-control  validate[required] text-input" id="remark" name="remark" value="<?=$row['remark'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Promo To Fly
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Promo To Fly" class="form-control  validate[required] text-input" id="promo_to_fly" name="promo_to_fly" value="<?=$row['promo_to_fly'];?>"> 
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
											<label for="form-field-1" class="col-sm-2 control-label">
												Discount Rate
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Discount Rate" class="form-control  validate[required,custom[integer],min[1],min[100]] text-input" id="discount_rate" name="discount_rate" value="<?=$row['discount_rate'];?>"> 
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