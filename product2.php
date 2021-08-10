<? session_start();
include("config/config.php");
include("config/masterconfig.php");
include("config/configs_fun.php"); 
?>
<!DOCTYPE html>
<html>
<!-- product2 07:32:28 GMT -->
<head>
<meta charset="utf-8">
<title><?=WEBSITE_NAME_MASTER;?></title>
<meta name="description" content="Multipurpose and creative template">
<!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]--> <meta name="viewport" content="width=device-width, initial-scale=1.0"><? include("headercss.php");?>
<body>
<div id="wrapper">
<? include("incfiles/header_one.php");?>
<div class="main">
<div class="page-header larger parallax custom" style="background-image:url(assets/images/page-header-bg.jpg)">
<div class="container">
<h1>Product</h1>
<ol class="breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="#">Pages</a></li>
<li class="active">Product</li>
</ol>
</div><!-- End .container -->
</div><!-- End .page-header -->
<div class="container">
<div class="row">
<div class="col-md-5 col-md-push-2">
<div class="product-gallery-container">
<div class="product-zoom-wrapper">
<div class="product-zoom-container">
<img id="product-zoom" src="assets/images/products/single/product1.jpg" data-zoom-image="assets/images/products/single/big/product1.jpg" alt="Product image big">
</div><!-- End .product-zoom-container -->
</div><!-- End .product-zoom-wrapper -->
<div class="product-gallery-wrapper">
<div class="owl-carousel product-gallery">
<a href="#" data-image="assets/images/products/single/product1.jpg" data-zoom-image="assets/images/products/single/big/product1.jpg" class="product-gallery-item">
<img src="assets/images/products/single/thumbs/product1.jpg" alt="product-small-1">
</a>
<a href="#" data-image="assets/images/products/single/product2.jpg" data-zoom-image="assets/images/products/single/big/product2.jpg" class="product-gallery-item">
<img src="assets/images/products/single/thumbs/product2.jpg" alt="product-small-2">
</a>
<a href="#" data-image="assets/images/products/single/product3.jpg" data-zoom-image="assets/images/products/single/big/product3.jpg" class="product-gallery-item">
<img src="assets/images/products/single/thumbs/product3.jpg" alt="product-small-3">
</a>
<a href="#" data-image="assets/images/products/single/product4.jpg" data-zoom-image="assets/images/products/single/big/product4.jpg" class="product-gallery-item">
<img src="assets/images/products/single/thumbs/product4.jpg" alt="product-small-4">
</a>
<a href="#" data-image="assets/images/products/single/product5.jpg" data-zoom-image="assets/images/products/single/big/product5.jpg" class="product-gallery-item">
<img src="assets/images/products/single/thumbs/product5.jpg" alt="product-small-5">
</a>
<a href="#" data-image="assets/images/products/single/product6.jpg" data-zoom-image="assets/images/products/single/big/product6.jpg" class="product-gallery-item">
<img src="assets/images/products/single/thumbs/product6.jpg" alt="product-small-6">
</a>
<a href="#" data-image="assets/images/products/single/product7.jpg" data-zoom-image="assets/images/products/single/big/product7.jpg" class="product-gallery-item">
<img src="assets/images/products/single/thumbs/product7.jpg" alt="product-small-7">
</a>
</div><!-- End .product-gallery -->
</div><!-- End .product-gallery-wrapper -->
</div><!-- End .product-gallery-container -->
</div><!-- End .col-md-5 -->
<div class="clearfix visible-sm"></div><!-- end .clearfix -->
<div class="col-md-5 col-md-push-2 col-sm-9 col-sm-push-3">
<div class="product-details">
<h2 class="product-title">Lorem ipsum dolor sit amet, consectit</h2>
<div class="review-container">
<a href="#" class="product-ratings">
<span class="ratings" style="width:80%">
<span class="ratings-text sr-only">11 Reviews</span>
</span><!-- End .ratings -->
</a><!-- End .product-ratings -->
<span class="review-count">4 Reviews</span>
<a href="#" class="review-action">Add a review</a>
</div><!-- End .review-container -->
<div class="product-price-container">
<span class="old-price">₹99.00</span>
<span class="product-price">₹49.00</span>
</div><!-- End .product-price-container -->
<div class="product-desc-box">
<span class="shipping-box">
<i class="fa fa-truck"></i>
<br>Free <br> Shipping
</span>
<ul>
<li><strong>Brand:</strong> Sonyz Production Z</li>
<li><strong>Availablity:</strong> In Stock</li>
<li><strong>Product Code:</strong> MXC68077E99</li>
</ul>
</div><!-- End .product-desc-box -->
<div class="row">
<div class="col-xs-6">
<div class="filter-color-container">
<label>Select Color:</label>
<div class="filter-row">
<a href="#" style="background-color:#eaeaea" class="filter-color-box"></a>
<a href="#" style="background-color:#f41d1d" class="filter-color-box"></a>
<a href="#" style="background-color:#d10707" class="filter-color-box"></a>
<a href="#" style="background-color:#0172b8" class="filter-color-box"></a>
<a href="#" style="background-color:#2599e2" class="filter-color-box"></a>
<a href="#" style="background-color:#222222" class="filter-color-box"></a>
</div><!-- End .row -->
</div><!-- End .filter-color-container -->
</div><!-- End .col-xs-6 -->
<div class="col-xs-6">
<div class="filter-size-container">
<label>Select Size:</label>
<div class="filter-row">
<a href="#" class="filter-size-box">xs</a>
<a href="#" class="filter-size-box">s</a>
<a href="#" class="filter-size-box">m</a>
<a href="#" class="filter-size-box">l</a>
<a href="#" class="filter-size-box">xl</a>
</div><!-- End .row -->
</div><!-- End .filter-size-container -->
</div><!-- End .col-xs-6 -->
</div><!-- End .row -->
<div class="product-action">
<div class="product-quantity">
<input type="number" class="form-control input-lg" min="1" max="999" placeholder="1">
</div><!-- end .product-quantity -->
<a href="#" class="btn btn-custom btn-lg">Add to Cart</a>
</div><!-- End .product-action -->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingOne2">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
Description
</a>
</h4>
</div><!-- End .panel-heading -->
<div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne2">
<div class="panel-body">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda inventore impedit delectus, incidunt sapiente doloremque quam aliquid nobis debitis. Porro eveniet architecto asperiores, iste accusamus at, doloremque quas recusandae.</p>
<p>Voluptatum eos neque quia quae ipsam adipisci a sit ut molestias fugiat facilis, ea tenetur sequi laudantium accusantium sed labore fuga nemo corrupti. Optio enim vero, quis necessitatibus maxime harum!</p>
</div><!-- End .panel-body -->
</div><!-- End .panel-collapse -->
</div><!-- End .panel -->
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingTwo2">
<h4 class="panel-title">
<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
Details
</a>
</h4>
</div><!-- End .panel-heading -->
<div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
<div class="panel-body">
<ul class="fa-ul">
<li><i class="fa-li fa fa-check-square-o"></i>Lequuntur repellat vel laborum deserunt aspernatur.</li>
<li><i class="fa-li fa fa-check-square-o"></i>Lequuntur repellat vel laborum deserunt aspern umqua</li>
<li><i class="fa-li fa fa-check-square-o"></i>laudantium culpa nam aperiam tempore.</li>
<li><i class="fa-li fa fa-check-square-o"></i>Lequuntur repellat vel laborum deserunt aspern umqua</li>
<li><i class="fa-li fa fa-check-square-o"></i>Lorem ipsum dolor sit amet, consect.</li>
<li><i class="fa-li fa fa-check-square-o"></i>Lequuntur repellat vel laborum deserunt aspern umqua</li>
</ul>
</div><!-- End .panel-body -->
</div><!-- End .panel-collapse -->
</div><!-- End .panel -->
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingThree2">
<h4 class="panel-title">
<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
Reviews
</a>
</h4>
</div><!-- End .panel-heading -->
<div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree2">
<div class="panel-body">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda inventore impedit delectus, incidunt sapiente doloremque quam aliquid nobis debitis. Porro eveniet architecto asperiores, iste accusamus at, doloremque quas recusandae.</p>
<p>Voluptatum eos neque quia quae ipsam adipisci a sit ut molestias fugiat facilis, ea tenetur sequi laudantium accusantium sed labore fuga nemo corrupti. Optio enim vero, quis necessitatibus maxime harum!</p>
</div><!-- End .panel-body -->
</div><!-- End .panel-collapse -->
</div><!-- End .panel -->
</div><!-- End .panel-group -->
</div><!-- End .product-details -->
</div><!-- End .col-md-5 -->
<aside class="col-md-2 col-md-pull-10 col-sm-3 col-sm-pull-9 sidebar product-sidebar">
<div class="widget">
<h3 class="widget-title smaller">Popular Products</h3>
<div class="popular-products-widget">
<div class="product">
<div class="product-top">
<span class="label popular">Popular</span>
<figure>
<a href="product.php" title="Product Name">
<img src="assets/images/products/product1.jpg" alt="Product image" class="product-image">
<img src="assets/images/products/product1-hover.jpg" alt="Product image" class="image-hover">
</a>
</figure>
<a href="#" class="btn product-add-btn">Add to Cart</a>
</div><!-- End .product -->
<h4 class="product-title"><a href="product.php">Wedding Ring</a></h4>
<div class="product-price-container">
<span class="old-price">₹99.00</span>
<span class="product-price">₹49.00</span>
</div><!-- End .product-price-container -->
</div><!-- End .product -->
<div class="product">
<div class="product-top">
<span class="label discount">-50%</span>
<figure>
<a href="product.php" title="Product Name">
<img src="assets/images/products/product6.jpg" alt="Product image" class="product-image">
</a>
</figure>
<a href="#" class="btn product-add-btn">Add to Cart</a>
</div><!-- End .product -->
<h4 class="product-title"><a href="product.php">Wedding Ring</a></h4>
<div class="product-price-container">
<span class="old-price">₹99.00</span>
<span class="product-price">₹49.00</span>
</div><!-- End .product-price-container -->
</div><!-- End .product -->
</div><!-- end .popular-products-widget -->
</div><!-- end .widget -->
</aside>
</div><!-- End .row -->
</div><!-- End .container -->
<div class="mb30 hidden-xs"></div><!-- margin -->
<div class="container">
<h3 class="mb25">You may also like</h3>
<div class="similiar-products-carousel owl-carousel">
<div class="product">
<div class="product-top">
<span class="label popular">Popular</span>
<figure>
<a href="product.php" title="Product Name">
<img src="assets/images/products/product1.jpg" alt="Product image" class="product-image">
<img src="assets/images/products/product1-hover.jpg" alt="Product image" class="image-hover">
</a>
</figure>
<a href="#" class="btn product-add-btn">Add to Cart</a>
</div><!-- End .product -->
<h3 class="product-title"><a href="product.php">Wedding Ring</a></h3>
<div class="product-price-container">
<span class="old-price">₹99.00</span>
<span class="product-price">₹49.00</span>
</div><!-- End .product-price-container -->
</div><!-- End .product -->
<div class="product">
<div class="product-top">
<figure>
<a href="product.php" title="Product Name">
<img src="assets/images/products/product2.jpg" alt="Product image" class="product-image">
<img src="assets/images/products/product2-hover.jpg" alt="Product image" class="image-hover">
</a>
</figure>
<a href="#" class="btn product-add-btn">Add to Cart</a>
</div><!-- End .product -->
<h3 class="product-title"><a href="product.php">Wedding Ring</a></h3>
<div class="product-price-container">
<span class="old-price">₹99.00</span>
<span class="product-price">₹49.00</span>
</div><!-- End .product-price-container -->
</div><!-- End .product -->
<div class="product">
<div class="product-top">
<span class="label discount">-50%</span>
<figure>
<a href="product.php" title="Product Name">
<img src="assets/images/products/product3.jpg" alt="Product image" class="product-image">
<img src="assets/images/products/product3-hover.jpg" alt="Product image" class="image-hover">
</a>
</figure>
<a href="#" class="btn product-add-btn">Add to Cart</a>
</div><!-- End .product -->
<h3 class="product-title"><a href="product.php">Wedding Ring</a></h3>
<div class="product-price-container">
<span class="old-price">₹99.00</span>
<span class="product-price">₹49.00</span>
</div><!-- End .product-price-container -->
</div><!-- End .product -->
<div class="product">
<div class="product-top">
<figure>
<a href="product.php" title="Product Name">
<img src="assets/images/products/product4.jpg" alt="Product image" class="product-image">
<img src="assets/images/products/product4-hover.jpg" alt="Product image" class="image-hover">
</a>
</figure>
<a href="#" class="btn product-add-btn">Add to Cart</a>
</div><!-- End .product -->
<h3 class="product-title"><a href="product.php">Wedding Ring</a></h3>
<div class="product-price-container">
<span class="old-price">₹99.00</span>
<span class="product-price">₹49.00</span>
</div><!-- End .product-price-container -->
</div><!-- End .product -->
<div class="product">
<div class="product-top">
<figure>
<a href="product.php" title="Product Name">
<img src="assets/images/products/product5.jpg" alt="Product image" class="product-image">
</a>
</figure>
<a href="#" class="btn product-add-btn">Add to Cart</a>
</div><!-- End .product -->
<h3 class="product-title"><a href="product.php">Wedding Ring</a></h3>
<div class="product-price-container">
<span class="old-price">₹99.00</span>
<span class="product-price">₹49.00</span>
</div><!-- End .product-price-container -->
</div><!-- End .product -->
<div class="product">
<div class="product-top">
<span class="label discount">-50%</span>
<figure>
<a href="product.php" title="Product Name">
<img src="assets/images/products/product6.jpg" alt="Product image" class="product-image">
</a>
</figure>
<a href="#" class="btn product-add-btn">Add to Cart</a>
</div><!-- End .product -->
<h3 class="product-title"><a href="product.php">Wedding Ring</a></h3>
<div class="product-price-container">
<span class="old-price">₹99.00</span>
<span class="product-price">₹49.00</span>
</div><!-- End .product-price-container -->
</div><!-- End .product -->
</div><!-- End .similiar-products-carousel -->
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
<!-- product2 07:32:28 GMT -->
</html>