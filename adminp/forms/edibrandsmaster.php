<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $companyid=secureSuperGlobalPOST($_REQUEST['companyid']);
$brandname=secureSuperGlobalPOST($_REQUEST['brandname']);
  
$olgaquery="UPDATE brandsmaster SET createdip='$myIp',dateceated='$dateceated', companyid='$companyid', brandname='$brandname' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lisplbrandsmaster.php?refid=$myquerydcs\";</script>";?>