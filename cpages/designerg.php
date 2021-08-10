<div class="container">
                    <div class="row">
                        <div class="col-md-12"><!-- End .category-filter-row -->
			<?
			$desId=$_REQUEST['desId'];
           $tosaval= show_selecttable($debug,$limitstring,$conn,'seller_master','*','WHERE rowId=\''.$desId.'\'',$tosaval,1,' rowId DESC');
		    foreach( $tosaval as $orSDRow ) {
				$first_name			=	$orSDRow['first_name']; 
				$last_name			=	$orSDRow['last_name']; 
				$company_name		=	$orSDRow['company_name'];  
				$SellerrowId				=	$orSDRow['rowId']; 
				$seller_description	=	$orSDRow['seller_description']; 
				$buyerId			=	$orSDRow['buyerId']; 
				 
				$BCcId= show_selecttable($debug,$limitstring,$conn,'user_buyer','*','WHERE rowId=\''.$buyerId.'\'',$limit,1,' rowId DESC');
				$maxrita= ' ';
				if( $BCcId>0){
				foreach( $BCcId as $orSRDow ) {  
				$profile_pic						=	$orSRDow['profile_pic'];    
				}
				}else{
				$profile_pic='imuploads/users/7/thumbs/635eebc0764924f93b264d567639109a.jpg';
				}
			}
			?>
                            <div class="product product-list">
                                <div class="row">
                                    <div class="col-md-4 col-sm-5">
                                        <div class="product-top">
                                            
                                            <figure>
                                                <a href="product.php" title="Product Name">
                                                    <img src="<?=$profile_pic;?>" alt=" " class="product-image">
                                                  
                                                </a>
                                            </figure>
                                            
                                        </div><!-- End .product-top -->
                                    </div><!-- End .col-md-4 -->
                                    <div class="col-md-8 col-sm-7">
                                        <h3 class="product-title"><a href="#"><? echo "$first_name  $last_name"; ?></a></h3>
                                        <div class="product-content">
                                            <p><?=$seller_description;?></p>
                                        </div><!-- End .product-content -->
                                        
                                    </div><!-- End .col-md-8 -->
                                </div><!-- end .Row -->
                            </div>
                                    
                               <!-- <label>Showing: 1-4 of 16</label>
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>-->
                        </div><!-- End .col-md-9 -->

                      
                    </div><!-- End .row -->
                </div>
                
<?
$catId=$_REQUEST['catId'];
$ui=$_REQUEST['ui'];
$mincoz=$_REQUEST['mincoz'];
$toshowmain=$_REQUEST['toshowmain'];

	$tgbgbal = "SELECT * FROM product_category WHERE rowId='$catId'";
	$mdrsy=$conn->query($tgbgbal);
	$mydra= $mdrsy->fetchAll()  ; 
	foreach( $mydra as $arsrsda ) {
		$searchkeywords = $arsrsda['searchkeywords'] ;  
		$category_namesss = $arsrsda['category_name'] ; 
		 
	}

$xquerys="WHERE rowId>'0' AND sellerId='$buyerId'";
	if($catId!=''){
	$xquerys=$xquerys." AND  category_name='$catId'";
	}

$sql = "SELECT * FROM productmaster $xquerys";
 
$myquery=$conn->query($sql);
$mydara= $myquery->fetchAll()  ;
$rowsRecFound = $myquery->rowCount();
$myallprinceData=list_showmy_products($desId);

$brandmaster=$_REQUEST['mab'];
	$cateId=$_REQUEST['cateId'];
	$pins=$_REQUEST['pins'];
	$paxs=$_REQUEST['paxs'];
	$sto=$_REQUEST['sto'];
	$querys="WHERE primary_product='0'";
	 if($cateId!=''){
	if($subs!=''){
		 $querys=$querys." AND category_name='$subs'";
	}else{
 		$tgbgbal = "SELECT * FROM product_category WHERE parent_category='$cateId'";
    	$mdrsy=$conn->query($tgbgbal);
		$mydra= $mdrsy->fetchAll()  ; 
		$bikas="'$cateId'";
		foreach( $mydra as $arsrsda ) {
 		 $caterowIds = $arsrsda['rowId'] ; 
		 $bikas=$bikas.",'$caterowIds'";		 
 		}
		 $querys=$querys." AND category_name IN ( $bikas )";
	}
	 }else{
		 $querys=$querys." AND rowId!=0"; 
		 }
	
	$bain= $querys;
	if(($pins!='0') && ($pins!='')){
	$pricevals=explode("+",$priceval);
	$loprice=$pins;
	$highprice=$paxs;
	 
	 $querys=$querys." AND mrp_sale BETWEEN '$loprice'   AND '$highprice'";
	}
$coun=0;
$sihsun=''; 
 

 
	
	$tgbal = "SELECT * FROM productmaster $bain ";
   	$mssxry=$conn->query($tgbal);
	$myssdara= $mssxry->fetchAll()  ;
	   $prices = array(); 
		foreach( $myssdara as $arsrivna ) {
 			array_push($prices,$arsrivna['mrp_sale']);  
 		}
		sort($prices);
		reset($prices); 
		
		
		
	$tgbal = "SELECT * FROM productmaster $querys ";
	 	 
  	$mssxry=$conn->query($tgbal);
	$myssdara= $mssxry->fetchAll()  ; 
	   $brands = array();
		foreach( $myssdara as $arsrivna ) { 
			array_push($brands,$arsrivna['bbrand']); 
 		}
	 
		$uniquebrand = array_unique($brands);

		sort($uniquebrand);
		reset($uniquebrand);

 
?><div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="category-filter-row">
                                <div class="right">
                                    <span class="cat-product-count">Total Products: <?=$rowsRecFound;?></span>
                                    <div class="filter-product-view">
                                        <a href="laodcatego.php?catId=<?=$catId;?>&mincoz=<?=$mincoz;?>&toshowmain=<?=$toshowmain;?>&ui=1" class="btn btn-sm <? if(($ui==1) || ($ui=='')){echo  ' btn-custom' ;} else{ echo 'btn-gray';} ?>" title="Category Grid"><i class="fa fa-th"></i></a>
                                        <a href="laodcatego.php?catId=<?=$catId;?>&mincoz=<?=$mincoz;?>&toshowmain=<?=$toshowmain;?>&ui=2" class="btn btn-sm  <? if($ui==2){echo  ' btn-custom'; } else{ echo 'btn-gray';} ?>" title="Category List"><i class="fa fa-th-list"></i></a>
                                    </div>
                                </div><!-- end .right -->
                                <div class="left">
                                    <div class="filter-container filter-sort">
                                        <label>Sort by:</label>
                                        <select class="form-control input-sm" id="mincoz" onchange="reloadminsgrid();">
                                            <option value="0" <? if($_REQUEST['mincoz']==0){ echo 'selected';}?>>Latest</option>
                                            <option value="1" <? if($_REQUEST['mincoz']==1){ echo 'selected';}?>>Low to High Price</option>
                                            <option value="2" <? if($_REQUEST['mincoz']==2){ echo 'selected';}?>>High to Low Price</option> 
                                        </select>
                                    </div><!-- End .filter-sort -->
                                    <div class="filter-container filter-show">
                                        <label>Show:</label>
                                        <select class="form-control input-sm" id="toshowmain"  onchange="reloadminsgrid();">
                                            <option value="12" <? if($_REQUEST['toshowmain']==12){ echo 'selected';}?>>12</option>
                                            <option value="20" <? if($_REQUEST['toshowmain']==20){ echo 'selected';}?>>20</option>
                                            <option value="36" <? if($_REQUEST['toshowmain']==36){ echo 'selected';}?>>36</option> 
                                        </select>
                                        <input name="catId" id="catId" type="hidden" value="<?=$_REQUEST['catId'];?>" />
                                        <input name="ui" id="ui" type="hidden" value="<?=$_REQUEST['ui'];?>" />
                                        <input name="catId" id="catId" type="hidden" value="<?=$_REQUEST['catId'];?>" />
                                    </div><!-- End .filter-show -->
                                </div><!-- End .left -->
                            </div><!-- End .category-filter-row -->

                          
                                   
                                   <?
  								   echo $myallprinceData; 
								   ?>
                                   
                                             
                              
                           
                        </div><!-- End .col-md-9 -->

                      <? include("allsideprans.php")?>
                    </div><!-- End .row -->
                </div><!-- End .container -->