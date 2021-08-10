<? session_start();
include("config/config.php");
include("config/masterconfig.php");
include("config/configs_fun.php"); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?=WEBSITE_NAME_MASTER;?></title>
<meta name="description" content="Multipurpose and creative template">
<!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?  include("headercss.php");?>
</head>
<body>
<div id="wrapper">
<? include("incfiles/header_one.php");?>
<div class="main">
<? //include("incfiles/barhold.php");?>
<? include("incfiles/slidermaster.php");?> 
<? include("cpages/innerpage.php");?>
<div class="mb60 mb45-sm mb40-xs"></div><!-- margin -->
</div><!-- End .main -->
<? include("incfiles/footerbase.php");?>
</div><!-- End #wrapper -->
<!-- End -->
<? include("js/includeheader.php");?>    
</body>
</html>