<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata']; 
$myIp= ipCheck() ;
	$marts="delete from faqsection WHERE rowId='$myquerydcs'";
	$myquery=$conn->query($marts); 
	echo "<script>window.location='../lisplfaqsection.php';</script>"; ?>