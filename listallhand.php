<? session_start();
include("config/config.php");
include("config/masterconfig.php");
include("config/configs_fun.php"); 
?>
<!DOCTYPE html>
<html>
<!-- cart 07:32:28 GMT -->
<head>
<meta charset="utf-8">
<title><?=WEBSITE_NAME_MASTER;?></title>
<meta name="description" content="Multipurpose and creative template">
<!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]--> <meta name="viewport" content="width=device-width, initial-scale=1.0">
<? include("headercss.php");?>
<body>
<div id="wrapper">
<? include("incfiles/header_one.php");?>
<div class="main">
<div class="page-header larger parallax custom" style="background-image:url(assets/images/page-header-bg.jpg)">
<div class="container">
<h1>Handloom</h1>
<ol class="breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="#">Handloom</a></li> 
</ol>
</div><!-- End .container -->
</div><!-- End .page-header -->
<? include("cpages/listallhand.php");?>
<div class="mb70"></div><!-- margin -->
</div><!-- End .main -->
<? include("incfiles/footerbase.php");?>
</div><!-- End #wrapper -->
<a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>
<!-- End --> 
<script src="assets/js/main.js"></script>
<script src="js/mastermain.js"></script>
</body>
<!-- cart 07:32:28 GMT -->
</html>