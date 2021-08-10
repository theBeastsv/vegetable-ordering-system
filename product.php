<? session_start();
include("config/config.php");
include("config/masterconfig.php");
include("config/configs_fun.php"); 
$prdId=$_REQUEST['prdId'];
$prdqueryS= show_selecttable($debug,$limitstring,$conn,'productmaster','*','WHERE rowId=\''.$prdId.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
foreach( $prdqueryS as $prd_record ) { 
$product_name=$prd_record['product_name'];
$createdby =	$prd_record['createdby']; 
$product_name=$prd_record['product_name']; 			}
$sellerBanner=getSellerBanner($createdby);


$BcId= show_selecttable($debug,$limitstring,$conn,'seller_master','*','WHERE rowId=\''.$createdby.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
foreach( $BcId as $orSRow ) {  
$company_name					=	$orSRow['company_name'];  
}
?>
<!DOCTYPE html>
<html>
<!-- product 07:32:18 GMT -->
<head>
<meta charset="utf-8">
<title><?=$product_name;?></title>
<meta name="description" content="Multipurpose and creative template">
<!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Fonts -->
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,800" rel="stylesheet">
<link rel="stylesheet" href="assets/css/plugins.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/theme-skins/purple.css">
<!-- Favicon -->
<link rel="icon" type="image/png" href="assets/images/icons/favicon.png"><? include("headercss.php");?>
<body>
<div id="wrapper">
<? include("incfiles/header_one.php");?>
<div class="main">
<div class="page-header larger parallax custom" style="background-image:url(<?=$sellerBanner;?>)">
<div class="container" style="background-color: rgba(0, 0, 0, 0.5);">
<h1><?=$product_name ;?></h1>
<ol class="breadcrumb">  
<li class="active">By <?=$company_name;?></li>
</ol>
</div><!-- End .container -->
</div><!-- End .page-header -->
<div class="container">
<?
include("cpages/product_page.php");
?>
</div><!-- End .container -->
<div class="mb70"></div><!-- margin -->
</div><!-- End .main -->
<? include("incfiles/footerbase.php");?>
</div><!-- End #wrapper -->
<a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>
<!-- End --> 
<script src="assets/js/jquery.elevateZoom.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="js/mastermain.js"></script>
</body>
<!-- product 07:32:28 GMT -->
</html>