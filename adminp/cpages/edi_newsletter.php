<? 
	
	$pagegetdata=$_REQUEST['toeditdata']; 
	 
	$mafvshow= show_selecttable($debug,$limitstring,$conn,'newsletter','*',"WHERE rowId=\"$pagegetdata\"",$limit,1,' rowId ASC');
	
	foreach( $mafvshow as $row ) {} ?>
	
				<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-external-link-square"></i>newsletter<div class="panel-tools"></div>
								</div>
								<div class="panel-body">
			   <form class="form-horizontal" role="form" method="post" action="forms/edinewsletter.php">
			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />
			   <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Emailid
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Emailid" class="form-control  validate[required,custom[email]] text-input" id="emailid" name="emailid" value="<?=$row['emailid'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Mobile Number
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Mobile Number" class="form-control  validate[required,custom[phone]] text-input" id="mobile_number" name="mobile_number" value="<?=$row['mobile_number'];?>"> 
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