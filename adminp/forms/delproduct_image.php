<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata']; 
$myIp= ipCheck() ;
	$marts="delete from product_image WHERE rowId='$myquerydcs'";
	$myquery=$conn->query($marts); 
	echo "<script>window.location='../lisplproduct_image.php';</script>"; ?>