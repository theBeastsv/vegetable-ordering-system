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
                                                   BILLING ADDRESS
                                                </a>
                                            </h4>
                                        </div><!-- End .panel-heading -->
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <form id="billingaddresx" name="billingaddresx">
                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <label>Your Country *</label>
                                                            <select id="bill_countrys" name="bill_countrys" class="form-control" onChange="loadaxllstate(this.value,'bill_states')">
                                                                <? echo $getallCountries;?>
                                                            </select>
                                                        </div><!-- End .col-sm-6 -->
                                                        <div class="form-group col-sm-6">
                                                            <label>Region/State *</label>
                                                           <span  id="pbill_states"> <select class="form-control">
                                                                <option value="">select one</option> 
                                                            </select></span>
                                                        </div><!-- End .col-sm-6 -->
                                                    </div><!-- end .row -->
                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <label>City</label>
                                                            <span id="pbill_citys"><select class="form-control">
                                                                <option value="">select one</option> 
                                                            </select></span>
                                                        </div><!-- End .col-sm-6 -->
                                                        <div class="form-group col-sm-6">
                                                             <label>Post Code</label>
                                                            <input id="bill_postalcode" name="bill_postalcode" type="text" class="form-control" placeholder="Post Code" required> 
                                                        </div><!-- End .col-sm-6 -->
                                                    </div><!-- end .row -->
                                                    <div class="row">
                                                        <div class="form-group col-sm-12">
                                                            <label>Address</label>
                                                            <input type="text" id="bill_address" name="bill_address" class="form-control" placeholder="Address with Landmark" required>
                                                        </div><!-- End .col-sm-6 -->
                                                        
                                                    </div><!-- end .row -->
                         
                         <input name="typeofaddress" id="typeofaddress" type="hidden" value="billing">
                         <input name="formIds" id="formIds" type="hidden" value="billingaddresx">
                                                    <button type="button" onClick="savemyaddress('billingaddresx')" class="btn btn-black">Apply Address</button>
                                                </form>
                                            </div><!-- End .panel-body -->
                                        </div><!-- End .panel-collapse -->
                                    </div><!-- End .panel -->
                                    <div class="panel panel-custom">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                SHIPPING ADDRESS
                                                </a>
                                            </h4>
                                        </div><!-- End .panel-heading -->
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                 <form id="shipping" name="shipping">
                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <label>Your Country *</label>
                                                            <select id="shipp_countrys" name="shipp_countrys" class="form-control" onChange="loadaxllstate(this.value,'shipp_states')">
                                                                <? echo $getallCountries;?>
                                                            </select>
                                                        </div><!-- End .col-sm-6 -->
                                                        <div class="form-group col-sm-6">
                                                            <label>Region/State *</label>
                                                           <span  id="pshipp_states"> <select class="form-control">
                                                                <option value="">select one</option> 
                                                            </select></span>
                                                        </div><!-- End .col-sm-6 -->
                                                    </div><!-- end .row -->
                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <label>City</label>
                                                            <span id="pshipp_citys"><input type="text" class="form-control" placeholder="Post Code" required></span>
                                                        </div><!-- End .col-sm-6 -->
                                                        <div class="form-group col-sm-6">
                                                             <label>Postal Code</label>
                                                             <input id="shipp_postalcode" name="shipp_postalcode" type="text" class="form-control" placeholder="Post Code" required>  
                                                        </div><!-- End .col-sm-6 -->
                                                    </div><!-- end .row -->
                                                    <div class="row">
                                                        <div class="form-group col-sm-12">
                                                            <label>Address</label>
                                                            <input type="text" id="shipp_address" name="shipp_address" class="form-control" placeholder="Address with Landmark" required>
                                                        </div><!-- End .col-sm-6 -->
                                                        
                                                    </div><!-- end .row -->
                                                    <input name="typeofaddress" id="typeofaddress" type="hidden" value="shipping">
                                                     <input name="formIds" id="formIds" type="hidden" value="shipping">
                                                     <button  type="button" onClick="savemyaddress('shipping')" class="btn btn-black">Apply Address</button>
                                                </form>
                                            </div><!-- End .panel-body -->
                                        </div><!-- End .panel-collapse -->
                                    </div><!-- End .panel -->
                                    <div class="panel panel-custom">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  TERMS & CONDITION
                                                </a>
                                            </h4>
                                        </div><!-- End .panel-heading -->
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <label>Pleae write a username you want to send gift to</label>
                                                            <input type="text" class="form-control" placeholder="A username">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-black">Send Gift</button>
                                                </form>
                                            </div><!-- End .panel-body -->
                                        </div><!-- End .panel-collapse -->
                                    </div><!-- End .panel -->
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
                            <a href="checkout.php" class="btn btn-custom">CHECKOUT</a>
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div>