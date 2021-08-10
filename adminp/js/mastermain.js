function makemeselcomp(praum){
	var bgst_number=$('#bgst_number').val();
	var bcompany_name=$('#bcompany_name').val();
	if(praum==0){
		$('#company_name').val('');
		$('#gst_number').val('');
		$( "#company_name" ).prop( "disabled", true );
  		$( "#gst_number" ).prop( "disabled", true );
 
	}else{
		$('#company_name').val(bcompany_name);
		$('#gst_number').val(bgst_number);
		$( "#company_name" ).prop( "disabled", false );
  		$( "#gst_number" ).prop( "disabled", false );
	}
	}
function loadthidisp(myuserId){
 
	$('#loscdet').load('forms/loscdet.php', { language: "php" , "cs":myuserId,  "crnrandom" :  Math.random()*99999} ).html('<div class="babubg" align=center><img src="dist/img/loading.gif"  /></div>'); 
	}
	
	
function letmeinnthisproject(myuserId){
	var projectId=$('#projectIds').val();
	$('#miglumsd'+myuserId).load('forms/_okaddthisuser.php', { language: "php" , "projectIds":projectId, "userId":myuserId,  "crnrandom" :  Math.random()*99999} ).html('<div class="babubg" align=center><img src="dist/img/loading.gif"  /></div>'); 
	}
function addteammatesmaster(){
	var projectId=$('#projectIds').val();
	$('#idtoshowteam').hide();
	$('#masterteamates').load('cpages/_loadallteammates.php', { language: "php" , "projectIds":projectId,  "crnrandom" :  Math.random()*99999} ).html('<div class="babubg" align=center><img src="dist/img/loading.gif"  /></div>');
	}

function makemesavestatus(moths,projectId){
	
	var descrption=$('#descrption'+moths).val();
	if(descrption!=''){
	var data = $('#masteforms'+moths).serialize() ;
		$.post("forms/milestonestatus.php",data , function(response){ 
 		$('#timelinesmain').load('cpages/_timelinesmain.php', { language: "php" , "projectIds":projectId,  "crnrandom" :  Math.random()*99999} ).html('<div class="babubg" align=center><img src="dist/img/loading.gif"  /></div>');
		});
	}else{
		alert('Kindly Provide some information');
		return false;
		}
	
	}
function savethisforms(){
	var data = $('#filemilestone').serialize() ;
		$.post("forms/milestone.php",data , function(response){ 
		 
		var dats=response.split('|');
 		 if(dats[0]==1){ 
		 var project_id=$('#project_id').val();
			$('#metlogicalmastrer').html(dats[1]);
			$('#myallpointers').load('cpages/_allactivityproject.php', { language: "php" , "projectIds":project_id,  "crnrandom" :  Math.random()*99999} ).html('<div class="babubg" align=center><img src="dist/img/loading.gif"  /></div>');
		 }
		});
		 
	
	}
	
function letmeservefinal(milestoneId,projectId){
		$('#medagastak'+milestoneId).load('cpages/_updatestatus.php', { language: "php" , "milestoneId":milestoneId,"projectIds":projectId, "crnrandom" :  Math.random()*99999} ).html('<div class="babubg" align=center><img src="dist/img/loading.gif"  /></div>');
	}
function makenewteamads(markus){
	var projectIds=$('#projectIds').val();
	if(markus==1){
	$('#metlogicalmastrer').load('cpages/_addteammate.php', { language: "php" , "projectIds":projectIds, "crnrandom" :  Math.random()*99999} ).html('<div class="babubg" align=center><img src="dist/img/loading.gif"  /></div>');
	}else{
	$('#metlogicalmastrer').load('cpages/_addplanactiv.php', { language: "php" , "projectIds":projectIds,  "crnrandom" :  Math.random()*99999} ).html('<div class="babubg" align=center><img src="dist/img/loading.gif"  /></div>');
		}
	}
function letsloadinstitute(myid){
	$('#loadmycolle').load('cpages/loadallcolleges.php', { language: "php" ,"ra":myid,   "crnrandom" :  Math.random()*99999} ).html('<div class="babubg" align=center><img src="dist/img/loading.gif"  /></div>');
	}
function justrecievemypayment(){
	var masterInvoiceId=$('#masterInvoiceId').val();;
	$('#myrecievepayment').hide();
	$('#loadpayment').load('cpages/loadinpaymentmode.php', { language: "php" ,"ra":masterInvoiceId,   "crnrandom" :  Math.random()*99999} ).html('<div class="babubg" align=center><img src="dist/img/loading.gif"  /></div>');
	$('#myrecievepayment').show();
	}
function loadmypaidstatus(mydata){
		$('#loadpayment').load('cpages/showpaymentstack.php', { language: "php" ,"ra":mydata,   "crnrandom" :  Math.random()*99999} ).html('<div class="babubg" align=center><img src="dist/img/loading.gif"  /></div>');
	}
function maketosubmitpayment(){
	var masterInvoiceId= $('#paymentId').val();
		var paymentdetail=$('#paymentdetail').val();
 		var data = $('#mins').serialize() ;
		$.post("forms/updatepay.php",data , function(response){ 
		 
		 if(response==1){ 
			$('#loadpayment').load('cpages/showpaymentstack.php', { language: "php" ,"ra":masterInvoiceId,   "crnrandom" :  Math.random()*99999} ).html('<div class="babubg" align=center><img src="dist/img/loading.gif"  /></div>');
			 }else{
			 $('#mulus').show();
 			 }
		});
		 
	
	}
	
	
function loadthisclientna(myval){
	if(myval!=''){
	var type_of_quote=$('#type_of_quote').val();
	 
	var companyid=$('#companyid').val();
	window.location="invoicemain.php?cli="+companyid+'&invf='+myval+'&qu='+type_of_quote;
	}
	}
	
	function loadthisclient(myval){
	if(myval!=''){
	var type_of_quote=$('#type_of_quote').val();
	var invoicefor=$('#invoicefor').val();
	window.location="invoicemain.php?cli="+myval+'&invf='+invoicefor+'&qu='+type_of_quote;
	}
	}
	
function makemedelete(maId){
		  $('#lablename'+maId).val('');
		  $('#fieldnames'+maId).val('');
		  $('#html_filetype'+maId).val('');
		  $('#field_type'+maId).val('');
		  $('#validationtype'+maId).val('');
		  
		  $('#ukta'+maId).remove();
		  
		}
  