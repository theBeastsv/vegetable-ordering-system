function makemeselected(tupe,idTagId,valtorep,AllCount){
 	if(tupe=='color'){
		for(var r=0;r<=AllCount;r++){
 			$('#col'+r).prop('class', 'filter-color-box');
			}
		$('#col'+idTagId).prop('class', 'filter-color-box active');
		$('#color_dress').val(valtorep);
		}
	if(tupe=='size'){
		for(var r=0;r<=AllCount;r++){
 			$('#size'+r).prop('class', 'filter-size-box');
			}
		$('#size'+idTagId).prop('class', 'filter-size-box active');
		$('#xsize_dress').val(valtorep);
		}
	
	}
	
function itocheckout(){
	  if (confirm("Confirm Checkout!") == true) {
        window.location='prepcheckout.php';
    } else {
      return false;
    }
	  
	}
function savemyaddress(trans){
	 
	 $.ajax({
            type:"POST",
            url:'forms/saveaddress.php',
            data:$("#"+trans).serialize(),//only input
            success: function(response){
          	if(trans=='billingaddresx'){
			 $("#collapseOne").collapse('hide');
			  $("#collapseTwo").collapse('show');
			}
			if(trans=='shipping'){
			 $("#collapseTwo").collapse('hide');
			  $("#collapseThree").collapse('show');
			}
            }
        });
	
	}
	
function makemefinalsellable(){
	var mrp_purchase=$('#mrp_purchase').val();
	var hsn_tax=$('#hsn_tax').val();
	var commession_amount=$('#commession_amount').val();
	var includeInMrp=$('#includeInMrp').val();
	var finalAmounthsn_tax=(parseInt(hsn_tax) / 100 ) * parseInt(mrp_purchase);
	
	var finalAmountSellWithTax=parseInt(mrp_purchase)+parseInt(finalAmounthsn_tax);
	
 	var finalAmount=(parseInt(commession_amount) / 100 ) * parseInt(mrp_purchase);
	var nprint=parseInt(finalAmountSellWithTax)+parseInt(finalAmount);
	
	$('#taxAmountPayable').val(finalAmounthsn_tax);
	$('#mrp_sale').val(nprint);
	
	
	}
function getloadhsncode(myval){
	$('#binks').load('forms/allhsn.php', { language: "php" , "curvalue":myval,"crnrandom" :  Math.random()*99999} ).html('<span align=center><img src="assets/images/miniloading.gif"  /></span>');
	
	}
function loadCityChange	(myval){
	$('#laodccity').load('forms/mllcitys.php', { language: "php" , "curvalue":myval,"crnrandom" :  Math.random()*99999} ).html('<span align=center><img src="assets/images/miniloading.gif"  /></span>');
	}
function loadallstates(myval){
	$('#laodstate').load('forms/mllstates.php', { language: "php" , "curvalue":myval,"crnrandom" :  Math.random()*99999} ).html('<span align=center><img src="assets/images/miniloading.gif"  /></span>');
	}
function loadCityChange_sel(myval,ditoreload){
	$('#'+ditoreload).load('forms/dmllcitys.php', { language: "php" , "curvalue":myval,"ditoreload":ditoreload,"crnrandom" :  Math.random()*99999} ).html('<span align=center><img src="assets/images/miniloading.gif"  /></span>');
	}
function loadallstates_sel(myval,ditoreload){
	$('#'+ditoreload).load('forms/dmllstates.php', { language: "php" , "curvalue":myval,"ditoreload":ditoreload,"crnrandom" :  Math.random()*99999} ).html('<span align=center><img src="assets/images/miniloading.gif"  /></span>');
	}
	
function loaCityChange(curvalue,divtorename){
	var bill_countrys=$('#bill_countrys').val();
	$('#p'+divtorename).load('forms/allcitys.php', { language: "php" , "curvalue":curvalue,"dixv":divtorename,"crnrandom" :  Math.random()*99999} ).html('<span align=center><img src="assets/images/miniloading.gif"  /></span>');
	}
function loadaxllstate(curvalue,divtorename){
	$('#p'+divtorename).load('forms/allstates.php', { language: "php" , "curvalue":curvalue,"dixv":divtorename,"crnrandom" :  Math.random()*99999} ).html('<span align=center><img src="assets/images/miniloading.gif"  /></span>');
	
	}
function relaodcartmaster(){
 	$('#mycartsd').load('forms/inmycart.php', { language: "php" , "crnrandom" :  Math.random()*99999} ).html('<span align=center><img src="assets/images/miniloading.gif"  /></span>');
	}
function jistremcart(kartId){
	$('#masterconf').load('forms/removefronkar.php', { language: "php" ,"pid":kartId ,  "crnrandom" :  Math.random()*99999} ).html('<span align=center><img src="assets/images/miniloading.gif"  /></span>');
	relaodcartmaster();
	}	
	 
function makemeseltoCartOuter(prdId,xsize_dress,color_dress){ 
	var productId=prdId;
	 
	var quanti=1;
	if(quanti=='') {
		alert('Please select Quantity');
		return false;
		}else{
	$('#masterprdId'+prdId).load('forms/adprdcart.php', { language: "php" ,"pid":prdId ,"qid":quanti,"cpn":1,"si":xsize_dress,"co":color_dress,   "crnrandom" :  Math.random()*99999} ).html('<span align=center><img src="assets/images/miniloading.gif"  /></span>');
	relaodcartmaster();
		}
	}
function reloadminsgrid(){
	var mincoz		=$('#mincoz').val();
	var toshowmain	=$('#toshowmain').val();
	var ui=$('#ui').val();
	var catId=$('#catId').val();
	window.location="laodcatego.php?catId="+catId+"&mincoz="+mincoz+"&toshowmain="+toshowmain+'&ui='+ui;
	}	
function makemeseltoCart(prdId){
	var xsize_dress=$('#xsize_dress'+prdId).val();
	var color_dress=$('#color_dress'+prdId).val();
	var productId=$('#productId'+prdId).val();
	var quanti=$('#quanti'+prdId).val();
	if(quanti=='') {
		alert('Please select Quantity');
		return false;
		}else{
	$('#prdadd'+prdId).load('forms/adprdcart.php', { language: "php" ,"pid":productId ,"qid":quanti,"cpn":0,"si":xsize_dress,"co":color_dress,   "crnrandom" :  Math.random()*99999} ).html('<span align=center><img src="assets/images/miniloading.gif"  /></span>');
	relaodcartmaster();
		}
	}
	
function makemeresort(fronter){
	var cateId=$('#cateId').val();
	var sto=$('#sto').val();
	var masterbran=$('#masterbran').val();
	var pins=$('#pins').val();
	var paxs=$('#paxs').val();
	var qsrc=$('#qsrc').val();
	if ( $( "#qsrc").length> 0 ) {
		window.location="laodcatego.php?pins="+pins+"&paxs="+paxs+"&sto="+sto+"&mab="+masterbran+"&uco="+fronter;
	}else{
	window.location="laodcatego.php?cateId="+cateId+"&pins="+pins+"&paxs="+paxs+"&sto="+sto+"&mab="+masterbran+"&uco="+fronter;
	}
	}
	
	
	function makemereform(){
	var cateId=$('#cateId').val();
	var sto=$('#sto').val();
	var masterbran=$('#masterbran').val();
	var pins=$('#pins').val();
	var paxs=$('#paxs').val();
	var qsrc=$('#qsrc').val();
	var orderby=$('#orderby').val();
	if ( $( "#qsrc").length> 0 ) {
		window.location="laodcatego.php?pins="+pins+"&paxs="+paxs+"&sto="+sto+"&mab="+masterbran+"&uco="+orderby;
	}else{
	window.location="laodcatego.php?cateId="+cateId+"&pins="+pins+"&paxs="+paxs+"&sto="+sto+"&mab="+masterbran+"&uco="+orderby;
	}
	}
function makemereload(minpr,maxpr,stoppe){
	var cateId=$('#cateId').val();
	var qsrc=$('#qsrc').val();
	if ( $( "#qsrc").length> 0 ) {
	window.location="laodcatego.php?pins="+minpr+"&paxs="+maxpr+"&sto="+stoppe;
	}else{
	window.location="laodcatego.php?cateId="+cateId+"&pins="+minpr+"&paxs="+maxpr+"&sto="+stoppe;
	}
	
	}
	relaodcartmaster();