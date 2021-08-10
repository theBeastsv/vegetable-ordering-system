<? session_start();
include("config/config.php");
include("config/masterconfig.php");
include("config/configs_fun.php");
include("checksess.php");
?>
<!DOCTYPE html>
<html>
<!-- index-shop 07:24:28 GMT -->
<head>
<meta charset="utf-8">
<title><?=WEBSITE_NAME_MASTER;?></title>
<meta name="description" content="Multipurpose and creative template">
<!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Fonts -->
<?  include("headercss.php");?>
</head>
<body>
<div id="wrapper">
<? include("incfiles/header_one.php");?>
<div class="main">
<? include("incfiles/barhold.php");?>
<? include("incfiles/slidermaster.php");?>
<div class="mb50 mb40-sm mb30-xs"></div><!-- margin -->
<? include("cpages/innerpage.php");?>
<div class="mb60 mb45-sm mb40-xs"></div><!-- margin -->
</div><!-- End .main -->
<? include("incfiles/footerbase.php");?>
</div><!-- End #wrapper -->
<a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>
<!-- End -->
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems !  
The following part can be removed on Server for On Demand Loading) -->  
<script type="text/javascript" src="assets/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
"use strict";
var revapi;
if ( $("#rev_slider").revolution == undefined ) {
revslider_showDoubleJqueryError("#rev_slider");
} else {
revapi = $("#rev_slider").show().revolution({
sliderType: "standard",
jsFileLocation: "assets/js/",
sliderLayout: "auto",
dottedOverlay:"none",
delay: 15000,
navigation: {
mouseScrollNavigation: "off",
onHoverStop: "off",
touch: {
touchenabled: "on"
},
arrows: {
style: "hebe",
enable: true,
hide_onmobile: false,
hide_onleave: false,
hide_under: 992,
tmp: '',
left: {
h_align: "left",
v_align: "center",
h_offset: 0,
v_offset: 0
},
right: {
h_align: "right",
v_align: "center",
h_offset: 0,
v_offset: 0
}
},
bullets: {
enable: true,
hide_onmobile: false,
style: "hades",
hide_onleave: false,
hide_under: 768,
direction: "horizontal",
h_align: "center",
v_align: "bottom",
h_offset: 0,
v_offset: 25,
space: 8,
tmp: '<span class="tp-bullet-image"></span>'
}
},
responsiveLevels: [1200,992,768,480],
gridwidth: [1170,970,750,480],
gridheight: [560,500,440,340],
lazyType: "smart",
spinner: "spinner2",
parallax: {
type: "on",
origo: "slidercenter",
speed: 2000,
levels: [2,3,4,5,6,7,12,16,10,50],
disable_onmobile: "on"
},
debugMode: false
});
}
});
</script>
</body>
<!-- index-shop 07:24:50 GMT -->
</html>