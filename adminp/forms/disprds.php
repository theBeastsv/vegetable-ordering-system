<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$scheme_name=secureSuperGlobalPOST($_REQUEST['scheme_name']);
$product_id=secureSuperGlobalPOST($_REQUEST['product_id']);
$minimum_order=secureSuperGlobalPOST($_REQUEST['minimum_order']);
$start_date=secureSuperGlobalPOST($_REQUEST['start_date']);
$end_date=secureSuperGlobalPOST($_REQUEST['end_date']);
$discount_rate=secureSuperGlobalPOST($_REQUEST['discount_rate']);
$discount_type=secureSuperGlobalPOST($_REQUEST['discount_type']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO discount_products SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', scheme_name='$scheme_name', product_id='$product_id', minimum_order='$minimum_order', start_date='$start_date', end_date='$end_date', discount_rate='$discount_rate', discount_type='$discount_type'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lispldisprds.php?refid=$id\";</script>";?>