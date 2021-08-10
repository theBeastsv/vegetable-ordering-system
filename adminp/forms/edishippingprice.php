<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $seller_id=secureSuperGlobalPOST($_REQUEST['seller_id']);
$lowrange=secureSuperGlobalPOST($_REQUEST['lowrange']);
$highrange=secureSuperGlobalPOST($_REQUEST['highrange']);
$shipping_price=secureSuperGlobalPOST($_REQUEST['shipping_price']);
  
$olgaquery="UPDATE shipping_price SET createdip='$myIp',dateceated='$dateceated', seller_id='$seller_id', lowrange='$lowrange', highrange='$highrange', shipping_price='$shipping_price' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lisplshippingprice.php?refid=$myquerydcs\";</script>";?>