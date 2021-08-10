<?

$getallCountries='<option value="">Select One</option>';
$contId= show_selecttable($debug,$limitstring,$conn,'ud_countries','rowId,name','',$limits,1,' rowId ASC');
										foreach( $contId as $rowCountri) { 
										$name=$rowCountri['name'];
										$countryId=$rowCountri['rowId'];
										$getallCountries=$getallCountries.'<option value="'.$countryId.'">'.$name.'</option>';
										}
										
										

?>

<div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="shipping-container">
                              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-custom">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                   TERMS & CONDITION
                                                </a>
                                            </h4>
                                        </div><!-- End .panel-heading -->
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                             
                                                    <div class="row">
                                                        <div class="form-group col-sm-12">
                                                            <label>TERMS & CONDITION</label>
                                                            <textarea name="toc" class="form-control"></textarea>
                                                        </div><!-- End .col-sm-6 -->
                                                        
                                                    </div><!-- end .row -->
                                                     
                          
                                               
                                            </div><!-- End .panel-body -->
                                        </div><!-- End .panel-collapse -->
                                  </div><!-- End .panel --><!-- End .panel --><!-- End .panel -->
                                </div><!-- End .panel-group -->
                            </div><!-- End .shipping-container -->
                        </div><!-- End .col-md-7 -->

                        <div class="col-md-5">
                            <table class="table table-bordered total-table">
                                <tr>
                                    <td>Subtotal:</td>
                                    <td><?=CURRENCY_DEFAULT;?><?=$overallamount;?></td>
                                </tr>
                                <tr>
                                    <td>Shipping:</td>
                                    <td><?=CURRENCY_DEFAULT;?><?=$shipping_price;?></td>
                                </tr>
                                <tr>
                                    <td>Tax:</td>
                                    <td><?=CURRENCY_DEFAULT;?>0.00</td>
                                </tr>
                                <tr class="total-row">
                                    <td>Total:</td>
                                    <td><?=CURRENCY_DEFAULT;?><?=$netpayable;?></td>
                                </tr>
                            </table>
                            <a href="category.php" class="btn btn-black">Continue Shopping</a>
                            <a href="javascript:void(0)" onClick="itocheckout();" class="btn btn-custom">CHECKOUT</a>
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div>