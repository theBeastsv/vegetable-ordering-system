<?php error_reporting(E_ALL & ~E_NOTICE); 
ob_start(); 
set_time_limit(5625); 
	$timezone = "Asia/Kolkata"; 
	date_default_timezone_set ($timezone);
	$domain=$_SERVER['HTTP_HOST'];
$_SESSION['societyId']=1313; 
 
 define('PRJ_HEADING', 'NEW PROJECT');
include("coredb.php");
include("master_backend.php");
  
  	try {
    $conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS);
 		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	 	$conn->query("SET sql_mode = ''");
	 
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

 function secureSuperGlobalPOST( $key)
    {    
         if(is_array($key)){
		$valrets= $value;
		}else{
	 $return = '';
    for($i = 0; $i < strlen($key ); ++$i) {
        $char = htmlspecialchars($key[$i], ENT_QUOTES);
        $ord = ord($char);
        if($char !== "'" && $char !== "\"" && $char !== '\\' && $ord >= 32 && $ord <= 126)
            $return .= $char;
        else
            $return .= '';
    }
   $valrets= $return;  
		}
		
		return $valrets;
    }

function ipCheck() {
	/*
	This function will try to find out if user is coming behind proxy server. Why is this important?
	If you have high traffic web site, it might happen that you receive lot of traffic
	from the same proxy server (like AOL). In that case, the script would count them all as 1 user.
	This function tryes to get real IP address.
	Note that getenv() function doesn't work when PHP is running as ISAPI module
	*/
		if (getenv('HTTP_CLIENT_IP')) {
			$ip = getenv('HTTP_CLIENT_IP');
		}
		elseif (getenv('HTTP_X_FORWARDED_FOR')) {
			$ip = getenv('HTTP_X_FORWARDED_FOR');
		}
		elseif (getenv('HTTP_X_FORWARDED')) {
			$ip = getenv('HTTP_X_FORWARDED');
		}
		elseif (getenv('HTTP_FORWARDED_FOR')) {
			$ip = getenv('HTTP_FORWARDED_FOR');
		}
		elseif (getenv('HTTP_FORWARDED')) {
			$ip = getenv('HTTP_FORWARDED');
		}
		else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
function rand_string( $length ) {
	$chars = "ADEFGHRSTUXYZ";	// IJKLMNOPQ VW BC NOT INCLUDED

	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
}


function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}
function gettheage($birthday){
  list($year,$month,$day) = explode("-",$birthday);
  $age= date_diff(date_create($birthday), date_create('now'))->y;
  return $age;
}	



function show_selecttable_paging_grop($debug,$limitstring,$conn,$table,$fields,$searchstring,$limit,$orderby,$orderstring,$groupby,$grpId) {
 	global $conn;
	if($orderby==0){
		 if($grpId==2){
			 $desrc=' GROUP BY '.$groupby;
		 }else{
		$desrc='rowId DESC';
		 }
		}else{
			$desrc=$orderstring;
		}
	 if($limit==0){
		 if($grpId==2){
			  $sql = 'SELECT '.$fields.' FROM '.$table.' '.$searchstring.' GROUP BY '.$groupby;
			 }else{
   			 $sql = 'SELECT '.$fields.' FROM '.$table.' '.$searchstring.' ORDER BY '.$desrc;
			 }
	 }
	 if($limit>1){
		  if($grpId==2){
		 $sql = 'SELECT '.$fields.' FROM '.$table.' '.$searchstring.'   GROUP BY '.$groupby.' LIMIT '.$limit; 
		  }else{
			  $sql = 'SELECT '.$fields.' FROM '.$table.' '.$searchstring.'   ORDER BY '.$orderstring.' LIMIT '.$limit; 
			  }
		  
		  
		 }
	if($limit==1){
		 if($grpId==2){
		  $sql = 'SELECT '.$fields.' FROM '.$table.' '.$searchstring.'  GROUP BY '.$groupby .'  '.$limitstring ; }else{
			 $sql = 'SELECT '.$fields.' FROM '.$table.' '.$searchstring.'  ORDER BY '.$orderstring .'  '.$limitstring ;
			 }
		 }
	 if($debug==1){
		 echo $sql;
		 }
		$myquery=$conn->query($sql);
		 
		 return  $myquery->fetchAll()  ;
} 
function show_selecttable_paging($debug,$limitstring,$conn,$table,$fields,$searchstring,$limit,$orderby,$orderstring) {
 	global $conn;
	if($orderby==0){
		$desrc='rowId DESC';
		}else{
			$desrc=$orderstring;
		}
	 if($limit==0){
    $sql = 'SELECT '.$fields.' FROM '.$table.' '.$searchstring.' ORDER BY '.$desrc;
	 }
	 if($limit>1){
		 $sql = 'SELECT '.$fields.' FROM '.$table.' '.$searchstring.'   ORDER BY '.$orderstring.' LIMIT '.$limit; 
		 }
	if($limit==1){
		 $sql = 'SELECT '.$fields.' FROM '.$table.' '.$searchstring.'  ORDER BY '.$orderstring .'  '.$limitstring ; 
		 }
	 if($debug==1){
		 echo $sql;
		 }
		$myquery=$conn->query($sql);
		 
		 return  $myquery->fetchAll()  ;
} 

/*function show_selecttable($debug,$limitstring,$conn,$table,$fields,$searchstring,$limit,$orderby,$orderstring) {
	echo $debug;
 	global $conn;
	if($orderby==0){
		$desrc='rowId DESC';
		}else{
			$desrc=$orderstring;
		}
	 if($limit==0){
    $sql = 'SELECT '.$fields.' FROM '.$table.' '.$searchstring.' ORDER BY '.$desrc;
	 }else{
		 $sql = 'SELECT '.$fields.' FROM '.$table.' '.$searchstring.' ORDER BY '.$orderby.' LIMIT '.$limit; 
		 }
	 if($debug==1){
		 echo $sql;
		 }
		$myquery=$conn->query($sql);
		 
		 return  $myquery->fetchAll()  ;
}*/
function show_selecttable($debug,$limitstring,$conn,$table,$fields,$searchstring,$limit,$orderby,$orderstring) {
 	global $conn;
	if($orderby==0){
		$desrc='rowId DESC';
		}else{
			$desrc=$orderstring;
		}
	 if($limit==0){
    $sql = 'SELECT '.$fields.' FROM '.$table.' '.$searchstring.' ORDER BY '.$desrc;
	 }else{
		 $sql = 'SELECT '.$fields.' FROM '.$table.' '.$searchstring.' ORDER BY '.$orderstring.' LIMIT '.$limit; 
		 }
	  if($debug==1){
		  echo $sql;
		  }
		$myquery=$conn->query($sql);
		 
		 return  $myquery->fetchAll()  ;
} 

function  showall_linkswiththispage($page_dbs_id){
	 $mcvshow= show_selecttable($debug,$limitstring,$conn,'page_dbs','rowId,pagename_links','WHERE rowId=\''.$page_dbs_id.'\'',$limit,1,' rowId ASC');
	 $thilinks='';
		foreach( $mcvshow as $ssgbw ) {
			$pagename_links=$ssgbw['pagename_links'];
 			 	$baba=explode(',',$pagename_links);
				while (list(, $value) = each ($baba)) {
							$getallbals=explode('|',$value);
							 
							   $thilinks= $thilinks.'<li><i class="'.$getallbals[2].'"></i><a href="'.$getallbals[0].'" style="padding-left:2px">'.ucwords($getallbals[1]).'</a></li>';
							 
					}
					

		}
	echo $thilinks;
	}	

function filepageHeaders($pgIds){
	 $mcvshow= show_selecttable($debug,$limitstring,$conn,'page_dbs','rowId,pageHeading','WHERE rowId=\''.$pgIds.'\'',$limit,1,' rowId ASC');
		foreach( $mcvshow as $ssgbw ) {
			$sdcpageHeading=$ssrow['pageHeading'];
 			 	
		}
		return $sdcpageHeading;
		}
		


function basic_paging($showlisttype,$pageNum,$rowsPerPage,$numrows,$navigatelink,$pagename,$align)
			{
		$maxPage = ceil($numrows/$rowsPerPage); 
		//echo "SHARAD $maxPage= $numrows/$rowsPerPage ";
		$self = $_SERVER['PHP_SELF']; 	
		if(($showlisttype=='') || ($showlisttype==1)){	  
		// how many pages we have when using paging? 
		
		if ($pageNum > 1) 
		{ 
		$page = $pageNum - 1; 
		$prev = '<li class="active"><a href="'.$pagename.'?page='.$page.''.$navigatelink.'">Prev</a></li>';  
		
		$first = '<li class="active"><a href="'.$pagename.'?page=1'.$navigatelink.'">First</a></li>'; 
		}  
		else 
		{ 
		$prev  = '<li><a href="javascript:void(0)" style="cursor:default">First</a></li>' ;     // we're on page one, don't enable 'previous' link 
		$first = '<li><a href="javascript:void(0)" style="cursor:default">Prev</a></li>'; // nor 'first page' link 
		} 
		if ($pageNum < $maxPage) 
		{ 
		$page = $pageNum + 1; 
		$next ='<li class="active"><a href="'.$pagename.'?page='.$page.''.$navigatelink.'">Next</a></li>'  ; 
		
		$last = '<li class="active"><a href="'.$pagename.'?page='.$maxPage.''.$navigatelink.'">Last</a></li>' ; 
		}  
		else 
		{ 
		$next = '<li><a href="javascript:void(0)" style="cursor:default">Next</a></li>';      // we're on the last page, don't enable 'next' link 
		$last = '<li><a href="javascript:void(0)" style="cursor:default">Last</a></li>'; // nor 'last page' link 
		} 
		$pagelink='  <div class="w100 categoryFooter">
<div class="pagination pull-left no-margin-top">
<ul class="pagination no-margin-top">'.$first.' '.$prev.' '.$next.' '.$last.' </ul>
</div>
<div class="pull-right pull-right col-sm-4 col-xs-12 no-padding text-right text-left-xs">
<p> Showing '.$pageNum.' of '.$maxPage.' </p>
</div>
</div> ';
		}else{
			if ($pageNum > 1) 
		{ 
		$page = $pageNum - 1; 
		$prev = '<li><a href="'.$pagename.'?page='.$page.''.$navigatelink.'"><i class="fa fa-angle-left"></i></a></li>';  
		
		$first = '<li><a href="'.$pagename.'?page=1'.$navigatelink.'"><i class="fa fa-angle-double-left"></i></a></li>'; 
		}  
		else 
		{ 
		$prev  = '<li><a href="javascript:void(0)" style="cursor:default; text-decoration:none;
    color: #ccc;"><i class="fa fa-angle-left"></i></a></li>' ;     // we're on page one, don't enable 'previous' link 
		$first = '<li><a href="javascript:void(0)" style="cursor:default; text-decoration:none;
    color: #ccc;"><i class="fa fa-angle-double-left"></i></a></li>'; // nor 'first page' link 
		} 
		if ($pageNum < $maxPage) 
		{ 
		$page = $pageNum + 1; 
		$next ='<li><a href="'.$pagename.'?page='.$page.''.$navigatelink.'"><i class="fa fa-angle-right"></i></a></li>'  ; 
		
		$last = '<li><a href="'.$pagename.'?page='.$maxPage.''.$navigatelink.'"><i class="fa fa-angle-double-right"></i></a></li>' ; 
		}  
		else 
		{ 
		$next = '<li><a href="javascript:void(0)" style="cursor:default; text-decoration:none;
    color: #ccc;"><i class="fa fa-angle-right"></i></a></li>';      // we're on the last page, don't enable 'next' link 
		$last = '<li><a href="javascript:void(0)" style="cursor:default; text-decoration:none;
    color: #ccc;" ><i class="fa fa-angle-double-right"></i></a></li>'; // nor 'last page' link 
		} 
		$pagelink='
		 <div class="w100 categoryFooter">
<div class="pagination pull-left no-margin-top">
<ul class="pagination no-margin-top">'.$first.' '.$prev.' '.$next.' '.$last.' </ul>
</div>
<div class="pull-right pull-right col-sm-4 col-xs-12 no-padding text-right text-left-xs">
<p> Showing '.$pageNum.' of '.$maxPage.' </p>
</div>
</div>  ';
			
			}
				return $pagelink;
	 }
 	
function create_thumb($src,$dest,$desired_width = false, $desired_height = false)
{
    /*If no dimenstion for thumbnail given, return false */
    if (!$desired_height&&!$desired_width) return false;
    $fparts = pathinfo($src);
    $ext = strtolower($fparts['extension']);
    /* if its not an image return false */
    if (!in_array($ext,array('gif','jpg','png','jpeg'))) return false;

    /* read the source image */
    if ($ext == 'gif')
        $resource = imagecreatefromgif($src);
    else if ($ext == 'png')
        $resource = imagecreatefrompng($src);
    else if ($ext == 'jpg' || $ext == 'jpeg')
        $resource = imagecreatefromjpeg($src);
    
    $width  = imagesx($resource);
	$height = imagesy($resource);
/*
	$width  = imagesx($source_image);
    $height = imagesy($source_image);
	*/
    /* find the "desired height" or "desired width" of this thumbnail, relative to each other, if one of them is not given  */
    if(!$desired_height) $desired_height = floor($height*($desired_width/$width));
    if(!$desired_width)  $desired_width  = floor($width*($desired_height/$height));
  
    /* create a new, "virtual" image */
    $virtual_image = imagecreatetruecolor($desired_width,$desired_height);
  
    /* copy source image at a resized size */
    imagecopyresized($virtual_image,$resource,0,0,0,0,$desired_width,$desired_height,$width,$height);
    
    /* create the physical thumbnail image to its destination */
    /* Use correct function based on the desired image type from $dest thumbnail source */
    $fparts = pathinfo($dest);
    $ext = strtolower($fparts['extension']);
    /* if dest is not an image type, default to jpg */
    if (!in_array($ext,array('gif','jpg','png','jpeg'))) $ext = 'jpg';
    $dest = $fparts['dirname'].'/'.$fparts['filename'].'.'.$ext;
    
    if ($ext == 'gif')
        imagegif($virtual_image,$dest);
    else if ($ext == 'png')
        imagepng($virtual_image,$dest,1);
    else if ($ext == 'jpg' || $ext == 'jpeg')
        imagejpeg($virtual_image,$dest,100);
    
    return array(
        'width'     => $width,
        'height'    => $height,
        'new_width' => $desired_width,
        'new_height'=> $desired_height,
        'dest'      => $dest
    );
}

	
function unsetme(){
	
	$_SESSION['my_userIdbrm']='';
	$_SESSION['my_first_brm']='';
	$_SESSION['my_email_brm']='';
	$_SESSION['my_mobile_brm']='';
	
			
	unset($_SESSION['my_userIdbrm']);
	unset($_SESSION['my_first_brm']);
	unset($_SESSION['my_email_brm']);
	unset($_SESSION['my_mobile_brm']); 
	
	}
			?>