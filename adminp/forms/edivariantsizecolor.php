<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $companyid=secureSuperGlobalPOST($_REQUEST['companyid']);
$color_name=secureSuperGlobalPOST($_REQUEST['color_name']);
$size_name=secureSuperGlobalPOST($_REQUEST['size_name']);
$product_id=secureSuperGlobalPOST($_REQUEST['product_id']);
$product_masterid=secureSuperGlobalPOST($_REQUEST['product_masterid']);
$seller_id=secureSuperGlobalPOST($_REQUEST['seller_id']);
  
$olgaquery="UPDATE size_color SET createdip='$myIp',dateceated='$dateceated', companyid='$companyid', color_name='$color_name', size_name='$size_name', product_id='$product_id', product_masterid='$product_masterid', seller_id='$seller_id' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lisplvariantsizecolor.php?refid=$myquerydcs\";</script>";?>