<div class="container">
                    <h2 class="mb300">REGISTER ACOUNT</h2>
                    <form action="forms/signupuser.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="inputname" type="text" class="form-control validate[required] text-input" id="inputname" placeholder="Your Name">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="inputlastname" type="text" class="form-control validate[required] text-input" id="inputlastname" placeholder="Your Lastname">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->

                        <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="inputemail" type="email" class="form-control validate[required,custom[email]] text-input" id="inputemail" placeholder="Email">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                   <label>Mobile Phone</label>
                                    <input name="mobileno" type="text" class="form-control validate[required,custom[phone]] text-input" id="mobileno" placeholder="Mobile Phone">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
                        
                        <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                     <label>Password</label>
                                    <input type="password" id="inputpasswordcurrent" name="inputpasswordcurrent" class="form-control validate[required] text-input" placeholder="password" >
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <label>Retype Password</label>
                                    <input type="password" class="form-control validate[required,equals[inputpasswordcurrent]] text-input" placeholder="password" >
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
 <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                  <label>Country</label>
                                    <select name="countrys" class="form-control validate[required] text-input" id="countrys" onChange="loadallstates(this.value);">
                                        <?
										$rtsh='<option value="">Select One</option>';
                                        $mcxvshow= show_selecttable($debug,$limitstring,$conn,'ud_countries','rowId,name','',$limits,1,' rowId ASC');
										foreach( $mcxvshow as $ssxgbw ) { 
										$name=$ssxgbw['name'];
										$rowId=$ssxgbw['rowId'];
										$rtsh=$rtsh.'<option value="'.$rowId.'">'.$name.'</option>';
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
                                    </select>
                                    </span>
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                   <label>Postal Code</label>
                                    <input name="postalcode" type="text" class="form-control validate[required] text-input" id="postalcode" placeholder="Address">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
  <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                     <label>Address</label>
                                    <input name="daddress" type="text" class="form-control validate[required] text-input" id="daddress"  placeholder="Second Address">
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
                                    <input type="checkbox" id="tocagree" name="tocagree" value="true" class="validate[required] checkbox" checked>
                                    <span class="custom-checkbox-icon"></span>
                                </span>
                               <span>I have read and agree on the <a href="#">Privacy Policy</a>.</span>
                              </label>
                            </div><!-- End .checkbox -->
                        </div><!-- End .form-group -->

                        <div class="form-group mb25">
                            <div class="checkbox">
                              <label class="custom-checkbox-wrapper">
                                <span class="custom-checkbox-container">
                                    <input type="checkbox"  id="newsletter" name="newsletter"  value="true" class="validate[required] checkbox" checked>
                                    <span class="custom-checkbox-icon"></span>
                                </span>
                               <span>I want to subscribe to newsletter.</span>
                              </label>
                            </div><!-- End .checkbox -->
                        </div><!-- End .form-group -->

                        <div class="form-group mb5">
                            <input type="submit" class="btn btn-custom min-width" value="Register Now">
                        </div><!-- End .from-group -->
                    </form>
                </div><!-- End .container -->
                