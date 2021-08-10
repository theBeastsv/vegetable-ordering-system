<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $sortname=secureSuperGlobalPOST($_REQUEST['sortname']);
$name=secureSuperGlobalPOST($_REQUEST['name']);
  
$olgaquery="UPDATE ud_countries SET createdip='$myIp',dateceated='$dateceated', sortname='$sortname', name='$name' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lispludcountries.php?refid=$myquerydcs\";</script>";?>