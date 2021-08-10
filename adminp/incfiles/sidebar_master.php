<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
<!-- Sidebar user panel -->
<div class="user-panel">
<div class="pull-left image">
<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
</div>
<div class="pull-left info">
<p><?=$_SESSION['my_first_brm'];?></p>
<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
</div>
</div>
<!-- search form -->
<form action="#" method="get" class="sidebar-form">
<div class="input-group">
<input type="text" name="q" class="form-control" placeholder="Search...">
<span class="input-group-btn">
<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
</button>
</span>
</div>
</form>
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
<li class="header">MAIN NAVIGATION</li>
<li class="<? if(($sec=='') || ($sec==0)){echo 'class="active"';}?> treeview">
<a href="#">
<i class="fa fa-dashboard"></i> <span>Dashboard</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">
<li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
<li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
</ul>
</li>
<li class="<? if($sec==1){echo 'active';}?> treeview">
<a href="#">
<i class="fa fa-files-o"></i>
<span>SECTION 1</span>
<span class="pull-right-container">
<span class="label label-primary pull-right">4</span>
</span>
</a>
<ul class="treeview-menu">
<!--SECTION ONE--> 
<li>
		<a href="brandsmaster.php"><span class="title">Brands Master</span></a>
</li>
<li>
		<a href="produccategory.php"><span class="title">Produccategory</span></a>
</li>
<li>
		<a href="shippingprice.php"><span class="title">Shipping Master</span></a>
</li>
<li>
		<a href="udcountries.php"><span class="title">Country</span></a>
</li>
<li>
		<a href="udstates.php"><span class="title">States</span></a>
</li>
<li>
		<a href="udcities.php"><span class="title">City</span></a>
</li>
<li>
		<a href="compmaster.php"><span class="title">Company Master</span></a>
</li>
<!--[END_SECTION_ONE]-->
</ul>
</li>
<li class="<? if($sec==2){echo 'active';}?> treeview">
<a href="#">
<i class="fa fa-files-o"></i>
<span>SECTION 2</span>
<span class="pull-right-container">
<span class="label label-primary pull-right">4</span>
</span>
</a>
<ul class="treeview-menu">
<!--SECTION TWO--> 
<li>
		<a href="sellermaster.php"><span class="title">Seller</span></a>
</li>
<li>
		<a href="productmaster.php"><span class="title">Product</span></a>
</li>
<li>
		<a href="product_image.php"><span class="title">Product Images</span></a>
</li>
<li>
		<a href="variantsizecolor.php"><span class="title">Wariant Size Color</span></a>
</li>
<li>
		<a href="faqsection.php"><span class="title">Faq Master</span></a>
</li>
<li>
		<a href="discmaster.php"><span class="title">Dicount Scheme</span></a>
</li>
<li>
		<a href="disprds.php"><span class="title">Discount On Products</span></a>
</li>
<!--[END_SECTION_TWO]-->
</ul>
</li>
<li class="<? if($sec==3){echo 'active';}?> treeview">
<a href="#">
<i class="fa fa-pie-chart"></i>
<span>SECTION 3</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">
<!--SECTION THREE--> 
<li>
		<a href="userbuyer.php"><span class="title">Users</span></a>
</li>
<li>
		<a href="tempordercart.php"><span class="title">Temp Order</span></a>
</li>
<li>
		<a href="invoicemaster.php"><span class="title">Invoice Master</span></a>
</li>
<li>
		<a href="invoicedetail.php"><span class="title">Invoice Detail</span></a>
</li>
<li>
		<a href="newsletter.php"><span class="title">Newsletter</span></a>
</li>
<li>
		<a href="wishlist.php"><span class="title">Wishlist</span></a>
</li>
<li>
		<a href="bilship.php"><span class="title">Billing Address</span></a>
</li>
<!--[END_SECTION_THREE]-->
</ul>
</li>
<li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
<li class="header">LABELS</li>
<li><a href="logout.php"><i class="fa fa-circle-o text-red"></i> <span>LOGOUT</span></a></li>
<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
</ul>
</section>
<!-- /.sidebar -->
</aside>