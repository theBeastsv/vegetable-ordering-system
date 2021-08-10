<? session_start();
include("../config/config.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['my_userIdbrm'];
$cs=secureSuperGlobalPOST($_REQUEST['cs']);

$marthtoshow= show_selecttable($debug,$limitstring,$conn,'discount_master','*','WHERE rowId=\''.$cs.'\'',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			$start_date			=	$row['start_date'];
			$ending_date			=	$row['ending_date'];
			$discount_type			=	$row['discount_type'];
			$discount_rate			=	$row['discount_rate'];
			if($discount_type=='1'){
				$sigma='<option value="">Select One</option> <option value="1" selected>Percentage</option> <option value="2">Flat</option>';
				}
			if($discount_type=='2'){
				$sigma='<option value="">Select One</option> <option value="1" >Percentage</option> <option value="2"selected>Flat</option>';
				}
			
			
			echo '<div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Minimum Order
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Minimum Order" class="form-control  validate[required] text-input" id="minimum_order" name="minimum_order">
											</div>
										</div><div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Start Date
											</label>
											<div class="col-sm-3">
												
<div class="input-group"><input class="form-control validate[required] text-input date-picker" type="text" data-date-viewmode="years" data-date-format="yyyy-mm-dd"  id="start_date" name="start_date" value="'.$start_date.'" readonly><span class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div>
											</div>
											<div class="col-sm-3"><label for="form-field-1" class="col-sm-12 control-label">
												End Date
											</label>
											</div>
											<div class="col-sm-3">
											<div class="input-group"><input class="form-control validate[required] text-input date-picker_future" type="text" data-date-viewmode="years" data-date-format="yyyy-mm-dd"  id="end_date" name="end_date" value="'.$ending_date.'" readonly><span class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div>
											</div>
										</div>
										<div class="form-group">
											<label for="form-field-1" class="col-sm-2 control-label">
												Discount Rate
											</label>
											<div class="col-sm-3">
												<input type="text" placeholder="Discount Rate" class="form-control  validate[required,custom[number],min[1],max[100]] text-input" id="discount_rate" name="discount_rate" value="'.$discount_rate.'" readonly>
											</div>
											<div class="col-sm-3">
											<label for="form-field-1" class="col-sm-12 control-label">
												Discount Type
											</label>
											</div>
											<div class="col-sm-3">
											<div class="input-group"> <input name="discount_type" type="hidden" id="discount_type" value="'.$discount_type.'">
		<select disabled class="form-control  validate[required] text-input" id="xdiscount_type" name="xdiscount_type">'.$sigma.'</select></div>
											</div>
										</div> ';
 		}


?>