<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata']; 
$myIp= ipCheck() ;
	$marts="delete from newsletter WHERE rowId='$myquerydcs'";
	$myquery=$conn->query($marts); 
	echo "<script>window.location='../lisplnewsletter.php';</script>"; ?>