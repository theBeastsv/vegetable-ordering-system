<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$buyerid=secureSuperGlobalPOST($_REQUEST['buyerid']);
$productid=secureSuperGlobalPOST($_REQUEST['productid']);
$selectedcolor=secureSuperGlobalPOST($_REQUEST['selectedcolor']);
$selectedsize=secureSuperGlobalPOST($_REQUEST['selectedsize']);
$quantity=secureSuperGlobalPOST($_REQUEST['quantity']);
$sessionvalue=secureSuperGlobalPOST($_REQUEST['sessionvalue']);
$mrp_payable_after_discount=secureSuperGlobalPOST($_REQUEST['mrp_payable_after_discount']);
$mrp_sale=secureSuperGlobalPOST($_REQUEST['mrp_sale']);
$isconvertedtoorder=secureSuperGlobalPOST($_REQUEST['isconvertedtoorder']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO temp_order_cart SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', buyerid='$buyerid', productid='$productid', selectedcolor='$selectedcolor', selectedsize='$selectedsize', quantity='$quantity', sessionvalue='$sessionvalue', mrp_payable_after_discount='$mrp_payable_after_discount', mrp_sale='$mrp_sale', isconvertedtoorder='$isconvertedtoorder'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lispltempordercart.php?refid=$id\";</script>";?>