<?

	$catId=$_REQUEST['catId'];
	$mincoz=$_REQUEST['mincoz'];
	$toshowmain=$_REQUEST['toshowmain'];
	$xquerys="WHERE rowId>'0' ";
	if($catId!=''){
		$xquerys=$xquerys." AND  category_name='$catId'";
	}
	
	  $sql = "SELECT * FROM productmaster $xquerys";
   	$myquery=$conn->query($sql);
	$mydara= $myquery->fetchAll()  ;
	
	$rowsRecFound = $myquery->rowCount();
	
 $myallprinceData=list_showmeall_products(2);
 
?><div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="category-filter-row">
                                <div class="right">
                                    <span class="cat-product-count">Total Products: <?=$rowsRecFound;?></span>
                                    <div class="filter-product-view">
                                        <a href="laodcatego.php?catId=<?=$catId;?>&mincoz=<?=$mincoz;?>&toshowmain=<?=$toshowmain;?>" class="btn btn-sm btn-custom" title="Category Grid"><i class="fa fa-th"></i></a>
                                        <a href="laodcategrid.php?catId=<?=$catId;?>&mincoz=<?=$mincoz;?>&toshowmain=<?=$toshowmain;?>" class="btn btn-sm btn-gray" title="Category List"><i class="fa fa-th-list"></i></a>
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
                                        </select><input name="catId" id="catId" type="hidden" value="<?=$_REQUEST['catId'];?>" />
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