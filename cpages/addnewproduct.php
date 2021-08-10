<?
$KesOnSELLERID=$_SESSION['KesOnSELLERID'];
  
?><div class="container" style="padding-top:15px;">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3" style="padding:5px;">
                          <h2>My Products > Edit Product</h2>
                          
                          <div class="row">
                         <div class="col-md-12"> 
                             <div role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                <li class=""><a href="myproduct.php" >My Products</a></li>
                                <li class="active"><a href="addnewproduct.php">Add New Products</a></li>
                                <li class=""><a href="myorderssel.php">My Orders</a></li>
<li class=""><a href="sellerprofileed.php">Edit Seller Profile</a></li>
                                </ul>

                                <!-- Tab Panes -->
                                <div class="tab-content">
                                
                          <div class="blog-row"  style="padding:15px;">
                          
                           
                           
                           
                          <form class="form-horizontal" role="form" method="post" action="forms/productmaster.php"><span><input type="hidden" placeholder="Companyid" class="form-control  " id="companyid" name="companyid" value="0"></span> <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Category_name
											</label>
											<div class="col-sm-3">
												<div class="input-group">
		<select class="form-control  validate[required] text-input" id="category_name" name="category_name" onchange="getloadhsncode(this.value);"><option value="">Select One</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'product_category','rowId,category_name,parent_category','WHERE parent_category=\'0\'',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
			$category_name=$ssrow['category_name'];
 			echo ' <optgroup label="'.$category_name.'">
			<option value="'.$tats.'">'.$category_name.'</option>' ;
				  $mafxow= show_selecttable($debug,$limitstring,$conn,'product_category','rowId,category_name,parent_category','WHERE parent_category=\''.$tats.'\'',$limit,1,' rowId ASC');
		foreach( $mafxow as $ssrxow ) {
			$tatssrxows=$ssrxow['rowId'];
			$category_namssrxowe=$ssrxow['category_name'];
 			echo '<option value="'.$tatssrxows.'">--'.$category_namssrxowe.'</option>' ;
				
		}
		echo ' </optgroup>';
		}
		 
		?></select></div>
											</div>
                                            <div class="col-sm-3">
                                           <label for="form-field-1" class="col-sm-12 control-label">
												HSN CODE
											</label>
                                            </div>
                                            <div class="col-sm-3">
                                          <div id="binks">  <input name="hsn_tax" id="hsn_tax" type="hidden" value="0" /><input type="text" placeholder="Product_name" class="form-control  validate[required] text-input" id="hsn_code" name="hsn_code" readonly="readonly"></div>
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
												Product_size
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
                                        
                                        
                                        
                                        <div class="form-group  has-success">
											<label for="form-field-1" class="col-sm-2 control-label">
												Commession amount
											</label>
											<div class="col-sm-3">
												<input type="hidden" class="form-control  validate[required] text-input" id="commession_amount" name="commession_amount" readonly="readonly" value="<?=COMP_CHARGES;?>">
											 <div class="help-block"><?=COMP_CHARGES;?>%  will be charged By kesaron</div></div>
                                            <div class="col-sm-3">
                                            <label for="form-field-1" class="col-sm-12 control-label">
												Tax Status	
											</label>
                                            </div>
                                            <div class="col-sm-3">
                                           <select class="form-control  validate[required] text-input" name="includeInMrp" id="includeInMrp"><option value="1">Include in MRP</option><option value="0">Charge Extra</option></select> 
                                            <div class="help-block">Seperated by comma (,)</div>
                                            </div>
										</div>
                                        
                                        
                                       <div class="form-group  has-error">
											<label for="form-field-1" class="col-sm-2 control-label"> Selling Price
											</label>
											<div class="col-sm-3">
												<input type="text" placeholder="Selling Price" class="form-control  validate[required,custom[integer],min[1]] text-input" onchange="makemefinalsellable();" id="mrp_purchase" name="mrp_purchase" value="0.00">
											</div>
                                            <div class="col-sm-3">
                                            <label for="form-field-1" class="col-sm-12 control-label">
												Final Selling Price
											</label>
                                            </div>
                                            <div class="col-sm-3">
                                            <input type="text" placeholder="Selling Price" class="form-control  validate[required] text-input" id="mrp_sale" name="mrp_sale" value="0.00" readonly="readonly"><input name="taxAmountPayable" id="taxAmountPayable" type="hidden" value="0" />
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
												</div></form>
                                                </div>
                            </div><!-- End .row -->
  </div><!-- End .tab-content -->
                            </div><!-- end role[tabpanel] -->

                        </div>
                    </div>

                        <aside class="col-md-3 col-md-pull-9 sidebar">
                           
                           <? include("incfiles/myaccount_ader.php");?><!-- End .widget --><!-- End .widget --><!-- End .widget -->
                        </aside>
                    </div><!-- End .row -->
                </div>