<? session_start();
include("../config/config.php");
$myquerydcs=$_REQUEST['toeditdata'];
$myIp= ipCheck() ; $category=secureSuperGlobalPOST($_REQUEST['category']);
$question=secureSuperGlobalPOST($_REQUEST['question']);
$answer=secureSuperGlobalPOST($_REQUEST['answer']);
  
$olgaquery="UPDATE faqsection SET createdip='$myIp',dateceated='$dateceated', category='$category', question='$question', answer='$answer' WHERE rowId='$myquerydcs'";
 $myquery=$conn->query($olgaquery); ?>
<!--*Other setup *-->
<? $id = $myquerydcs;?>
<? 
echo "<script>window.location=\"../lisplfaqsection.php?refid=$myquerydcs\";</script>";?>