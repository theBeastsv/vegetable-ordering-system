<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$companyid=secureSuperGlobalPOST($_REQUEST['companyid']);
$category_name=secureSuperGlobalPOST($_REQUEST['category_name']);
$parent_category=secureSuperGlobalPOST($_REQUEST['parent_category']);
$hsn_code=secureSuperGlobalPOST($_REQUEST['hsn_code']);		
$hsn_tax=secureSuperGlobalPOST($_REQUEST['hsn_tax']);		
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO product_category SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', companyid='$companyid', category_name='$category_name', parent_category='$parent_category',hsn_code='$hsn_code',hsn_tax='$hsn_tax'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lisplproduccategory.php?refid=$id\";</script>";?>