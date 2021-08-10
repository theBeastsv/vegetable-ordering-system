<? session_start();

include("config/config.php");

include("validatemaster.php");

?>

<? $sec=1; $pageMasterHeading='companymaster'; ?> 

<? $page_dbs_id="71";$pageMasterHeading=filepageHeaders($page_dbs_id);?>

 <!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>companymaster</title>

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

     <? include("cpages/ar_lisplcompmaster.php");?>

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

		Main.init();

		FormElements.init();

		$('.date-picker').datepicker({

		autoclose: true,format: 'yyyy-mm-dd',

		endDate: '+0d',

		});

		$('.date-picker_past').datepicker({

		autoclose: true,format: 'yyyy-mm-dd',

		endDate: '+0d',

		});

		$('.date-picker_future').datepicker({

		autoclose: true,

		format: 'yyyy-mm-dd',

		startDate: '+0d',

		});

		FormElements.init();

	});

</script>









 



