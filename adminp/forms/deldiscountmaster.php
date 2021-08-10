<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata']; 
$myIp= ipCheck() ;
	$marts="delete from discountmaster WHERE rowId='$myquerydcs'";
	$myquery=$conn->query($marts); 
	echo "<script>window.location='../lispldiscountmaster.php';</script>"; ?>