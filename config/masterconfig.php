<?
	define('SRC_BASE_PAGE', '15');
	define('PAGINATION_B_RECORDSET', '15');
	define('PRJ_URL', 'http://vareneum.com');
	define('OFFICE_ADDRESS','OFF-NO:9-32/2,Moti Tabela Opp OPP Collectorate-Indore ,Madhya Pradesh India');
	define('WEBSITE_NAME_MASTER','SHOPPING CART');
	define('OFFICE_CONTACTNUMBER','+91-9074-503-993');
	define('OFFICE_CONTACTNUMBER_A','+91-7869-9649-13');
	
	
	function youmaylikethis($category_name){
		$limit=10;
		 $mcxEfghw= show_selecttable($debug,$limitstring,$conn,'productmaster','*','WHERE   category_name!=\''.$category_name.'\'',$limit,1,' RAND()');
$maxrita= '<div class="similiar-products-carousel owl-carousel">';
		foreach( $mcxEfghw as $YoMatReset ) {
			 $mrrowId					=$YoMatReset['rowId'];
				$companyid				=$YoMatReset['companyid'];
				$category_name			=$YoMatReset['category_name'];
				$product_name			=$YoMatReset['product_name'];
				$product_description	=$YoMatReset['product_description'];
				$bbrand					=$YoMatReset['bbrand'];
				$product_size			=$YoMatReset['product_size'];
				$product_colour			=$YoMatReset['product_colour'];
				$mrp_purchase			=$YoMatReset['mrp_purchase'];
				$mrp_sales				=$YoMatReset['mrp_sale'];
				$in_stock_quantity		=$YoMatReset['in_stock_quantity'];
				$product_image_master	=$YoMatReset['product_image_master'];
				$product_masterid		=$YoMatReset['product_masterid'];
 				$primary_product		=$YoMatReset['primary_product'];
				$isnewpromotional		=$YoMatReset['isnewpromotional'];
				$isfeaturedproduct		=$YoMatReset['isfeaturedproduct'];
				$rateing				=$YoMatReset['rateing'];
				$totalvotes				=$YoMatReset['totalvotes'];
				$averagerating			=$YoMatReset['averagerating'];
				
				$commession_amount				=$YoMatReset['commession_amount'];
				$taxAmountPayable				=$YoMatReset['taxAmountPayable'];
				$hsn_tax			=$YoMatReset['hsn_tax'];
				
				
				$finalAmounthsn_tax=($hsn_tax  / 100 ) * $mrp_purchase;
 				$finalAmountSellWithTax= $mrp_purchase +$finalAmounthsn_tax ;
				$finalAmount= ($commession_amount  / 100 ) * $mrp_purchase;
				$nprint=$finalAmountSellWithTax +$finalAmount ;
	 			
				 
	
				
				$Getimages=getPicForThisProduct($mrrowId,'THUMB');
			///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////	

				$dispprice= getdiscount_price($mrrowId);
				$getAllDisp=explode('|',$dispprice);
				 
				 $discount_applied		= $getAllDisp[0];
				 $discount_minorder		= $getAllDisp[1];
				 $discount_discountrate	= $getAllDisp[2];
				 $discount_discounttype	= $getAllDisp[3];
				 
				 if($discount_applied!=0){
					  /*$finalAmounthsn_tax=($hsn_tax  / 100 ) * $mrp_purchase;
 				$finalAmountSellWithTax= $mrp_purchase +$finalAmounthsn_tax ;
				$finalAmount= ($commession_amount  / 100 ) * $mrp_purchase;
				$nprint=$finalAmountSellWithTax +$finalAmount ;*/
				
				
					 if($discount_discounttype==2){
						 // FLAT 
						 
						
				
						 $newsaleprice=$mrp_purchase-$discount_discountrate;
						 $finalAmounthsn_tax=($hsn_tax  / 100 ) * $newsaleprice;
						 $finalAmountSellWithTax= $newsaleprice +$finalAmounthsn_tax ;
						 $finalAmount= ($commession_amount  / 100 ) * $newsaleprice;
						 $mrp_sales=$finalAmountSellWithTax +$finalAmount ;
							
							
						 
						   $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span><span class="product-price">₹'. $newsaleprice.'</span>';
						 }
						  if($discount_discounttype==1){
							 // PERCENTAGE
						 $percentage = ( $discount_discountrate / 100 ) * $mrp_purchase;
						  $newsaleprice=$mrp_purchase-$percentage;
						   
						 $finalAmounthsn_tax=($hsn_tax  / 100 ) * $newsaleprice;
						 $finalAmountSellWithTax= $newsaleprice +$finalAmounthsn_tax ;
						 $finalAmount= ($commession_amount  / 100 ) * $newsaleprice;
						 $mrp_sales=$finalAmountSellWithTax +$finalAmount ;
						 
						 
						  
						  $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span>&nbsp;<span class="product-price">₹'. $newsaleprice.'</span>';
						 }
					  
					  
					 }else{
						   $mrp_sale=$mrp_sales;
						   $newsaleprice=$mrp_sales ;
						  $qu_sellprice='<span class="product-price">₹'. $newsaleprice.'</span>';
						 }
				 
///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////	
		
			
		$maxrita=$maxrita.'<div class="product">
                            <div class="product-top">
                                <figure>
                                    <a href="product.php?prdId='.$mrrowId.'" title="Product Name">
                                        <img src="'.$Getimages.'" alt="Product image" class="product-image" style="max-height:300px;">
                                        
                                    </a>
                                </figure>
                                
                            </div><!-- End .product -->
                            <h3 class="product-title"><a href="product.php">'.$product_name.'</a></h3>
                            <div class="product-price-container">'.$qu_sellprice.'</div><!-- End .product-price-container -->
                        </div><!-- End .product -->';
							}
				$maxrita=$maxrita.'</div> ';
				return $maxrita;
		 
		}
	
	function moreproductsofSeller($sellerId,$prdIdfororder){
		$limit=3;
		 $mcxvshow= show_selecttable($debug,$limitstring,$conn,'productmaster','*','WHERE sellerId=\''.$sellerId.'\' AND rowId!=\''.$prdIdfororder.'\'',$limit,1,' RAND()');
$maxrita= '<div class="widget">
                                <h3 class="widget-title smaller">From This Seller</h3> <div class="popular-products-widget" align="center">';
		foreach( $mcxvshow as $ssxFgbw ) {
			 $mrrowId					=$ssxFgbw['rowId'];
				$companyid				=$ssxFgbw['companyid'];
				$category_name			=$ssxFgbw['category_name'];
				$product_name			=$ssxFgbw['product_name'];
				$product_description	=$ssxFgbw['product_description'];
				$bbrand					=$ssxFgbw['bbrand'];
				$product_size			=$ssxFgbw['product_size'];
				$product_colour			=$ssxFgbw['product_colour'];
				$mrp_purchase			=$ssxFgbw['mrp_purchase'];
				$mrp_sales				=$ssxFgbw['mrp_sale'];
				$in_stock_quantity		=$ssxFgbw['in_stock_quantity'];
				$product_image_master	=$ssxFgbw['product_image_master'];
				$product_masterid		=$ssxFgbw['product_masterid'];
 				$primary_product		=$ssxFgbw['primary_product'];
				$isnewpromotional		=$ssxFgbw['isnewpromotional'];
				$isfeaturedproduct		=$ssxFgbw['isfeaturedproduct'];
				$rateing				=$ssxFgbw['rateing'];
				$totalvotes				=$ssxFgbw['totalvotes'];
				$averagerating			=$ssxFgbw['averagerating'];
			
				$commession_amount		=$ssxFgbw['commession_amount'];
				$taxAmountPayable		=$ssxFgbw['taxAmountPayable'];
				$hsn_tax				=$ssxFgbw['hsn_tax'];
				
				
				
				$Getimages=getPicForThisProduct($mrrowId,'THUMB');
			///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////	

				$dispprice= getdiscount_price($mrrowId);
				$getAllDisp=explode('|',$dispprice);
				 
				 $discount_applied		= $getAllDisp[0];
				 $discount_minorder		= $getAllDisp[1];
				 $discount_discountrate	= $getAllDisp[2];
				 $discount_discounttype	= $getAllDisp[3];
				 
				 if($discount_applied!=0){
					  /*$finalAmounthsn_tax=($hsn_tax  / 100 ) * $mrp_purchase;
 				$finalAmountSellWithTax= $mrp_purchase +$finalAmounthsn_tax ;
				$finalAmount= ($commession_amount  / 100 ) * $mrp_purchase;
				$nprint=$finalAmountSellWithTax +$finalAmount ;*/
				
				
					 if($discount_discounttype==2){
						 // FLAT 
						 
						
				
						 $newsaleprice=$mrp_purchase-$discount_discountrate;
						 $finalAmounthsn_tax=($hsn_tax  / 100 ) * $newsaleprice;
						 $finalAmountSellWithTax= $newsaleprice +$finalAmounthsn_tax ;
						 $finalAmount= ($commession_amount  / 100 ) * $newsaleprice;
						 $mrp_sales=$finalAmountSellWithTax +$finalAmount ;
							
							
						 
						   $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span><span class="product-price">₹'. $newsaleprice.'</span>';
						 }
						  if($discount_discounttype==1){
							 // PERCENTAGE
						 $percentage = ( $discount_discountrate / 100 ) * $mrp_purchase;
						  $newsaleprice=$mrp_purchase-$percentage;
						   
						 $finalAmounthsn_tax=($hsn_tax  / 100 ) * $newsaleprice;
						 $finalAmountSellWithTax= $newsaleprice +$finalAmounthsn_tax ;
						 $finalAmount= ($commession_amount  / 100 ) * $newsaleprice;
						 $mrp_sales=$finalAmountSellWithTax +$finalAmount ;
						 
						 
						  
						  $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span>&nbsp;<span class="product-price">₹'. $newsaleprice.'</span>';
						 }
					  
					  
					 }else{
						   $mrp_sale=$mrp_sales;
						   $newsaleprice=$mrp_sales ;
						  $qu_sellprice='<span class="product-price">₹'. $newsaleprice.'</span>';
						 }
				 
///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////	
			
		$maxrita=$maxrita.'
                                    <div class="product">
                                        <div class="product-top"> 
                                            <figure>
                                                <a href="product.php?prdId='.$mrrowId.'" title="'.$product_name.'">
                                                    <img src="'.$Getimages.'" alt="'.$product_name.'" class="product-image" style=" max-width:120px;">
                                                     
                                                </a>
                                            </figure>
                                         </div><!-- End .product -->
                                        <h4 class="product-title"><a href="product.php">'.$product_name.'</a></h4>
                                        <div class="product-price-container" align="center">
                                           '.$qu_sellprice.'
                                        </div><!-- End .product-price-container -->
                                    </div><!-- End .product -->

                                     
                                
                            ';
							}
				$maxrita=$maxrita.'</div><!-- end .popular-products-widget --></div>';
				return $maxrita;
		}
	function getPicForThisProduct($mrrowId,$picType){
		
		
 	$domain=$_SERVER['HTTP_HOST'];
		if($domain=='localhost'){ 
			$binsed='';
		}else{
			$binsed='';
			}
		 $mcxvshow= show_selecttable($debug,$limitstring,$conn,'product_image','*','WHERE productid=\''.$mrrowId.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
		foreach( $mcxvshow as $ssxgbw ) {
			if($picType=='THUMB'){
			$imagename=$ssxgbw['imagename_tr'];
			}
			if($picType=='LARGE'){
			$imagename=$ssxgbw['imagename_lr'];
			}
			if($picType=='ORIGIONAL'){
			$imagename=$ssxgbw['imagename'];
			}
			
		}
		return $binsed.''.$imagename;
		}
	
	function showallmasterprimeprd($tikas){
		global $conn;
		$limit=8;
		if($tikas==1){
	 $mcxvshow= show_selecttable($debug,$limitstring,$conn,'productmaster','*','',$limit,1,' rowId ASC');
		}
		if($tikas==2){
			 $mcxvshow= show_selecttable($debug,$limitstring,$conn,'productmaster','*','',$limit,1,' rowId DESC');
			}
$maxrita= ' ';
		foreach( $mcxvshow as $ssxgbw ) {
			$product_name=$ssxgbw['product_name'];
			$catrsowIde=$ssxgbw['rowId'];
			$mrp_sale=$ssxgbw['mrp_sale'];
			$mrrowId=$ssxgbw['rowId'];
			$product_size=$ssxgbw['product_size'];
			$product_colour=$ssxgbw['product_colour'];
				$primeSize=explode(',',$product_size);
				$primeColor=explode(',',$product_colour);
			 $imageurl= getPicForThisProduct($mrrowId,'THUMB');
			 
			
			$gnjos=$gnjos.' <div class="product" id="masterprdId'.$catrsowIde.'">
                    <div class="product-top">
                        <figure>
                            <a href="product.php?prdId='.$mrrowId.'" title="'.$product_name.'?prdId='.$mrrowId.'" title="'.$product_name.'">
                                <img src="'.$imageurl.'" alt="Product image" class="product-image"> 
                            </a>
                        </figure>
                        <a  href="javascript:void(0)"  onclick="makemeseltoCartOuter(\''.$mrrowId.'\',\''.$primeSize[0] .'\',\''.$primeColor[0].'\');"class="btn product-add-btn">Add to Cart</a>
                    </div><!-- End .product -->
                    <h3 class="product-title"><a href="product.php?prdId='.$mrrowId.'" title="'.$product_name.'?prdId='.$mrrowId.'">'.$product_name.'</a></h3>
                    <div class="product-price-container">
                        <span class="old-price">₹'.$mrp_sale.'</span>
                        <span class="product-price">₹'.$mrp_sale.'</span>
                    </div><!-- End .product-price-container -->
                </div><!-- End .product -->';
			
		}
		
		return $gnjos;
		
		}
		
		
function list_showmeall_products($primtemp){
	$newsstrings='';
	$keywor=$_REQUEST['keywor'];
	$bekeyword=explode(' ',$keywor);
 	$catId=$_REQUEST['catId'];
$ui=$_REQUEST['ui'];
if($ui==''){
	$ui=1;
	}
	$querys="WHERE rowId>'0' ";
	if($catId!=''){
		$querys=$querys." AND  category_name='$catId'";
	}
	
	
	$tablename='productmaster';
	global $conn;
//////////////////SORTING/////////////////////////
 
	  $mincoz=$_REQUEST['mincoz'];
	  $toshowmain=$_REQUEST['toshowmain'];
	  if($toshowmain==''){
	 		$limitstring=12;
	  }else{
		 	 $limitstring=$toshowmain;
	  }
	  
	  $singaorder='rowId DESC';
	  if($mincoz==0){
		    $singaorder='rowId DESC';
		  }
	  if($mincoz==1){
		    $singaorder='mrp_sale ASC';
		  }
	  if($mincoz==2){
		    $singaorder='mrp_sale DESC';
		  } 
		$pins=$_REQUEST['pins'];
		$paxs=$_REQUEST['paxs']; 
		$sto =$_REQUEST['sto'];
		if($sto!=''){
			if($sto!='99999'){
			$querys=$querys." AND bbrand='$sto'";
			}
			}
		if(($pins!='') &&   ($paxs!='')){
			$querys=$querys." AND  (mrp_sale between '$pins' AND '$paxs')";
			}
	   
////////////////////////////////////////// 
	$sellerId=$_SESSION['sellerId'];
 	$navigatelink='&catId='.$catId.'&mincoz='.$mincoz.'&toshowmain='.$toshowmain.'&ui='.$ui;
 		$domain=$_SERVER['HTTP_HOST'];
if($domain=='localhost'){ 	
 $bingo='frontend/'; 
}else{	 
$bingo='../../'; 
}  
 $marthalluser= show_selecttable_paging($debug,$limitstring,$conn,$tablename,'*',$querys,$limit,1,$singaorder);
		$allcount=count($marthalluser);
											
		$rowsPerPage=$limitstring;					
		$pagenr=$_POST['pagenr']; 
		$pageNum = 1; 
		if(isset($_GET['page'])) 
		{ 
		$pageNum = $_GET['page']; 
		} 
		$offset = ($pageNum - 1) * $rowsPerPage;
		
		 
   		$limitstring=" LIMIT $offset, $rowsPerPage";
		 $pagename=$PHP_SELF;
		 
		 $showlisttype=2;
		$paginglinkl= basic_paging($showlisttype,$pageNum,$rowsPerPage,$allcount,$navigatelink,$pagename,' align="right"');
		 
     						
			$toshofoaval= show_selecttable_paging($debug,$limitstring,$conn,$tablename,'*',$querys ,1,1,$singaorder ); 									
									   
       
	 if(count($toshofoaval)>0){
		  if($ui==1){
		  $saragasam='  <div class="products-container max-col-4">
                                <div class="shop-row">';
		  }
		foreach( $toshofoaval as $arrvbta ) {
				$mrrowId=$rowId					=$arrvbta['rowId'];
				$companyid				=$arrvbta['companyid'];
				$category_name			=$arrvbta['category_name'];
				$product_name			=$arrvbta['product_name'];
				$product_description	=$arrvbta['product_description'];
				$bbrand					=$arrvbta['bbrand'];
				$product_size			=$arrvbta['product_size'];
				$product_colour			=$arrvbta['product_colour'];
				
				$primeSize=explode(',',$product_size);
				$primeColor=explode(',',$product_colour);
				
				$mrp_purchase			=$arrvbta['mrp_purchase'];
				$mrp_sales				=$arrvbta['mrp_sale'];
				$in_stock_quantity		=$arrvbta['in_stock_quantity'];
				$product_image_master	=$arrvbta['product_image_master'];
				$product_masterid		=$arrvbta['product_masterid'];
 				$primary_product		=$arrvbta['primary_product'];
				$isnewpromotional		=$arrvbta['isnewpromotional'];
				$isfeaturedproduct		=$arrvbta['isfeaturedproduct'];
				$rateing				=$arrvbta['rateing'];
				$totalvotes				=$arrvbta['totalvotes'];
				$averagerating			=$arrvbta['averagerating'];
				$ispoplular				=$arrvbta['ispoplular'];
				
				$commession_amount		=$arrvbta['commession_amount'];
				$taxAmountPayable		=$arrvbta['taxAmountPayable'];
				$hsn_tax				=$arrvbta['hsn_tax'];
				
				
					if($ispoplular==1){
						$ispoplular='<span class="label popular">Popular</span>';
						}else{
						$ispoplular='';
						}
				 	 
				 $imageurl= getPicForThisProduct($rowId,'THUMB');
///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////	

				$dispprice= getdiscount_price($mrrowId);
				$getAllDisp=explode('|',$dispprice);
				 
				 $discount_applied		= $getAllDisp[0];
				 $discount_minorder		= $getAllDisp[1];
				 $discount_discountrate	= $getAllDisp[2];
				 $discount_discounttype	= $getAllDisp[3];
				 
				 if($discount_applied!=0){
					  /*$finalAmounthsn_tax=($hsn_tax  / 100 ) * $mrp_purchase;
 				$finalAmountSellWithTax= $mrp_purchase +$finalAmounthsn_tax ;
				$finalAmount= ($commession_amount  / 100 ) * $mrp_purchase;
				$nprint=$finalAmountSellWithTax +$finalAmount ;*/
				
				
					 if($discount_discounttype==2){
						 // FLAT 
						 
						
				
						 $newsaleprice=$mrp_purchase-$discount_discountrate;
						 $finalAmounthsn_tax=($hsn_tax  / 100 ) * $newsaleprice;
						 $finalAmountSellWithTax= $newsaleprice +$finalAmounthsn_tax ;
						 $finalAmount= ($commession_amount  / 100 ) * $newsaleprice;
						 $mrp_sales=$finalAmountSellWithTax +$finalAmount ;
							
							
						 
						   $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span><span class="product-price">₹'. $newsaleprice.'</span>';
						 }
						  if($discount_discounttype==1){
							 // PERCENTAGE
						 $percentage = ( $discount_discountrate / 100 ) * $mrp_purchase;
						  $newsaleprice=$mrp_purchase-$percentage;
						   
						 $finalAmounthsn_tax=($hsn_tax  / 100 ) * $newsaleprice;
						 $finalAmountSellWithTax= $newsaleprice +$finalAmounthsn_tax ;
						 $finalAmount= ($commession_amount  / 100 ) * $newsaleprice;
						 $mrp_sales=$finalAmountSellWithTax +$finalAmount ;
						 
						 
						  
						  $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span>&nbsp;<span class="product-price">₹'. $newsaleprice.'</span>';
						 }
					  
					  
					 }else{
						   $mrp_sale=$mrp_sales;
						   $newsaleprice=$mrp_sales ;
						  $qu_sellprice='<span class="product-price">₹'. $newsaleprice.'</span>';
						 }
				 
///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////			
		 if($ui==1){
		$saragasam=$saragasam.'  <div class="product" id="masterprdId'.$mrrowId.'">
                                        <div class="product-top">
                                            '.$ispoplular.'
                                            <figure>
                                                <a href="product.php?prdId='.$mrrowId.'" title="'.$product_name.'?prdId='.$mrrowId.'" title="'.$product_name.'" title="'.$product_name.'">
                                                    <img src="'.$imageurl.'" alt="Product image" class="product-image"> 
                                                </a>
                                            </figure>
                                            <a href="javascript:void(0)"  onclick="makemeseltoCartOuter(\''.$mrrowId.'\',\''.$primeSize[0] .'\',\''.$primeColor[0].'\');"  class="btn product-add-btn">Add to Cart</a>
                                        </div><!-- End .product -->
                                        <h3 class="product-title"><a href="product.php?prdId='.$mrrowId.'" title="'.$product_name.'?prdId='.$mrrowId.'" title="'.$product_name.'">'.$product_name.'</a></h3>
                                        <div class="product-price-container">'.$qu_sellprice.'</div><!-- End .product-price-container -->
                                    </div><!-- End .product -->'; 
		 }else{
		$saragasam=$saragasam.'<div class="product product-list" id="masterprdId'.$mrrowId.'">
                                <div class="row">
                                    <div class="col-md-4 col-sm-5">
                                        <div class="product-top">
                                            <span class="label discount">-50%</span>
                                            <figure>
                                                <a href="product.php?prdId='.$mrrowId.'" title="'.$product_name.'" title="'.$product_name.'">
                                                    <img src="'.$imageurl.'" alt="Product image" class="product-image">
                                                </a>
                                            </figure>
                                            <a href="javascript:void(0)"  onclick="makemeseltoCartOuter(\''.$mrrowId.'\',\''.$primeSize[0] .'\',\''.$primeColor[0].'\');"  class="btn product-add-btn">Add to Cart</a>
                                        </div><!-- End .product-top -->
                                    </div><!-- End .col-md-4 -->
                                    <div class="col-md-8 col-sm-7">
                                        <h3 class="product-title"><a href="product.php?prdId='.$mrrowId.'" title="'.$product_name.'">'.$product_name.'</a></h3>
                                        <div class="product-content">
                                            <p>'.$product_description.'</p>
                                        </div><!-- End .product-content -->
                                        <div class="product-price-container">
                                          '.$qu_sellprice.'
                                        </div><!-- End .product-price-container -->
                                    </div><!-- End .col-md-8 -->
                                </div><!-- end .Row -->
                            </div><!-- End .product -->';
			 }
		}
	 if($ui==1){	 
$saragasam=$saragasam.'<div style="clear:both"></div>  </div><!-- end .row -->
                            </div><!-- End .products-container -->
 <div style="padding:10px;"></div>'.$paginglinkl;
	 }else{
$saragasam=$saragasam.'<div style="clear:both"></div>  
 <div style="padding:10px;"></div>'.$paginglinkl; 
		 }
		 
	 }else{
		  $saragasam='<div class="row  categoryProduct xsResponse clearfix"><div class="alert alert-warning"> 
										<i class="fa fa-exclamation-triangle"></i>
										<strong>Warning!</strong>&nbsp;No Record found !!</div></div>';
		 }
return  $saragasam;  
	 
	 
	}
	
	
function showAllMyorders(){
	$KesOnUserId=$_SESSION['KesOnUserId'];
 	$querys="WHERE userId='$KesOnUserId' ";
 	$tablename='invoice_master';
	global $conn;
//////////////////SORTING/////////////////////////
 	  $singaorder='rowId DESC';
	  if($mincoz==0){
		    $singaorder='rowId DESC';
		  }
	  if($mincoz==1){
		    $singaorder='mrp_sale ASC';
		  }
	  if($mincoz==2){
		    $singaorder='mrp_sale DESC';
		  } 
	   
//////////////////////////////////////////  
 	$navigatelink='';
  $limitstring=15;
 $marthalluser= show_selecttable_paging($debug,$limitstring,$conn,$tablename,'*',$querys,$limit,1,$singaorder);
		$allcount=count($marthalluser);
											
		$rowsPerPage=$limitstring;					
		$pagenr=$_POST['pagenr']; 
		$pageNum = 1; 
		if(isset($_GET['page'])) 
		{ 
		$pageNum = $_GET['page']; 
		} 
		$offset = ($pageNum - 1) * $rowsPerPage;
		
		 
   		$limitstring=" LIMIT $offset, $rowsPerPage";
		 $pagename=$PHP_SELF;
		 
		 $showlisttype=2;
		$paginglinkl= basic_paging($showlisttype,$pageNum,$rowsPerPage,$allcount,$navigatelink,$pagename,' align="right"');
		 
     						
			$toshofoaval= show_selecttable_paging($debug,$limitstring,$conn,$tablename,'*',$querys ,1,1,$singaorder ); 									
									   
       
	 if(count($toshofoaval)>0){
		 
		  $saragasam='<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr> 
				<th>Orderid</th>
				<th>Amount</th>
				<th>Shipping</th>
				<th>Products</th>
				<th>Status</th> 
				<th>Payment Status</th>
				<th>Delivery Status</th>  
			</tr>
		</thead>
	<tbody>';
		 
		foreach( $toshofoaval as $arrvbta ) {
			 $rowId					=$arrvbta['rowId'];
				$orderId				=strtoupper($arrvbta['orderId']);
				$total_order_price			=$arrvbta['total_order_price'];
				$shipping_price			=$arrvbta['shipping_price'];
				$order_placed	=$arrvbta['order_placed'];
				$payment_processed					=$arrvbta['payment_processed'];
				$order_confirmed			=$arrvbta['order_confirmed']; 
				$currentstatus			=$arrvbta['currentstatus']; 
				$dateceated			=$arrvbta['dateceated']; 
				 
				  $sCheckQyql = "SELECT SUM(quantity) as quants FROM invoice_detail WHERE invoiceid='$rowId'";
				 
				  $quants=0;
   				  $myquerRty=$conn->query($sCheckQyql);
				  $myScdara= $myquerRty->fetchAll()  ;
				  $xxrows_found = count($myScdara);
				  if($xxrows_found>0){
				  foreach( $myScdara as $xrow ) {
				$quants= $xrow['quants'];
				  }
				  }else{
					  $quants=0;
					  }
	   
		$saragasam=$saragasam.'<tr> 
				<td><a href="viewinvoice.php?invId='.$rowId	.'&orId='.$orderId.'">'.$orderId.'</a><div><small>'.date("D M j G:i:s T Y",strtotime($dateceated)).'</small></div></td>
				<td align="right">'.number_format($total_order_price, 2, '.', '').'</td>
				<td align="right">'.number_format($shipping_price, 2, '.', '').'</td>
				<td>'.$quants.'</td> 
				<td>'.$payment_processed.'</td>
				<td>'.$order_confirmed.'</td>
				<td>'.$currentstatus.'</td> 
			</tr>';
			  
		} 	 
$saragasam=$saragasam.'</tbody></table><div style="clear:both"></div>  
 <div style="padding:10px;"></div>'.$paginglinkl;
	  
		 
	 }else{
		  $saragasam='<div class="row  categoryProduct xsResponse clearfix"><div class="alert alert-warning"> 
										<i class="fa fa-exclamation-triangle"></i>
										<strong>Warning!</strong>&nbsp;No Record found !!</div></div>';
		 }
return  $saragasam;  
	}
	
	
function getSellerBanner($createdby){
 
		
	 $BcId= show_selecttable($debug,$limitstring,$conn,'user_buyer','*','WHERE sellerId=\''.$createdby.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
		foreach( $BcId as $orSRow ) {  
			$bpinnamePath					=	$orSRow['bpinnamePath']; 
			$bpicname					=	$orSRow['bpicname']; 
		}
		$upath="$bpinnamePath/$bpicname";
		if(file_exists($upath)){
			$pictoshow=$upath;	
			}else{
			$pictoshow='assets/images/page-header-bg.jpg';	
			}
			return $upath;
	}
function showorderdetail_seller(){

global $conn;
$invId=$_REQUEST['oids'];
$orId=$_REQUEST['orId'];
$sellerId=$_SESSION['KesOnSELLERID'];
$compaId=1;
 $BiSellSqlId= show_selecttable($debug,$limitstring,$conn,'seller_master','*','WHERE rowId=\''.$sellerId.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
		foreach( $BiSellSqlId as $orSeBilrRow ) {  
			$gst_numberS					=	$orSeBilrRow['gst_number'];  
			$company_type				=	$orSeBilrRow['company_type']; 
			$dcompany_name		    	=	$orSeBilrRow['company_name'];
			$dcontact_address			=	$orSeBilrRow['company_address'];
			$dcompany_city				=	$orSeBilrRow['company_city'];
			$dcompany_state				=	$orSeBilrRow['company_state'];
			$dcompany_country			=	$orSeBilrRow['company_country'];
			$dcompany_postal_code		=	$orSeBilrRow['company_postal_code']; 
 		}
	 
		if(($gst_numberS=='') || ($gst_numberS=='NOTAPPLIED')){
			 $BiSqlId= show_selecttable($debug,$limitstring,$conn,'comy_master','*','WHERE rowId=\''.$compaId.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';

				foreach( $BiSqlId as $orBilrRow ) {
					$company_name				=	$orBilrRow['company_name'];
					$contact_address			=	$orBilrRow['contact_address'];
					$contact_number				=	$orBilrRow['contact_number']; 
					$support_contact_number		=	$orBilrRow['support_contact_number']; 
					$gst_number					=	$orBilrRow['gst_number']; 
					$support_email_id			=	$orBilrRow['support_email_id'];  
					$contact_email_id			=	$orBilrRow['contact_email_id'];  
					$company_city				=	$orBilrRow['company_city'];
					$company_state				=	$orBilrRow['company_state'];
					$company_country			=	$orBilrRow['company_country'];
					$company_postal_code		=	$orBilrRow['company_postal_code'];
				}
				$sitaram='<hr>On Behalf of <strong>'.$dcompany_name.'</strong><div>'.$dcontact_address.' '.$dcompany_city.' '.$dcompany_state.' '.$dcompany_country	.'</div>';
			}else{
				$sitaram='';
			$company_name		    =	$orSeBilrRow['company_name'];
			$contact_address			=	$orSeBilrRow['company_address'];
			$company_city				=	$orSeBilrRow['company_city'];
			$company_state				=	$orSeBilrRow['company_state'];
			$company_country			=	$orSeBilrRow['company_country'];
			$company_postal_code		=	$orSeBilrRow['company_postal_code'];
			$contact_number				=	$orSeBilrRow['contact_number']; 
			$support_contact_number		=	$orSeBilrRow['support_contact_number']; 
			$gst_number					=	$orSeBilrRow['gst_number']; 
			$support_email_id			=	$orSeBilrRow['support_email_id'];  
			$contact_email_id			=	$orSeBilrRow['contact_email_id']; 
			$sitaram='';
			}
			
			$billErDetail='<address>  <strong>'.$company_name	.'</strong>
                                <div>'.$contact_address.'</div>
                                <div>'.$support_contact_number.'</div>
                                <div>'.$support_email_id.'</div> 
								<div><small>'.$sitaram.'</small></div>
                                </address>';
	//////////////////////////  GET BILLER //////////////////////////////
		
		 $orderSql= show_selecttable($debug,$limitstring,$conn,'invoice_master','*','WHERE rowId=\''.$invId.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
		foreach( $orderSql as $orderMasterRow ) {
		 	$totng				=	$orderMasterRow['total_order_price_withoutshipping'];
			$total_order_price	=	$orderMasterRow['total_order_price'];
			$shipping_price		=	$orderMasterRow['shipping_price']; 
			
		}
		
	$sqlTotQuant = "SELECT SUM(quantity) as dquantity FROM invoice_detail WHERE invoiceid='$invId'";
   	$myquerTy=$conn->query($sqlTotQuant);
	$oAlQuantetSql= $myquerTy->fetchAll()  ;
	foreach( $oAlQuantetSql as $oSetRow ) {
		 $dquantity		=	$oSetRow['dquantity'];
	}
	
	
	 $orderDetSql= show_selecttable(0,$limitstring,$conn,'invoice_detail','*','WHERE invoiceid=\''.$invId.'\' AND seller_id=\''.$sellerId.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
$tnkuOrderDetail='<tbody>';
$payableNetPrice=0;
$totQunatity=0;
		foreach( $orderDetSql as $orderDetRow ) {
		 $productid		=	$orderDetRow['productid'];
		 $productname	=	$orderDetRow['productname'];
		 $prdcolor		=	$orderDetRow['prdcolor'];
		 $prdsize		=	$orderDetRow['prdsize'];
		 $quantity		=	$orderDetRow['quantity'];
		 $unitprice		=	$orderDetRow['unitprice'];
		 $unitpricediscoutn	=	$orderDetRow['unitpricediscoutn'];
		 $discount_price		=	$orderDetRow['discount_price'];
		 $discount_id		=	$orderDetRow['discount_id'];
		 $payableprice		=	$orderDetRow['payableprice']; 
		 $totQunatity=$totQunatity+ $quantity;
		 if($discount_id!=0){
			  $orDetSql= show_selecttable($debug,$limitstring,$conn,'discount_master','*','WHERE rowId=\''.$discount_id.'\'',$limit,1,' rowId ASC');
$maxrita= ' '; 
		foreach( $orDetSql as $oRetRow ) {
		 $discount_type	=	$oRetRow['discount_type'];
		 $discount_rate	=	$oRetRow['discount_rate']; 
		 
		 	if($discount_type==1){
					$bilindiscount= '(<small>Discount '.$discount_rate.'%</small>)';
				}else{
				$bilindiscount= '(<small>Discount Flat '.CURRENCY_DEFAULT.' '.$discount_rate.'</small>)';
				}
				
		}
			$billingAmount= $discount_price;
			 }else{
				 $billingAmount= $unitprice;
				}
				
				$tpayable= $billingAmount*$quantity;
				$payableNetPrice=$payableNetPrice+$tpayable;
		 $tnkuOrderDetail=$tnkuOrderDetail.' <tr>
                                            <td>'.ucwords(strtolower($productname)).'<div><strong>Color :</strong> '.ucwords(strtolower($prdcolor)).' <strong>Size :</strong> '.strtoupper($prdsize).'</div><div>'.$unitprice.'  '.$bilindiscount.' </div></td>
                                            <td>'.$quantity.'</td>
                                            <td align="right"> '.number_format($billingAmount, 2, '.', '').'</td>
                                            <td align="right">'.number_format($tpayable, 2, '.', '').'</td>
                                        </tr>
                                   ';
		}
		$tnkuOrderDetail=$tnkuOrderDetail.'	</tbody>';
		
		$shippingPerUnit=$shipping_price/ $dquantity;
		$ShippApplied=$shippingPerUnit*$totQunatity;
		$SellerPayable=$payableNetPrice+$ShippApplied;
		$bingos='<section class="content content_content" style="width: 100%; margin: auto;">
                    <section class="invoice">
                        <!-- title row -->
						
                        <div class="row">
						 
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                  <div  style="padding:5px;">  <i class="fa fa-globe"></i> KaiserHind Products & Services
                                    <small class="pull-right">Date: '.date("j F Y",strtotime($orderMasterRow['dateceated'])).'</small></div>
                                </h2>
                            </div><!-- /.col -->
                        </div>
                        <!-- info row -->
						 <div class="row">
						 <div class="col-xs-6"> Invoice <b>#'.str_pad($orderMasterRow['rowId'], 10, "0", STR_PAD_LEFT)   .'</b></div>
						 <div class="col-xs-6" align="right">Order ID: <b>'.strtoupper($orderMasterRow['orderId']).'</b></div>
						 <hr>
						 </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col"> 
                                From
                               '.$billErDetail.'
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                Bill To
                                <address>
                                    <strong>'.$orderMasterRow['orderplaceing_name'].'</strong>
                                    <br>
                                    Address:
                                    '.$orderMasterRow['bill_address'].'
                                     '.$orderMasterRow['bill_citys'].'-'.$orderMasterRow['bill_postalcode'].'
									 '.$orderMasterRow['bill_states'].' 
                                       '.$orderMasterRow['bill_countrys'].'
                                        
                                                                            <br>
                                    Phone:
                                     '.$orderMasterRow['bill_mobilenumbers'].'                                 <br>
                                    Email: '.$orderMasterRow['bill_emailId'].'                               </address>
                                    
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                 Ship To
                                    <address>
                                    <strong>'.$orderMasterRow['shipp_companyname'].'</strong>
                                    <br>
                                    Address:
                                    '.$orderMasterRow['shipp_address'].'
                                     '.$orderMasterRow['shipp_citys'].'-'.$orderMasterRow['shipp_postalcode'].'
									 '.$orderMasterRow['shipp_states'].' 
                                       '.$orderMasterRow['shipp_countrys'].'
                                        
                                                                            <br>
                                    Phone:
                                     '.$orderMasterRow['bill_mobilenumbers'].'                                 <br>
                                    Email: '.$orderMasterRow['shipp_emailId'].'                               </address>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Qty</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    '.$tnkuOrderDetail.'
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-md-6"><p class="lead">GST NUMBER '.$gst_number.'</p></div>
                            <div class="col-md-6">
                                 <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                              <tr>
                                                <th>Total Payble:</th>
                                                <td align="right"><strong> '.number_format($payableNetPrice, 2, '.', '').'</strong></td>
                                            </tr>
                                             <tr>
                                                <th>Shipping:</th>
                                                <td align="right"><strong> '.number_format($ShippApplied, 2, '.', '').'</strong></td>
                                            </tr>
                                           <tr>
                                                <th>Net Payable:</th>
                                                <td align="right"><strong> '.number_format($SellerPayable, 2, '.', '').'</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <a href="" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                                <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                                <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                            </div>
                        </div>
                    </section>
                </section>';
	
	return $bingos;
	
	}
function showorderdetail(){
	$invId=$_REQUEST['invId'];
$orId=$_REQUEST['orId'];
$myuserId=$_SESSION['KesOnUserId'];
$compaId=1;
 $BiSqlId= show_selecttable($debug,$limitstring,$conn,'comy_master','*','WHERE rowId=\''.$compaId.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
		foreach( $BiSqlId as $orBilrRow ) {
		 	$company_name				=	$orBilrRow['company_name'];
			$contact_address			=	$orBilrRow['contact_address'];
			$contact_number				=	$orBilrRow['contact_number']; 
			$support_contact_number		=	$orBilrRow['support_contact_number']; 
			$gst_number					=	$orBilrRow['gst_number']; 
			$support_email_id			=	$orBilrRow['support_email_id'];  
			$contact_email_id			=	$orBilrRow['contact_email_id']; 
 		}
		
		
		 $orderSql= show_selecttable($debug,$limitstring,$conn,'invoice_master','*','WHERE rowId=\''.$invId.'\' AND userId=\''.$myuserId.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
		foreach( $orderSql as $orderMasterRow ) {
		 	$totng				=	$orderMasterRow['total_order_price_withoutshipping'];
			$total_order_price	=	$orderMasterRow['total_order_price'];
			$shipping_price		=	$orderMasterRow['shipping_price']; 
			
		}
	 $orderDetSql= show_selecttable($debug,$limitstring,$conn,'invoice_detail','*','WHERE invoiceid=\''.$invId.'\' AND buyerid=\''.$myuserId.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
$tnkuOrderDetail='<tbody>';
		foreach( $orderDetSql as $orderDetRow ) {
		 $productid		=	$orderDetRow['productid'];
		 $productname	=	$orderDetRow['productname'];
		 $prdcolor		=	$orderDetRow['prdcolor'];
		 $prdsize		=	$orderDetRow['prdsize'];
		 $quantity		=	$orderDetRow['quantity'];
		 $unitprice		=	$orderDetRow['unitprice'];
		 $unitpricediscoutn	=	$orderDetRow['unitpricediscoutn'];
		 $discount_price		=	$orderDetRow['discount_price'];
		 $discount_id		=	$orderDetRow['discount_id'];
		 $payableprice		=	$orderDetRow['payableprice']; 
		 
		 if($discount_id!=0){
			  $orDetSql= show_selecttable($debug,$limitstring,$conn,'discount_master','*','WHERE rowId=\''.$discount_id.'\'',$limit,1,' rowId ASC');
$maxrita= ' '; 
		foreach( $orDetSql as $oRetRow ) {
		 $discount_type	=	$oRetRow['discount_type'];
		 $discount_rate	=	$oRetRow['discount_rate']; 
		 
		 	if($discount_type==1){
					$bilindiscount= '(<small>Discount '.$discount_rate.'%</small>)';
				}else{
				$bilindiscount= '(<small>Discount Flat '.CURRENCY_DEFAULT.' '.$discount_rate.'</small>)';
				}
				
		}
			$billingAmount= $discount_price;
			 }else{
				 $billingAmount= $unitprice;
				}
				
				$tpayable= $billingAmount*$quantity;
		 $tnkuOrderDetail=$tnkuOrderDetail.' <tr>
                                            <td>'.ucwords(strtolower($productname)).'<div><strong>Color :</strong> '.ucwords(strtolower($prdcolor)).' <strong>Size :</strong> '.strtoupper($prdsize).'</div><div>'.$unitprice.'  '.$bilindiscount.' </div></td>
                                            <td>'.$quantity.'</td>
                                            <td align="right"> '.number_format($billingAmount, 2, '.', '').'</td>
                                            <td align="right">'.number_format($tpayable, 2, '.', '').'</td>
                                        </tr>
                                   ';
		}
		$tnkuOrderDetail=$tnkuOrderDetail.'	</tbody>';
		
		$bingos='<section class="content content_content" style="width: 100%; margin: auto;">
                    <section class="invoice">
                        <!-- title row -->
						
                        <div class="row">
						 
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                  <div  style="padding:5px;">  <i class="fa fa-globe"></i> KaiserHind Products & Services
                                    <small class="pull-right">Date: '.date("j F Y",strtotime($orderMasterRow['dateceated'])).'</small></div>
                                </h2>
                            </div><!-- /.col -->
                        </div>
                        <!-- info row -->
						 <div class="row">
						 <div class="col-xs-6"> Invoice <b>#'.str_pad($orderMasterRow['rowId'], 10, "0", STR_PAD_LEFT)   .'</b></div>
						 <div class="col-xs-6" align="right">Order ID: <b>'.strtoupper($orderMasterRow['orderId']).'</b></div>
						 <hr>
						 </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col"> 
                                From
                                <address>  <strong>'.$company_name	.'</strong>
                                <div>'.$contact_address.'</div>
                                <div>'.$support_contact_number.'</div>
                                <div>'.$support_email_id.'</div> 
                                </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                Bill To
                                <address>
                                    <strong>'.$orderMasterRow['orderplaceing_name'].'</strong>
                                    <br>
                                    Address:
                                    '.$orderMasterRow['bill_address'].'
                                     '.$orderMasterRow['bill_citys'].'-'.$orderMasterRow['bill_postalcode'].'
									 '.$orderMasterRow['bill_states'].' 
                                       '.$orderMasterRow['bill_countrys'].'
                                        
                                                                            <br>
                                    Phone:
                                     '.$orderMasterRow['bill_mobilenumbers'].'                                 <br>
                                    Email: '.$orderMasterRow['bill_emailId'].'                               </address>
                                    
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                 Ship To
                                    <address>
                                    <strong>'.$orderMasterRow['shipp_companyname'].'</strong>
                                    <br>
                                    Address:
                                    '.$orderMasterRow['shipp_address'].'
                                     '.$orderMasterRow['shipp_citys'].'-'.$orderMasterRow['shipp_postalcode'].'
									 '.$orderMasterRow['shipp_states'].' 
                                       '.$orderMasterRow['shipp_countrys'].'
                                        
                                                                            <br>
                                    Phone:
                                     '.$orderMasterRow['bill_mobilenumbers'].'                                 <br>
                                    Email: '.$orderMasterRow['shipp_emailId'].'                               </address>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Qty</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    '.$tnkuOrderDetail.'
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-md-6"><p class="lead">GST NUMBER '.$gst_number.'</p></div>
                            <div class="col-md-6">
                                 <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                              <tr>
                                                <th>Total Payble:</th>
                                                <td align="right"><strong> '.number_format($totng, 2, '.', '').'</strong></td>
                                            </tr>
                                             <tr>
                                                <th>Shipping:</th>
                                                <td align="right"><strong> '.number_format($shipping_price, 2, '.', '').'</strong></td>
                                            </tr>
                                           <tr>
                                                <th>Net Payable:</th>
                                                <td align="right"><strong> '.number_format($total_order_price, 2, '.', '').'</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <a href="" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                                <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                                <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                            </div>
                        </div>
                    </section>
                </section>';
	
	return $bingos;
	}
	
	
function showAllproducts($tabId){
	$ifseller=$_SESSION['KesOnSELLERID'];
	$sellerId=$_SESSION['KesOnSELLERID'];
	$buyerId=$_SESSION['KesOnUserId'];
	$getcontentId=$getcontentId_two=$getcontentId_three=$getcontentId_four;
	if($tabId==1){
		$tabId_one=' class="active"';
		$getcontentId=showallproduct();
 		}else{
			$tabId_one=' class=""';
			}
	if($tabId==2){
		$tabId_two=' class="active"';
		$getcontentId_two=addNewProducts();
		}else{
			$tabId_two=' class=""';
			}
	if($tabId==3){
		$tabId_three=' class="active"';
		$getcontentId_three=addSellerProductsOrders();
		}else{
			$tabId_three=' class=""';
			}
	if($tabId==4){
		$tabId_four=' class="active"';
		$getcontentId_four=AllSellerSupport();
		}else{
			$tabId_four=' class=""';
			}
		$mytrickval='<div class="row">
                         <div class="col-md-12"> 
                             <div role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li '.$tabId_one.'><a href="myproduct.php" >My Products</a></li>

                                    <li  '.$tabId_two.'><a href="addnewproduct.php">Add New Products</a></li>

                                    <li '.$tabId_three.'><a href="myorderssel.php">My Orders</a></li>

                                    <li '.$tabId_four.'><a href="supportsel.php">Support</a></li>
                                </ul>

                                <!-- Tab Panes -->
                                <div class="tab-content">
                                        '.$getcontentId.'
                                 </div><!-- End .tab-content -->
                            </div><!-- end role[tabpanel] -->

                        </div>
                    </div>';
					
					return $mytrickval;
	}
	
	
 
##############################  SHOW COMMENTS#########################################
function showallproduct(){
	 
 	$tablename='productmaster';
	global $conn;
//////////////////SORTING/////////////////////////
	$cId=$_REQUEST['cId'];
 ////////////////////////////////////////// 
	$sellerId=$_SESSION['KesOnSELLERID'];
 	$querys="WHERE sellerId='$sellerId' ";
 	$navigatelink='';
    $singaorder='rowId DESC';
	 $domain=$_SERVER['HTTP_HOST'];
 
	$limitstring=15;
 $marthalluser= show_selecttable_paging($debug,$limitstring,$conn,$tablename,'*',$querys,$limit,1,$singaorder);
		$allcount=count($marthalluser);
											
		$rowsPerPage=$limitstring;					
		$pagenr=$_POST['pagenr']; 
		$pageNum = 1; 
		if(isset($_GET['page'])) 
		{ 
		$pageNum = $_GET['page']; 
		} 
		$offset = ($pageNum - 1) * $rowsPerPage;
		
		 
   		$limitstring=" LIMIT $offset, $rowsPerPage";
		 $pagename=$PHP_SELF;
		 
		 $showlisttype=2;
		$paginglinkl= basic_paging($showlisttype,$pageNum,$rowsPerPage,$allcount,$navigatelink,$pagename,' align="right"');
		 
     						
			$toshofoaval= show_selecttable_paging($debug,$limitstring,$conn,$tablename,'*',$querys ,1,1,$singaorder ); 									
									   
       
	 if(count($toshofoaval)>0){
		  $saragasam='<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>PHOTO</th>
				<th>'.$product_name.'</th>
				<th>Category</th>
				<th>Selling price</th>
				<th>Stock</th>
				<th>Action</th>  
 			</tr>
		</thead>
	<tbody>';
		foreach( $toshofoaval as $arrvbta ) {
				$mrrowId					=$arrvbta['rowId'];
				$companyid				=$arrvbta['companyid'];
				$category_name			=$arrvbta['category_name'];
				$product_name			=$arrvbta['product_name'];
				$product_description	=$arrvbta['product_description'];
				$bbrand					=$arrvbta['bbrand'];
				$product_size			=$arrvbta['product_size'];
				$product_colour			=$arrvbta['product_colour'];
				$mrp_purchase			=$arrvbta['mrp_purchase'];
				$mrp_sale				=$arrvbta['mrp_sale'];
				$in_stock_quantity		=$arrvbta['in_stock_quantity'];
				$product_image_master	=$arrvbta['product_image_master'];
				$product_masterid		=$arrvbta['product_masterid'];
 				$primary_product		=$arrvbta['primary_product'];
				$isnewpromotional		=$arrvbta['isnewpromotional'];
				$isfeaturedproduct		=$arrvbta['isfeaturedproduct'];
				$rateing				=$arrvbta['rateing'];
				$totalvotes				=$arrvbta['totalvotes'];
				$averagerating			=$arrvbta['averagerating'];
				
				$Getimages=getPicForThisProduct($mrrowId,'THUMB');
				
		 
		$saragasam=$saragasam.'<tr>
		<td><img src="'.$Getimages.'" style="max-height:190px; max-width:140px"></td>
	<td><a href="ediproductmaster.php?toeditdata='.$mrrowId.'">'.ucwords(strtolower($product_name)).'</a><div><strong>Size : </strong>'.ucwords(strtolower($product_size)).' <strong>Color : </strong>'.ucwords(strtolower($product_colour)).'</div></td> 
	<td>'.ucwords(strtolower($category_name)).'</td>   
	<td>'.$mrp_sale.'</td>
	<td>'.$in_stock_quantity.'</td>       
	<td><a href="forms/delproductmaster.php?toeditdata='.$mrrowId.'">Remove</a></td>
	</tr>'; 
		}
$saragasam=$saragasam.'</tbody>
	</table> <div style="padding:10px;"></div>'.$paginglinkl;
	 }else{
		  $saragasam='<div class="row  categoryProduct xsResponse clearfix"><div class="alert alert-warning"> 
										<i class="fa fa-exclamation-triangle"></i>
										<strong>Warning!</strong>&nbsp;No Record found !!</div></div>';
		 }
return  $saragasam;  
	 
	
	}
	
	
function getMyAllOrderHistory(){
	$tablename='invoice_detail';
 	global $conn;
//////////////////SORTING/////////////////////////
	$cId=$_REQUEST['cId'];
 ////////////////////////////////////////// 
	$sellerId=$_SESSION['KesOnSELLERID'];
 	$querys="WHERE seller_id='$sellerId' ";
 	$navigatelink='';
    $singaorder='rowId DESC';
	 $domain=$_SERVER['HTTP_HOST'];
 
	$limitstring=15;
 $marthalluser= show_selecttable_paging($debug,$limitstring,$conn,$tablename,'*',$querys,$limit,1,$singaorder);
  
		 
		$allcount=count($marthalluser);
											
		$rowsPerPage=$limitstring;					
		$pagenr=$_POST['pagenr']; 
		$pageNum = 1; 
		if(isset($_GET['page'])) 
		{ 
		$pageNum = $_GET['page']; 
		} 
		$offset = ($pageNum - 1) * $rowsPerPage;
		
		 
   		$limitstring=" LIMIT $offset, $rowsPerPage";
		 $pagename=$PHP_SELF;
		 
		 $showlisttype=2;
		$paginglinkl= basic_paging($showlisttype,$pageNum,$rowsPerPage,$allcount,$navigatelink,$pagename,' align="right"');
		 
     						
			$toshofoaval= show_selecttable_paging($debug,$limitstring,$conn,$tablename,'*',$querys ,1,1,$singaorder ); 									
									   
       
	 if(count($toshofoaval)>0){
		  $saragasam='<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>PHOTO</th>
				<th>'.$product_name.'</th> 
				<th>price</th>
				<th>Quantity</th>
				<th>Action</th>  
 			</tr>
		</thead>
	<tbody>';
		foreach( $toshofoaval as $arrvbta ) {
				$mrrowId					=$arrvbta['rowId'];
				$invoiceid				=$arrvbta['invoiceid'];
				$invoicestring				=$arrvbta['invoicestring'];
				$category_name			=$arrvbta['category_name'];
				$product_name			=$arrvbta['productname'];
				$product_description	=$arrvbta['product_description'];
				$bbrand					=$arrvbta['bbrand'];
				$product_size			=$arrvbta['prdsize'];
				$product_colour			=$arrvbta['prdcolor']; 
				$mrp_sale				=$arrvbta['payableprice'];
				$in_stock_quantity		=$arrvbta['quantity'];
				$dateceated	=$arrvbta['dateceated']; 
				
				$Getimages=getPicForThisProduct($mrrowId,'THUMB');
				
		 
		$saragasam=$saragasam.'<tr>
		<td><img src="'.$Getimages.'" style="max-height:120px; max-width:120px"></td>
	<td><a href="product.php?prdId='.$mrrowId.'" target="_blank">'.ucwords(strtolower($product_name)).'</a><div><strong>Size : </strong>'.ucwords(strtolower($product_size)).' <strong>Color : </strong>'.ucwords(strtolower($product_colour)).'</div><div>ORDER ID <strong>'.$invoicestring.'</strong></div></td>  
	<td>'.$mrp_sale.'</td>
	<td>'.$in_stock_quantity.'</td>       
	<td>
	<div><a href="viewsellorder.php?oids='.$invoiceid.'">View Order</a></div> 
	</td>
	</tr>'; 
		}
$saragasam=$saragasam.'</tbody>
	</table> <div style="padding:10px;"></div>'.$paginglinkl;
	 }else{
		  $saragasam='<div class="row  categoryProduct xsResponse clearfix"><div class="alert alert-warning"> 
										<i class="fa fa-exclamation-triangle"></i>
										<strong>Warning!</strong>&nbsp;No Record found !!</div></div>';
		 }
return  $saragasam;  
	
	}
	
	

function getAllDesigners(){
	$tablename='seller_master';
 	global $conn;
//////////////////SORTING/////////////////////////
	$cId=$_REQUEST['cId'];
 ////////////////////////////////////////// 
	$sellerId=$_SESSION['KesOnSELLERID'];
 	$querys="WHERE rowId>'0' ";
 	$navigatelink='';
    $singaorder='rowId DESC';
	 $domain=$_SERVER['HTTP_HOST'];
 
	$limitstring=15;
 $marthalluser= show_selecttable_paging($debug,$limitstring,$conn,$tablename,'*',$querys,$limit,1,$singaorder);
  
		 
		$allcount=count($marthalluser);
											
		$rowsPerPage=$limitstring;					
		$pagenr=$_POST['pagenr']; 
		$pageNum = 1; 
		if(isset($_GET['page'])) 
		{ 
		$pageNum = $_GET['page']; 
		} 
		$offset = ($pageNum - 1) * $rowsPerPage;
		
		 
   		$limitstring=" LIMIT $offset, $rowsPerPage";
		 $pagename=$PHP_SELF;
		 
		 $showlisttype=2;
		$paginglinkl= basic_paging($showlisttype,$pageNum,$rowsPerPage,$allcount,$navigatelink,$pagename,' align="right"');
		 
     						
	 $toshofoaval= show_selecttable_paging($debug,$limitstring,$conn,$tablename,'*',$querys ,1,1,$singaorder ); 									
									   
       
	 if(count($toshofoaval)>0){
		  $saragasam='<div class="products-container max-col-4">
                                <div class="shop-row">';
		foreach( $toshofoaval as $orSRow ) {
				$first_name			=	$orSRow['first_name']; 
				$last_name			=	$orSRow['last_name']; 
				$company_name		=	$orSRow['company_name'];  
				$rowId			=	$orSRow['rowId']; 
				$buyerId			=	$orSRow['buyerId']; 
				
				$BCcId= show_selecttable($debug,$limitstring,$conn,'user_buyer','*','WHERE rowId=\''.$buyerId.'\'',$limit,1,' rowId DESC');
				$maxrita= ' ';
				if( $BCcId>0){
				foreach( $BCcId as $orSRDow ) {  
				$profile_pic						=	$orSRDow['profile_pic'];   
				}
				}else{
				$profile_pic='imuploads/users/7/thumbs/635eebc0764924f93b264d567639109a.jpg';
				}
				
		 
		$saragasam=$saragasam.'<div class="product" style="height: 256.067px;">
                                        <div class="product-top">
                                            <span class="label popular">Popular</span>
                                            <figure>
                                                <a href="designerg.php?desId='.$rowId.'" title="Product Name">
                                                    <img src="'.$profile_pic.'" alt="Product image" class="product-image">  </a>
                                            </figure>
                                           
                                        </div><!-- End .product -->
                                        <h3 class="product-title" style="text-align:center"><a href="designerg.php?desId='.$rowId.'">'.$last_name.' '.$first_name	.'</a> <em style="color:#ccc">'.$company_name.'</em> 
                                    </div><!-- End .product -->'; 
		}
$saragasam=$saragasam.' </div><!-- end .row -->
                            </div><!-- End .products-container -->

                            <nav class="pagination-container">'.$paginglinkl.'</nav>';
	 }else{
		  $saragasam='<div class="row  categoryProduct xsResponse clearfix"><div class="alert alert-warning"> 
										<i class="fa fa-exclamation-triangle"></i>
										<strong>Warning!</strong>&nbsp;No Record found !!</div></div>';
		 }
return  $saragasam;  
	
	}
	
	
	
		
function list_showmy_products($buyerId){
	$newsstrings='';
	$keywor=$_REQUEST['keywor'];
	$bekeyword=explode(' ',$keywor);
 	$catId=$_REQUEST['catId'];
$ui=$_REQUEST['ui'];
if($ui==''){
	$ui=1;
	}
	$querys="WHERE sellerId='$buyerId' ";
	if($catId!=''){
		$querys=$querys." AND  category_name='$catId'";
	}
	
	
	$tablename='productmaster';
	global $conn;
//////////////////SORTING/////////////////////////
 
	  $mincoz=$_REQUEST['mincoz'];
	  $toshowmain=$_REQUEST['toshowmain'];
	  if($toshowmain==''){
	 		$limitstring=12;
	  }else{
		 	 $limitstring=$toshowmain;
	  }
	  
	  $singaorder='rowId DESC';
	  if($mincoz==0){
		    $singaorder='rowId DESC';
		  }
	  if($mincoz==1){
		    $singaorder='mrp_sale ASC';
		  }
	  if($mincoz==2){
		    $singaorder='mrp_sale DESC';
		  } 
		$pins=$_REQUEST['pins'];
		$paxs=$_REQUEST['paxs']; 
		$sto =$_REQUEST['sto'];
		if($sto!=''){
			if($sto!='99999'){
			$querys=$querys." AND bbrand='$sto'";
			}
			}
		if(($pins!='') &&   ($paxs!='')){
			$querys=$querys." AND  (mrp_sale between '$pins' AND '$paxs')";
			}
	   
////////////////////////////////////////// 
	$sellerId=$_SESSION['sellerId'];
 	$navigatelink='&catId='.$catId.'&mincoz='.$mincoz.'&toshowmain='.$toshowmain.'&ui='.$ui;
 		$domain=$_SERVER['HTTP_HOST'];
if($domain=='localhost'){ 	
 $bingo='frontend/'; 
}else{	 
$bingo='../../'; 
}  
 $marthalluser= show_selecttable_paging($debug,$limitstring,$conn,$tablename,'*',$querys,$limit,1,$singaorder);
		$allcount=count($marthalluser);
											
		$rowsPerPage=$limitstring;					
		$pagenr=$_POST['pagenr']; 
		$pageNum = 1; 
		if(isset($_GET['page'])) 
		{ 
		$pageNum = $_GET['page']; 
		} 
		$offset = ($pageNum - 1) * $rowsPerPage;
		
		 
   		$limitstring=" LIMIT $offset, $rowsPerPage";
		 $pagename=$PHP_SELF;
		 
		 $showlisttype=2;
		$paginglinkl= basic_paging($showlisttype,$pageNum,$rowsPerPage,$allcount,$navigatelink,$pagename,' align="right"');
		 
     						
			$toshofoaval= show_selecttable_paging($debug,$limitstring,$conn,$tablename,'*',$querys ,1,1,$singaorder ); 									
									   
       
	 if(count($toshofoaval)>0){
		  if($ui==1){
		  $saragasam='  <div class="products-container max-col-4">
                                <div class="shop-row">';
		  }
		foreach( $toshofoaval as $arrvbta ) {
				$mrrowId=$rowId					=$arrvbta['rowId'];
				$companyid				=$arrvbta['companyid'];
				$category_name			=$arrvbta['category_name'];
				$product_name			=$arrvbta['product_name'];
				$product_description	=$arrvbta['product_description'];
				$bbrand					=$arrvbta['bbrand'];
				$product_size			=$arrvbta['product_size'];
				$product_colour			=$arrvbta['product_colour'];
				
				$primeSize=explode(',',$product_size);
				$primeColor=explode(',',$product_colour);
				
				$mrp_purchase			=$arrvbta['mrp_purchase'];
				$mrp_sales				=$arrvbta['mrp_sale'];
				$in_stock_quantity		=$arrvbta['in_stock_quantity'];
				$product_image_master	=$arrvbta['product_image_master'];
				$product_masterid		=$arrvbta['product_masterid'];
 				$primary_product		=$arrvbta['primary_product'];
				$isnewpromotional		=$arrvbta['isnewpromotional'];
				$isfeaturedproduct		=$arrvbta['isfeaturedproduct'];
				$rateing				=$arrvbta['rateing'];
				$totalvotes				=$arrvbta['totalvotes'];
				$averagerating			=$arrvbta['averagerating'];
				$ispoplular				=$arrvbta['ispoplular'];
				
				$commession_amount		=$arrvbta['commession_amount'];
				$taxAmountPayable		=$arrvbta['taxAmountPayable'];
				$hsn_tax				=$arrvbta['hsn_tax'];
				
				
					if($ispoplular==1){
						$ispoplular='<span class="label popular">Popular</span>';
						}else{
						$ispoplular='';
						}
				 	 
				 $imageurl= getPicForThisProduct($rowId,'THUMB');
///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////	

				$dispprice= getdiscount_price($mrrowId);
				$getAllDisp=explode('|',$dispprice);
				 
				 $discount_applied		= $getAllDisp[0];
				 $discount_minorder		= $getAllDisp[1];
				 $discount_discountrate	= $getAllDisp[2];
				 $discount_discounttype	= $getAllDisp[3];
				 
				 if($discount_applied!=0){
					  /*$finalAmounthsn_tax=($hsn_tax  / 100 ) * $mrp_purchase;
 				$finalAmountSellWithTax= $mrp_purchase +$finalAmounthsn_tax ;
				$finalAmount= ($commession_amount  / 100 ) * $mrp_purchase;
				$nprint=$finalAmountSellWithTax +$finalAmount ;*/
				
				
					 if($discount_discounttype==2){
						 // FLAT 
						 
						
				
						 $newsaleprice=$mrp_purchase-$discount_discountrate;
						 $finalAmounthsn_tax=($hsn_tax  / 100 ) * $newsaleprice;
						 $finalAmountSellWithTax= $newsaleprice +$finalAmounthsn_tax ;
						 $finalAmount= ($commession_amount  / 100 ) * $newsaleprice;
						 $mrp_sales=$finalAmountSellWithTax +$finalAmount ;
							
							
						 
						   $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span><span class="product-price">₹'. $newsaleprice.'</span>';
						 }
						  if($discount_discounttype==1){
							 // PERCENTAGE
						 $percentage = ( $discount_discountrate / 100 ) * $mrp_purchase;
						  $newsaleprice=$mrp_purchase-$percentage;
						   
						 $finalAmounthsn_tax=($hsn_tax  / 100 ) * $newsaleprice;
						 $finalAmountSellWithTax= $newsaleprice +$finalAmounthsn_tax ;
						 $finalAmount= ($commession_amount  / 100 ) * $newsaleprice;
						 $mrp_sales=$finalAmountSellWithTax +$finalAmount ;
						 
						 
						  
						  $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span>&nbsp;<span class="product-price">₹'. $newsaleprice.'</span>';
						 }
					  
					  
					 }else{
						   $mrp_sale=$mrp_sales;
						   $newsaleprice=$mrp_sales ;
						  $qu_sellprice='<span class="product-price">₹'. $newsaleprice.'</span>';
						 }
				 
///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////			
		 if($ui==1){
		$saragasam=$saragasam.'  <div class="product" id="masterprdId'.$mrrowId.'">
                                        <div class="product-top">
                                            '.$ispoplular.'
                                            <figure>
                                                <a href="product.php?prdId='.$mrrowId.'" title="'.$product_name.'?prdId='.$mrrowId.'" title="'.$product_name.'" title="'.$product_name.'">
                                                    <img src="'.$imageurl.'" alt="Product image" class="product-image" style="max-height:250px; max-width:150px;"> 
                                                </a>
                                            </figure>
                                            <a href="javascript:void(0)"  onclick="makemeseltoCartOuter(\''.$mrrowId.'\',\''.$primeSize[0] .'\',\''.$primeColor[0].'\');"  class="btn product-add-btn">Add to Cart</a>
                                        </div><!-- End .product -->
                                        <h3 class="product-title"><a href="product.php?prdId='.$mrrowId.'" title="'.$product_name.'?prdId='.$mrrowId.'" title="'.$product_name.'">'.$product_name.'</a></h3>
                                        <div class="product-price-container">'.$qu_sellprice.'</div><!-- End .product-price-container -->
                                    </div><!-- End .product -->'; 
		 }else{
		$saragasam=$saragasam.'<div class="product product-list" id="masterprdId'.$mrrowId.'">
                                <div class="row">
                                    <div class="col-md-4 col-sm-5">
                                        <div class="product-top">
                                            <span class="label discount">-50%</span>
                                            <figure>
                                                <a href="product.php?prdId='.$mrrowId.'" title="'.$product_name.'" title="'.$product_name.'">
                                                    <img src="'.$imageurl.'" alt="Product image" class="product-image">
                                                </a>
                                            </figure>
                                            <a href="javascript:void(0)"  onclick="makemeseltoCartOuter(\''.$mrrowId.'\',\''.$primeSize[0] .'\',\''.$primeColor[0].'\');"  class="btn product-add-btn">Add to Cart</a>
                                        </div><!-- End .product-top -->
                                    </div><!-- End .col-md-4 -->
                                    <div class="col-md-8 col-sm-7">
                                        <h3 class="product-title"><a href="product.php?prdId='.$mrrowId.'" title="'.$product_name.'">'.$product_name.'</a></h3>
                                        <div class="product-content">
                                            <p>'.$product_description.'</p>
                                        </div><!-- End .product-content -->
                                        <div class="product-price-container">
                                          '.$qu_sellprice.'
                                        </div><!-- End .product-price-container -->
                                    </div><!-- End .col-md-8 -->
                                </div><!-- end .Row -->
                            </div><!-- End .product -->';
			 }
		}
	 if($ui==1){	 
$saragasam=$saragasam.'<div style="clear:both"></div>  </div><!-- end .row -->
                            </div><!-- End .products-container -->
 <div style="padding:10px;"></div>'.$paginglinkl;
	 }else{
$saragasam=$saragasam.'<div style="clear:both"></div>  
 <div style="padding:10px;"></div>'.$paginglinkl; 
		 }
		 
	 }else{
		  $saragasam='<div class="row  categoryProduct xsResponse clearfix"><div class="alert alert-warning"> 
										<i class="fa fa-exclamation-triangle"></i>
										<strong>Warning!</strong>&nbsp;No Record found !!</div></div>';
		 }
return  $saragasam;  
	 
	 
	}
	
	

	?>