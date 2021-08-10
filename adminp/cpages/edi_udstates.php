<? 
	
	$pagegetdata=$_REQUEST['toeditdata']; 
	 
	$mafvshow= show_selecttable($debug,$limitstring,$conn,'ud_states','*',"WHERE rowId=\"$pagegetdata\"",$limit,1,' rowId ASC');
	
	foreach( $mafvshow as $row ) {} ?>
	
				<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-external-link-square"></i>ud_states<div class="panel-tools"></div>
								</div>
								<div class="panel-body">
			   <form class="form-horizontal" role="form" method="post" action="forms/ediudstates.php">
			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />
			   <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Name
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Name" class="form-control  validate[required] text-input" id="name" name="name" value="<?=$row['name'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Country_id
											</label>
											<div class="col-sm-9">
												
<div class="input-group">
		<select class="form-control  validate[required] text-input" id="country_id" name="country_id"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'ud_countries','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
			if($tats==$row['country_id']){$simd="selected";}else{$simd="";}
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