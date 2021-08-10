<?php error_reporting(E_ALL & ~E_NOTICE); 
ob_start(); 
set_time_limit(5625); 
	$timezone = "Asia/Kolkata"; 
	date_default_timezone_set ($timezone);
	$domain=$_SERVER['HTTP_HOST'];
 	define('CURRENCY_DEFAULT', '<i class="fa fa-inr" aria-hidden="true"></i>
');
define('WEBSITE_NAME_MASTER', 'VegFru: for special people like you');


include("coredb.php");

try {
    $conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS);
 		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	 
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

$usjd=1;
 $mcgow= show_selecttable($debug,$limitstring,$conn,'comy_master','*','WHERE rowId=\''.$usjd.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
		foreach( $mcgow as $gbw ) {
			define('COMP_NAMES', $gbw['company_name']); 
			define('COMP_NUMS', $gbw['contact_number']); 
			define('COMP_SUPNUM', $gbw['support_contact_number']);  
		    define('COMP_CHARGES', $gbw['commission_charge']);  
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
function rand_string_testString( $length ) {
	$chars = "ADEFGHRSTUXYZ23456789";	// IJKLMNOPQ VW BC NOT INCLUDED
 	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
}
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
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

function cut_string($string, $length, $dots = "...") {
    return (strlen($string) > $length) ? substr($string, 0, $length - strlen($dots)) . $dots : $string;
}
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

	

function unsetmeOnTime(){
	
	unset($_SESSION['unvalidate']);
		$_SESSION['KesOnUserId']='';
		$_SESSION['KesUseFname']='';
		$_SESSION['KesUseEmail']='';
		$_SESSION['KesUseMob']='';
		$_SESSION['KesUsemastercity']='';
		$_SESSION['KesUsestates']='';
		$_SESSION['KesUsecountrys']='';
	
			
	unset($_SESSION['KesOnUserId']);
	unset($_SESSION['KesUseFname']);
	unset($_SESSION['KesUseEmail']);
	unset($_SESSION['KesUseMob']); 
	unset($_SESSION['KesUsemastercity']);
	unset($_SESSION['KesUsestates']); 
	unset($_SESSION['KesUsecountrys']); 
	unset($_SESSION);
	}
	
function getBrandName($bingo){
	global $conn;
	 $mcgow= show_selecttable($debug,$limitstring,$conn,'brandsmaster','*','WHERE rowId=\''.$bingo.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
		foreach( $mcgow as $gbw ) {
			$brandname=$gbw['brandname'];
		}
		return $brandname;
	}	

function getShippingPrice($totalAMount){
	global $conn;
	$xsql = "SELECT * FROM shipping_price WHERE '$totalAMount' BETWEEN lowrange AND highrange";
	 
   	$myquerxsqly=$conn->query($xsql);
	$mDiscountshow= $myquerxsqly->fetchAll()  ;
 	$rows_found = $myquerxsqly->rowCount();
	 
	 if($rows_found>0){
		foreach( $mDiscountshow as $sDsxgbw ) {
			$shipping_price=$sDsxgbw['shipping_price'];
			
		}
	 }else{
		$shipping_price=0; 
		 }
		return $shipping_price;
	}	
function getdiscount_price($product_id){
	$today=date("Y-m-d");
	global $conn;
	$xsql = "SELECT * FROM discount_products WHERE product_id='$product_id' AND '$today' BETWEEN start_date AND end_date";
	 
   	$myquerxsqly=$conn->query($xsql);
	$mDiscountshow= $myquerxsqly->fetchAll()  ;
 	$rows_found = $myquerxsqly->rowCount();
	 
	 if($rows_found>0){
		foreach( $mDiscountshow as $sDsxgbw ) {
			$scheme_name=$sDsxgbw['scheme_name'];
			$rowId		=$sDsxgbw['rowId'];
			$discount_rate=$sDsxgbw['discount_rate'];
			$minimum_order=$sDsxgbw['minimum_order'];
			$discount_type=$sDsxgbw['discount_type'];
			
			$toreturn='1|'.$minimum_order.'|'.$discount_rate.'|'.$discount_type.'|'.$rowId;
		}
	 }else{
		 $toreturn='0|0|0|0|0';
		 }
		return $toreturn;
	}
function basic_paging($showlisttype,$pageNum,$rowsPerPage,$numrows,$navigatelink,$pagename,$align)
			{
		$maxPage = ceil($numrows/$rowsPerPage); 
		//echo "SHARAD $maxPage= $numrows/$rowsPerPage ";
		$self = $_SERVER['PHP_SELF']; 	
	 
		if ($pageNum > 1) 
		{ 
		$page = $pageNum - 1; 
		$prev = '<li> <a  class="page-numbers" aria-label="Previous"   href="'.$pagename.'?page='.$page.''.$navigatelink.'"><span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i>
</span></a></li>';  
		
		$first = '<li> <a href="'.$pagename.'?page=1'.$navigatelink.'" class="page-numbers"><span aria-hidden="true">
<i class="fa fa-angle-double-left" aria-hidden="true"></i>
</span></a></li>'; 
		}  
		else 
		{ 
		$prev  = ' <li><a href="javascript:void(0)" class="page-numbers"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a> </li>' ;     // we're on page one, don't enable 'previous' link 
		$first = ' <li><a href="javascript:void(0)" class="page-numbers"><i class="fa fa-angle-left" aria-hidden="true"></i></a> </li>'; // nor 'first page' link 
		} 
		if ($pageNum < $maxPage) 
		{ 
		$page = $pageNum + 1; 
		$next ='<li><a href="'.$pagename.'?page='.$page.''.$navigatelink.'" class="page-numbers"><span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i>
</span></a></li>'  ; 
		
		$last = '<li><a  class="page-numbers" href="'.$pagename.'?page='.$maxPage.''.$navigatelink.'"><span aria-hidden="true"><i aria-hidden="true" class="fa fa-angle-double-right"></i>
</span></a></li>' ; 
		}  
		else 
		{ 
		$next = '<li><a href="javascript:void(0)" class="page-numbers"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li> ';      // we're on the last page, don't enable 'next' link 
		$last = '<li><a href="javascript:void(0)" class="page-numbers"><i aria-hidden="true" class="fa fa-angle-double-right"></i></a></li>'; // nor 'last page' link 
		} 
		$pagelink='  <nav class="pagination-container">
                                <label>Showing '.$pageNum.' of '.$maxPage.'</label>
                                <ul class="pagination">
                                   '.$first.' '.$prev.' '.$next.' '.$last.' 
                                </ul>
                            </nav> ';
		 
				return $pagelink;
	 }
	 
	 
	?>