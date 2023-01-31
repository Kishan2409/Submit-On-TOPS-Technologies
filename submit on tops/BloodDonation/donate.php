<div class="col-md-12">
    <div class="row">
        <!-- this is main -->
        <div class="col-md-12 mainfile">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-md-10">
                        <h3>Donate Blood</h3>
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
                                        Enter Blood Donor Name &nbsp; <input type="text" name="dnm" class="mb-2 form-control"
                                            placeholder="Enter Blood Donor Name">
                                            Mobile Number &nbsp; 
                                            <input type="text" name="mn" class="mb-2 form-control"
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
                                    </div>
                                    <div class="col-md-12">
                                        Select Door To Door Service City
                                        <select name="dtdcity" class="mb-2 form-control">
                                            <option>---- Select City -----</option>
                                            <?php
                                            foreach ($showcity as $row) {
                                                ?>
                                                <option value="<?php echo $row["c_id"];?>"><?php echo $row["c_name"];?></option>
                                    
                                    <?php
                                    }
                                    ?>
                                </select>
                                    </div>
                                    <div class="col-md-12 ">
                                        Select Time & Date
                                        <input type="time" name="dtime" class="mb-2 ms-5 w-25">
                                        <input type="date" name="ddate" class="mb-2 ms-3 w-50">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" name="adddonor" value="Add Donor" class="mb-2 mt-2 btn btn-danger  form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 mt-3">
                            <h3 class="mb-3" style="color: brown;">list of people who need blood</h3>
                        </div>

                        <?php
                        foreach ($showreceiver as $row) {
                            ?>
                            <div class="col-md-4 p-2 mt-2 p-2 mb-3 shadow rounded-3">
                                <div class="row text-center">
                                    <div class="col-md-6">
                                        Receiver Name ::
                                    </div>
                                    <div class="col-md-6">
                                        <b>
                                            <?php echo " " . $row['r_nm']; ?>
                                        </b>
                                    </div>
                                    <div class="col-md-6">
                                        Contact Info ::
                                    </div>
                                    <div class="col-md-6">
                                        <b>
                                            <?php echo " " . $row['r_contact']; ?>
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
                                        Hospital Name::
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo " " . $row['h_nm']; ?><br>
                                    </div>
                                    <div class="col-md-6">
                                        Hospital Contact::
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo " " . $row['h_phone']; ?><br>
                                    </div>
                                    <div class="col-md-6">
                                        Hospital Address::
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo " " . $row['h_add']; ?><br>
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