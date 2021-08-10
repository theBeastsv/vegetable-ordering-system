<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$invoiceid=secureSuperGlobalPOST($_REQUEST['invoiceid']);
$invoicestring=secureSuperGlobalPOST($_REQUEST['invoicestring']);
$buyerid=secureSuperGlobalPOST($_REQUEST['buyerid']);
$seller_id=secureSuperGlobalPOST($_REQUEST['seller_id']);
$productid=secureSuperGlobalPOST($_REQUEST['productid']);
$productname=secureSuperGlobalPOST($_REQUEST['productname']);
$prdcolor=secureSuperGlobalPOST($_REQUEST['prdcolor']);
$prdsize=secureSuperGlobalPOST($_REQUEST['prdsize']);
$quantity=secureSuperGlobalPOST($_REQUEST['quantity']);
$unitprice=secureSuperGlobalPOST($_REQUEST['unitprice']);
$unitpricediscoutn=secureSuperGlobalPOST($_REQUEST['unitpricediscoutn']);
$discount_price=secureSuperGlobalPOST($_REQUEST['discount_price']);
$discount_id=secureSuperGlobalPOST($_REQUEST['discount_id']);
$payableprice=secureSuperGlobalPOST($_REQUEST['payableprice']);
$order_confirmed=secureSuperGlobalPOST($_REQUEST['order_confirmed']);
$confirmationtime=secureSuperGlobalPOST($_REQUEST['confirmationtime']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO invoice_detail SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', invoiceid='$invoiceid', invoicestring='$invoicestring', buyerid='$buyerid', seller_id='$seller_id', productid='$productid', productname='$productname', prdcolor='$prdcolor', prdsize='$prdsize', quantity='$quantity', unitprice='$unitprice', unitpricediscoutn='$unitpricediscoutn', discount_price='$discount_price', discount_id='$discount_id', payableprice='$payableprice', order_confirmed='$order_confirmed', confirmationtime='$confirmationtime'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lisplinvoicedetail.php?refid=$id\";</script>";?>