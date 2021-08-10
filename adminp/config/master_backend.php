<?
##############################  SHOW COMMENTS#########################################
function showallproduct(){
	$newsstrings='';
	$keywor=$_REQUEST['keywor'];
	$bekeyword=explode(' ',$keywor);
	
	
	
 

	$tablename='productmaster';
	global $conn;
//////////////////SORTING/////////////////////////
	$cId=$_REQUEST['cId'];
	 
////////////////////////////////////////// 
	$my_userIdbrm=$_SESSION['my_userIdbrm'];
	 
	if($_SESSION['my_userType']=='0'){
	$querys="WHERE createdby='$my_userIdbrm' ";
	}else{
	$querys="WHERE rowId>'0' ";
	}
	 
	 
	  
	$navigatelink='';
    $singaorder='rowId DESC';
		$domain=$_SERVER['HTTP_HOST'];
if($domain=='localhost'){ 	
 $bingo='frontend/'; 
}else{	 
$bingo='../../'; 
} 
	$limitstring=9;
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
				<th>ID</th><th>Remove</th><th>Companyid</th>
<th>Category_name</th>
<th>Product_name</th>
<th>Product_description</th>
<th>Bbrand</th>
<th>Product_size</th>
<th>Product_colour</th>
<th>Mrp_purchase</th>
<th>Mrp_sale</th>
<th>In_stock_quantity</th>
<th>Product_image_master</th>
<th>Product_masterid</th>
<th>Primary_product</th>
<th>Isnewpromotional</th>
<th>Isfeaturedproduct</th>
<th>Rateing</th>
<th>Totalvotes</th>
<th>Averagerating</th>

			</tr>
		</thead>
	<tbody>';
		foreach( $toshofoaval as $arrvbta ) {
				$rowId					=$arrvbta['rowId'];
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
				
				 	 
				if(!empty( $origional_pth)){
			    $fileurl=$bingo.''.$thumbs_pth;
					if (!file_exists($fileurl)) {   
					$filloimage='<img src="assets/images/noimagefound.jpg" style="width:110px;">';                    }else{
						$filloimage='<img src="'.$fileurl.'" style="width:110px;">';
					}
				}else{
				$filloimage='<img src="assets/images/noimagefound.jpg" style="width:110px;">';					
					}
		 $domain=$_SERVER['HTTP_HOST'];
 if($domain=='localhost'){
	 $urltoshow='frontend/viewnews.php?newsId='.$news_id.'&catid='.$news_category;
 }else{
	  $urltoshow='../viewnews.php?newsId='.$news_id.'&catid='.$news_category;
	 }
		$saragasam=$saragasam.'<tr>
	<td><a href="ediproductmaster.php?toeditdata='.$rowId.'">'.$rowId.'</a></td>
	<td><a href="forms/delproductmaster.php?toeditdata='.$rowId.'">Remove</a></td>
	<td>'.$companyid.'</td>
	<td>'.$category_name.'</td>
	<td>'.$product_name.'</td>
	<td>'.$product_description.'</td>
	<td>'.$bbrand.'</td>
	<td>'.$product_size.'</td>
	<td>'.$product_colour.'</td>
	<td>'.$mrp_purchase.'</td>
	<td>'.$mrp_sale.'</td>
	<td>'.$in_stock_quantity.'</td>
	<td>'.$product_image_master.'</td>
	<td>'.$product_masterid.'</td>
	<td>'.$primary_product.'</td>
	<td>'.$isnewpromotional.'</td>
	<td>'.$isfeaturedproduct.'</td>
	<td>'.$rateing.'</td>
	<td>'.$totalvotes.'</td>
	<td>'.$averagerating.'</td>
	</tr>'; 
		}
$saragasam=$saragasam.'</tbody>
	</table> <div style="padding:10px;"></div>'.$paginglinkl;
	 }else{
		  $saragasam='<div class="row  categoryProduct xsResponse clearfix"><div class="alert alert-warning"> 
										<i class="fa fa-exclamation-triangle"></i>
										<strong>Warning!</strong>&nbsp;No Pending News  found</div></div>';
		 }
return  $saragasam;  
	 
	
	}

##############################  SHOW COMMENTS#########################################

?>