<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
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
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO addressbillship SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', bill_address='$bill_address', shipp_address='$shipp_address', bill_citys='$bill_citys', shipp_citys='$shipp_citys', bill_states='$bill_states', shipp_states='$shipp_states', bill_countrys='$bill_countrys', shipp_countrys='$shipp_countrys', bill_postalcode='$bill_postalcode', shipp_postalcode='$shipp_postalcode'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lisplbilship.php?refid=$id\";</script>";?>