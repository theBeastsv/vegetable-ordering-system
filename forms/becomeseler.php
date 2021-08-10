<? session_start();
include("../config/config.php"); 
include("../config/masterconfig.php"); 
$myIp= ipCheck() ;
 $masterUserIds=$_SESSION['KesOnUserId'];
 $dateceated=date("Y-m-d G:i:s");
  
$first_name				=secureSuperGlobalPOST($_REQUEST['first_name']);
$last_name				=secureSuperGlobalPOST($_REQUEST['last_name']);
$company_type			=secureSuperGlobalPOST($_REQUEST['company_type']);
$company_name			=secureSuperGlobalPOST($_REQUEST['company_name']);
$email_id				=secureSuperGlobalPOST($_REQUEST['email_id']);
$mobile_number			=secureSuperGlobalPOST($_REQUEST['mobile_number']);
$pan_card_number		=secureSuperGlobalPOST($_REQUEST['pan_card_number']);
$adhar_number			=secureSuperGlobalPOST($_REQUEST['adhar_number']);
$gst_number				=secureSuperGlobalPOST($_REQUEST['gst_number']);
$website				=secureSuperGlobalPOST($_REQUEST['website']);	
$seller_description		=secureSuperGlobalPOST($_REQUEST['seller_description']);

$countrys			=secureSuperGlobalPOST($_REQUEST['countrys']);
$states				=secureSuperGlobalPOST($_REQUEST['states']);
$mastercity				=secureSuperGlobalPOST($_REQUEST['mastercity']);	
$postalcode		=secureSuperGlobalPOST($_REQUEST['postalcode']);
$daddress		=secureSuperGlobalPOST($_REQUEST['daddress']);

	

 $olgaquery="INSERT INTO seller_master SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserIds', first_name='$first_name', last_name='$last_name', company_type='$company_type', company_name='$company_name', gst_number='$gst_number', pan_card_number='$pan_card_number', adhar_number='$adhar_number',   website='$website' ,email_id='$email_id',mobile_number='$mobile_number',seller_description='$seller_description',  buyerId='$masterUserIds',company_address='$daddress',company_city='$mastercity',company_state='$states',company_country='$countrys',company_postal_code='$postalcode' ";
 $myquery=$conn->query($olgaquery);
  $sellerId = $conn->lastInsertId();

 $olgaquery="UPDATE user_buyer SET isseller='1',sellerId='$sellerId'  WHERE rowId='$masterUserIds'";
 
 
 $myquery=$conn->query($olgaquery); 
 $_SESSION['KesOnSELLERIF']=1;
  $_SESSION['KesOnSELLERID']=$sellerId;
 echo '<script>window.location="../myproduct.php";</script>';
?>