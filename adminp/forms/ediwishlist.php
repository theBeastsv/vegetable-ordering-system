<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $buyer_id=secureSuperGlobalPOST($_REQUEST['buyer_id']);
$userid=secureSuperGlobalPOST($_REQUEST['userid']);
$productid=secureSuperGlobalPOST($_REQUEST['productid']);
$addedfromip=secureSuperGlobalPOST($_REQUEST['addedfromip']);
$isactive=secureSuperGlobalPOST($_REQUEST['isactive']);
$removedat=secureSuperGlobalPOST($_REQUEST['removedat']);
$removedip=secureSuperGlobalPOST($_REQUEST['removedip']);
  
$olgaquery="UPDATE wishlist SET createdip='$myIp',dateceated='$dateceated', buyer_id='$buyer_id', userid='$userid', productid='$productid', addedfromip='$addedfromip', isactive='$isactive', removedat='$removedat', removedip='$removedip' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lisplwishlist.php?refid=$myquerydcs\";</script>";?>