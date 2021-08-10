<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $name=secureSuperGlobalPOST($_REQUEST['name']);
$country_id=secureSuperGlobalPOST($_REQUEST['country_id']);
  
$olgaquery="UPDATE ud_states SET createdip='$myIp',dateceated='$dateceated', name='$name', country_id='$country_id' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lispludstates.php?refid=$myquerydcs\";</script>";?>