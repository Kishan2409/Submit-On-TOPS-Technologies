<div class="col-md-12">
    <div class="row">
        <!-- this is main -->
        <div class="col-md-12 mainfile">
            <div class="container"><br>
                <h3>
                    Create Your Account With us...
                </h3>
                <hr>
            </div>
            <div class="container">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Enter Full Name :
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="fnm" placeholder="Enter Your Full Name" class="form-control "
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Enter User Name :
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="unm" placeholder="Enter User Name" class="form-control "
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Select Date of Birth :
                            </div>
                            <div class="col-md-9">
                                <input type="date" name="dob" placeholder="Enter Your Date Of Birth"
                                    class="form-control " required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Select Gender :
                            </div>
                            <div class="col-md-3">
                                <input type="radio" name="gender" value="Male" class="form-check-input" required> Male
                            </div>
                            <div class="col-md-3">
                                <input type="radio" name="gender" value="Female" class="form-check-input" required>
                                Female
                            </div>
                            <div class="col-md-3">
                                <input type="radio" name="gender" value="Other" class="form-check-input" required> Other
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Enter Email :
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="email" placeholder="Example @ Domain Name"
                                    class="form-control " required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Enter Password :
                            </div>
                            <div class="col-md-9">
                                <input type="password" name="pass" placeholder="Enter Your Password"
                                    class="form-control " required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Enter Confirm-password :
                            </div>
                            <div class="col-md-9">
                                <input type="password" name="con_pass" placeholder="Enter Your Confirm-password"
                                    class="form-control " required>
                                    
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Select Blood Group :
                            </div>
                            <div class="col-md-9">
                                <select name="blood_group">
                                <option> ---- Select Blood Group ----</option>
                                <?php
                                foreach ($showblood as $row) {
                                    ?>
                                    <option value="<?php echo $row["bg_id"];?>"><?php echo $row["bloodgroup"];?></option>
                                    
                                <?php
                                }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Enter Mobile Number :
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="mobile" placeholder="Enter Valid Mobile Number"
                                    class="form-control " required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Upload Profile Photo :
                            </div>
                            <div class="col-md-9">
                                <input type="file" name="ph" required
                                    class="form-control ">
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Enter Address :
                            </div>
                            <div class="col-md-6 mt-2">
                                <select name="city">
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
                            <div class="col-md-9 mt-2 offset-md-3 ">
                                <input type="text" name="pin" placeholder="Enter Your Area Pincode" class="form-control"
                                    required>
                            </div>
                            <div class="col-md-9 mt-2 offset-md-3">
                                <textarea name="add" placeholder="Enter Your Address" class="form-control"
                                    required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <input type="submit" name="sub" class="bt-red" value="Submit">
                    </div>
                    <div class="form-group m-2">
                        <input type="reset" name="Reset" class="bt-red" value="Reset">
                    </div>
                    <div class="form-group m-2">
                        <p class="text-black">Already have an account ? <a href="<?php echo $mainurl; ?>login">Login
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>