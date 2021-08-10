<? session_start();
include("config/config.php");
include("config/masterconfig.php");
include("config/configs_fun.php");
include("checksess.php");
?>
<!DOCTYPE html>
<html>
<!-- checkout 07:32:28 GMT -->
<head>
<meta charset="utf-8">
<title><?=WEBSITE_NAME_MASTER;?></title>
<meta name="description" content="Multipurpose and creative template">
<!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]--> <meta name="viewport" content="width=device-width, initial-scale=1.0">
<? include("headercss.php");?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="js/mastermain.js"></script>
<script src="js/jquery.form.min.js"></script>
<script type="text/javascript">
function repositionCover() {
$('.cover-wrapper').hide();
$('.cover-resize-wrapper').show();
$('.cover-resize-buttons').show();
$('.default-buttons').hide();
$('.screen-width').val($('.cover-resize-wrapper').width());
$('.cover-resize-wrapper img')
.css('cursor', 's-resize')
.draggable({
scroll: false,
axis: "y",
cursor: "s-resize",
drag: function (event, ui) {
y1 = $('.timeline-header-wrapper').height();
y2 = $('.cover-resize-wrapper').find('img').height();
if (ui.position.top >= 0) {
ui.position.top = 0;
}
else
if (ui.position.top <= (y1-y2)) {
ui.position.top = y1-y2;
}
},
stop: function(event, ui) {
$('input.cover-position').val(ui.position.top);
}
});
}
function saveReposition() {
if ($('input.cover-position').length == 1) {
posY = $('input.cover-position').val();
$('form.cover-position-form').submit();
}
}
function cancelReposition() {
$('.cover-wrapper').show();
$('.cover-resize-wrapper').hide();
$('.cover-resize-buttons').hide();
$('.default-buttons').show();
$('input.cover-position').val(0);
$('.cover-resize-wrapper img').draggable('destroy').css('cursor','default');
}
$(function(){
$('.cover-resize-wrapper').height($('.cover-resize-wrapper').width()*0.3);
$('form.cover-position-form').ajaxForm({
url:  'forms/picreform.php',
dataType:  'json', 
beforeSend: function(res) {
$('.cover-progress').html('Repositioning...').fadeIn('fast').removeClass('hidden');
},
success: function(responseText) {
if ((responseText.status) == 200) {
window.location="editprofile.php";
$('.cover-wrapper img')
.attr('src', responseText.url + '?' + new Date().getTime()).load(function () {
$('.cover-progress').fadeOut('fast').addClass('hidden').html('');
$('.cover-wrapper').show();
$('.cover-resize-wrapper')
.hide()
.find('img').css('top', 0);
$('.cover-resize-buttons').hide();
$('.default-buttons').show();
$('input.cover-position').val(0);
$('.cover-resize-wrapper img').draggable('destroy').css('cursor','default');
});
}
}
});
});  
</script>
<body>
<div id="wrapper">
<? include("incfiles/header_one.php");?>
<div class="main">
<? include("cpages/editprofile.php");?>
</div><!-- End .main -->
<? include("incfiles/footerbase.php");?>
</div><!-- End #wrapper -->
<a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>
<!-- End --> 
<script src="assets/js/main.js"></script>
<!-- checkout 07:32:28 GMT -->
</html>