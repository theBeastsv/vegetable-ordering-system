<? 
	
	$pagegetdata=$_REQUEST['toeditdata']; 
	 
	$mafvshow= show_selecttable($debug,$limitstring,$conn,'user_buyer','*',"WHERE rowId=\"$pagegetdata\"",$limit,1,' rowId ASC');
	
	foreach( $mafvshow as $row ) {} ?>
	
				<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-external-link-square"></i>user_buyer<div class="panel-tools"></div>
								</div>
								<div class="panel-body">
			   <form class="form-horizontal" role="form" method="post" action="forms/ediuserbuyer.php">
			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />
			   <span><input type="hidden" placeholder="Companyid" class="form-control  " id="companyid" name="companyid" value="<?=$row['companyid'];?>"> </span> <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Inputname
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Inputname" class="form-control  validate[required] text-input" id="inputname" name="inputname" value="<?=$row['inputname'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Inputlastname
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Inputlastname" class="form-control  validate[required] text-input" id="inputlastname" name="inputlastname" value="<?=$row['inputlastname'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Inputemail
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Inputemail" class="form-control  validate[required,custom[email]] text-input" id="inputemail" name="inputemail" value="<?=$row['inputemail'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Mobileno
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Mobileno" class="form-control  validate[required,custom[phone]] text-input" id="mobileno" name="mobileno" value="<?=$row['mobileno'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Datebobirth
											</label>
											<div class="col-sm-9">
												
<div class="input-group"><input class="form-control validate[required] text-input date-picker_past" type="text" data-date-viewmode="years" data-date-format="yyyy-mm-dd"  id="datebobirth" name="datebobirth" value="<?=$row['datebobirth'];?>"><span class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div>   
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Inputpasswordcurrent
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Inputpasswordcurrent" class="form-control  validate[required] text-input" id="inputpasswordcurrent" name="inputpasswordcurrent" value="<?=$row['inputpasswordcurrent'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Daddress
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Daddress" class="form-control  validate[required] text-input" id="daddress" name="daddress" value="<?=$row['daddress'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Countrys
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Countrys" class="form-control  validate[required] text-input" id="countrys" name="countrys" value="<?=$row['countrys'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												States
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="States" class="form-control  validate[required] text-input" id="states" name="states" value="<?=$row['states'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Mastercity
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Mastercity" class="form-control  validate[required] text-input" id="mastercity" name="mastercity" value="<?=$row['mastercity'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Postalcode
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Postalcode" class="form-control  validate[required] text-input" id="postalcode" name="postalcode" value="<?=$row['postalcode'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Newsletter
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Newsletter" class="form-control  validate[required] text-input" id="newsletter" name="newsletter" value="<?=$row['newsletter'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Optin
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Optin" class="form-control  validate[required] text-input" id="optin" name="optin" value="<?=$row['optin'];?>"> 
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
												Firstlogin
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Firstlogin" class="form-control  validate[required] text-input" id="firstlogin" name="firstlogin" value="<?=$row['firstlogin'];?>"> 
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