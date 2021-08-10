<? session_start();
include("../config/config.php"); 
include("../config/masterconfig.php"); 
$myIp= ipCheck() ;

  
$masterUserIds=$_SESSION['KesOnUserId'];
if($masterUserIds==''){ 
 
$masterUserId=0;
}else{
	$masterUserId=$masterUserIds;
	}
$buyerid=$masterUserId;

 
$dateceated=date("Y-m-d G:i:s");
$mysession_id=session_id();
$dateceated=date("Y-m-d G:i:s");
$productid						=secureSuperGlobalPOST($_REQUEST['pid']);
$quantity						=$_REQUEST['qid'];
$selectedsize					=secureSuperGlobalPOST($_REQUEST['si']);
$selectedcolor					=secureSuperGlobalPOST($_REQUEST['co']);

$marthtoshow= show_selecttable($debug,$limitstring,$conn,'productmaster','*','WHERE rowId=\''.$productid.'\'',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			$brandname	= $row['brandname'];
			$mrp_sales	= $row['mrp_sale'];
 		}

///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////
 $discounapplied=getdiscount_price($productid);
 $getAllDisp			=explode('|',$discounapplied);
  
 $discount_applied		= $getAllDisp[0];
 $discount_minorder		= $getAllDisp[1];
 $discount_discountrate	= $getAllDisp[2];
 $discount_discounttype	= $getAllDisp[3];
 $ddiscount_scheme_name = $getAllDisp[4];
 $discount_scheme_applied=0;
 if($discount_applied!=0){
	  $mrp_sale=$mrp_sales;
			if($discount_discounttype==2){
			 // FLAT 
			 $newsaleprice=$mrp_sales-$discount_discountrate; 
			 }
			  if($discount_discounttype==1){
				 // PERCENTAGE
			 $percentage = ( $discount_discountrate / 100 ) * $mrp_sales;
			  $newsaleprice=$mrp_sales-$percentage; 
			 }
			 $discount_scheme_applied= $ddiscount_scheme_name;
  }else{
		$mrp_sale=$mrp_sales;
		$newsaleprice=$mrp_sale;  
		$discount_scheme_applied=0;
		 }
 
///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////	

$isconvertedtoorder=0;
 $mySqlKart = "SELECT * FROM temp_order_cart WHERE   createdip='$myIp' AND  (buyerid='$buyerid' OR sessionvalue='$mysession_id') and  productid='$productid' AND isconvertedtoorder='0'";
 
 		$mySKLkart=$conn->query($mySqlKart);
		$myKartdara= $mySKLkart->fetchAll()  ;
 		$KartRowfound = $mySKLkart->rowCount();
		
		if($KartRowfound==0){
		
$olgaquery="INSERT INTO temp_order_cart SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', buyerid='$buyerid', productid='$productid', selectedcolor='$selectedcolor', selectedsize='$selectedsize', quantity='$quantity', sessionvalue='$mysession_id', mrp_payable_after_discount='$newsaleprice', mrp_sale='$mrp_sale', isconvertedtoorder='$isconvertedtoorder',discount_scheme_applied='$discount_scheme_applied'";
		}else{
		$olgaquery="UPDATE temp_order_cart SET  quantity=quantity+1 WHERE  createdip='$myIp' AND createdby='$masterUserId' AND buyerid='$masterUserId' and productid='$productid' AND isconvertedtoorder='0'";	
			}
 
 $myquery=$conn->query($olgaquery);
 $cpn=$_REQUEST['cpn'];
 if($cpn==1){
	  $mcxEow= show_selecttable($debug,$limitstring,$conn,'productmaster','*','WHERE rowId=\''.$productid.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
		foreach( $mcxEow as $ssxgbwxSd ) {
			$mrrowId=$rowId					=$ssxgbwxSd['rowId'];
				$companyid				=$ssxgbwxSd['companyid'];
				$category_name			=$ssxgbwxSd['category_name'];
				$product_name			=$ssxgbwxSd['product_name'];
				$product_description	=$ssxgbwxSd['product_description'];
				$bbrand					=$ssxgbwxSd['bbrand'];
				$product_size			=$ssxgbwxSd['product_size'];
				$product_colour			=$ssxgbwxSd['product_colour'];
				
				$primeSize=explode(',',$product_size);
				$primeColor=explode(',',$product_colour);
				
				$mrp_purchase			=$ssxgbwxSd['mrp_purchase'];
				$mrp_sales				=$ssxgbwxSd['mrp_sale'];
				$in_stock_quantity		=$ssxgbwxSd['in_stock_quantity'];
				$product_image_master	=$ssxgbwxSd['product_image_master'];
				$product_masterid		=$ssxgbwxSd['product_masterid'];
 				$primary_product		=$ssxgbwxSd['primary_product'];
				$isnewpromotional		=$ssxgbwxSd['isnewpromotional'];
				$isfeaturedproduct		=$ssxgbwxSd['isfeaturedproduct'];
				$rateing				=$ssxgbwxSd['rateing'];
				$totalvotes				=$ssxgbwxSd['totalvotes'];
				$averagerating			=$ssxgbwxSd['averagerating'];
				$ispoplular				=$ssxgbwxSd['ispoplular'];
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
					 
					 if($discount_discounttype==2){
						 // FLAT 
						 $newsaleprice=$mrp_sales-$discount_discountrate;
						   $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span><span class="product-price">₹'. $newsaleprice.'</span>';
						 }
						  if($discount_discounttype==1){
							 // PERCENTAGE
						 $percentage = ( $discount_discountrate / 100 ) * $mrp_sales;
						  $newsaleprice=$mrp_sales-$percentage;
						  
						  $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span>&nbsp;<span class="product-price">₹'. $newsaleprice.'</span>';
						 }
					  
					  
					 }else{
						 $mrp_sale=$mrp_sales;
						   $newsaleprice=$mrp_sales ;
						  $qu_sellprice='<span class="product-price">₹'. $newsaleprice.'</span>';
						 }
				 
///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////	
		
		
		$saragasam=$saragasam.' 
                                        <div class="product-top">
                                            '.$ispoplular.'
                                            <figure>
                                                <a href="product.php?prdId='.$mrrowId.'" title="'.$product_name.'" title="Product Name">
                                                    <img src="'.$imageurl.'" alt="Product image" class="product-image">
                                                    <img src="'.$imageurl.'" alt="Product image" class="image-hover">
                                                </a>
                                            </figure>
                                            <a href="javascript:void(0)"  onclick="makemeseltoCartOuter(\''.$mrrowId.'\',\''.$primeSize[0] .'\',\''.$primeColor[0].'\');"  class="btn product-add-btn">Added</a>
                                        </div><!-- End .product -->
                                        <h3 class="product-title"><a href="product.php?prdId='.$mrrowId.'" title="'.$product_name.'">'.$product_name.'</a></h3>
                                        <div class="product-price-container">'.$qu_sellprice.'</div><!-- End .product-price-container -->
                                  '; 
			
		}
		echo $saragasam;
	 }
?>