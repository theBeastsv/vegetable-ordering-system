<?php session_start();
include("../config/config.php");
$_SESSION['KesOnUserBannerDIPIC']=$newfilename; 
$_SESSION['KesOnUserBannerPTHA']=$newlinksPath;

$MyuserId=$_SESSION['KesOnUserId'];
 $mcxvshow= show_selecttable($debug,$limitstring,$conn,'user_buyer','*','WHERE rowId=\''.$MyuserId.'\'',$limit,1,' rowId ASC'); 
		foreach( $mcxvshow as $ssxgbw ) {
			$bpicname	=$ssxgbw['bpicname']; 
			$newlinksPath	=$ssxgbw['bpinnamePath']; 
			$banner_pic	=$ssxgbw['banner_pic']; 
		} 
$ransmicro=mt_rand(1, 4);	
		
 $newfilename="C$ransmicro".$bpicname; 
 $newlinks='../'.$newlinksPath.'/'.$newfilename;
  $newlink_fordbs=$newlinksPath.'/'.$newfilename;  
if(isset($_POST['pos']))
{
$from_top = abs($_POST['pos']);
$default_cover_width =1218;
$default_cover_height = 476;
	// includo la classe
	require_once("../config/thumbncrop.inc.php"); //php class for image resizing & cropping
	
	// valorizzo la variabile
	$tb = new ThumbAndCrop();
	
	// apro l'immagine
	$tb->openImg('../'.$_SESSION['KesOnUserBannerPIC']); //original cover image
	
	$newHeight = $tb->getRightHeight($default_cover_width);
	
	$tb->creaThumb($default_cover_width, $newHeight);

	$tb->setThumbAsOriginal();
	
	$tb->cropThumb($default_cover_width, 476, 0, $from_top);
	
	
	$tb->saveThumb($newlinks); //save cropped cover image
	
	$tb->resetOriginal();
	
	$tb->closeImg();


$olgaquery="UPDATE user_buyer SET bpinnamePath='$newlinksPath',bpicname='$newfilename' WHERE rowId='$MyuserId'";
$myquery=$conn->query($olgaquery); 
$_SESSION['KesOnUserBannerDIPIC']=$newfilename; 
$_SESSION['KesOnUserBannerPTHA']=$newlinksPath;
				
$data['status'] = 200;
$data['url'] = $newlink_fordbs;
echo json_encode($data);
}
?>