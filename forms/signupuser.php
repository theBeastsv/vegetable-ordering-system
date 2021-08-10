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


$company_type=secureSuperGlobalPOST($_REQUEST['company_type']);
$seller_description=secureSuperGlobalPOST($_REQUEST['seller_description']);
$company_name=secureSuperGlobalPOST($_REQUEST['company_name']); 




$dateceated=date("Y-m-d G:i:s");
$profile_pic='imuploads/users/7/thumbs/635eebc0764924f93b264d567639109a.jpg';
$bpicname='B1d83fcd62d30196f0812f5d176422149.jpg';
$bpinnamePath='imuploads/users/7/banner';
$banner_pic='imuploads/users/7/banner/B1d83fcd62d30196f0812f5d176422149.jpg';
$olgaquery="INSERT INTO user_buyer SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', inputname='$inputname', inputlastname='$inputlastname', inputemail='$inputemail', mobileno='$mobileno', datebobirth='$datebobirth', inputpasswordcurrent='$inputpasswordcurrent', daddress='$daddress', countrys='$countrys', states='$states', mastercity='$mastercity', postalcode='$postalcode', newsletter='$newsletter', optin='$optin',banner_pic='$banner_pic',bpinnamePath='$bpinnamePath',bpicname='$bpicname',profile_pic='$profile_pic'";
 $myquery=$conn->query($olgaquery);
 
 $id = $conn->lastInsertId();
 $names="$inputname $inputlastname";
 $olgaquery="INSERT INTO addressbillship SET createdip='$myIp',dateceated='$dateceated',createdby='$id', names='$names', emailId='$inputemail', mobilenumber='$mobileno', address='$daddress', citys='$mastercity', states='$states', countrys='$countrys', postalcode='$postalcode',  typeofaddress='billing' ";
 $myquery=$conn->query($olgaquery);
 
 $olgaquery="INSERT INTO addressbillship SET createdip='$myIp',dateceated='$dateceated',createdby='$id', names='$names', emailId='$inputemail', mobilenumber='$mobileno', address='$daddress', citys='$mastercity', states='$states', countrys='$countrys', postalcode='$postalcode',  typeofaddress='shipping' ";
 $myquery=$conn->query($olgaquery);
 
 echo '<script>window.location="../login.php"</script>';
?>