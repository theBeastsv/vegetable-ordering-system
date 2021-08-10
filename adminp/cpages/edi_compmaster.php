<? 
	
	$pagegetdata=$_REQUEST['toeditdata']; 
	 
	$mafvshow= show_selecttable($debug,$limitstring,$conn,'comy_master','*',"WHERE rowId=\"$pagegetdata\"",$limit,1,' rowId ASC');
	
	foreach( $mafvshow as $row ) {} ?>
	
				<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-external-link-square"></i>companymaster<div class="panel-tools"></div>
								</div>
								<div class="panel-body">
			   <form class="form-horizontal" role="form" method="post" action="forms/edicompmaster.php">
			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />
			   <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Company Name
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Company Name" class="form-control  validate[required] text-input" id="company_name" name="company_name" value="<?=$row['company_name'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Contact Address
											</label>
											<div class="col-sm-9">
												<textarea class="form-control  validate[required] text-input" id="contact_address" name="contact_address"  placeholder="Contact Address" ><?=$row['contact_address'];?></textarea> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Contact Number
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Contact Number" class="form-control  validate[required,custom[phone]] text-input" id="contact_number" name="contact_number" value="<?=$row['contact_number'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Support Contact Number
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Support Contact Number" class="form-control  validate[required,custom[phone]] text-input" id="support_contact_number" name="support_contact_number" value="<?=$row['support_contact_number'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Gst Number
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Gst Number" class="form-control  validate[required] text-input" id="gst_number" name="gst_number" value="<?=$row['gst_number'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Support Email Id
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Support Email Id" class="form-control  validate[required,custom[email]] text-input" id="support_email_id" name="support_email_id" value="<?=$row['support_email_id'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Contact Email Id
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Contact Email Id" class="form-control  validate[required,custom[email]] text-input" id="contact_email_id" name="contact_email_id" value="<?=$row['contact_email_id'];?>"> 
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