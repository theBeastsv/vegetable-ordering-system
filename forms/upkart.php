<? session_start();
include("../config/config.php"); 
include("../config/masterconfig.php"); 
$myIp= ipCheck() ;
$forxmprocess=$_REQUEST['forxmprocess'];
 
$masterUserId=$_SESSION['KesOnUserId'];

$temordId=$_REQUEST['temordId'];
$quanti=$_REQUEST['quanti'];

foreach($temordId as $thiquntId){
	$buaquantit=0;
	$buaquantit=$_REQUEST['quanti'.$thiquntId];
	if($buaquantit>0){
	$marts="UPDATE temp_order_cart SET quantity='$buaquantit' WHERE rowId='$thiquntId'";
 	}else{
		$marts="DELETE FROM temp_order_cart WHERE rowId='$thiquntId'";
		}
	$myquery=$conn->query($marts); 
	}
if($forxmprocess==2){
echo '<script>window.location="../mycart.php";</script>';
}else{
echo '<script>window.location="../mykart.php";</script>';	
	}
?>