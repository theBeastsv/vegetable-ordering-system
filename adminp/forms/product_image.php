<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$productid=secureSuperGlobalPOST($_REQUEST['productid']);
$imagename=secureSuperGlobalPOST($_REQUEST['imagename']);
$product_color=secureSuperGlobalPOST($_REQUEST['product_color']);
$dateceated=date("Y-m-d G:i:s");
 
$domain=$_SERVER['HTTP_HOST'];
if($domain=='localhost'){ 	
$varlocs='';
$bingo='../';
$linktopublish='';
}else{	
$varlocs='';
$bingo='../../';
$linktopublish='';
}  

$dateceated=date("Y-m-d G:i:s");


//////////////********** FILE UPLOAD *****************************////
$filename = $_FILES["uploadphoto"]["name"];
$today =  date("FjYgia");   
 

	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filetypeext=str_replace('.','',$file_ext);
	$filesize = $_FILES["uploadphoto"]["size"];
	$allowed_file_types = array('.jpg','.jpeg');	
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
 
   
 			$newpath=$bingo.'imuploads/dpload/'.$masterUserId.'/'.$productid;
 			$newpath_n=$linktopublish.'imuploads/dpload/'.$masterUserId.'/'.$productid;
 			$newpath_thumbs=$bingo.'imuploads/dpload/'.$masterUserId.'/'.$productid.'/thumbs';
			$newpath_thumbs_n=$linktopublish.'imuploads/dpload/'.$masterUserId.'/'.$productid.'/thumbs';
			$newpath_large=$bingo.'imuploads/dpload/'.$masterUserId.'/'.$productid.'/large';
			$newpath_large_n=$linktopublish.'imuploads/dpload/'.$masterUserId.'/'.$productid.'/large';
				
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
		$newfiletopuplaod=$newpath.'/'. $newfilename;
	 
	//echo '1-SSS';
		if (file_exists($foldersd.'/'. $newfilename))
		{
			// file already exists error
			//echo '2-SSS';
			//echo "You have already uploaded this file.";
		}
		else
		{
			//echo '3-SSS';		
		$myorigionalfile= $newpath."/" . $newfilename;
		$myorigionalfile_n= $newpath_n."/" . $newfilename;
		//echo $myorigionalfile;
			if(move_uploaded_file($_FILES["uploadphoto"]["tmp_name"],$myorigionalfile)){
				 
				 /////////////////////////////////////////RESIZE///////////////////////////////////////
			 
					$tigo=$newfilename;
					$percent = 0.75;
					$percentthumb = 0.5;
					
					  list($width, $height, $type, $attr) = getimagesize($myorigionalfile);
		 $dest=$newpath_large.'/'.$newfilename;
		 $dest_n=$newpath_large_n.'/'.$newfilename;
		 $desthumb= $newpath_thumbs.'/'.$newfilename;
		  $desthumb_n= $newpath_thumbs_n.'/'.$newfilename;
		 
		

		  $aspectration= $width / $height;
		
		
		 $new_width=500*$percent;
		 $new_height=500 ;
		 
		 
		 $new_width_thumb=300*$aspectration; 
		 $new_height_thumb=300 ;
		    
		create_thumb($myorigionalfile,$dest,$new_width, $new_height);
		create_thumb($myorigionalfile,$desthumb,$new_width_thumb, $new_height_thumb);
		
		
				 /////////////////////////////////////////RESIZE///////////////////////////////////////	
				$imageuploaded=1;
			 
$olgaquery="INSERT INTO product_image SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', productid='$productid', imagename='$myorigionalfile_n',imagename_lr='$dest_n',imagename_tr='$desthumb_n', product_color='$product_color'";
 $myquery=$conn->query($olgaquery);  
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
		unlink($_FILES["uploadphoto"]["tmp_name"]);
	}

 		
		 
	
//////////////********** FILE UPLOAD *****************************////
 
echo "<script>window.location=\"../ediproductmaster.php?toeditdata=$productid\";</script>";?>