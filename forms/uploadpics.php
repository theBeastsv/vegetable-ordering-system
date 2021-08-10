<? session_start();
include("../config/config.php");


$myIp= ipCheck() ;
$masterUserId=$_SESSION['KesOnUserId']; 
$inputpasswordcurrent=secureSuperGlobalPOST($_REQUEST['inputpasswordcurrent']); 
$dateceated=date("Y-m-d G:i:s");
 
  
				
$today =  date("FjYgia");   
//////////////********** FILE UPLOAD *****************************////
$filename = $_FILES["uploadprofilepic"]["name"];
if($filename!=''){

 

	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filetypeext=str_replace('.','',$file_ext);
	$filesize = $_FILES["uploadprofilepic"]["size"];
	$allowed_file_types = array('.jpg','.jpeg');	
$myIp= ipCheck() ;
$masterUserId=$_SESSION['KesOnUserId'];
 
   			$newpath='../imuploads/users/'.$masterUserId;
			$newpath_n='imuploads/users/'.$masterUserId; 
 			$newpath_thumbs='../imuploads/users/'.$masterUserId.'/thumbs';
			$newpath_large='../imuploads/users/'.$masterUserId.'/large'; 
			
			$newpath_thumbs_n='imuploads/users/'.$masterUserId.'/thumbs';
			$newpath_large_n='imuploads/users/'.$masterUserId.'/large'; 
			
				
			if (!file_exists($newpath_thumbs)) {
				mkdir($newpath_thumbs, 0777, true);
			}
			
			if (!file_exists($newpath_large)) {
				mkdir($newpath_large, 0777, true);
			}
			
			
			
	 if (in_array($file_ext,$allowed_file_types) && ($filesize < 1200000))
	{	
		// Rename file
		$newfilenamsed=rand(5, 4215).''.$today.''.$file_basename;
		$newfilename = md5($newfilenamsed) . $file_ext;
		$newfiletopuplaod=$newpath_thumbs.'/'. $newfilename;
	 
	//echo '1-SSS';
		if (file_exists($newpath.'/'. $newfilename))
		{
			// file already exists error
			//echo '2-SSS';
			//echo "You have already uploaded this file.";
		}
		else
		{
			//echo '3-SSS';		
		$myorigionalfile = $newpath."/" . $newfilename; 
		$myorigionalfile_n= $newpath_n."/" . $newfilename; 
		//echo $myorigionalfile;
			if(move_uploaded_file($_FILES["uploadprofilepic"]["tmp_name"],$myorigionalfile)){
				 
				 /////////////////////////////////////////RESIZE///////////////////////////////////////
			 
					$tigo=$newfilename;
					$percent = 0.9;
					$percentthumb = 0.7;
					
					  list($width, $height, $type, $attr) = getimagesize($myorigionalfile);
		 $dest=$newpath_large.'/'.$newfilename; 
		 $desthumb= $newpath_thumbs.'/'.$newfilename; 
		 $desthumb_n= $newpath_thumbs_n."/" . $newfilename; 
 		 $dest_n=$newpath_large_n.'/'.$newfilename; 
		

		  $aspectration= $width / $height;
		
		
		 $new_width=600*$aspectration; 
		 $new_height =$new_width/$aspectration; 
		 
		 $new_width_thumb=400*$aspectration; 
		 $new_height_thumb =$new_width_thumb/$aspectration; 
		 
		  
		    
		create_thumb($myorigionalfile,$dest,$new_width, $new_height);
		create_thumb($myorigionalfile,$desthumb,$new_width_thumb, $new_height_thumb);
		
		
				 /////////////////////////////////////////RESIZE///////////////////////////////////////	
				$imageuploaded=1;
			 
			$olgaquery="INSERT INTO user_image SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId',   imagename='$myorigionalfile_n',imagename_lr='$dest_n',imagename_tr='$desthumb_n' ";
			$myquery=$conn->query($olgaquery);  
 
 			$olgaquery="UPDATE user_buyer SET profile_pic='$desthumb_n' WHERE rowId='$masterUserId'";
			$myquery=$conn->query($olgaquery);  
			$_SESSION['KesOnUserPIC']=$desthumb_n;
 
				}
			//echo "File uploaded successfully.";	
			
		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		//echo "Please select a file to upload.";
	} 
	elseif ($filesize > 1200000)
	{	
		// file size error
		//echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
		//echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["uploadprofilepic"]["tmp_name"]);
	}	
 $names="$inputname $inputlastname";
}
//////////////********** FILE UPLOAD *****************************////
$filename = $_FILES["uplaodbanner"]["name"];
if($filename!=''){

 

	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filetypeext=str_replace('.','',$file_ext);
	$filesize = $_FILES["uplaodbanner"]["size"];
	$allowed_file_types = array('.jpg','.jpeg');	
$myIp= ipCheck() ;
$masterUserId=$_SESSION['KesOnUserId'];
 
   			$newpath='../imuploads/users/'.$masterUserId.'/banner';
			$newpath_n='imuploads/users/'.$masterUserId.'/banner';
 			$newpath_thumbs='../imuploads/users/'.$masterUserId.'/banner/thumbs';
			$newpath_large='../imuploads/users/'.$masterUserId.'/banner/large'; 
			$newpath_thumbs_n='imuploads/users/'.$masterUserId.'/banner/thumbs';
			$newpath_large_n='imuploads/users/'.$masterUserId.'/banner/large'; 
			
				
			if (!file_exists($newpath_thumbs)) {
				mkdir($newpath_thumbs, 0777, true);
			}
			
			if (!file_exists($newpath_large)) {
				mkdir($newpath_large, 0777, true);
			}
			
			
			
	 if (in_array($file_ext,$allowed_file_types) && ($filesize < 6200000))
	{	
		// Rename file
		$newfilenamsed=rand(5, 4215).''.$today.''.$file_basename;
		$newfilename ='B'. md5($newfilenamsed) . $file_ext;
		$newfiletopuplaod=$newpath.'/'. $newfilename;
	 
	// echo '1-SSS';
		if (file_exists($newpath.'/'. $newfilename))
		{
			// file already exists error
			//echo '2-SSS';
			 echo "You have already uploaded this file.";
		}
		else
		{
			//echo '3-SSS';		
		$myorigionalfile= $newpath."/" . $newfilename; 
		$myorigionalfile_n= $newpath_n."/" . $newfilename; 
		
		//echo $myorigionalfile;
			if(move_uploaded_file($_FILES["uplaodbanner"]["tmp_name"],$myorigionalfile)){
				 
				 /////////////////////////////////////////RESIZE///////////////////////////////////////
			 
					$tigo=$newfilename;
					$percent = 0.9;
					$percentthumb = 0.5;
					
					  list($width, $height, $type, $attr) = getimagesize($myorigionalfile);
				$dest=$newpath.'/'.$newfilename; 
				$desthumb= $newpath_large.'/'.$newfilename; 
				$desthumb_n= $newpath_thumbs_n."/" . $newfilename; 
				 $desthumb_ns='../'.$desthumb_n;
				
				$dest_n=$newpath_large_n.'/'.$newfilename; 
				$aspectration= $width / $height;
 				$new_width=1000*$aspectration; 
				$new_height =$new_width/$aspectration; 
 				$new_width_thumb=450*$aspectration; 
				$new_height_thumb =$new_width_thumb/$aspectration; 
			
			create_thumb($myorigionalfile,$desthumb,$new_width, $new_height);
			create_thumb($myorigionalfile,$desthumb_ns,$new_width_thumb, $new_height_thumb);
		
		
				 /////////////////////////////////////////RESIZE///////////////////////////////////////	
				$imageuploaded=1;
			 
$olgaquery="INSERT INTO user_image SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId',   imagename='$myorigionalfile_n',imagename_lr='$dest_n',imagename_tr='$desthumb_n' ";
 
 $myquery=$conn->query($olgaquery);  
 	$olgaquery="UPDATE user_buyer SET banner_pic='$myorigionalfile_n',bpinnamePath='$newpath_n',bpicname='$newfilename' WHERE rowId='$masterUserId'";
			$myquery=$conn->query($olgaquery);  
				$_SESSION['KesOnUserBannerDIPIC']=$newfilename;
				$_SESSION['KesOnUserBannerPIC']=$myorigionalfile_n;
				$_SESSION['KesOnUserBannerPTHA']=$newpath_n;
				}
			//echo "File uploaded successfully.";	
			
		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		// echo "Please select a file to upload.";
	} 
	elseif ($filesize > 1200000)
	{	
		// file size error
		// echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
		// echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["uplaodbanner"]["tmp_name"]);
	}	 
}
 echo '<script>window.location="../editprofile.php"</script>';
?>