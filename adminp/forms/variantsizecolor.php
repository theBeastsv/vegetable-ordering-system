<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$companyid=secureSuperGlobalPOST($_REQUEST['companyid']);
$color_name=secureSuperGlobalPOST($_REQUEST['color_name']);
$size_name=secureSuperGlobalPOST($_REQUEST['size_name']);
$product_id=secureSuperGlobalPOST($_REQUEST['product_id']);
$product_masterid=secureSuperGlobalPOST($_REQUEST['product_masterid']);
$seller_id=secureSuperGlobalPOST($_REQUEST['seller_id']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO size_color SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', companyid='$companyid', color_name='$color_name', size_name='$size_name', product_id='$product_id', product_masterid='$product_masterid', seller_id='$seller_id'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lisplvariantsizecolor.php?refid=$id\";</script>";?>