<div class="col-md-12">
    <div class="row">
        <!-- this is main -->
        <div class="col-md-12 mainfile">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-md-10">
                    <h3>About Us</h3>
                    </div>
                    <div class="col-md-2">
                        <?php
                        if (isset($_SESSION['u_id'])) { ?>
                            <a class="nav-link active btn btn-danger" style="color: white;" aria-current="page"
                                href="<?php echo $mainurl; ?>?logoutuser"
                                onclick="return confirm('Are you sure to Logout as user ?')">&nbsp;<i
                                    class="bi bi-box-arrow-left"> <b>Logout</b></i></a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                    
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center">    
                           <a href=""><img class="img-fluid" src="<?php echo $baseurl;?>/image/about1.jpg"><br>Kishan</a>
                        </div>
                        <div class="col-md-6 text-center">    
                            <a href=""><img class="img-fluid" src="<?php echo $baseurl;?>/image/about.jpg"><br>Khushi</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

