<!-- main screen -->
<div class="row mt-2">
    <div class="col-md-12 main">
        <br>

        <h3>
            Update User Profile
        </h3>
        <hr>
        <div>
        <form method="post" enctype="multipart/form-data">
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="row col-md-12 mb-4">
                                <div class="col-md-3">
                                    <center>
                                <img class="img-fluid" style="border-radius: 50%; width: 110px; height: 110px;" src="../<?php echo $updateuserprofile[0]['photo']?>"></center>
                            </div>
                            <div class="col-md-9">
                                Update Profile Photo :                           
                                <input type="file" name="ph" class="form-control ">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Full Name :
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="fnm" value="<?php echo $updateuserprofile[0]['fnm']; ?>"
                                    placeholder="Enter Your Full Name" class="form-control " required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                User Name :
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="unm" value="<?php echo $updateuserprofile[0]['unm']; ?>"
                                    placeholder="Enter User Name" class="form-control " required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Update Date of Birth :
                            </div>
                            <div class="col-md-9">
                                <input type="date" name="dob" value="<?php echo $updateuserprofile[0]['dob']; ?>"
                                    placeholder="Enter Your Date Of Birth" class="form-control " required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Update Gender :
                            </div>
                            <div class="col-md-3">
                                <input type="radio" name="gender" value="Male"  class="form-check-input" required 
                                <?php
                                if($updateuserprofile[0]['gender']=='Male')
                                {
                                    echo "checked";
                                }?>>
                                Male
                            </div>
                            <div class="col-md-3">
                                <input type="radio" name="gender" value="Female" class="form-check-input" required
                                <?php
                                if($showuser[0]['gender']=='Female')
                                {
                                    echo "checked";
                                }?>>
                                Female
                            </div>
                            <div class="col-md-3">
                                <input type="radio" name="gender" value="Other" class="form-check-input" required
                                <?php
                                if($updateuserprofile[0]['gender']=='Other')
                                {
                                    echo "checked";
                                }?>>
                                Other
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Update Email :
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="email" value="<?php echo $updateuserprofile[0]['email']; ?>"
                                    placeholder="Example @ Domain Name" class="form-control " required>
                            </div>
                        </div>
                    </div>


                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Update Blood Group :
                            </div>
                            <div class="col-md-9">
                                <select name="blood_group">
                                    <option> ---- Select Blood Group ----</option>
                                    <?php
                                    foreach ($showblood as $row) {
                                        if ($row['bg_id'] == $updateuserprofile[0]['bg_id']) {
                                            ?>
                                            <option value="<?php echo $updateuserprofile[0]["bg_id"]; ?>" selected>
                                                <?php echo $updateuserprofile[0]["bloodgroup"]; ?></option>
                                            <?php
                                        } else {
                                            ?>
                                            <option value="<?php echo $row["bg_id"]; ?>"><?php echo $row["bloodgroup"]; ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Update Mobile Number :
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="mobile" maxlength="10" value="<?php echo $updateuserprofile[0]['mobile']; ?>"
                                    placeholder="Enter Valid Mobile Number" class="form-control " required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2">
                        <div class="row">
                            <div class="col-md-3">
                                Update Address :
                            </div>
                            <div class="col-md-6 mt-2">
                                <select name="city">
                                    <option>---- Select City -----</option>
                                    <?php
                                    foreach ($showcity as $row) {
                                        if ($row['c_id'] == $updateuserprofile[0]['c_id']) {
                                            ?>
                                            <option value="<?php echo $updateuserprofile[0]["c_id"]; ?>" selected><?php echo $updateuserprofile[0]["c_name"]; ?></option>
                                            
                                        <?php 
                                        } else {
                                            ?>
                                            <option value="<?php echo $row["c_id"]; ?>"><?php echo $row["c_name"]; ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-9 mt-2 offset-md-3 ">
                                <input type="text" name="pin"  maxlength="6" value="<?php echo $updateuserprofile[0]['pincode']; ?>"
                                    placeholder="Enter Your Area Pincode" class="form-control" required>
                            </div>
                            <div class="col-md-9 mt-2 offset-md-3">
                                <textarea name="add" placeholder="Enter Your Address" class="form-control"
                                    required><?php echo $updateuserprofile[0]['address']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-2 mb-3">
                    <input type="submit" name="updprofile" class="btn btn-danger form-control" value="Update Profile">
                    </div>
                </form>
        </div>

    </div>
</div>
