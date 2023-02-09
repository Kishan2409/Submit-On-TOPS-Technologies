<div class="col-md-12">
    <div class="row">
        <!-- this is main -->
        <div class="col-md-12 mainfile">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-md-10">
                        <h3>Receive Blood</h3>
                    </div>
                    <div class="col-md-2">
                        <?php
                        if (isset($_SESSION['u_id'])) { ?>
                            <a class="nav-link active btn btn-danger " style="color: white;" aria-current="page"
                                href="<?php echo $mainurl; ?>?logoutuser"
                                onclick="return confirm('Are you sure to Logout as user ?')">&nbsp;<i
                                    class="bi bi-box-arrow-left"> <b>Logout</b></i></a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <hr>
                <div class="col-md-12">
                    <p style="color: brown; font-size: larger;">Your Bloodgroup is <b>
                            <?php echo $showuser['0']['bloodgroup']; ?>
                        </b> </p>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                            Enter Blood Receiver Name &nbsp; 
                                            <input type="text" name="rnm" class="mb-2 form-control"
                                            placeholder="Enter Blood Receiver Name">

                                            Mobile Number &nbsp; 
                                            <input type="text" name="mn" maxlength="10" class="mb-2 form-control"
                                            placeholder="Enter Contact info">

                                            Select Donor Bloodgroup
                                            <select name="bloodgroup" class="mb-2 form-control">
                                                <option> ---- Select Bloodgroup ----</option>
                                                <?php
                                                foreach ($showblood as $row) {
                                                ?>
                                                    <option value="<?php echo $row["bg_id"]; ?>"><?php echo $row["bloodgroup"]; ?>
                                                    </option>
                                                <?php
                                                 }
                                                ?>
                                            </select>

                                            Select hospital for receive blood
                                            <select name="hospital" class="mb-2 form-control">
                                                <option> ---- Select Hospital ----</option>
                                                <?php
                                                foreach ($showhospital as $row) {
                                                ?>
                                                    <option value="<?php echo $row["h_id"]; ?>"><?php echo $row["h_nm"]; ?>
                                                    </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" name="addreceiver" value="Add receiver" class="mb-3 form-control btn-danger btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 mt-3">
                            <h3 class="mb-3" style="color: brown;">list of blood donar</h3>
                        </div>

                        <?php
                        foreach ($showdonor as $row) {
                            ?>
                            <div class="col-md-4 p-2 mt-2 p-2 mb-3 shadow rounded-3">
                                <div class="row text-center">
                                    <div class="col-md-6">
                                        Donor Name ::
                                    </div>
                                    <div class="col-md-6">
                                        <b>
                                            <?php echo " " . $row['d_nm']; ?>
                                        </b>
                                    </div>
                                    <div class="col-md-6">
                                        Contact Info ::
                                    </div>
                                    <div class="col-md-6">
                                        <b>
                                            <?php echo " " . $row['d_contact']; ?>
                                        </b>
                                    </div>
                                    <div class="col-md-6">
                                        Blood Group::
                                    </div>
                                    <div class="col-md-6">
                                        <b style="color: brown;">
                                            <?php echo " " . $row['bloodgroup']; ?>
                                        </b>
                                    </div>
                                    <div class="col-md-6">
                                        Donor City::
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo " " . $row['c_name']; ?><br>
                                    </div>
                                    <div class="col-md-6">
                                        Donate Date::
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo " " . $row['d_date']; ?><br>
                                    </div>
                                    <div class="col-md-6">
                                        Donate Time::
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo " " . $row['d_time']; ?><br>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>