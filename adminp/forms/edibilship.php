<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $bill_address=secureSuperGlobalPOST($_REQUEST['bill_address']);
$shipp_address=secureSuperGlobalPOST($_REQUEST['shipp_address']);
$bill_citys=secureSuperGlobalPOST($_REQUEST['bill_citys']);
$shipp_citys=secureSuperGlobalPOST($_REQUEST['shipp_citys']);
$bill_states=secureSuperGlobalPOST($_REQUEST['bill_states']);
$shipp_states=secureSuperGlobalPOST($_REQUEST['shipp_states']);
$bill_countrys=secureSuperGlobalPOST($_REQUEST['bill_countrys']);
$shipp_countrys=secureSuperGlobalPOST($_REQUEST['shipp_countrys']);
$bill_postalcode=secureSuperGlobalPOST($_REQUEST['bill_postalcode']);
$shipp_postalcode=secureSuperGlobalPOST($_REQUEST['shipp_postalcode']);
  
$olgaquery="UPDATE addressbillship SET createdip='$myIp',dateceated='$dateceated', bill_address='$bill_address', shipp_address='$shipp_address', bill_citys='$bill_citys', shipp_citys='$shipp_citys', bill_states='$bill_states', shipp_states='$shipp_states', bill_countrys='$bill_countrys', shipp_countrys='$shipp_countrys', bill_postalcode='$bill_postalcode', shipp_postalcode='$shipp_postalcode' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lisplbilship.php?refid=$myquerydcs\";</script>";?>