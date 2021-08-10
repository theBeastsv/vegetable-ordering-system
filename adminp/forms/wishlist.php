<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$buyer_id=secureSuperGlobalPOST($_REQUEST['buyer_id']);
$userid=secureSuperGlobalPOST($_REQUEST['userid']);
$productid=secureSuperGlobalPOST($_REQUEST['productid']);
$addedfromip=secureSuperGlobalPOST($_REQUEST['addedfromip']);
$isactive=secureSuperGlobalPOST($_REQUEST['isactive']);
$removedat=secureSuperGlobalPOST($_REQUEST['removedat']);
$removedip=secureSuperGlobalPOST($_REQUEST['removedip']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO wishlist SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', buyer_id='$buyer_id', userid='$userid', productid='$productid', addedfromip='$addedfromip', isactive='$isactive', removedat='$removedat', removedip='$removedip'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lisplwishlist.php?refid=$id\";</script>";?>