<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $prdcategory=secureSuperGlobalPOST($_REQUEST['prdcategory']);
$product_id=secureSuperGlobalPOST($_REQUEST['product_id']);
$startdate=secureSuperGlobalPOST($_REQUEST['startdate']);
$till_date=secureSuperGlobalPOST($_REQUEST['till_date']);
$discount_type=secureSuperGlobalPOST($_REQUEST['discount_type']);
$discount_value=secureSuperGlobalPOST($_REQUEST['discount_value']);
$applytoallproducts=secureSuperGlobalPOST($_REQUEST['applytoallproducts']);
$minimum_purchase=secureSuperGlobalPOST($_REQUEST['minimum_purchase']);
$discountkeycode=secureSuperGlobalPOST($_REQUEST['discountkeycode']);
$isactive=secureSuperGlobalPOST($_REQUEST['isactive']);
$wimci=secureSuperGlobalPOST($_REQUEST['wimci']);
  
$olgaquery="UPDATE discountmaster SET createdip='$myIp',dateceated='$dateceated', prdcategory='$prdcategory', product_id='$product_id', startdate='$startdate', till_date='$till_date', discount_type='$discount_type', discount_value='$discount_value', applytoallproducts='$applytoallproducts', minimum_purchase='$minimum_purchase', discountkeycode='$discountkeycode', isactive='$isactive', wimci='$wimci' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lispldiscountmaster.php?refid=$myquerydcs\";</script>";?>