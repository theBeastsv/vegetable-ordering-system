<? session_start();
include("../config/config.php");

$curvalue=$_REQUEST['curvalue'];
$dixv=$_REQUEST['dixv'];

if($dixv=='bill_states'){
	$dixvs='bill_citys';
	}else{
	$dixvs='shipp_citys';	
		}

$thcbel='<select id="states" name="states" class="form-control" onChange="loadCityChange(this.value)"><option value="">Select State</option>';
$mfshow= show_selecttable($debug,$limitstring,$conn,'ud_states','rowId,name,country_id','WHERE country_id=\''.$curvalue.'\'',$limit,1,' rowId ASC');
		foreach( $mfshow as $sxbw ) { 
			$name			=$sxbw['name'];
			$rowId			=$sxbw['rowId'];
			$thcbel=$thcbel.'<option value="'.$rowId.'">'.$name.'</option>'; 
			}
$thcbel=$thcbel.' </select>';			
echo $thcbel;			
?>