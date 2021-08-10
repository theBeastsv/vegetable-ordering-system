<? 
	
	$pagegetdata=$_REQUEST['toeditdata']; 
	 
	$mafvshow= show_selecttable($debug,$limitstring,$conn,'productmaster','*',"WHERE rowId=\"$pagegetdata\"",$limit,1,' rowId ASC');
	
	foreach( $mafvshow as $row ) {} ?>
	
				<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-external-link-square"></i> Product Master<div class="panel-tools"></div>
								</div>
								<div class="panel-body">
			   <form class="form-horizontal" role="form" method="post" action="forms/ediproductmaster.php">
			   <input name="toeditdata" id="toeditdata" type="hidden" value="<?=$_REQUEST['toeditdata'];?>" />
			   <span><input type="hidden" placeholder="Companyid" class="form-control  " id="companyid" name="companyid" value="<?=$row['companyid'];?>"> </span> <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Category_name
											</label>
											<div class="col-sm-9">
												
<div class="input-group">
		<select class="form-control  validate[required] text-input" id="category_name" name="category_name"><option value="">Select One</option>
         <?  
		 
			
 			 $mafvshow= show_selecttable($debug,$limitstring,$conn,'product_category','rowId,category_name,parent_category','WHERE parent_category=\'0\'',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
			$category_name=$ssrow['category_name'];
			if($tats==$row['category_name']){$simd="selected";}else{$simd="";}
 			echo ' <optgroup label="'.$category_name.'">
			<option value="'.$tats.'" '.$simd.'>'.$category_name.'</option>' ;
				  $mafxow= show_selecttable($debug,$limitstring,$conn,'product_category','rowId,category_name,parent_category','WHERE parent_category=\''.$tats.'\'',$limit,1,' rowId ASC');
		foreach( $mafxow as $ssrxow ) {
			$tatssrxows=$ssrxow['rowId'];
			$category_namssrxowe=$ssrxow['category_name'];
				if($tatssrxows==$row['category_name']){$simdx="selected";}else{$simdx="";}
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
												<input type="text" placeholder="Product_name" class="form-control  validate[required] text-input" id="product_name" name="product_name" value="<?=$row['product_name'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Product_description
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Product_description" class="form-control  validate[required] text-input" id="product_description" name="product_description" value="<?=$row['product_description'];?>"> 
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Bbrand
											</label>
											<div class="col-sm-9">
												
<div class="input-group">
		<select class="form-control  validate[required] text-input" id="bbrand" name="bbrand"><option value="">Select One</option>	<option value="0">MY OWN BRAND</option> <?  
		  $mafvshow= show_selecttable($debug,$limitstring,$conn,'brandsmaster','rowId,brandname','',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
			$brandname	=$ssrow['brandname'];
			if($tats==$row['bbrand']){$simd="selected";}else{$simd="";}
 			echo '<option value="'.$tats.'" '.$simd .'>'.$brandname.'</option>' ;
				
		}
		 
		?></select></div>
											</div>
										</div><div class="form-group has-success">
											<label for="form-field-1" class="col-sm-2 control-label">
												Product_size
											</label>
											<div class="col-sm-3">
												<input type="text" placeholder="Product_size" class="form-control  validate[required] text-input" id="product_size" name="product_size" value="<?=$row['product_size'];?>"> 
											</div>
                                            <div class="col-sm-3">
                                            <label for="form-field-1" class="col-sm-12 control-label">
												Product_colour
											</label>
                                            </div>
                                            <div class="col-sm-3">
                                            <input type="text" placeholder="Product_colour" class="form-control  validate[required] text-input" id="product_colour" name="product_colour" value="<?=$row['product_colour'];?>"> 
                                            </div>
										</div> 
                                        
                                        <div class="form-group has-error">
											<label for="form-field-1" class="col-sm-2 control-label">
												Mrp/Production COST
											</label>
											<div class="col-sm-3">
												<input type="text" placeholder="Mrp_purchase" class="form-control  validate[required] text-input" id="mrp_purchase" name="mrp_purchase" value="<?=$row['mrp_purchase'];?>"> 
											</div>
                                            <div class="col-sm-3">
                                            <label for="form-field-1" class="col-sm-12 control-label">
												Selling Price
											</label>
                                            </div>
                                              <div class="col-sm-3">
                                             <input type="text" placeholder="Mrp_sale" class="form-control  validate[required] text-input" id="mrp_sale" name="mrp_sale" value="<?=$row['mrp_sale'];?>">  
                                               <div class="help-block">TAX + commission Will be added automatically</div></div></div>
										 
                                        <div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
											Stock Quantity
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="In_stock_quantity" class="form-control  validate[required] text-input" id="in_stock_quantity" name="in_stock_quantity" value="<?=$row['in_stock_quantity'];?>"> 
											</div>
										</div> <div class="form-group">
													<div class="col-sm-2 col-sm-offset-8">
														<button class="btn btn-blue next-step btn-block">
															submit <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div></form></div>
												</div>
												</div>
												</div>
                                                
<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-external-link-square"></i> Product Photo Master<div class="panel-tools"></div>
								</div>
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
                $mafvshow= show_selecttable($debug,$limitstring,$conn,'product_image','*','WHERE productid=\''.$pagegetdata.'\'',$limit,1,' rowId ASC');
		foreach( $mafvshow as $ssrow ) {
			$tats=$ssrow['rowId'];
			$product_color	=$ssrow['product_color'];
			$imagename_tr	=$ssrow['imagename_tr'];
			$domain=$_SERVER['HTTP_HOST'];
		if($domain=='localhost'){ 
			$binsed='';
		}else{
			$binsed='../';
			}
			
			 echo '<tr>
                	<td><img src="'.$binsed.''.$imagename_tr.'"></td>
                    <td>'.$product_color.'</td>
                    <td><a href="">REMOVE</a></td>
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
                                                
                $photocoloe=explode(",",$row['product_colour']);
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
                                </div>
                                </div>
                                </div>
                                