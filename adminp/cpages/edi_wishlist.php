<? 
	
	$pagegetdata=$_REQUEST['toeditdata']; 
	 
	$mafvshow= show_selecttable($debug,$limitstring,$conn,'wishlist','*',"WHERE rowId=\"$pagegetdata\"",$limit,1,' rowId ASC');
	
	foreach( $mafvshow as $row ) {} ?>
	
				<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-external-link-square"></i>wishlist<div class="panel-tools"></div>
								</div>
								<div class="panel-body">
			   <form class="form-horizontal" role="form" method="post" action="forms/ediwishlist.php">
			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />
			   <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Buyer Id
											</label>
											<div class="col-sm-9">
												
<div class="input-group">
		<select class="form-control  validate[required] text-input" id="buyer_id" name="buyer_id"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'user_buyer','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
			if($tats==$row['buyer_id']){$simd="selected";}else{$simd="";}
 			echo '<option value="'.$tats.'" '.$simd .'>'.$tats.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Userid
											</label>
											<div class="col-sm-9">
												
<div class="input-group">
		<select class="form-control  validate[required] text-input" id="userid" name="userid"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'user_buyer','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
			if($tats==$row['userid']){$simd="selected";}else{$simd="";}
 			echo '<option value="'.$tats.'" '.$simd .'>'.$tats.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Productid
											</label>
											<div class="col-sm-9">
												
<div class="input-group">
		<select class="form-control  validate[required] text-input" id="productid" name="productid"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'productmaster','rowId','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
			if($tats==$row['productid']){$simd="selected";}else{$simd="";}
 			echo '<option value="'.$tats.'" '.$simd .'>'.$tats.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Addedfromip
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Addedfromip" class="form-control  validate[required] text-input" id="addedfromip" name="addedfromip" value="<?=$row['addedfromip'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Isactive
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Isactive" class="form-control  validate[required] text-input" id="isactive" name="isactive" value="<?=$row['isactive'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Removedat
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Removedat" class="form-control  validate[required] text-input" id="removedat" name="removedat" value="<?=$row['removedat'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Removedip
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Removedip" class="form-control  validate[required] text-input" id="removedip" name="removedip" value="<?=$row['removedip'];?>"> 
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