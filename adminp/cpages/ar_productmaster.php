

<div class="row">

<div class="col-sm-12">

<div class="panel panel-default">

<div class="panel-heading">

	 <i class="fa fa-external-link-square"></i> productmaster <div class="panel-tools"> </div>

 </div>

 <div class="panel-body">

 <form class="form-horizontal" role="form" method="post" action="forms/productmaster.php"><span><input type="hidden" placeholder="Companyid" class="form-control  " id="companyid" name="companyid" value="0"></span> <div class="form-group">

											<label for="form-field-1" class="col-sm-2 control-label">

												Category_name

											</label>

											<div class="col-sm-9">

												<div class="input-group">

		<select class="form-control  validate[required] text-input" id="category_name" name="category_name"><option value="">Select One</option><?  

		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'product_category','*','WHERE parentlevel=\'0\'',$limit,1,' rowId ASC');

		foreach( $mafvshow as $ssrow ) {

			$tats			=$ssrow['rowId'];

			$category_name=$ssrow['category_name'];

 			echo '<option value="'.$tats.'">'.$category_name.'</option>' ;

				

		}

		 

		?></select></div>

											</div>

										</div><div class="form-group">

											<label for="form-field-1" class="col-sm-2 control-label">

												Product_name

											</label>

											<div class="col-sm-9">

												<input type="text" placeholder="Product_name" class="form-control  validate[required] text-input" id="product_name" name="product_name">

											</div>

										</div><div class="form-group">

											<label for="form-field-1" class="col-sm-2 control-label">

												Brand

											</label>

											<div class="col-sm-9">

												<div class="input-group">

		<select class="form-control  validate[required] text-input" id="bbrand" name="bbrand"><option value="">Select One</option> 

		<option value="0">MY OWN BRAND</option> <?  

		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'brandsmaster','rowId,brandname','',$limit,1,' rowId ASC');

		foreach( $mafvshow as $ssrow ) {

			$tats		=$ssrow['rowId'];

			$brandname	=$ssrow['brandname'];

 			echo '<option value="'.$tats.'">'.$brandname.'</option>' ;

				

		}

		 

		?></select></div>

											</div>

										</div><div class="form-group  has-success">

											<label for="form-field-1" class="col-sm-2 control-label">

												Product_Quantity

											</label>

											<div class="col-sm-3">

												<input type="text" placeholder="Product_size" class="form-control  validate[required] text-input" id="product_size" name="product_size">

											 <div class="help-block">Seperated by comma (,)</div></div>

                                            <div class="col-sm-3">

                                            <label for="form-field-1" class="col-sm-12 control-label">

												Product_colour

											</label>

                                            </div>

                                            <div class="col-sm-3">

                                            <input type="text" placeholder="Product_colour" class="form-control  validate[required] text-input" id="product_colour" name="product_colour">

                                            <div class="help-block">Seperated by comma (,)</div>

                                            </div>

										</div> 

                                       <div class="form-group  has-error">

											<label for="form-field-1" class="col-sm-2 control-label">

												Mrp/Production COST

											</label>

											<div class="col-sm-3">

												<input type="text" placeholder="Mrp_purchase" class="form-control  validate[required] text-input" id="mrp_purchase" name="mrp_purchase">

											</div>

                                            <div class="col-sm-3">

                                            <label for="form-field-1" class="col-sm-12 control-label">

												Selling Price

											</label>

                                            </div>

                                            <div class="col-sm-3">

                                            <input type="text" placeholder="Mrp_sale" class="form-control  validate[required] text-input" id="mrp_sale" name="mrp_sale">

                                              <div class="help-block">TAX + commission Will be added automatically</div></div>

										</div>

                                        

                                        <div class="form-group">

											<label for="form-field-1" class="col-sm-2 control-label">

												Quantity in Stock

											</label>

											<div class="col-sm-9">

												<input type="text" placeholder="In_stock_quantity" class="form-control  validate[required] text-input" id="in_stock_quantity" name="in_stock_quantity">

											</div>

										</div> 

                                        <div class="form-group">

											<label for="form-field-1" class="col-sm-2 control-label">

												Product_description

											</label>

											<div class="col-sm-9">

												<textarea placeholder="Product_description" class="form-control  validate[required] text-input" id="product_description" name="product_description"></textarea> 

											</div>

										</div>

                                        

                                        <div class="form-group">

													<div class="col-sm-2 col-sm-offset-8">

														<button class="btn btn-blue next-step btn-block">

															submit <i class="fa fa-arrow-circle-right"></i>

														</button>

													</div>

												</div></form></div>

												</div>

												</div>

												</div>