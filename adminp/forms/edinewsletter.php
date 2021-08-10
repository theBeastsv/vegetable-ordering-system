<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $emailid=secureSuperGlobalPOST($_REQUEST['emailid']);
$mobile_number=secureSuperGlobalPOST($_REQUEST['mobile_number']);
  
$olgaquery="UPDATE newsletter SET createdip='$myIp',dateceated='$dateceated', emailid='$emailid', mobile_number='$mobile_number' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lisplnewsletter.php?refid=$myquerydcs\";</script>";?>