<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$name=secureSuperGlobalPOST($_REQUEST['name']);
$country_id=secureSuperGlobalPOST($_REQUEST['country_id']);
$state_id=secureSuperGlobalPOST($_REQUEST['state_id']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO ud_cities SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', name='$name', country_id='$country_id', state_id='$state_id'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lispludcities.php?refid=$id\";</script>";?>