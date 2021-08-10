<?
$prdIdfororder=$prd_record['rowId'];
$productIdcode				=str_pad($prd_record['rowId'], 10, "0", STR_PAD_LEFT);
$product_name				=$prd_record['product_name'];
$category_name				=$prd_record['category_name'];
$product_description		=$prd_record['product_description'];
$sellerId		=$prd_record['sellerId'];
$bbrands						=getBrandName($prd_record['bbrand']);
$product_size				=$prd_record['product_size'];
$product_colour				=$prd_record['product_colour'];
$mrp_purchase				=$prd_record['mrp_purchase'];
$mrp_sales					=$prd_record['mrp_sale'];
$in_stock_quantity			=$prd_record['in_stock_quantity'];
$isnewpromotional			=$prd_record['isnewpromotional'];
$isfeaturedproduct			=$prd_record['isfeaturedproduct'];
$totalvotes					=$prd_record['totalvotes'];
$averagerating		=$prd_record['averagerating'];
$curdate=date("Y-m-d");
///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////
 $discounapplied=getdiscount_price($prdId);
 $getAllDisp			=explode('|',$discounapplied);
  
 $discount_applied		= $getAllDisp[0];
 $discount_minorder		= $getAllDisp[1];
 $discount_discountrate	= $getAllDisp[2];
 $discount_discounttype	= $getAllDisp[3];
 
 if($discount_applied!=0){
	 
	 if($discount_discounttype==2){
		 // FLAT 
		 $newsaleprice=$mrp_sales-$discount_discountrate;
		   $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span><span class="product-price">₹'. $newsaleprice.'</span>';
		 }
		  if($discount_discounttype==1){
			 // PERCENTAGE
		 $percentage = ( $discount_discountrate / 100 ) * $mrp_sales;
 		  $newsaleprice=$mrp_sales-$percentage;
		  
		  $qu_sellprice='  <span class="old-price">₹'.$mrp_sales.'</span><span class="product-price">₹'. $newsaleprice.'</span>';
		 }
	  
	  
	 }else{
		 $mrp_sale=$mrp_sales;
		   $newsaleprice=$mrp_sales ;
		  $qu_sellprice='<span class="product-price">₹'. $newsaleprice.'</span>';
		 }
		 
		 
//////////////////////////////ABOUT SELLER/////////////////////////////
  $mcSellerow= show_selecttable($debug,$limitstring,$conn,'seller_master','*','WHERE rowId=\''.$sellerId.'\'',$limit,1,' rowId ASC');
$ths='0';
		foreach( $mcSellerow as $ssxSellgbw ) {
 			$company_name=$ssxSellgbw['company_name']; 
			$seller_description=$ssxSellgbw['seller_description'];
		}
	 
 //////////////////////////////ABOUT SELLER/////////////////////////////
 
 
///////////////////////////////// PRODUCT DISCOUNT ////////////////////////////////	
		
 $mcxvshow= show_selecttable($debug,$limitstring,$conn,'product_image','*','WHERE productid=\''.$prdId.'\'',$limit,1,' rowId ASC');
$ths='0';
		foreach( $mcxvshow as $ssxgbw ) {
 			$imagename_lr=$ssxgbw['imagename_lr'];
			$imagename_tr=$ssxgbw['imagename_tr'];
			$imagename=$ssxgbw['imagename'];
			if($ths==0){
				$masterpic='  <img id="product-zoom" src="'.$imagename_lr.'" data-zoom-image="'.$imagename.'" alt="Product image big">';
				$pingus='<div class="owl-item active"><a href="#" data-image="'.$imagename_lr.'" data-zoom-image="'.$imagename.'" class="product-gallery-item">
                                            <img src="'.$imagename_tr.'" alt="product-small-1">
                                        </a></div>';
				}else{
				$pingus=$pingus.'<div class="owl-item active"><a href="#" data-image="'.$imagename_lr.'" data-zoom-image="'.$imagename.'" class="product-gallery-item">
                                            <img src="'.$imagename_tr.'" alt="product-small-1">
                                        </a></div>';
										}
				
				$ths=$ths+1;
			}

?>
<div class="middle-sec wow fadeIn animated animated" data-wow-offset="10" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;">
    <div class="page-header">
      <div class="container text-center">
        <h2 class="text-primary text-uppercase">product details</h2>
        <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
      </div>
    </div>
    <section class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="inner-ad">
            <figure><img class="img-responsive" src="images/inner-ad.jpg" alt="" width="1170" height="100"></figure>
          </div>
        </div>
        <div class="col-sm-12 equal-height-container">
          <div class="row">
            <div class="col-sm-4 col-md-3  sub-data-left sub-equal">
              <section>
                <h5 class="sub-title text-info text-uppercase">Categories</h5>
                <ul class="list-group nudge">
                  <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                  <li class="list-group-item"><a href="#">Dapibus ac facilisis in</a><span class="label label-info pull-right">20% off</span></li>
                  <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                  <li class="list-group-item"><a href="#">Porta ac consectetur ac</a></li>
                  <li class="list-group-item"><a href="#">Vestibulum at eros</a></li>
                </ul>
              </section>
              <section>
                <h5 class="sub-title text-info text-uppercase">price range</h5>
                <span>$10</span>
                <div class="slider slider-horizontal" style="width: 184px;"><div class="slider-track"><div class="slider-selection" style="left: 0%; width: 18.6869%;"></div><div class="slider-handle round" style="left: 0%;"></div><div class="slider-handle round" style="left: 18.6869%;"></div></div><div class="tooltip top" style="top: -30px; left: -14.1162px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">10 : 200</div></div><input id="price-slider" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[10,500]" style="" type="text"></div>
                <span>$1000</span> </section>
              <section>
                <h5 class="sub-title text-info text-uppercase">preffered color</h5>
                <ul class="list-inline color">
                  <li><a class="color-1" href="#"></a></li>
                  <li><a class="color-2" href="#"></a></li>
                  <li><a class="color-3" href="#"></a></li>
                  <li><a class="color-4" href="#"></a></li>
                  <li><a class="color-5" href="#"></a></li>
                  <li><a class="color-6" href="#"></a></li>
                  <li><a class="color-7" href="#"></a></li>
                  <li><a class="color-8" href="#"></a></li>
                  <li><a class="color-9" href="#"></a></li>
                  <li><a class="color-10" href="#"></a></li>
                  <li><a class="color-11" href="#"></a></li>
                  <li><a class="color-12" href="#"></a></li>
                  <li><a href="#" class="color-13"></a></li>
                </ul>
              </section>
              <section>
                <h5 class="sub-title text-info text-uppercase">choose size</h5>
                <ul class="list-inline size text-uppercase">
                  <li><a href="#">s</a></li>
                  <li><a href="#">m</a></li>
                  <li><a href="#">l</a></li>
                  <li><a href="#">xl</a></li>
                  <li><a href="#">xxl</a></li>
                  <li><a href="#">slimfit</a></li>
                  <li><a href="#">onesize</a></li>
                </ul>
              </section>
              <section>
                <h5 class="sub-title text-info text-uppercase">Manufacturer</h5>
                <ul class="list-group nudge">
                  <li class="list-group-item"><a href="#">Zara</a> <span class="pull-right">(22)</span></li>
                  <li class="list-group-item"><a href="#">H&amp;M</a> <span class="pull-right">(10)</span></li>
                  <li class="list-group-item"><a href="#">Christopher Kane</a> <span class="pull-right">(19)</span></li>
                  <li class="list-group-item"><a href="#">Christian Dior</a> <span class="pull-right">(31)</span></li>
                </ul>
              </section>
              <section> <img alt="" src="images/banner4.jpg" class="img-responsive" width="820" height="703"> </section>
              <section class="col-sm-12 tags">
                <h5 class="sub-title text-info text-uppercase">popular tags</h5>
                <a href="#">travel</a> <a href="#">blog</a> <a href="#">lifestyle</a> <a href="#">feature</a> <a href="#">mountain</a> <a href="#">design</a> <a href="#">restaurant</a> <a href="#">journey</a> <a href="#">classic</a> <a href="#">sunset</a> </section>
            </div>
            <div class="col-sm-8 col-md-9  main-sec">
              <div class="row">
                <div class="col-sm-12">
                  <ol class="breadcrumb  dashed-border">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Men</a></li>
                    <li class="active">Product Details</li>
                  </ol>
                </div>
                <!--start of product details-->
                
                <div class="col-sm-12 product-details">
                  <div class="row">
                    <div class="col-sm-6">
                      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="item active"><span class="inner-zoom" style="position: relative; overflow: hidden;"><img class="img-responsive" src="images/p-details-z-1.jpg" alt="" width="700" height="700"><img src="images/p-details-z-1.jpg" class="zoomImg" style="position: absolute; top: -103.593px; left: -25.2579px; opacity: 0; width: 700px; height: 700px; border: medium none; max-width: none; max-height: none;"></span></div>
                          <div class="item"> <span class="inner-zoom" style="position: relative; overflow: hidden;"><img class="img-responsive" src="images/p-details-z-2.jpg" alt="" width="700" height="700"><img src="images/p-details-z-2.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 700px; height: 700px; border: medium none; max-width: none; max-height: none;"></span> </div>
                          <div class="item"><span class="inner-zoom" style="position: relative; overflow: hidden;"> <img class="img-responsive" src="images/p-details-z-3.jpg" alt="" width="700" height="700"> <img src="images/p-details-z-3.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 700px; height: 700px; border: medium none; max-width: none; max-height: none;"></span></div>
                          <div class="item"> <span class="inner-zoom" style="position: relative; overflow: hidden;"><img class="img-responsive" src="images/p-details-z-4.jpg" alt="" width="700" height="700"> <img src="images/p-details-z-4.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 700px; height: 700px; border: medium none; max-width: none; max-height: none;"></span></div>
                        </div>
                        <div class="carousel-link clearfix">
                          <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="images/p-details-z-1.jpg" alt=""></div>
                          <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="images/p-details-z-2.jpg" alt=""></div>
                          <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="images/p-details-z-3.jpg" alt=""></div>
                          <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="images/p-details-z-4.jpg" alt=""></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 sub-info">
                      <div class="product-name">
                        <h5 class="text-primary text-uppercase">Guse duma liza</h5>
                      </div>
                      <div class="product-review">
                        <p><a href="#"><small>Be the first to review this product</small></a></p>
                      </div>
                      <div class="product-description">
                        <h5 class="text-primary text-uppercase">Quick Overview</h5>
                        <p> At vero eos et accusamus et iusto odio quos dolores sint occaecati cupiditate non provident, similique sunt in culpa dignis simos</p>
                      </div>
                      <div class="product-availability in-stock">
                        <p>Availability: <span class="text-info">In Stock</span></p>
                      </div>
                      <div class="product-price clearfix"> <span class="pull-left btn btn-primary"><strong>$365</strong></span> <span class="pull-left btn btn-link"><del>$400</del></span> </div>
                      <div class="product-size">
                        <h5 class="text-primary text-uppercase">select size</h5>
                        <form role="form">
                          <fieldset>
                            <div class="radio radio-inline">
                              <input id="inlineRadio-s" value="option1" name="radioInline" checked="" type="radio">
                              <label for="inlineRadio-s"> S </label>
                            </div>
                            <div class="radio radio-inline">
                              <input id="inlineRadio-m" value="option2" name="radioInline" type="radio">
                              <label for="inlineRadio-m"> M </label>
                            </div>
                            <div class="radio radio-inline">
                              <input id="inlineRadio-l" value="option3" name="radioInline" type="radio">
                              <label for="inlineRadio-l"> L </label>
                            </div>
                            <div class="radio radio-inline">
                              <input id="inlineRadio-xl" value="option0" name="radioInline0" type="radio">
                              <label for="inlineRadio-xl"> XL </label>
                            </div>
                            <span class="pull-right"><a href="javascript:void(0)" data-toggle="modal" data-target="#choosing-size-box"><small>Need help in choosing size?</small></a></span>
                          </fieldset>
                        </form>
                        <div class="product-colors">
                          <h5 class="text-primary text-uppercase">select color</h5>
                          <select name="colorpicker-bootstrap3-form" id="colorpicker-bootstrap3-form" class="form-control" style="display: none;">
                            <option value="#7bd148">Green</option>
                            <option value="#5484ed">Bold blue</option>
                            <option value="#a4bdfc">Blue</option>
                            <option value="#46d6db">Turquoise</option>
                            <option value="#7ae7bf">Light green</option>
                            <option value="#51b749">Bold green</option>
                            <option value="#fbd75b">Yellow</option>
                            <option value="#ffb878">Orange</option>
                            <option value="#ff887c">Red</option>
                            <option value="#dc2127">Bold red</option>
                            <option value="#dbadff">Purple</option>
                            <option value="#e1e1e1">Gray</option>
                          </select><span class="simplecolorpicker inline ionicons"><span class="color" title="Green" style="background-color: #7bd148;" data-color="#7bd148" data-selected="" role="button" tabindex="0"></span><span class="color" title="Bold blue" style="background-color: #5484ed;" data-color="#5484ed" role="button" tabindex="0"></span><span class="color" title="Blue" style="background-color: #a4bdfc;" data-color="#a4bdfc" role="button" tabindex="0"></span><span class="color" title="Turquoise" style="background-color: #46d6db;" data-color="#46d6db" role="button" tabindex="0"></span><span class="color" title="Light green" style="background-color: #7ae7bf;" data-color="#7ae7bf" role="button" tabindex="0"></span><span class="color" title="Bold green" style="background-color: #51b749;" data-color="#51b749" role="button" tabindex="0"></span><span class="color" title="Yellow" style="background-color: #fbd75b;" data-color="#fbd75b" role="button" tabindex="0"></span><span class="color" title="Orange" style="background-color: #ffb878;" data-color="#ffb878" role="button" tabindex="0"></span><span class="color" title="Red" style="background-color: #ff887c;" data-color="#ff887c" role="button" tabindex="0"></span><span class="color" title="Bold red" style="background-color: #dc2127;" data-color="#dc2127" role="button" tabindex="0"></span><span class="color" title="Purple" style="background-color: #dbadff;" data-color="#dbadff" role="button" tabindex="0"></span><span class="color" title="Gray" style="background-color: #e1e1e1;" data-color="#e1e1e1" role="button" tabindex="0"></span></span>
                        </div>
                      </div>
                      <div class="product-quantity">
                        <h5 class="text-primary text-uppercase">select quantity</h5>
                        <div class="qty-btngroup clearfix pull-left">
                          <button type="button" class="minus">-</button>
                          <input value="1" type="text">
                          <button type="button" class="plus">+</button>
                        </div>
                        <a href="#" class="btn btn-primary pull-left hvr-underline-from-center-primary">Add To Cart</a> </div>
                    </div>
                  </div>
                  <hr>
                </div>
                
                <!--end of product deatils--> 
                
                <!--start of product data-->
                <div class="col-sm-12 accordion">
                  <div role="tabpanel"> 
                    
                    <!-- Nav tabs -->
                    
                    <ul id="product-tabs" class="nav nav-tabs text-uppercase" role="tablist">
                      <li role="presentation" class="active"><a href="#descreption" aria-controls="descreption" role="tab" data-toggle="tab">Descreption</a></li>
                      <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
                      <li role="presentation"><a href="#tags" aria-controls="tags" role="tab" data-toggle="tab">Add your review</a></li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class=" tab-pane product-pane fade in active clearfix" id="descreption">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum.</p>
                        <p> Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a
                          
                          Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which has since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. </p>
                      </div>
                      <div role="tabpanel" class=" tab-pane product-pane fade in clearfix" id="reviews">
                        <div class="single-review clearfix">
                          <h5 class="text-primary">Aliquam lorem ante <small class=" text-info"><strong>20 minutes ago, 2015</strong></small> </h5>
                          <p><span class="reviews-ratings text-info"><i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star-half"></i></span></p>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                          <hr>
                        </div>
                        <div class="single-review clearfix">
                          <h5 class="text-primary">Client Review <small class=" text-info"><strong>February 18, 2015</strong></small> </h5>
                          <p><span class="reviews-ratings text-info"><i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star-half"></i></span></p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit nisl in adipiscin</p>
                          <hr>
                        </div>
                        <div class="single-review clearfix">
                          <h5 class="text-primary">Client Review <small class=" text-info"><strong>February 21, 2015</strong></small> </h5>
                          <p><span class="reviews-ratings text-info"><i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star-half"></i></span></p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit nisl in adipiscin</p>
                          <hr>
                        </div>
                        <div class="single-review clearfix">
                          <h5 class="text-primary">Client Review <small class=" text-info"><strong>March 17, 2015</strong></small> </h5>
                          <p><span class="reviews-ratings text-info"><i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star-half"></i></span></p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit nisl in adipiscin</p>
                          <hr>
                        </div>
                        <div class="single-review clearfix">
                          <h5 class="text-primary">Client Review <small class=" text-info"><strong>March 17, 2015</strong></small> </h5>
                          <p><span class="reviews-ratings text-info"><i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star"></i> <i class="ion-android-star-half"></i></span></p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit nisl in adipiscin</p>
                        </div>
                      </div>
                      <div role="tabpanel" class=" tab-pane product-pane fade in clearfix" id="tags">
                        <form role="form">
                          <fieldset>
                            <h5 class="sub-title text-primary text-uppercase">price</h5>
                            <div class="form-group">
                              <div class="radio radio-inline">
                                <input id="inlineRadio1" value="option1" name="radioInline1" type="radio">
                                <label class="control-label" for="inlineRadio5"> 1 Star</label>
                              </div>
                              <div class="radio radio-inline">
                                <input id="inlineRadio2" value="option2" name="radioInline1" type="radio">
                                <label class="control-label" for="inlineRadio2"> 2 Stars </label>
                              </div>
                              <div class="radio radio-inline">
                                <input id="inlineRadio3" value="option3" name="radioInline1" type="radio">
                                <label class="control-label" for="inlineRadio3"> 3 Stars </label>
                              </div>
                              <div class="radio radio-inline">
                                <input id="inlineRadio4" value="option4" name="radioInline1" type="radio">
                                <label class="control-label" for="inlineRadio4"> 4 Stars </label>
                              </div>
                              <div class="radio radio-inline">
                                <input id="inlineRadio5" value="option5" name="radioInline1" type="radio">
                                <label class="control-label" for="inlineRadio5"> 5 Stars </label>
                              </div>
                            </div>
                          </fieldset>
                          <fieldset>
                            <h5 class="sub-title text-primary text-uppercase">quality</h5>
                            <div class="form-group">
                              <div class="radio radio-inline">
                                <input id="inlineRadio6" value="option6" name="radioInline2" type="radio">
                                <label class="control-label" for="inlineRadio6"> 1 Star</label>
                              </div>
                              <div class="radio radio-inline">
                                <input id="inlineRadio7" value="option7" name="radioInline2" type="radio">
                                <label class="control-label" for="inlineRadio7"> 2 Stars </label>
                              </div>
                              <div class="radio radio-inline">
                                <input id="inlineRadio8" value="option8" name="radioInline2" type="radio">
                                <label class="control-label" for="inlineRadio8"> 3 Stars </label>
                              </div>
                              <div class="radio radio-inline">
                                <input id="inlineRadio9" value="option9" name="radioInline2" type="radio">
                                <label class="control-label" for="inlineRadio9"> 4 Stars </label>
                              </div>
                              <div class="radio radio-inline">
                                <input id="inlineRadio10" value="option10" name="radioInline2" type="radio">
                                <label class="control-label" for="inlineRadio10"> 5 Stars </label>
                              </div>
                            </div>
                          </fieldset>
                          <fieldset>
                            <h5 class="sub-title text-primary text-uppercase">value</h5>
                            <div class="form-group">
                              <div class="radio radio-inline">
                                <input id="inlineRadio11" value="option11" name="radioInline3" type="radio">
                                <label class="control-label" for="inlineRadio11"> 1 Star</label>
                              </div>
                              <div class="radio radio-inline">
                                <input id="inlineRadio12" value="option12" name="radioInline3" type="radio">
                                <label class="control-label" for="inlineRadio12"> 2 Stars </label>
                              </div>
                              <div class="radio radio-inline">
                                <input id="inlineRadio13" value="option13" name="radioInline3" type="radio">
                                <label class="control-label" for="inlineRadio13"> 3 Stars </label>
                              </div>
                              <div class="radio radio-inline">
                                <input id="inlineRadio14" value="option14" name="radioInline3" type="radio">
                                <label class="control-label" for="inlineRadio14"> 4 Stars </label>
                              </div>
                              <div class="radio radio-inline">
                                <input id="inlineRadio15" value="option15" name="radioInline3" type="radio">
                                <label class="control-label" for="inlineRadio15"> 5 Stars </label>
                              </div>
                            </div>
                          </fieldset>
                          <br>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label class="control-label" for="exampleInputName">Your Name <span class="req">*</span></label>
                                <input placeholder="" id="exampleInputName" class="form-control txt" type="text">
                              </div>
                              <div class="form-group">
                                <label class="control-label" for="exampleInputSummary">Summary <span class="req">*</span></label>
                                <input placeholder="" id="exampleInputSummary" class="form-control txt" type="text">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="control-label" for="exampleInputReview">Review <span class="req">*</span></label>
                                <textarea placeholder="" rows="4" id="exampleInputReview" class="form-control"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <button class="btn btn-primary hvr-underline-from-center-primary">SUBMIT REVIEW</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <br>
                </div>
                <!--end of product data--> 
                
                <!--start of related products-->
                <div class="col-sm-12">
                  <div class="row"> 
                    <!--start of big title-->
                    <div class="col-sm-12">
                      <h5 class="sub-title text-primary text-uppercase">related products</h5>
                    </div>
                    <!--end of big title--> 
                    <!--start of product item container-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4  product-item-container effect-wrap effect-animate">
                      <div class="product-main">
                        <div class="product-view">
                          <figure class="double-img"><a href="#"><img class="btm-img" src="images/product-1-h.jpg" alt="" width="215" height="240"> <img class="top-img" src="images/product-3.jpg" alt="" width="215" height="240"></a></figure>
                          <span class="label offer-label-left">big deal</span> <span class="label offer-label-right">10% sold</span> </div>
                        <div class="product-btns  effect-content-inner">
                          <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Add To Cart"><span class="cart ion-bag"></span></a></p>
                          <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Wishlist"><span class="fav ion-ios-star"></span></a></p>
                          <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Compare"> <span class="compare ion-android-funnel"></span> </a></p>
                          <p class="effect-icon"> <a data-toggle="modal" data-target="#quick-view-box" class="hint-top" data-hint="Quick View"><span class="ion-ios-eye view"></span> </a></p>
                        </div>
                      </div>
                      <div class="product-info">
                        <h3 class="product-name"><a href="product-details.html">Draped-front wool cardigan</a></h3>
                      </div>
                      <div class="product-price"><span class="real-price text-info"><strong>$75.00</strong></span> <span class="old-price">$75.00</span> </div>
                      <div class="product-evaluate text-info"> <i class="ion-android-star"></i><i class="ion-android-star"></i><i class="ion-android-star"></i><i class="ion-android-star"></i><i class="ion-android-star-half"></i> </div>
                    </div>
                    <!--end of product item container--> 
                    
                    <!--start of product item container-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4  product-item-container effect-wrap effect-animate">
                      <div class="product-main">
                        <div class="product-view">
                          <figure class="double-img"><a href="#"><img class="btm-img" src="images/product-1-h.jpg" alt="" width="215" height="240"> <img class="top-img" src="images/product-1.jpg" alt="" width="215" height="240"></a></figure>
                          <span class="label offer-label-left">big deal</span> <span class="label offer-label-right">10% sold</span> </div>
                        <div class="product-btns  effect-content-inner">
                          <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Add To Cart"><span class="cart ion-bag"></span></a></p>
                          <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Wishlist"><span class="fav ion-ios-star"></span></a></p>
                          <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Compare"> <span class="compare ion-android-funnel"></span> </a></p>
                          <p class="effect-icon"> <a data-toggle="modal" data-target="#quick-view-box" class="hint-top" data-hint="Quick View"><span class="ion-ios-eye view"></span> </a></p>
                        </div>
                      </div>
                      <div class="product-info">
                        <h3 class="product-name"><a href="product-details.html">Draped-front wool cardigan</a></h3>
                      </div>
                      <div class="product-price"><span class="real-price text-info"><strong>$75.00</strong></span> <span class="old-price">$75.00</span> </div>
                      <div class="product-evaluate text-info"> <i class="ion-android-star"></i><i class="ion-android-star"></i><i class="ion-android-star"></i><i class="ion-android-star"></i><i class="ion-android-star-half"></i> </div>
                    </div>
                    <!--end of product item container--> 
                    
                    <!--start of product item container-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4  product-item-container effect-wrap effect-animate">
                      <div class="product-main">
                        <div class="product-view">
                          <figure class="double-img"><a href="#"><img class="btm-img" src="images/product-1-h.jpg" alt="" width="215" height="240"> <img class="top-img" src="images/product-2.jpg" alt="" width="215" height="240"></a></figure>
                          <span class="label offer-label-left">big deal</span> <span class="label offer-label-right">10% sold</span> </div>
                        <div class="product-btns  effect-content-inner">
                          <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Add To Cart"><span class="cart ion-bag"></span></a></p>
                          <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Wishlist"><span class="fav ion-ios-star"></span></a></p>
                          <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Compare"> <span class="compare ion-android-funnel"></span> </a></p>
                          <p class="effect-icon"> <a data-toggle="modal" data-target="#quick-view-box" class="hint-top" data-hint="Quick View"><span class="ion-ios-eye view"></span> </a></p>
                        </div>
                      </div>
                      <div class="product-info">
                        <h3 class="product-name"><a href="product-details.html">Draped-front wool cardigan</a></h3>
                      </div>
                      <div class="product-price"><span class="real-price text-info"><strong>$75.00</strong></span> <span class="old-price">$75.00</span> </div>
                      <div class="product-evaluate text-info"> <i class="ion-android-star"></i><i class="ion-android-star"></i><i class="ion-android-star"></i><i class="ion-android-star"></i><i class="ion-android-star-half"></i> </div>
                    </div>
                    <!--end of product item container--> 
                    
                  </div>
                </div>
                <!--end of related products--> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>