<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $buyerid=secureSuperGlobalPOST($_REQUEST['buyerid']);
$productid=secureSuperGlobalPOST($_REQUEST['productid']);
$selectedcolor=secureSuperGlobalPOST($_REQUEST['selectedcolor']);
$selectedsize=secureSuperGlobalPOST($_REQUEST['selectedsize']);
$quantity=secureSuperGlobalPOST($_REQUEST['quantity']);
$sessionvalue=secureSuperGlobalPOST($_REQUEST['sessionvalue']);
$mrp_payable_after_discount=secureSuperGlobalPOST($_REQUEST['mrp_payable_after_discount']);
$mrp_sale=secureSuperGlobalPOST($_REQUEST['mrp_sale']);
$isconvertedtoorder=secureSuperGlobalPOST($_REQUEST['isconvertedtoorder']);
  
$olgaquery="UPDATE temp_order_cart SET createdip='$myIp',dateceated='$dateceated', buyerid='$buyerid', productid='$productid', selectedcolor='$selectedcolor', selectedsize='$selectedsize', quantity='$quantity', sessionvalue='$sessionvalue', mrp_payable_after_discount='$mrp_payable_after_discount', mrp_sale='$mrp_sale', isconvertedtoorder='$isconvertedtoorder' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lispltempordercart.php?refid=$myquerydcs\";</script>";?>