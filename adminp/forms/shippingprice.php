<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$seller_id=secureSuperGlobalPOST($_REQUEST['seller_id']);
$lowrange=secureSuperGlobalPOST($_REQUEST['lowrange']);
$highrange=secureSuperGlobalPOST($_REQUEST['highrange']);
$shipping_price=secureSuperGlobalPOST($_REQUEST['shipping_price']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO shipping_price SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', seller_id='$seller_id', lowrange='$lowrange', highrange='$highrange', shipping_price='$shipping_price'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lisplshippingprice.php?refid=$id\";</script>";?>