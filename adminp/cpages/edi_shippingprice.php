<? 

	

	$pagegetdata=$_REQUEST['toeditdata']; 

	 

	$mafvshow= show_selecttable($debug,$limitstring,$conn,'shipping_price','*',"WHERE rowId=\"$pagegetdata\"",$limit,1,' rowId ASC');

	

	foreach( $mafvshow as $row ) {} ?>

	

				<div class="row">

				<div class="col-sm-12">

				<div class="panel panel-default">

				<div class="panel-heading"><i class="fa fa-external-link-square"></i>shipping_price<div class="panel-tools"></div>

								</div>

								<div class="panel-body">

			   <form class="form-horizontal" role="form" method="post" action="forms/edishippingprice.php">

			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />

			   <div class="form-group">

											<label for="form-field-1" class="col-sm-2 control-label">

												Seller Id

											</label>

											<div class="col-sm-9">

												

<div class="input-group">

		<select class="form-control  validate[required] text-input" id="seller_id" name="seller_id"><option value="">Select One</option> <? 
		 
 $mafvshow= show_selecttable($debug,$limitstring,$conn,'seller_master','rowId,company_name','',$limit,1,' rowId ASC');

		foreach( $mafvshow as $ssrow ) {

			$tats=$ssrow['rowId'];
			$tatss=$ssrow['company_name'];

			if($tats==$row['seller_id']){$simd="selected";}else{$simd="";}

 			echo '<option value="'.$tats.'" '.$simd .'>'.$tats.' = '.$tatss.'</option>' ;

				

		}

		 

		?></select></div>

											</div>

										</div><div class="form-group">

											<label for="form-field-1" class="col-sm-2 control-label">

												Lowrange

											</label>

											<div class="col-sm-9">

												<input type="text" placeholder="Lowrange" class="form-control  validate[required] text-input" id="lowrange" name="lowrange" value="<?=$row['lowrange'];?>"> 

											</div>

										</div><div class="form-group">

											<label for="form-field-1" class="col-sm-2 control-label">

												Highrange

											</label>

											<div class="col-sm-9">

												<input type="text" placeholder="Highrange" class="form-control  validate[required] text-input" id="highrange" name="highrange" value="<?=$row['highrange'];?>"> 

											</div>

										</div><div class="form-group">

											<label for="form-field-1" class="col-sm-2 control-label">

												Shipping_price

											</label>

											<div class="col-sm-9">

												<input type="text" placeholder="Shipping_price" class="form-control  validate[required] text-input" id="shipping_price" name="shipping_price" value="<?=$row['shipping_price'];?>"> 

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