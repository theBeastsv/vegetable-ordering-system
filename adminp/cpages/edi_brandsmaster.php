<? 
	
	$pagegetdata=$_REQUEST['toeditdata']; 
	 
	$mafvshow= show_selecttable($debug,$limitstring,$conn,'brandsmaster','*',"WHERE rowId=\"$pagegetdata\"",$limit,1,' rowId ASC');
	
	foreach( $mafvshow as $row ) {} ?>
	
				<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-external-link-square"></i>brandsmaster<div class="panel-tools"></div>
								</div>
								<div class="panel-body">
			   <form class="form-horizontal" role="form" method="post" action="forms/edibrandsmaster.php">
			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />
			   <span><input type="hidden" placeholder="Companyid" class="form-control  " id="companyid" name="companyid" value="<?=$row['companyid'];?>"> </span> <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Brandname
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Brandname" class="form-control  validate[required] text-input" id="brandname" name="brandname" value="<?=$row['brandname'];?>"> 
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