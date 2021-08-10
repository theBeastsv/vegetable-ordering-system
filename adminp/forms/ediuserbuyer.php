<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $companyid=secureSuperGlobalPOST($_REQUEST['companyid']);
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
  
$olgaquery="UPDATE user_buyer SET createdip='$myIp',dateceated='$dateceated', companyid='$companyid', inputname='$inputname', inputlastname='$inputlastname', inputemail='$inputemail', mobileno='$mobileno', datebobirth='$datebobirth', inputpasswordcurrent='$inputpasswordcurrent', daddress='$daddress', countrys='$countrys', states='$states', mastercity='$mastercity', postalcode='$postalcode', newsletter='$newsletter', optin='$optin', isactive='$isactive', firstlogin='$firstlogin' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lispluserbuyer.php?refid=$myquerydcs\";</script>";?>