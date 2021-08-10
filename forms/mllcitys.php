<? session_start();
include("../config/config.php");

$curvalue=$_REQUEST['curvalue'];
$dixv=$_REQUEST['dixv'];



$thbbel='<select id="mastercity" name="mastercity" class="form-control"><option value="">Select City</option>';
$uhow= show_selecttable($debug,$limitstring,$conn,'ud_cities','rowId,name,state_id','WHERE state_id=\''.$curvalue.'\'',$limit,1,' rowId ASC');
		foreach( $uhow as $suhow ) { 
			$name			=$suhow['name'];
			$rowId			=$suhow['rowId'];
			$thbbel=$thbbel.'<option value="'.$rowId.'">'.$name.'</option>'; 
			}
$thbbel=$thbbel.' </select>';			
echo $thbbel;			
?>