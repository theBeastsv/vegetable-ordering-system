<? session_start();
include("../config/config.php");

$curvalue=$_REQUEST['curvalue'];
$dixv=$_REQUEST['ditoreload'];

if($dixv=='laodstate'){
	$dixvs='claodccity';
	$bbload='billingstate';
	}else{
	$dixvs='lvaodccity';
	$bbload='shippingstate';	
		}

$thcbel='<select id="'.$bbload.'" name="'.$bbload.'" class="form-control" onChange="loadCityChange_sel(this.value,\''.$dixvs.'\')"><option value="">Select State</option>';
$mfshow= show_selecttable($debug,$limitstring,$conn,'ud_states','rowId,name,country_id','WHERE country_id=\''.$curvalue.'\'',$limit,1,' rowId ASC');
		foreach( $mfshow as $sxbw ) { 
			$name			=$sxbw['name'];
			$rowId			=$sxbw['rowId'];
			$thcbel=$thcbel.'<option value="'.$rowId.'">'.$name.'</option>'; 
			}
$thcbel=$thcbel.' </select>';			
echo $thcbel;			
?>