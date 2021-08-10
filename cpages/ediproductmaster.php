<?
$KesOnSELLERID=$_SESSION['KesOnSELLERID'];
 
	
	$pagegetdata=$_REQUEST['toeditdata']; 
	 
	$mafvsDhow= show_selecttable($debug,$limitstring,$conn,'productmaster','*',"WHERE rowId=\"$pagegetdata\" AND sellerId=\"$KesOnSELLERID\"",$limit,1,' rowId ASC');
	
	foreach( $mafvsDhow as $fixrow ) {}  
?><div class="container" style="padding-top:15px;">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3" style="padding:5px;">
                          <h2>My Products > Edit Product</h2>
                          
                          <div class="row">
                         <div class="col-md-12"> 
                             <div role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="myproduct.php" >My Products</a></li>
                                <li class=""><a href="addnewproduct.php">Add New Products</a></li>
                                <li class=""><a href="myorderssel.php">My Orders</a></li>
<li class=""><a href="sellerprofileed.php">Edit Seller Profile</a></li>
                                </ul>

                                <!-- Tab Panes -->
                                <div class="tab-content">
                                
                          <div class="blog-row"  style="padding:15px;">
                          
                           
                           
                           
                          <form class="form-horizontal" role="form" method="post" action="forms/ediproductmaster.php">
			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />
			   <span><input type="hidden" placeholder="Companyid" class="form-control  " id="companyid" name="companyid" value="<?=$fixrow['companyid'];?>"> </span> <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Category_name
											</label>
											<div class="col-sm-9">
												
<div class="input-group">
		<select class="form-control  validate[required] text-input" id="category_name" name="category_name"><option value="">Select One</option>
         <?  
		 
			
 			 $mafvshow= show_selecttable($debug,$limitstring,$conn,'product_category','rowId,category_name,parent_category','WHERE parent_category=\'0\'',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tatsx=$ssrow['rowId'];
			$category_name=$ssrow['category_name'];
			if($tatsx==$fixrow['category_name']){$simd="selected";}else{$simd="";}
 			echo ' <optgroup label="'.$category_name.'">
			<option value="'.$tatsx.'" '.$simd.'>'.$category_name.'</option>' ;
				  
				  
				  $xmafxow= show_selecttable($debug,$limitstring,$conn,'product_category','rowId,category_name,parent_category','WHERE parent_category=\''.$tatsx.'\'',$limit,1,' rowId ASC');
		foreach( $xmafxow as $sRw ) {
			$tatssrxows=$sRw['rowId'];
			$category_namssrxowe=$sRw['category_name'];
				if($tatssrxows==$fixrow['category_name']){$simdx="selected";}else{$simdx="";}
 			echo '<option value="'.$tatssrxows.'" '.$simdx.'>--'.$category_namssrxowe.'</option>' ;
				
		}
		echo ' </optgroup>';
		}
		?></select></div>
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Product_name
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Product_name" class="form-control  validate[required] text-input" id="product_name" name="product_name" value="<?=$fixrow['product_name'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Product_description
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Product_description" class="form-control  validate[required] text-input" id="product_description" name="product_description" value="<?=$fixrow['product_description'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Bbrand
											</label>
											<div class="col-sm-9">
												
<div class="input-group">
		<select class="form-control  validate[required] text-input" id="bbrand" name="bbrand"><option value="">Select One</option>	<option value="0" <? if($fixrow['bbrand']==0) {echo 'selected';}?>>MY OWN BRAND</option> <?  
		  $mEvshow= show_selecttable($debug,$limitstring,$conn,'brandsmaster','rowId,brandname','',$limit,1,' rowId ASC');
		foreach( $mEvshow as $ssrEow ) {
			$tats=$ssrEow['rowId'];
			$brandname	=$ssrEow['brandname'];
			if($tats==$fixrow['bbrand']){$simd="selected";}else{$simd="";}
 			echo '<option value="'.$tats.'" '.$simd .'>'.$brandname.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group has-success">
											<label for="form-field-1" class="col-sm-2 control-label">
												Product_size
											</label>
											<div class="col-sm-3">
												<input type="text" placeholder="Product_size" class="form-control  validate[required] text-input" id="product_size" name="product_size" value="<?=$fixrow['product_size'];?>"> 
											</div>
                                            <div class="col-sm-3">
                                            <label for="form-field-1" class="col-sm-12 control-label">
												Product_colour
											</label>
                                            </div>
                                            <div class="col-sm-3">
                                            <input type="text" placeholder="Product_colour" class="form-control  validate[required] text-input" id="product_colour" name="product_colour" value="<?=$fixrow['product_colour'];?>"> 
                                            </div>
										</div> 
                                        
                                        <div class="form-group has-error">
											<label for="form-field-1" class="col-sm-2 control-label">
												Mrp/Production COST
											</label>
											<div class="col-sm-3">
												<input type="text" placeholder="Mrp_purchase" class="form-control  validate[required] text-input" id="mrp_purchase" name="mrp_purchase" value="<?=$fixrow['mrp_purchase'];?>"> 
											</div>
                                            <div class="col-sm-3">
                                            <label for="form-field-1" class="col-sm-12 control-label">
												Selling Price
											</label>
                                            </div>
                                              <div class="col-sm-3">
                                             <input type="text" placeholder="Mrp_sale" class="form-control  validate[required] text-input" id="mrp_sale" name="mrp_sale" value="<?=$fixrow['mrp_sale'];?>">  
                                               <div class="help-block">TAX + commission Will be added automatically</div></div></div>
										 
                                        <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
											Stock Quantity
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="In_stock_quantity" class="form-control  validate[required] text-input" id="in_stock_quantity" name="in_stock_quantity" value="<?=$fixrow['in_stock_quantity'];?>"> 
											</div>
										</div> <div class="form-group">
													<div class="col-sm-2 col-sm-offset-8">
														<button class="btn btn-blue next-step btn-block">
															submit <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div></form>
                           </div>
                       
                        <div class="mb10"></div><!-- space -->
   <h2>My Products > Upload Image</h2>
								<div class="panel-body">
                                 <form class="form-horizontal" role="form" method="post" action="forms/product_image.php" enctype="multipart/form-data">  
		<input type="hidden" class="form-control  validate[required] text-input" id="productid" name="productid" value="<?=$pagegetdata;?>" /> 
        
        <table class="table table-striped">
        	<thead>
            	<tr>
                	<th>PHOTO</th>
                    <th>COLOR</th>
                    <th>ACTION</th>
                </tr>
             </thead>
              <tbody> 
              <?
               $dilo=$_REQUEST['dilo'];
			   if($dilo!=''){
				   $marts="delete from product_image WHERE productid='$pagegetdata' AND rowId='$dilo' ";
 
	$myquery=$conn->query($marts); 
				   } $mafvshow= show_selecttable($debug,$limitstring,$conn,'product_image','*','WHERE productid=\''.$pagegetdata.'\'',$limit,1,' rowId DESC');
		foreach( $mafvshow as $ssrow ) {
			$xxtats=$ssrow['rowId'];
			$product_color	=$ssrow['product_color'];
			$imagename_tr	=$ssrow['imagename_tr'];
			$domain=$_SERVER['HTTP_HOST'];
		if($domain=='localhost'){ 
			$binsed='';
		}else{
			$binsed='../';
			}
			
			 echo '<tr>
                	<td><img src="'.$binsed.''.$imagename_tr.'"style="max-height:150px"></td>
                    <td>'.strtoupper($product_color).'</td>
                    <td><a href="ediproductmaster.php?toeditdata='.$pagegetdata.'&dilo='.$xxtats.'">REMOVE</a></td>
                </tr>';
		}
		
			  ?>
                </tbody>
           
        	
        </table> <div class="form-group has-success">
											
											<label for="form-field-1" class="col-sm-2 control-label">
												Image
											</label>
                                            <div class="col-sm-3">
												<input type="file" placeholder="Imagename" class="form-control  validate[required] text-input" id="uploadphoto" name="uploadphoto">
											</div>
                                            <div class="col-sm-3">
                                            <label for="form-field-1" class="col-sm-12 control-label">
												Product color
											</label>
                                            </div>
                                            <div class="col-sm-3">
                                            <select class="form-control  validate[required] text-input" id="product_color" name="product_color"> <?
                                                
                $photocoloe=explode(",",$fixrow['product_colour']);
												foreach ($photocoloe as $key => $value) {
													echo '<option value="'.$value.'">'.$value.'</option> ';
												}
				
				?>

												 
                                                </select>
                                            </div>
										</div><div class="form-group">
													<div class="col-sm-2 col-sm-offset-8">
														<button class="btn btn-blue next-step btn-block">
															Upload <i class="fa fa-arrow-circle-right"></i>
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