<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$orderid=secureSuperGlobalPOST($_REQUEST['orderid']);
$userid=secureSuperGlobalPOST($_REQUEST['userid']);
$total_order_price_withoutshipping=secureSuperGlobalPOST($_REQUEST['total_order_price_withoutshipping']);
$total_order_price=secureSuperGlobalPOST($_REQUEST['total_order_price']);
$shipping_price=secureSuperGlobalPOST($_REQUEST['shipping_price']);
$orderplaceing_name=secureSuperGlobalPOST($_REQUEST['orderplaceing_name']);
$shipp_orderplaceing_name=secureSuperGlobalPOST($_REQUEST['shipp_orderplaceing_name']);
$shipp_companyname=secureSuperGlobalPOST($_REQUEST['shipp_companyname']);
$companyname=secureSuperGlobalPOST($_REQUEST['companyname']);
$bill_address=secureSuperGlobalPOST($_REQUEST['bill_address']);
$shipp_address=secureSuperGlobalPOST($_REQUEST['shipp_address']);
$bill_citys=secureSuperGlobalPOST($_REQUEST['bill_citys']);
$shipp_citys=secureSuperGlobalPOST($_REQUEST['shipp_citys']);
$bill_states=secureSuperGlobalPOST($_REQUEST['bill_states']);
$shipp_states=secureSuperGlobalPOST($_REQUEST['shipp_states']);
$bill_countrys=secureSuperGlobalPOST($_REQUEST['bill_countrys']);
$shipp_countrys=secureSuperGlobalPOST($_REQUEST['shipp_countrys']);
$bill_postalcode=secureSuperGlobalPOST($_REQUEST['bill_postalcode']);
$shipp_postalcode=secureSuperGlobalPOST($_REQUEST['shipp_postalcode']);
$bill_emailid=secureSuperGlobalPOST($_REQUEST['bill_emailid']);
$shipp_emailid=secureSuperGlobalPOST($_REQUEST['shipp_emailid']);
$bill_mobilenumbers=secureSuperGlobalPOST($_REQUEST['bill_mobilenumbers']);
$shipp_mobilenumbers=secureSuperGlobalPOST($_REQUEST['shipp_mobilenumbers']);
$dateceated=secureSuperGlobalPOST($_REQUEST['dateceated']);
$createdip=secureSuperGlobalPOST($_REQUEST['createdip']);
$curwek=secureSuperGlobalPOST($_REQUEST['curwek']);
$orderadditionalinfo=secureSuperGlobalPOST($_REQUEST['orderadditionalinfo']);
$refaddressid=secureSuperGlobalPOST($_REQUEST['refaddressid']);
$paymentstatus=secureSuperGlobalPOST($_REQUEST['paymentstatus']);
$paymenttype=secureSuperGlobalPOST($_REQUEST['paymenttype']);
$payment_comment=secureSuperGlobalPOST($_REQUEST['payment_comment']);
$commentsorder=secureSuperGlobalPOST($_REQUEST['commentsorder']);
$carnumber=secureSuperGlobalPOST($_REQUEST['carnumber']);
$nameoncard=secureSuperGlobalPOST($_REQUEST['nameoncard']);
$expiremonth=secureSuperGlobalPOST($_REQUEST['expiremonth']);
$xxyear=secureSuperGlobalPOST($_REQUEST['xxyear']);
$verificationcode=secureSuperGlobalPOST($_REQUEST['verificationcode']);
$order_confirmed=secureSuperGlobalPOST($_REQUEST['order_confirmed']);
$confirmationtime=secureSuperGlobalPOST($_REQUEST['confirmationtime']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO invoice_master SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', orderid='$orderid', userid='$userid', total_order_price_withoutshipping='$total_order_price_withoutshipping', total_order_price='$total_order_price', shipping_price='$shipping_price', orderplaceing_name='$orderplaceing_name', shipp_orderplaceing_name='$shipp_orderplaceing_name', shipp_companyname='$shipp_companyname', companyname='$companyname', bill_address='$bill_address', shipp_address='$shipp_address', bill_citys='$bill_citys', shipp_citys='$shipp_citys', bill_states='$bill_states', shipp_states='$shipp_states', bill_countrys='$bill_countrys', shipp_countrys='$shipp_countrys', bill_postalcode='$bill_postalcode', shipp_postalcode='$shipp_postalcode', bill_emailid='$bill_emailid', shipp_emailid='$shipp_emailid', bill_mobilenumbers='$bill_mobilenumbers', shipp_mobilenumbers='$shipp_mobilenumbers', dateceated='$dateceated', createdip='$createdip', curwek='$curwek', orderadditionalinfo='$orderadditionalinfo', refaddressid='$refaddressid', paymentstatus='$paymentstatus', paymenttype='$paymenttype', payment_comment='$payment_comment', commentsorder='$commentsorder', carnumber='$carnumber', nameoncard='$nameoncard', expiremonth='$expiremonth', xxyear='$xxyear', verificationcode='$verificationcode', order_confirmed='$order_confirmed', confirmationtime='$confirmationtime'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lisplinvoicemaster.php?refid=$id\";</script>";?>