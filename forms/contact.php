
<?
session_start();
include("../config/config.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$_desp=$_REQUEST['message'];

$sql= "INSERT INTO contact set name='$name',email='$email',subject=$subject,desp='$desp'";
$myquery=$con->query($sql);
?>