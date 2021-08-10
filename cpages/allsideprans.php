allsideprans  <aside class="col-md-3 sidebar shop-sidebar">
 <form class="form-inline" action="showcategory.php" method="post" role="form">
<div class="panel panel-default"> 
<input name="pins" id="pins" type="hidden" value="<?=$pins;?>">
<input name="paxs" id="paxs" type="hidden" value="<?=$paxs;?>">
<input name="masterbran" id="masterbran" type="hidden" value="">
<input name="sto" id="sto" type="hidden" value="<?=$sto;?>">
<input name="cateId" id="cateId" type="hidden" value="<?=$cateId;?>">
<input name="subs" id="subs" type="hidden" value="<?=$subs;?>">
                            <div class="widget">
                                <div class="filter-group-widget">
                                    <div class="panel-group" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="brandFilter-header">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#brandFilter" aria-expanded="true" aria-controls="brandFilter">
                                                        Category Filter
                                                        <span class="panel-icon"></span>
                                                    </a>
                                                </h4>
                                            </div><!-- End .panel-heading -->
                                            <div id="brandFilter" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="brandFilter-header">
                                                <div class="panel-body" style="height:120px; overflow:auto">
                                                    <ul class="filter-brand-list">
                                                     <?
	$bsbs=getCategory_side(0);
	echo $bsbs;
    ?>
                                                    </ul>
                                                </div><!-- End .panel-body -->
                                            </div><!-- End .panel-collapse -->
                                        </div><!-- End .panel -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="priceFilter-header">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#priceFilter" aria-expanded="true" aria-controls="priceFilter">
                                                        Price Filter
                                                        <span class="panel-icon"></span>
                                                    </a>
                                                </h4>
                                            </div><!-- End .panel-heading -->
                                            <div id="priceFilter" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="priceFilter-header">
                                                <div class="panel-body">
                                                    <div class="filter-price">
                                                       <div id="filter-range-details" class="row" style="max-height:190px; overflow:auto">  <? 
 
 $ranges = array(); 
$step = 500; 
$allarray=count($prices);
if($allarray>10){
	$step = 5000; 
	}else{
	$step = 1000; 
		}
if($allarray>1){
foreach($prices as $p) {
    $index = floor($p / $step);
    
    if(isset($ranges[$index]))
        $ranges[$index]++;
    else
        $ranges[$index] = 1;
} 
}else{
	$ranges[$index] = 1;
	}
$output='';


for($i = 0; $i <= max(array_keys($ranges)); $i++) {
	
	if($ranges[$i]>0){
		$minpric=($step * $i);
		$maxprice=($step * ($i + 1));
		
		if($i==$sto){
			$usn='checked';
			}else{
			$usn='';
			}
		$ytms= ($step * $i). '+' . ($step * ($i + 1));
$output =$output. '<label><input type="radio" name="priceval" value="'.$i.'" onclick="makemereload(\''.$minpric.'\',\''.$maxprice.'\',\''.$i.'\')" '.$usn.'>
&nbsp;<i class="fa fa-rupee"></i> ' . ($step * $i) . ' - ' . ($step * ($i + 1)) . '(' . $ranges[$i] . ')</label>
<br> ';
	}
}  
 echo $output;
 
 if(($sto=='99999') || ($sto=='')){
			$usn='checked';
			}else{
			$usn='';
			}
			
 ?>     
<input type="radio" name="priceval" value="99999" <?=$usn;?>  onclick="makemereload(0,0,99999)"  />
Don't know</label>


                                                             
                                                        </div><!-- End #filter-range-details -->
                                                      
                                                    </div><!-- End .filter-price -->
                                                </div><!-- End .panel-body -->
                                            </div><!-- End .panel-collapse -->
                                        </div><!-- End .panel -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="colorFilter-header">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#colorFilter" aria-expanded="true" aria-controls="colorFilter">
                                                   Brand
                                                    <span class="panel-icon"></span>
                                                    </a>
                                                </h4>
                                            </div><!-- End .panel-heading -->
                                            <div id="" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="colorFilter-header">
                                                <div class="panel-body">
                                                    <div class="">
                                                        <div style="max-height:180px; overflow:auto"><? 
$ammvalus='';
if(count($uniquebrand)>0){
while (list($key, $value) = each ($uniquebrand)) {
	if($value!=''){
	if($key==0){
 		$ammvalus=$value;
	}else{
		$ammvalus=$ammvalus.','.$value;
		}
	}
}

	$stgbal = "SELECT * FROM brandsmaster WHERE rowId IN  ($ammvalus ) ORDER BY brandname ASC"; 
    $mssxrsy=$conn->query($stgbal);
	$myfsdara= $mssxrsy->fetchAll()  ; 
		foreach( $myfsdara as $srivna ) {
			$rsrowId=$srivna['rowId'];
			$rsrobrandsmasterwId=$srivna['brandname'];
			if($rsrowId==$brandmaster){
				$gshn='checked';
				}else{
				$gshn='';
				}
echo '<div><input type="radio" name="brandmaster" '.$gshn.' onClick="chngbrnd(\''.$rsrowId.'\');" id="brandmaster" value="'.$rsrowId.'"/>&nbsp;'.$rsrobrandsmasterwId.'</div>';
		}
}else{
	echo '<div> 
<input type="radio" name="brandmaster" '.$gshn.' onClick="chngbrnd(\''.$rsrowId.'\');" id="brandmaster" value="'.$rsrowId.'" checked disabled/>&nbsp;All Available Brand</div>';
	}
?>
                                                              
                                                        </div><!-- End .row -->
                                                    </div><!-- End .filter-color-container -->
                                                </div><!-- End .panel-body -->
                                            </div><!-- End .panel-collapse -->
                                        </div><!-- End .panel -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="sizeFilter-header">
                                                <label>
 <input name="" type="button" onClick="makemereform();" value="Apply Filter">
 </label>
                                            </div><!-- End .panel-heading -->
                                             
                                        </div><!-- End .panel -->
                                    </div><!-- End .panel-group -->
                                </div><!-- End .filter-widget -->
                            </div><!-- End .widget -->
                            </form>
                        </aside>