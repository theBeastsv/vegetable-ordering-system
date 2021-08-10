<? session_start();

include("config/config.php");

include("validatemaster.php");

$sec=0;

?><!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title><?=PRJ_HEADING;?></title>

<!-- Tell the browser to be responsive to screen width -->

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<!-- Bootstrap 3.3.6 -->

<? include("includejs.php");?>

</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

<? include("incfiles/headermaster.php");?>

<? include("incfiles/sidebar_master.php");?> 

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

<!-- Content Header (Page header) -->

<? include("incfiles/header_breadcumber.php");?>

<!-- Main content -->

<section class="content">

<!-- Small boxes (Stat box) -->

[PAGECONTENT]

<!-- Small boxes (Stat box) -->

</div>

<!-- /.content-wrapper -->

<? include("incfiles/footermaster.php");?>

<!-- Control Sidebar -->

<? include("incfiles/blackslidebar.php");?>

<!-- /.control-sidebar -->

<!-- Add the sidebar's background. This div must be placed

immediately after the control sidebar -->

<div class="control-sidebar-bg"></div>

</div>

<!-- ./wrapper -->

</body>

</html>

<script>

jQuery(document).ready(function() {

	jQuery("form").validationEngine(); 

});

</script>

[PAGEFOOTER]

