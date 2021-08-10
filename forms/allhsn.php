<? session_start();
include("../config/config.php");

$curvalue=$_REQUEST['curvalue'];
$dixv=$_REQUEST['dixv'];

 
$uhow= show_selecttable($debug,$limitstring,$conn,'product_category','rowId,hsn_code,hsn_tax','WHERE rowId=\''.$curvalue.'\'',$limit,1,' rowId ASC');
		foreach( $uhow as $suhow ) { 
			$hsn_code			=$suhow['hsn_code'];
			$hsn_tax			=$suhow['hsn_tax'];
			$rowId			=$suhow['rowId'];
			$thbbel=$thbbel.'<input type="text" placeholder="HSN CODE" class="form-control  validate[required] text-input" id="hsn_code" readonly="readonly" name="hsn_code" value="'.$hsn_code.'"><input name="hsn_tax" id="hsn_tax" type="hidden" value="'.$hsn_tax.'" />'; 
			} 			
echo $thbbel;			
?>