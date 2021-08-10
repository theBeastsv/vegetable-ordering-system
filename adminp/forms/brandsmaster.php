<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$companyid=secureSuperGlobalPOST($_REQUEST['companyid']);
$brandname=secureSuperGlobalPOST($_REQUEST['brandname']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO brandsmaster SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', companyid='$companyid', brandname='$brandname'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lisplbrandsmaster.php?refid=$id\";</script>";?>