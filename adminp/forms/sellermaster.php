<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$first_name=secureSuperGlobalPOST($_REQUEST['first_name']);
$last_name=secureSuperGlobalPOST($_REQUEST['last_name']);
$company_type=secureSuperGlobalPOST($_REQUEST['company_type']);
$company_name=secureSuperGlobalPOST($_REQUEST['company_name']);
if($company_type==0){
	$brandname=$first_name.''.$last_name.' Creation';
	}else{
		$brandname=$company_name.' Creation';
		}
$gst_number=secureSuperGlobalPOST($_REQUEST['gst_number']);
$pan_card_number=secureSuperGlobalPOST($_REQUEST['pan_card_number']);
$adhar_number=secureSuperGlobalPOST($_REQUEST['adhar_number']);
$account_balance=secureSuperGlobalPOST($_REQUEST['account_balance']);
$email_id=secureSuperGlobalPOST($_REQUEST['email_id']);
$mobile_number=secureSuperGlobalPOST($_REQUEST['mobile_number']);
$website=secureSuperGlobalPOST($_REQUEST['website']);
$seller_description=secureSuperGlobalPOST($_REQUEST['seller_description']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO seller_master SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', first_name='$first_name', last_name='$last_name', company_type='$company_type', company_name='$company_name', gst_number='$gst_number', pan_card_number='$pan_card_number', adhar_number='$adhar_number', account_balance='$account_balance', email_id='$email_id', mobile_number='$mobile_number', website='$website',seller_description='$seller_description'";
 $myquery=$conn->query($olgaquery); 
 $id = $conn->lastInsertId();
 $olgaquery="INSERT INTO brandsmaster SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', companyid='$id', brandname='$brandname'";
 $myquery=$conn->query($olgaquery);
  
echo "<script>window.location=\"../lisplsellermaster.php?refid=$id\";</script>";?>