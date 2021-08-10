<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $name=secureSuperGlobalPOST($_REQUEST['name']);
$country_id=secureSuperGlobalPOST($_REQUEST['country_id']);
$state_id=secureSuperGlobalPOST($_REQUEST['state_id']);
  
$olgaquery="UPDATE ud_cities SET createdip='$myIp',dateceated='$dateceated', name='$name', country_id='$country_id', state_id='$state_id' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lispludcities.php?refid=$myquerydcs\";</script>";?>