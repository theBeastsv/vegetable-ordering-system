    <div class="widget">
    <div class="text-center s-widget m-b-25 dropdown" id="profile-menu">
                        <a href="" data-toggle="dropdown">
                            <img class="profile-pic animated" src="<?=$_SESSION['KesOnUserPIC'];?>" alt="">
                        </a>
                     
                        <h4 class="m-0"><?=$_SESSION['KesUseFname'];?></h4> 
                    </div>
      <hr>
    <h3 class="widget-title">MY ACCOUNT</h3>
        <ul class="fa-ul">
            <li class="active"><a href="editprofile.php">Edit Profile</a></li>
            <li><a href="mykart.php">My Cart</a></li>
            <li><a href="myorders.php">My Orders</a></li>
            <li><a href="myproduct.php">My Products</a></li>
            <li><a href="myinvoice.php">InVoice</a></li>
            <li><a href="trackorder.php">Track Order</a></li>
            <li><a href="mywallet.php">Wallet</a></li>
            <li><a href="logout.php" style="color:#F00">Logout</a></li>
        </ul>
    </div><!-- end .widget -->