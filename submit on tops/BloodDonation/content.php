<div class="col-md-12">
    <div class="row">
        <!-- this is main -->
        <div class="col-md-12 mainfile">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-md-10">
                        <h3> Importance of Blood ? </h3>
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

            </div>
            <hr>
            <div class="container">
                <br>
                <div class="row">
                    <video style="height: auto ; width: 100%;" src="<?php echo $baseurl; ?>videos/BloodDonation.mp4"
                        controls muted autoplay>
                </div><br>
                <h2 style="color: maroon;">Why Blood Is Needed?</h2>
                <p>
                    There are many reasons patients need blood.A common misunderstanding about blood usage
                    is that accident victims are the patients who use the most blood.Actually,people
                    needing the most blood include those:
                <ul>
                    <li>Being treated for cancer</li>
                    <li>Undergoing orthopedic surgeries</li>
                    <li>Undergoing cardiovascular surgeries</li>
                    <li>Being treated for inherited blood disorders</li>
                </ul>
                </p>
                <p>
                    In fact, according to a 2011 survey by the Department of Health and Human Services, here
                    is
                    the actual breakdown of how blood is used in the U.S.</p>
                <img style="width: 100%;" src="<?php echo $baseurl; ?>image/Blood-Usage-Platelets.jpg">
                <br>
                <img style="width: 100%;" src="<?php echo $baseurl; ?>image/Blood-Usage-Red-Cells.jpg">
            </div>
        </div>
    </div>