<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$company_name=secureSuperGlobalPOST($_REQUEST['company_name']);
$contact_address=secureSuperGlobalPOST($_REQUEST['contact_address']);
$contact_number=secureSuperGlobalPOST($_REQUEST['contact_number']);
$support_contact_number=secureSuperGlobalPOST($_REQUEST['support_contact_number']);
$gst_number=secureSuperGlobalPOST($_REQUEST['gst_number']);
$support_email_id=secureSuperGlobalPOST($_REQUEST['support_email_id']);
$contact_email_id=secureSuperGlobalPOST($_REQUEST['contact_email_id']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO comy_master SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', company_name='$company_name', contact_address='$contact_address', contact_number='$contact_number', support_contact_number='$support_contact_number', gst_number='$gst_number', support_email_id='$support_email_id', contact_email_id='$contact_email_id'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lisplcompmaster.php?refid=$id\";</script>";?>