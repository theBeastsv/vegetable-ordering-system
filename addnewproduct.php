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
<!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]--> <meta name="viewport" content="width=device-width, initial-scale=1.0"><? include("headercss.php");?>
<body>
<div id="wrapper">
<? include("incfiles/header_one.php");?>
<div class="main">
<? include("cpages/addnewproduct.php");?>
</div><!-- End .main -->
<? include("incfiles/footerbase.php");?>
</div><!-- End #wrapper -->
<a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>
<!-- End --> 
<script src="assets/js/main.js"></script>
<script src="js/bootbox.js"></script>
<script src="js/mastermain.js"></script>
<script>/**
* This tiny script just helps us demonstrate
* what the various example callbacks are doing
*/
var Example = (function() {
"use strict";
var elem,
hideHandler,
that = {};
that.init = function(options) {
elem = $(options.selector);
};
that.show = function(text) {
clearTimeout(hideHandler);
elem.find("span").html(text);
elem.delay(200).fadeIn().delay(4000).fadeOut();
};
return that;
}());</script>
</body>
<!-- checkout 07:32:28 GMT -->
</html>