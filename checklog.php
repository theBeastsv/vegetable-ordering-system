 	<? session_start();
include("config/config.php");
$username=$_POST['binemail'];
$password_new=$_POST['binpassword'];
$sql = "SELECT * FROM user_buyer WHERE inputemail='$username'";
$myquery=$conn->query($sql);
$mydara= $myquery->fetchAll()  ;
$rows_found = $myquery->rowCount();
if($rows_found==0){
$_SESSION['unvalidate']=12;
$_SESSION['tologusername']='';
unsetmeOnTime();
echo '<script>window.location="login.php"</script>';
}else{
foreach( $mydara as $row ) {
$rowId= $row['rowId'];
$first_name= $row['inputname'];
$email_id= $row['inputemail'];
$mobile_no= $row['mobileno'];
$password= $row['inputpasswordcurrent'];
$mastercity= $row['mastercity'];
$postalcode= $row['postalcode'];
$states= $row['states'];
$countrys= $row['countrys'];
$profile_pic= $row['profile_pic'];
$bpicname= $row['bpicname'];
$banner_pic= $row['banner_pic'];
$bpinnamePath= $row['bpinnamePath'];
$isseller= $row['isseller'];
$sellerId= $row['sellerId'];
}
if($password_new==$password){
$_SESSION['unvalidate']='';
unset($_SESSION['unvalidate']);
$_SESSION['KesOnUserId']=$rowId;
$_SESSION['KesUseFname']=$first_name;
$_SESSION['KesUseEmail']=$email_id;
$_SESSION['KesUseMob']=$mobile_no;
$_SESSION['KesUsemastercity']=$mastercity;
$_SESSION['KesUsestates']=$states;
$_SESSION['KesUsecountrys']=$countrys;
$_SESSION['KesOnUserPIC']=$profile_pic;
$_SESSION['KesOnUserBannerDIPIC']=$bpicname;
$_SESSION['KesOnUserBannerPIC']=$banner_pic;
$_SESSION['KesOnUserBannerPTHA']=$bpinnamePath;
$_SESSION['KesOnSELLERIF']=$isseller;
if($isseller==1){
$_SESSION['KesOnSELLERID']=$sellerId;
}else{
$_SESSION['KesOnSELLERID']=0;
}
echo '<script>window.location="index.php"</script>';	
}else{
$_SESSION['unvalidate']=14;
$_SESSION['tologusername']=$username;
unsetmeOnTime();
echo '<script>window.location="login.php"</script>';	
}
}
 

?>