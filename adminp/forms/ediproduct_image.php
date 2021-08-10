<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $productid=secureSuperGlobalPOST($_REQUEST['productid']);
$imagename=secureSuperGlobalPOST($_REQUEST['imagename']);
$product_color=secureSuperGlobalPOST($_REQUEST['product_color']);
  
$olgaquery="UPDATE product_image SET createdip='$myIp',dateceated='$dateceated', productid='$productid', imagename='$imagename', product_color='$product_color' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lisplproduct_image.php?refid=$myquerydcs\";</script>";?>