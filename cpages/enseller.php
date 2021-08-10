<?
$KesOnUserId=$_SESSION['KesOnUserId'];
 $mcxvshow= show_selecttable($debug,$limitstring,$conn,'user_buyer','*','WHERE rowId=\''.$KesOnUserId.'\'',$limit,1,' rowId ASC'); 
		foreach( $mcxvshow as $ssxgbw ) { 
		}
		
?><div class="container" style="padding-top:15px;">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3" style="padding:5px;">
                          <h2>Enroll as Seller</h2>
                          <div class="blog-row"  style="padding:15px;">
                         <form action="forms/becomeseler.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                        
                       
                        
                            <div class="col-sm-6 ">
                              <div class="form-group">
                                <label>Name</label>
                                  <input name="first_name" type="text" class="form-control validate[required] text-input" id="first_name" placeholder="Your Name" value="<?=$ssxgbw['inputname'];?>">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                              <div class="form-group">
                                <label>Last Name</label>
                                  <input name="last_name" type="text" class="form-control validate[required] text-input" id="last_name" placeholder="Your Lastname" value="<?=$ssxgbw['inputlastname'];?>">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
                         <h2>Business Details<hr /></h2>
<div class="row">
                        
                       
                        
                            <div class="col-sm-6 ">
                              <div class="form-group">
                                <label>Company Type</label>
                                 <select name="company_type" id="company_type" class="form-control validate[required] text-input">
                                   <option value="1">Propriter</option>
                                   <option value="2">Partnership</option>
                                   <option value="3">Private Limited</option>
                                   <option value="4">Limited</option>
                                 </select> 
                                  
                              </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                              <div class="form-group">
                                <label>Company Name</label>
                                  <input name="company_name" type="text" class="form-control validate[required] text-input" id="company_name" placeholder="Your COMPANY NAME" value="<?=$ssxgbw['company_name'];?>">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
                        <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email_id" type="email" class="form-control validate[required,custom[email]] text-input" id="email_id" placeholder="Email" value="<?=$ssxgbw['inputemail'];?>" readonly="readonly">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                              <div class="form-group">
                                <label>Mobile Phone</label>
                                  <input name="mobile_number" type="text" class="form-control validate[required] text-input" id="mobile_number" placeholder="Mobile Phone" value="<?=$ssxgbw['mobileno'];?>">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
                        
                      
 <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                  <label>PAN CARD  </label>
                                       <input name="pan_card_number" type="text" class="form-control validate[required] text-input" id="pan_card_number" placeholder="PAN CARD" value=""> 
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <label>ADHAR CARD</label>
                                   <span id="laodstate">       <input name="adhar_number" type="text" class="form-control validate[required] text-input" id="adhar_number" placeholder="Adhar Card" value=""> </span>
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
                        <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                     <label>GST</label>
                                  <span id="laodccity"> 
                                 <input name="gst_number" type="text" class="form-control validate[required] text-input" id="gst_number" placeholder="GST NUMBER or NOTAPPLIED " value="">      
                                  </span>
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <div class="alert alert-info">
 <small> <strong>Caution!</strong> incase  you dont have GST then write "<strong>NOTAPPLIED</strong>". it may reflect in high charges applied in invoicing</small>
</div>
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
  <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                     <label>Website</label>
                                    <input name="website" type="text" class="form-control validate[optional,custom[url]] text-input" id="website"  placeholder="Second Address" value="">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                   
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
                        <h2>Address<hr /></h2>
                       <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                  <label>Country  </label>
                                    <select name="countrys" class="form-control validate[required] text-input" id="countrys" onChange="loadallstates(this.value);">
                                        <?
										$rtsh='<option value="">Select One</option>';
                                        $mcxvshow= show_selecttable($debug,$limitstring,$conn,'ud_countries','rowId,name','',$limits,1,' rowId ASC');
										foreach( $mcxvshow as $xbw ) { 
										$name=$xbw['name'];
										$ocountry=$xbw['rowId'];
										if($ocountry==$ssxgbw['countrys']){$sxings='selected';}else{$sxings='';}
										$rtsh=$rtsh.'<option value="'.$ocountry.'" '.$sxings.'>'.$name.'</option>';
										}
										echo $rtsh;
										?>
                                    </select>
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <label>State</label>
                                   <span id="laodstate"> <select name="states" class="form-control validate[required] text-input" id="states"> 
                                   <?
                                  $mfshow= show_selecttable($debug,$limitstring,$conn,'ud_states','rowId,name,country_id','WHERE country_id=\''.$ssxgbw['countrys'].'\'',$limit,1,' rowId ASC');
		$thcbel='';
		foreach( $mfshow as $xsxbw ) { 
			$name			=$xsxbw['name'];
			$stateId			=$xsxbw['rowId'];
			if($stateId==$ssxgbw['states']){$scngs='selected';}else{$scngs='';}

			$thcbel=$thcbel.'<option value="'.$stateId.'" '.$scngs.'>'.$name.'</option>'; 
			}
			echo $thcbel;
								   ?>
                                    </select></span>
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
                        <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                     <label>City</label>
                                  <span id="laodccity"> 
                                  <select name="mastercity" class="form-control validate[required] text-input" id="mastercity">  
                                  <?
                                 $thbbel='';
								  $uhow= show_selecttable($debug,$limitstring,$conn,'ud_cities','rowId,name,state_id','WHERE state_id=\''.$ssxgbw['states'].'\'',$limit,1,' rowId ASC');
		foreach( $uhow as $suhow ) { 
			$namecity			=$suhow['name'];
			$roxwgId			=$suhow['rowId'];
			if($roxwgId==$ssxgbw['mastercity']){$sxcvcngs='selected';}else{$sxcvcngs='';}
			
			$thbbel=$thbbel.'<option value="'.$roxwgId.'" '.$sxcvcngs.'>'.$namecity.'</option>'; 
			}
			echo $thbbel;
			
								  ?>
                                  </select>
                                  </span>
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                   <label>Postal Code</label>
                                    <input name="postalcode" type="text" class="form-control validate[required] text-input" id="postalcode" placeholder="Address" value="<?=$ssxgbw['postalcode'];?>">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
  <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                     <label>Address</label>
                                    <input name="daddress" type="text" class="form-control validate[required] text-input" id="daddress"  placeholder="Second Address" value="<?=$ssxgbw['daddress'];?>">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                   
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
 <div class="row">
                            <div class="col-sm-12 ">
                                <div class="form-group">
                                     <label>About your Creation</label>
                                    <textarea name="seller_description" id="seller_description" class="form-control validate[required] text-input" ></textarea> 
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                   
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
                        <div class="mb10"></div><!-- space -->

                        <div class="form-group mb0">
                            <div class="checkbox">
                              <label class="custom-checkbox-wrapper">
                                <span class="custom-checkbox-container">
                                    <input type="checkbox" id="tocagree" name="tocagree" value="true" class="validate[required] checkbox" checked  disabled="disabled">
                                    <span class="custom-checkbox-icon"></span>
                                </span>
                               <span>I have read and agree on the <a href="#">Seller Terms & Condition , Privacy Policy ,Cookie policy ,Cancellation policy ,Return Policy</a>.</span>
                              </label>
                            </div><!-- End .checkbox -->
                        </div><!-- End .form-group -->

                        <div class="form-group mb25">
                            <div class="checkbox">
                              <label class="custom-checkbox-wrapper">
                                <span class="custom-checkbox-container">
                                    <input type="checkbox"  id="newsletter" name="newsletter"  value="true" class="validate[required] checkbox" checked disabled="disabled">
                                    <span class="custom-checkbox-icon"></span>
                                </span>
                               <span>I want to subscribe to newsletter.</span>
                              </label>
                            </div><!-- End .checkbox -->
                        </div><!-- End .form-group -->

                        <div class="form-group mb5">
                            <input type="submit" class="btn btn-custom min-width" value="Enroll Now">
                        </div><!-- End .from-group -->
                    </form>
                           </div>
                       
                        <div class="mb10"></div><!-- space -->

                             
                            </div><!-- End .row -->
 

                        <aside class="col-md-3 col-md-pull-9 sidebar">
                           
                           <? include("incfiles/myaccount_ader.php");?><!-- End .widget --><!-- End .widget --><!-- End .widget -->
                        </aside>
                    </div><!-- End .row -->
                </div>