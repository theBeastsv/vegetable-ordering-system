<?
function getCategory_lower($catrowIde){
	global $conn;
	 $mcxvshow= show_selecttable($debug,$limitstring,$conn,'product_category','*','WHERE parent_category=\''.$catrowIde.'\'',$limit,1,' rowId ASC');
$maxrita= '<ul class="dropdown-menu" role="menu">';
		foreach( $mcxvshow as $ssxgbw ) {
			$categoxry_name=$ssxgbw['category_name'];
			$catrsowIde=$ssxgbw['rowId'];
			$parentlevel=$ssxgbw['parentlevel'];
			
	$xsqlssxgbw = "SELECT * FROM product_category WHERE parent_category='$catrsowIde'";
   	$myquerxsqlxy=$conn->query($xsqlssxgbw);
	$mydarxa= $myquerxsqlxy->fetchAll()  ;
 	$rows_founds = $myquerxsqlxy->rowCount();
	if($rows_founds==0){
		$maxrita=$maxrita.' <li><a href="laodcatego.php?catId='.$catrsowIde.'">'.$categoxry_name.' </a> </li>';
		}else{
			$catrsowIde=$ssxgbw['rowId'];
	 		$maxrita=$maxrita.' <li class="dropdown">
                                    <a href="#">'.$categoxry_name.'<span class="angle"></span></a> ';
									$mytintas='';
				 $mytintas=getCategory_lower($catrsowIde);						
									
			$maxrita=$maxrita.''.$mytintas.' </li>';
		}
			
		}
		$maxrita=$maxrita.'</ul>';
	
	return $maxrita;	
	
	}
function getCategory($mythour){
	global $conn;
	 $mcvshow= show_selecttable($debug,$limitstring,$conn,'product_category','*','WHERE parent_category=\''.$mythour.'\'',$limit,1,' rowId ASC');
	
		foreach( $mcvshow as $ssgbw ) {
			$category_name=$ssgbw['category_name'];
			$catrowIde=$ssgbw['rowId'];
			$parentlevel=$ssgbw['parentlevel'];
			
	$xsql = "SELECT * FROM product_category WHERE parent_category='$catrowIde'";
   	$myquerxsqly=$conn->query($xsql);
	$mydarxa= $myquerxsqly->fetchAll()  ;
 	$rows_found = $myquerxsqly->rowCount();
	if($rows_found==0){
		$marrita=$marrita.' <li>
                                    <a href="laodcatego.php?catId='.$catrowIde.'">'.strtoupper( $category_name  ).'<span class="angle"></span></a> </li>';
		}else{
	
			$marrita=$marrita.' <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.strtoupper( $category_name  ).'<span class="angle"></span></a>';
				$mytintas=getCategory_lower($catrowIde);						
									
			$marrita=$marrita.''.$mytintas.'</li>';
		}
			
		}
	
	
	return $marrita;	
	}
	
	
function getCategory_lower_side($catrowIde){
	global $conn;
	 $mcxvshow= show_selecttable($debug,$limitstring,$conn,'product_category','*','WHERE parent_category=\''.$catrowIde.'\'',$limit,1,' rowId ASC');
$maxrita= '<ul>';
		foreach( $mcxvshow as $ssxgbw ) {
			$categoxry_name=$ssxgbw['category_name'];
			$catrsowIde=$ssxgbw['rowId'];
			$parentlevel=$ssxgbw['parentlevel'];
			
	$xsqlssxgbw = "SELECT * FROM product_category WHERE parent_category='$catrsowIde'";
   	$myquerxsqlxy=$conn->query($xsqlssxgbw);
	$mydarxa= $myquerxsqlxy->fetchAll()  ;
 	$rows_founds = $myquerxsqlxy->rowCount();
	if($rows_founds==0){
		$maxrita=$maxrita.' <li><a href="laodcatego.php?catId='.$catrsowIde.'">'.$categoxry_name.' </a> </li>';
		}else{
			$catrsowIde=$ssxgbw['rowId'];
	 		$maxrita=$maxrita.' <li>
                                    <a href="#">'.$categoxry_name.'</a> ';
									$mytintas='';
				// $mytintas=getCategory_lower_side($catrsowIde);						
									
			$maxrita=$maxrita.''.$mytintas.' </li>';
		}
			
		}
		$maxrita=$maxrita.'</ul>';
	
	return $maxrita;	
	
	}
function getCategory_side($mythour){
	global $conn;
	 $mcvshow= show_selecttable($debug,$limitstring,$conn,'product_category','*','WHERE parent_category=\''.$mythour.'\'',$limit,1,' rowId ASC');
	
		foreach( $mcvshow as $ssgbw ) {
			$category_name=$ssgbw['category_name'];
			$catrowIde=$ssgbw['rowId'];
			$parentlevel=$ssgbw['parentlevel'];
			
	$xsql = "SELECT * FROM product_category WHERE parent_category='$catrowIde'";
   	$myquerxsqly=$conn->query($xsql);
	$mydarxa= $myquerxsqly->fetchAll()  ;
 	$rows_found = $myquerxsqly->rowCount();
	if($rows_found==0){
		$marrita=$marrita.' <li>
                                    <a href="laodcatego.php?catId='.$catrowIde.'">'.strtoupper( $category_name  ).'<span class="angle"></span></a> </li>';
		}else{
	
			$marrita=$marrita.' <li>
                                    <a href="#">'.strtoupper( $category_name  ).'</a>';
				$mytintas=getCategory_lower_side($catrowIde);						
									
			$marrita=$marrita.''.$mytintas.'</li>';
		}
			
		}
	
	
	return $marrita;	
	}
?>