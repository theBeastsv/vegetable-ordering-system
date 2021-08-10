<!-- Nav tabs -->
<ul class="nav nav-tabs mb25" role="tablist">
     <li role="presentation" class="active"><a href="#popular-products" aria-controls="popular-products" role="tab" data-toggle="tab"><strong>Sellers</strong></a></li>

    <li role="presentation"><a href="#recent-products" aria-controls="recent-products" role="tab" data-toggle="tab"><strong>Recent Products</strong></a></li>
 
</ul>

<!-- Tab Panes -->

<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="popular-products">
        <div class="products-container max-col-4">
            <div class="shop-row">

               <? $typeofshowmen=1;
			   $myprd=showallmasterprimeprd($typeofshowmen);  echo $myprd;?>
                       
            </div><!-- end .row -->
        </div><!-- End .products-container -->
    </div><!-- End .tab-pane -->
    <div role="tabpanel" class="tab-pane" id="recent-products">
        <div class="products-container max-col-4">
            <div class="shop-row">
                        <? $typeofshowmen=2;
			   $myprd=showallmasterprimeprd($typeofshowmen);  echo $myprd;?>
            </div><!-- end .row -->
        </div><!-- End .products-container -->
    </div><!-- End .tab-pane -->
    
</div>