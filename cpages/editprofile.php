<?
$KesOnUserId=$_SESSION['KesOnUserId'];
 $mcxvshow= show_selecttable($debug,$limitstring,$conn,'user_buyer','*','WHERE rowId=\''.$KesOnUserId.'\'',$limit,1,' rowId ASC'); 
		foreach( $mcxvshow as $ssxgbw ) { 
		}
?><div class="container" style="padding-top:15px;">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3" style="padding:5px;">
                        <div class="blog-row"  style="padding:15px;">
                         <div class="page-wrapper">
    <div class="timeline-header-wrapper">

 <div class="cover-container">
        <div class="cover-wrapper" >
            <img src="<?=$_SESSION['KesOnUserBannerPTHA'].'/'.$_SESSION['KesOnUserBannerDIPIC'];?>" alt="w3lessons.info"  >
            <div class="cover-progress"></div>
        </div>
        
        <div class="cover-resize-wrapper">
            <img src="<?=$_SESSION['KesOnUserBannerPIC'];?>" alt="w3lessons.info">
            <div class="drag-div" align="center">Drag to reposition</div>
            <div class="cover-progress"></div>
        </div>

                <div class="avatar-wrapper">
            <img class="avatar" src="<?=$_SESSION['KesOnUserPIC'];?>" alt="<?=$_SESSION['KesUseFname'];?>">
                        <div class="avatar-change-wrapper">
            </div>
            </div>
                    <div class="timeline-name-wrapper">
            <a href="#" target="_blank">
               <?=$_SESSION['KesUseFname'];?>     </a>
                    </div>

</div>

    <div class="timeline-statistics-wrapper">
        <table border="0" width="100%" cellpadding="0" cellspacing="0">
        <tr>
                <td class="statistic" align="center" valign="middle">
                <a href="https://www.facebook.com/w3lessons.info" target="_blank">
                    1600+ Likes
                </a>
            </td>
                        <td class="statistic" align="center" valign="middle">
                <a href="#">
                    9000+ Subscribers
                </a>
            </td>
            <td class="statistic" align="center" valign="middle">
                <a href="#">
                    10000+ Page Views/day
                </a>
            </td>
            <td class="statistic" align="center" valign="middle">
                <a href="#">
                    5000+ Visitors/day
                </a>
            </td>
        </tr>
        </table>
    </div>

<div class="float-left span35">
        <div class="timeline-buttons cover-resize-buttons">
<br><br>
        <table border="0" width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" valign="middle">
                <a onclick="saveReposition();">Save Position</a>
            </td>
            <td align="center" valign="middle">
                <a onclick="cancelReposition();">Cancel</a>
            </td>
        </tr>
        </table>
        <form class="cover-position-form hidden" method="post">
            <input class="cover-position" name="pos" value="0" type="hidden">
        </form>
    </div>

<div class="timeline-buttons default-buttons">
<br><br>
        <table border="0" width="150" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" valign="middle">
                <a onclick="repositionCover();">Reposition cover</a>
            </td>
        </tr>
        </table>
    </div>
</div>
</div>
</div>
            
                    </div>
                        
                         <div class="blog-row"  style="padding:15px;">
                           <h2 class="mb30">Change Profile Pic</h2>
                                <form action="forms/uploadpics.php" method="post" enctype="multipart/form-data">  <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                     <label>Upload Profile Pic</label>
                                    <input name="uploadprofilepic" id="uploadprofilepic" type="file" class="form-control validate[optional, custom[validateMIME[image/jpeg|image/pjpeg|image/pjpeg|image/pjpeg]]] text-input" /> 
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <label>Upload Banner</label>
                                     <input name="uplaodbanner" id="uplaodbanner" type="file" class="form-control  validate[optional, custom[validateMIME[image/jpeg|image/pjpeg|image/pjpeg|image/pjpeg]]] text-input" /> 
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                               <div class="form-group mb5">
                            <input type="submit" class="btn btn-custom min-width" value="Upload Photo">
                        </div><!-- End .from-group -->
                        </div><!-- End .row -->
                                
                                </form>
                                </div>
                                <hr />
                          <div class="blog-row"  style="padding:15px;">
                           <h2 class="mb30">Change Password Profile</h2>
                                <form action="forms/changpassword.php" method="post" enctype="multipart/form-data">  <div class="row">
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
                               <div class="form-group mb5">
                            <input type="submit" class="btn btn-custom min-width" value="Update Password">
                        </div><!-- End .from-group -->
                        
                        </div><!-- End .row -->
                                
                                </form>
                                </div>
                                  <hr />
                            <div class="blog-row"  style="padding:15px;">
                             <h2 class="mb30">Edit Profile</h2>
                                <form action="forms/edituser.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                        
                       
                        
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="inputname" type="text" class="form-control validate[required] text-input" id="inputname" placeholder="Your Name" value="<?=$ssxgbw['inputname'];?>">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="inputlastname" type="text" class="form-control validate[required] text-input" id="inputlastname" placeholder="Your Lastname" value="<?=$ssxgbw['inputlastname'];?>">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->

                        <div class="row">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="inputemail" type="email" class="form-control validate[required,custom[email]] text-input" id="inputemail" placeholder="Email" value="<?=$ssxgbw['inputemail'];?>" readonly="readonly">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                   <label>Mobile Phone</label>
                                    <input name="mobileno" type="text" class="form-control validate[required] text-input" id="mobileno" placeholder="Mobile Phone" value="<?=$ssxgbw['mobileno'];?>">
                                </div><!-- End .from-group -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
                        
                      
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
                       

                        <div class="mb10"></div><!-- space -->

                        <div class="form-group mb0">
                            <div class="checkbox">
                              <label class="custom-checkbox-wrapper">
                                <span class="custom-checkbox-container">
                                    <input type="checkbox" id="tocagree" name="tocagree" value="true" class="validate[required] checkbox" checked  disabled="disabled">
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
                                    <input type="checkbox"  id="newsletter" name="newsletter"  value="true" class="validate[required] checkbox" checked disabled="disabled">
                                    <span class="custom-checkbox-icon"></span>
                                </span>
                               <span>I want to subscribe to newsletter.</span>
                              </label>
                            </div><!-- End .checkbox -->
                        </div><!-- End .form-group -->

                        <div class="form-group mb5">
                            <input type="submit" class="btn btn-custom min-width" value="Update Now">
                        </div><!-- End .from-group -->
                    </form>
                            </div><!-- End .row -->

                           
                        </div><!-- End .col-md-9 -->

                        <aside class="col-md-3 col-md-pull-9 sidebar">
                           
                           <? include("incfiles/myaccount_ader.php");?><!-- End .widget --><!-- End .widget --><!-- End .widget -->
                        </aside>
                    </div><!-- End .row -->
                </div>