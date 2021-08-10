<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$sortname=secureSuperGlobalPOST($_REQUEST['sortname']);
$name=secureSuperGlobalPOST($_REQUEST['name']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO ud_countries SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', sortname='$sortname', name='$name'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lispludcountries.php?refid=$id\";</script>";?>