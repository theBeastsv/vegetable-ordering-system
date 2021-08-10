<? session_start();
include("../config/config.php");


$myIp= ipCheck() ;
$masterUserId=$_SESSION['KesOnUserId'];
$companyid=secureSuperGlobalPOST($_REQUEST['companyid']);
$inputname=secureSuperGlobalPOST($_REQUEST['inputname']);
$inputlastname=secureSuperGlobalPOST($_REQUEST['inputlastname']);
$inputemail=secureSuperGlobalPOST($_REQUEST['inputemail']);
$mobileno=secureSuperGlobalPOST($_REQUEST['mobileno']);
$datebobirth=secureSuperGlobalPOST($_REQUEST['datebobirth']);
$inputpasswordcurrent=secureSuperGlobalPOST($_REQUEST['inputpasswordcurrent']);
$daddress=secureSuperGlobalPOST($_REQUEST['daddress']);
$countrys=secureSuperGlobalPOST($_REQUEST['countrys']);
$states=secureSuperGlobalPOST($_REQUEST['states']);
$mastercity=secureSuperGlobalPOST($_REQUEST['mastercity']);
$postalcode=secureSuperGlobalPOST($_REQUEST['postalcode']);
$newsletter=secureSuperGlobalPOST($_REQUEST['newsletter']);
$optin=secureSuperGlobalPOST($_REQUEST['optin']);
$isactive=secureSuperGlobalPOST($_REQUEST['isactive']);
$firstlogin=secureSuperGlobalPOST($_REQUEST['firstlogin']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="UPDATE user_buyer SET  inputname='$inputname', inputlastname='$inputlastname', inputemail='$inputemail', mobileno='$mobileno', datebobirth='$datebobirth',  daddress='$daddress', countrys='$countrys', states='$states', mastercity='$mastercity', postalcode='$postalcode', newsletter='$newsletter', optin='$optin' WHERE rowId='$masterUserId'";
 $myquery=$conn->query($olgaquery);
 
 $_SESSION['KesUseFname']=$inputname;
				$_SESSION['KesUseEmail']=$inputemail;
				$_SESSION['KesUseMob']=$mobileno;
				$_SESSION['KesUsemastercity']=$mastercity;
				$_SESSION['KesUsestates']=$states;
				$_SESSION['KesUsecountrys']=$countrys;
				
				
 $names="$inputname $inputlastname";
  
 
 echo '<script>window.location="../editprofile.php"</script>';
?>