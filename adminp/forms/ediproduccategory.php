<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $companyid=secureSuperGlobalPOST($_REQUEST['companyid']);
$category_name=secureSuperGlobalPOST($_REQUEST['category_name']);
$parent_category=secureSuperGlobalPOST($_REQUEST['parent_category']);
  
$olgaquery="UPDATE product_category SET createdip='$myIp',dateceated='$dateceated', companyid='$companyid', category_name='$category_name', parent_category='$parent_category' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lisplproduccategory.php?refid=$myquerydcs\";</script>";?>