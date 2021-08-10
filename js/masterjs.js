function makemeresort(fronter){
	var cateId=$('#cateId').val();
	var sto=$('#sto').val();
	var masterbran=$('#masterbran').val();
	var pins=$('#pins').val();
	var paxs=$('#paxs').val();
	var qsrc=$('#qsrc').val();
	if ( $( "#qsrc").length> 0 ) {
		window.location="tosrcm.php?qsrc="+qsrc+"&cateId="+cateId+"&pins="+pins+"&paxs="+paxs+"&sto="+sto+"&mab="+masterbran+"&uco="+fronter;
	}else{
	window.location="showcategory.php?cateId="+cateId+"&pins="+pins+"&paxs="+paxs+"&sto="+sto+"&mab="+masterbran+"&uco="+fronter;
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
		window.location="tosrcm.php?qsrc="+qsrc+"&cateId="+cateId+"&pins="+pins+"&paxs="+paxs+"&sto="+sto+"&mab="+masterbran+"&uco="+orderby;
	}else{
	window.location="showcategory.php?cateId="+cateId+"&pins="+pins+"&paxs="+paxs+"&sto="+sto+"&mab="+masterbran+"&uco="+orderby;
	}
	}
function makemereload(minpr,maxpr,stoppe){
	var cateId=$('#cateId').val();
	var qsrc=$('#qsrc').val();
	if ( $( "#qsrc").length> 0 ) {
	window.location="tosrcm.php?qsrc="+qsrc+"&cateId="+cateId+"&pins="+minpr+"&paxs="+maxpr+"&sto="+stoppe;
	}else{
	window.location="showcategory.php?cateId="+cateId+"&pins="+minpr+"&paxs="+maxpr+"&sto="+stoppe;
	}
	
	}