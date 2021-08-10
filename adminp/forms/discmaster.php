<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$scheme_name=secureSuperGlobalPOST($_REQUEST['scheme_name']);
$start_date=secureSuperGlobalPOST($_REQUEST['start_date']);
$ending_date=secureSuperGlobalPOST($_REQUEST['ending_date']);
$remark=secureSuperGlobalPOST($_REQUEST['remark']);
$promo_to_fly=secureSuperGlobalPOST($_REQUEST['promo_to_fly']);
$discount_type=secureSuperGlobalPOST($_REQUEST['discount_type']);
$discount_rate=secureSuperGlobalPOST($_REQUEST['discount_rate']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO discount_master SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', scheme_name='$scheme_name', start_date='$start_date', ending_date='$ending_date', remark='$remark', promo_to_fly='$promo_to_fly', discount_type='$discount_type', discount_rate='$discount_rate'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lispldiscmaster.php?refid=$id\";</script>";?>