<?
$prdIdfororder=$prd_record['rowId'];
$productIdcode				=str_pad($prd_record['rowId'], 10, "0", STR_PAD_LEFT);
$product_name				=$prd_record['product_name'];
$category_name				=$prd_record['category_name'];
$product_description		=$prd_record['product_description'];
$sellerId		=$prd_record['sellerId'];
$bbrands						=getBrandName($prd_record['bbrand']);
$product_size				=$prd_record['product_size'];
$product_colour				=$prd_record['product_colour'];
$mrp_purchase				=$prd_record['mrp_purchase'];
$mrp_sales					=$prd_record['mrp_sale'];
$in_stock_quantity			=$prd_record['in_stock_quantity'];
$isnewpromotional			=$prd_record['isnewpromotional'];
$isfeaturedproduct			=$prd_record['isfeaturedproduct'];
$totalvotes					=$prd_record['totalvotes'];
$averagerating		=$prd_record['averagerating'];
$curdate=date("Y-m-d");
///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////
 $discounapplied=getdiscount_price($prdId);
 $getAllDisp			=explode('|',$discounapplied);
  
 $discount_applied		= $getAllDisp[0];
 $discount_minorder		= $getAllDisp[1];
 $discount_discountrate	= $getAllDisp[2];
 $discount_discounttype	= $getAllDisp[3];
 
 if($discount_applied!=0){
	 
	 if($discount_discounttype==2){
		 // FLAT 
		 $newsaleprice=$mrp_sales-$discount_discountrate;
		   $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span><span class="product-price">₹'. $newsaleprice.'</span>';
		 }
		  if($discount_discounttype==1){
			 // PERCENTAGE
		 $percentage = ( $discount_discountrate / 100 ) * $mrp_sales;
 		  $newsaleprice=$mrp_sales-$percentage;
		  
		  $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span><span class="product-price">₹'. $newsaleprice.'</span>';
		 }
	  
	  
	 }else{
		 $mrp_sale=$mrp_sales;
		   $newsaleprice=$mrp_sales ;
		  $qu_sellprice='<span class="product-price">₹'. $newsaleprice.'</span>';
		 }
		 
		 
//////////////////////////////ABOUT SELLER/////////////////////////////
  $mcSellerow= show_selecttable($debug,$limitstring,$conn,'seller_master','*','WHERE rowId=\''.$sellerId.'\'',$limit,1,' rowId ASC');
$ths='0';
		foreach( $mcSellerow as $ssxSellgbw ) {
 			$company_name=$ssxSellgbw['company_name']; 
			$seller_description=$ssxSellgbw['seller_description'];
		}
	 
 //////////////////////////////ABOUT SELLER/////////////////////////////
 
 
///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////	
		
 $mcxvshow= show_selecttable($debug,$limitstring,$conn,'product_image','*','WHERE productid=\''.$prdId.'\'',$limit,1,' rowId ASC');
$ths='0';
		foreach( $mcxvshow as $ssxgbw ) {
 			$imagename_lr=$ssxgbw['imagename_lr'];
			$imagename_tr=$ssxgbw['imagename_tr'];
			$imagename=$ssxgbw['imagename'];
			if($ths==0){
				$masterpic='  <img id="product-zoom" src="'.$imagename_lr.'" data-zoom-image="'.$imagename.'" alt="Product image big">';
				$pingus='<div class="owl-item active"><a href="#" data-image="'.$imagename_lr.'" data-zoom-image="'.$imagename.'" class="product-gallery-item">
                                            <img src="'.$imagename_tr.'" alt="product-small-1">
                                        </a></div>';
				}else{
				$pingus=$pingus.'<div class="owl-item active"><a href="#" data-image="'.$imagename_lr.'" data-zoom-image="'.$imagename.'" class="product-gallery-item">
                                            <img src="'.$imagename_tr.'" alt="product-small-1">
                                        </a></div>';
										}
				
				$ths=$ths+1;
			}

?>

<div class="row">
                        <div class="col-md-5">
                            <div class="product-gallery-container">
                                <div class="product-zoom-wrapper">
                                    <div class="product-zoom-container">
                                        <?=$masterpic;?>
                                    </div><!-- End .product-zoom-container -->
                                </div><!-- End .product-zoom-wrapper -->
								<div style="clear:both"></div>
                                <div class="product-gallery-wrapper">
                                    <div class="owl-carousel product-gallery owl-loaded owl-drag">
                                             <?=$pingus;?>
                                     </div><!-- End .product-gallery -->
                                </div><!-- End .product-gallery-wrapper -->
                            </div><!-- End .product-gallery-container -->
                        </div><!-- End .col-md-5 -->

                        <div class="clearfix visible-sm"></div><!-- end .clearfix -->

                        <form id="shopprduct" method="post" enctype="multipart/form-data">
                        <div class="col-md-5 col-sm-9">
                            <div class="product-details">
                                <h2 class="product-title"><?=$product_name; ?></h2>
                                <div class="review-container">
                                    <a href="#" class="product-ratings">
                                        <span class="ratings" style="width:80%">
                                            <span class="ratings-text sr-only">11 Reviews</span>
                                        </span><!-- End .ratings -->
                                    </a><!-- End .product-ratings -->
                                    <span class="review-count">4 Reviews</span>
                                    <a href="#" class="review-action">Add a review</a>
                                </div><!-- End .review-container -->
                                <div class="product-price-container">
                                  <?=  $qu_sellprice;?>
                                </div><!-- End .product-price-container -->
                                <div class="product-desc-box">
                                    <span class="shipping-box">
                                        <i class="fa fa-truck"></i>
                                        <br>Free <br> Shipping
                                    </span>
                                    <ul>
                                        <li><strong>Brand:</strong> <?=$bbrands;?></li>
                                        <li><strong>Availablity:</strong> <?=$in_stock_quantity;?></li>
                                        <li><strong>Product Code:</strong> <?=$productIdcode;?></li>
                                    </ul>
                                </div><!-- End .product-desc-box -->

                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="filter-color-container">
                                            <label>Select Color:</label>
                                            <div class="filter-row">
                                            <?
                                            $prdCol=explode(",",$product_colour);
											$color='';
											$th=0;
											$allcosun=count($myprdsSize);
											foreach($prdCol as $colo){
												$vowels = array("dark", "light", "mild", "fluorescent", "warm", "cool", "pale","Navy","ice","fire","Apple");
$colos= str_replace($vowels, "", strtolower($colo));

												if($th==0){
													$sel_col=$colo;
													$color=$color.' <a id="col'.$th.'" href="javascript:void(0)" onclick="makemeselected(\'color\',\''.$th.'\',\''.$colo.'\',\''.$allcosun.'\');" style="background-color:'.$colos.'" class="filter-color-box active" title="'.$colo.'"></a>';
													}else{
													$color=$color.' <a id="col'.$th.'" href="javascript:void(0)" onclick="makemeselected(\'color\',\''.$th.'\',\''.$colo.'\',\''.$allcosun.'\');" style="background-color:'.$colos.'" class="filter-color-box" title="'.$colo.'"></a>';
													}
												$th++;
												}
												echo $color;
											?>
                                                    
                                            </div><!-- End .row -->
                                        </div><!-- End .filter-color-container -->
                                    </div><!-- End .col-xs-6 -->
                                    <div class="col-xs-6">
                                        <div class="filter-size-container">
                                            <label>Select Size:</label>
                                            <div class="filter-row">
                                            <?
											$prSize='';
											
                                            $myprdsSize=explode(",",$product_size);
											$th=0;
											$allcosun=count($myprdsSize);
											foreach($myprdsSize as $sizes){
												
												if($th==0){
													$sel_size=$sizes;
													$prSize=$prSize.'<a id="size'.$th.'" href="javascript:void(0)" onclick="makemeselected(\'size\',\''.$th.'\',\''.$sizes.'\',\''.$allcosun.'\');" class="filter-size-box active">'.$sizes.'</a>';
													}else{
													$prSize=$prSize.'<a id="size'.$th.'"  href="javascript:void(0)" onclick="makemeselected(\'size\',\''.$th.'\',\''.$sizes.'\',\''.$allcosun.'\');" class="filter-size-box">'.$sizes.'</a>';
													}
												$th++;
												}
												
												echo $prSize;
											?> 
                                            </div><!-- End .row -->
                                        </div><!-- End .filter-size-container -->
                                    </div><!-- End .col-xs-6 -->
                                </div><!-- End .row -->
                                <div class="product-action">
                                    <div class="product-quantity">
                                        <input name="xsize_dress<?=$prdIdfororder;?>" class="form-control" id="xsize_dress<?=$prdIdfororder;?>" type="hidden" value="<?=$sel_size;?>">
                                        <input name="color_dress<?=$prdIdfororder;?>" class="form-control" id="color_dress<?=$prdIdfororder;?>" type="hidden" value="<?=$sel_col;?>">
                                        <input name="productId<?=$prdIdfororder;?>" id="productId<?=$prdIdfororder;?>" type="hidden" value="<?=$prdIdfororder;?>" />
                                        
                                        <input name="quanti<?=$prdIdfororder;?>" id="quanti<?=$prdIdfororder;?>" type="text" class="form-control input validate[required,custom[integer],min[1],max[<?=$in_stock_quantity;?>]] " value="1"  placeholder="1">
                                    </div><!-- end .product-quantity -->
                                    
                                    <span id="prdadd<?=$prdIdfororder;?>"><a href="javascript:void(0)" onclick="makemeseltoCart('<?=$prdIdfororder;?>');" class="btn btn-custom btn-lg">Add to Cart</a></span>
                                </div><!-- End .product-action -->
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne2">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                                Description
                                            </a>
                                        </h4>
                                    </div><!-- End .panel-heading -->
                                    <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne2">
                                        <div class="panel-body">
                                            <p><?=$product_description;?></p>
                                        </div><!-- End .panel-body -->
                                    </div><!-- End .panel-collapse -->
                                </div><!-- End .panel -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo2">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                          Made on Order
                                            </a>
                                        </h4>
                                    </div><!-- End .panel-heading -->
                                    <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                        <div class="panel-body">
                                            <ul class="fa-ul"> 
                                                <li><i class="fa-li fa fa-check-square-o"></i>Custom Tailored product will be shipped to you after 2-5 weeks..</li>
                                                <li><i class="fa-li fa fa-check-square-o"></i>For customised sizes, please click on the custom made tab on "<strong>checkout form</strong>" and fill the form</li>
                                                <li><i class="fa-li fa fa-check-square-o"></i>Custom made orders can not be exchanged or returned.</li>
                                                   
                                            </ul>
                                        </div><!-- End .panel-body -->
                                    </div><!-- End .panel-collapse -->
                                </div><!-- End .panel -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree2">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                                About <?=$company_name;?>
                                            </a>
                                        </h4>
                                    </div><!-- End .panel-heading -->
                                    <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree2">
                                        <div class="panel-body">
                                            <p><?=nl2br($seller_description);?></p>
                                        </div><!-- End .panel-body -->
                                    </div><!-- End .panel-collapse -->
                                </div><!-- End .panel -->
                            </div><!-- End .panel-group -->
                            </div><!-- End .product-details -->
                        </div>
                        </form><!-- End .col-md-5 -->

                        <aside class="col-md-2 col-sm-3 sidebar product-sidebar">
                           <?
                            $gissellerore=moreproductsofSeller($sellerId,$prdIdfororder);
							echo  $gissellerore;
						   ?><!-- end .widget -->
                        </aside>
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="mb30 hidden-xs"></div><!-- margin -->

                <div class="container">
                    <h3 class="mb25">You may also like</h3>
                    

                      <? $youmaylikeit=youmaylikethis($category_name);
					  echo  $youmaylikeit;?>

                           
                    </div><!-- End .similiar-products-carousel -->