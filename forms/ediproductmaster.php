<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$dateceated=date("Y-m-d G:i:s");
$myIp= ipCheck() ; $companyid=secureSuperGlobalPOST($_REQUEST['companyid']);
$category_name=secureSuperGlobalPOST($_REQUEST['category_name']);
$product_name=secureSuperGlobalPOST($_REQUEST['product_name']);
$product_description=secureSuperGlobalPOST($_REQUEST['product_description']);
$bbrand=secureSuperGlobalPOST($_REQUEST['bbrand']);
$product_size=secureSuperGlobalPOST($_REQUEST['product_size']);
$product_colour=secureSuperGlobalPOST($_REQUEST['product_colour']);
$mrp_purchase=secureSuperGlobalPOST($_REQUEST['mrp_purchase']);
$mrp_sale=secureSuperGlobalPOST($_REQUEST['mrp_sale']);
$in_stock_quantity=secureSuperGlobalPOST($_REQUEST['in_stock_quantity']);
$product_image_master=secureSuperGlobalPOST($_REQUEST['product_image_master']);
$product_masterid=secureSuperGlobalPOST($_REQUEST['product_masterid']);
$primary_product=secureSuperGlobalPOST($_REQUEST['primary_product']);
$isnewpromotional=secureSuperGlobalPOST($_REQUEST['isnewpromotional']);
$isfeaturedproduct=secureSuperGlobalPOST($_REQUEST['isfeaturedproduct']);
$rateing=secureSuperGlobalPOST($_REQUEST['rateing']);
$totalvotes=secureSuperGlobalPOST($_REQUEST['totalvotes']);
$averagerating=secureSuperGlobalPOST($_REQUEST['averagerating']);
  
$olgaquery="UPDATE productmaster SET createdip='$myIp',dateceated='$dateceated', companyid='$companyid', category_name='$category_name', product_name='$product_name', product_description='$product_description', bbrand='$bbrand', product_size='$product_size', product_colour='$product_colour', mrp_purchase='$mrp_purchase', mrp_sale='$mrp_sale', in_stock_quantity='$in_stock_quantity'  WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../ediproductmaster.php?toeditdata=$myquerydcs\";</script>";?>