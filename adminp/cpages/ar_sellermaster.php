
<div class="row">
<div class="col-sm-12">
<div class="panel panel-default">
<div class="panel-heading">
	 <i class="fa fa-external-link-square"></i> sellermaster <div class="panel-tools"> </div>
 </div>
 <div class="panel-body">
 <form class="form-horizontal" role="form" method="post" action="forms/sellermaster.php"><span> </span> <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												First Name
											</label>
											<div class="col-sm-3">
												 <input type="text" placeholder="First Name" class="form-control  validate[required] text-input" id="first_name" name="first_name">
											</div>
                                            <div class="col-sm-3">
                                            <label for="form-field-1" class="col-sm-12 control-label">
												Last Name
											</label>
                                            </div>
                                            <div class="col-sm-3">
                                            <input type="text" placeholder="Last Name" class="form-control  validate[required] text-input" id="last_name" name="last_name">
                                            </div>
										</div>
                                         <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Email Id
											</label>
											<div class="col-sm-3">
												<input type="text" placeholder="Email Id" class="form-control  validate[required,custom[email]] text-input" id="email_id" name="email_id">
											</div>
                                            <div class="col-sm-3"><label for="form-field-1" class="col-sm-12 control-label">
												Mobile Number
											</label>
                                            </div>
                                            <div class="col-sm-3">
                                            	<input type="text" placeholder="Mobile Number" class="form-control  validate[required,custom[phone]] text-input" id="mobile_number" name="mobile_number">
                                            </div>
										</div>
                                        
                                        <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Company Type
											</label>
											<div class="col-sm-9">
												<div class="input-group"> 
		<select class="form-control  validate[required] text-input" onchange="makemeselcomp(this.value)" id="company_type" name="company_type"><option value="">Select One</option> <option value="0">Individual</option> <option value="1">Corporate</option> </select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Company Name
											</label>
											<div class="col-sm-9">
												 <input name="bcompany_name" id="bcompany_name" type="hidden" value="" /><input name="bgst_number" id="bbgst_number" type="hidden" value="" /><input type="text" placeholder="Company Name" class="form-control  validate[required] text-input" id="company_name" name="company_name">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Gst Number
											</label>
											<div class="col-sm-3">
												<input type="text" placeholder="Gst Number" class="form-control  validate[required] text-input" id="gst_number" name="gst_number">
											</div>
                                            <div class="col-sm-3">
                                            	<label for="form-field-1" class="col-sm-12 control-label">
												Pan Card Number
											</label>
                                            </div>
                                            <div class="col-sm-3">
                                            <input type="text" placeholder="Pan Card Number" class="form-control  validate[required] text-input" id="pan_card_number" name="pan_card_number">
                                            </div>
										</div>
                                        <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Adhar Number
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Adhar Number" class="form-control  validate[required] text-input" id="adhar_number" name="adhar_number">
											</div>
										</div>
                                        <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												About Seller
											</label>
											<div class="col-sm-9">
												<textarea class="form-control  validate[required] text-input" id="seller_description" name="seller_description"></textarea> 
											</div>
										</div>
                                        <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Website
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="http://yousite.com" class="form-control  validate[optional,custom[url]] text-input" id="website" name="website">
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