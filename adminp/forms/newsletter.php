<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$emailid=secureSuperGlobalPOST($_REQUEST['emailid']);
$mobile_number=secureSuperGlobalPOST($_REQUEST['mobile_number']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO newsletter SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', emailid='$emailid', mobile_number='$mobile_number'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lisplnewsletter.php?refid=$id\";</script>";?>