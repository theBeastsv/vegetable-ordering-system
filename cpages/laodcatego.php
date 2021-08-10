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

$xquerys="WHERE rowId>'0' ";
	if($catId!=''){
	$xquerys=$xquerys." AND  category_name='$catId'";
	}

$sql = "SELECT * FROM productmaster $xquerys";
$myquery=$conn->query($sql);
$mydara= $myquery->fetchAll()  ;
$rowsRecFound = $myquery->rowCount();
$myallprinceData=list_showmeall_products(1);

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