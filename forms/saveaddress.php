<? session_start();
include("../config/config.php");
print_r($_REQUEST);
$typeofaddress			=$_REQUEST['typeofaddress'];
if($typeofaddress=='billing'){
$countrys			=$_REQUEST['bill_countrys'];
$states			=$_REQUEST['bill_states'];
$citys				=$_REQUEST['bill_citys'];
$postalcode			=$_REQUEST['bill_postalcode'];
$address			=$_REQUEST['bill_address'];
}
if($typeofaddress=='shipping'){
$countrys			=$_REQUEST['shipp_countrys'];
$states			=$_REQUEST['shipp_states'];
$citys				=$_REQUEST['shipp_citys'];
$postalcode			=$_REQUEST['shipp_postalcode'];
$address			=$_REQUEST['shipp_address'];
}
 $dateceated=date("Y-m-d G:i:s");
 $myIp= ipCheck() ;
$masterUserId=$_SESSION['KesOnUserId'];

 $olgaquery="INSERT INTO addressbillship SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', typeofaddress='$typeofaddress',address='$address',  citys='$citys', states='$states',   countrys='$countrys',  postalcode='$postalcode' ";
 $myquery=$conn->query($olgaquery); 
 
?>