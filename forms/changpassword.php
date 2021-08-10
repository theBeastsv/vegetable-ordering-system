<? session_start();
include("../config/config.php");


$myIp= ipCheck() ;
$masterUserId=$_SESSION['KesOnUserId']; 
$inputpasswordcurrent=secureSuperGlobalPOST($_REQUEST['inputpasswordcurrent']); 
$dateceated=date("Y-m-d G:i:s");
$olgaquery="UPDATE user_buyer SET inputpasswordcurrent='$inputpasswordcurrent' WHERE rowId='$masterUserId'";
 $myquery=$conn->query($olgaquery);
  
				
				
 $names="$inputname $inputlastname";
  
 
 echo '<script>window.location="../editprofile.php"</script>';
?>