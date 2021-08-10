<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $scheme_name=secureSuperGlobalPOST($_REQUEST['scheme_name']);
$start_date=secureSuperGlobalPOST($_REQUEST['start_date']);
$ending_date=secureSuperGlobalPOST($_REQUEST['ending_date']);
$remark=secureSuperGlobalPOST($_REQUEST['remark']);
$promo_to_fly=secureSuperGlobalPOST($_REQUEST['promo_to_fly']);
$discount_type=secureSuperGlobalPOST($_REQUEST['discount_type']);
$discount_rate=secureSuperGlobalPOST($_REQUEST['discount_rate']);
  
$olgaquery="UPDATE discount_master SET createdip='$myIp',dateceated='$dateceated', scheme_name='$scheme_name', start_date='$start_date', ending_date='$ending_date', remark='$remark', promo_to_fly='$promo_to_fly', discount_type='$discount_type', discount_rate='$discount_rate' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lispldiscmaster.php?refid=$myquerydcs\";</script>";?>