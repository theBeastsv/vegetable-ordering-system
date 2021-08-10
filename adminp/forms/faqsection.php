<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$category=secureSuperGlobalPOST($_REQUEST['category']);
$question=secureSuperGlobalPOST($_REQUEST['question']);
$answer=secureSuperGlobalPOST($_REQUEST['answer']);
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO faqsection SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', category='$category', question='$question', answer='$answer'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->

<!--SPECIAL-->
<? $id = $conn->lastInsertId();?>
	 
<? 
echo "<script>window.location=\"../lisplfaqsection.php?refid=$id\";</script>";?>