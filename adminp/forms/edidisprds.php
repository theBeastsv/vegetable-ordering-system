<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $scheme_name=secureSuperGlobalPOST($_REQUEST['scheme_name']);
$product_id=secureSuperGlobalPOST($_REQUEST['product_id']);
$minimum_order=secureSuperGlobalPOST($_REQUEST['minimum_order']);
$start_date=secureSuperGlobalPOST($_REQUEST['start_date']);
$end_date=secureSuperGlobalPOST($_REQUEST['end_date']);
$discount_rate=secureSuperGlobalPOST($_REQUEST['discount_rate']);
$discount_type=secureSuperGlobalPOST($_REQUEST['discount_type']);
  
$olgaquery="UPDATE discount_products SET createdip='$myIp',dateceated='$dateceated', scheme_name='$scheme_name', product_id='$product_id', minimum_order='$minimum_order', start_date='$start_date', end_date='$end_date', discount_rate='$discount_rate', discount_type='$discount_type' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lispldisprds.php?refid=$myquerydcs\";</script>";?>