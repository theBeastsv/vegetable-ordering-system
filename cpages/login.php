 <div class="container">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <h2 class="mb30">Login</h2>
								<? $errCode=$_SESSION['unvalidate'];
								if($errCode==12){
									$signma='  <div class="row">
                                        <div class="col-xs-12"><div class="alert alert-danger">
  <strong>Oops !</strong> No such user (\''.$_SESSION['tologusername'].'\')  Registerd with us
</div></div></div>';
									}
								if($errCode==14){
									$signma='  <div class="row">
                                        <div class="col-xs-12"><div class="alert alert-danger">
  <strong>Oops !</strong> Invalid Password for  user (\''.$_SESSION['tologusername'].'\') 
</div></div></div>';
									}
								?>
                                <form action="checklog.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" id="binemail" name="binemail" class="form-control validate[required,custom[email]] text-input" placeholder="EMail ID" >
                                    </div><!-- End .from-group -->

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" id="binpassword" name="binpassword" class="form-control validate[required] text-input" placeholder="Password"  >
                                    </div><!-- End .from-group -->

                                    <div class="row">
                                        <div class="col-xs-6 mt10-r">
                                            <div class="checkbox mb25">
                                              <label class="custom-checkbox-wrapper">
                                                <span class="custom-checkbox-container">
                                                    <input type="checkbox" value="true">
                                                    <span class="custom-checkbox-icon"></span>
                                                </span>
                                               <small>Remember me</small>
                                              </label>
                                            </div><!-- End .checkbox -->
                                        </div><!-- End .col-xs-6 -->
								
                                        <div class="col-xs-6 mt10-r text-right">
                                            <a href="#"><small>Recover Password?</small></a>
                                        </div><!-- End .col-xs-6 -->
                                    </div><!-- End .row -->
<? echo $signma;?>
                                    <button class="btn btn-custom min-width">Login Now</button>
                                </form>
                        </div><!-- End .col-sm-6 -->

                        <div class="clearfix mb40 visible-xs"></div><!--margin -->

                        <div class="col-sm-6 ">
                            <h2 class="mb30">Register</h2>
                            
                            <p>New user , Signup here</p>

                            <div class="mb10"></div><!-- margin -->

                            <a href="register.php" class="btn btn-black min-width">Register Now</a>
                        </div><!-- End .col-sm-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->