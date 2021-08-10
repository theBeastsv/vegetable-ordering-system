<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$prdcategory=secureSuperGlobalPOST($_REQUEST['prdcategory']);
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
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO discountmaster SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', prdcategory='$prdcategory', product_id='$product_id', startdate='$startdate', till_date='$till_date', discount_type='$discount_type', discount_value='$discount_value', applytoallproducts='$applytoallproducts', minimum_purchase='$minimum_purchase', discountkeycode='$discountkeycode', isactive='$isactive', wimci='$wimci'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lispldiscountmaster.php?refid=$id\";</script>";?>