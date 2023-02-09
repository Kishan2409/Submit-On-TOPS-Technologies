<?php
if (!isset($_SESSION['u_id'])) {
    echo "<script>
    window.location='login'
    </script>";
}
?>
<div class="col-md-12">
    <div class="row">
        <!-- this is main -->
        <div class="col-md-12 mainfile">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-md-10">
                        <h3>Profile</h3>
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
                <div class="row">
                    <div class="col-md-12">
                        <h4 style="color: brown;">Wel-Come
                            <?php echo $showuser[0]['unm']; ?>
                        </h4>
                        <a href="<?php echo $mainurl; ?>changepass"
                            class="mt-3 float-end bi bi-key text-decoration-none"> Click here for change password</a>
                        <br><a href="<?php echo $mainurl;?>update_profile"
                            class="mt-3 bi bi-gear-fill text-decoration-none"> Update Profile</a>
                    </div>

                    <div class="row mt-5">
                        <?php
                        foreach ($showuser as $row) {
                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <center>
                                        <img class="img-fluid" style="border-radius:10%;"
                                        src="<?php echo $row['photo']; ?>"></center>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>User Name : </b>
                                            <?php echo $row['unm']; ?>
                                        </div>
                                        <div class="col-md-12">
                                            <b>Full Name : </b>
                                            <?php echo $row['fnm']; ?>
                                        </div>
                                        <div class="col-md-12">
                                            <b>Date of Birth : </b>
                                            <?php echo $row['dob']; ?><br>
                                        </div>
                                        <div class="col-md-12">
                                            <b>Gender : </b>
                                            <?php echo $row['gender']; ?><br>
                                        </div>
                                        <div class="col-md-12">
                                            <b>Email : </b>
                                            <?php echo $row['email']; ?><br>
                                        </div>
                                        <div class="col-md-12">
                                            <b>Blood Group : </b>
                                            <?php echo $row['bloodgroup']; ?><br>
                                        </div>
                                        <div class="col-md-12">
                                            <b>Mobile Number : </b>
                                            <?php echo $row['mobile']; ?><br>
                                        </div>
                                        <div class="col-md-12">
                                            <b>City : </b>
                                            <?php echo $row['c_name']; ?><br>
                                        </div>
                                        <div class="col-md-12">
                                            <b>Address : </b>
                                            <?php echo $row['address']; ?><br>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <b>Pincode : </b>
                                            <?php echo $row['pincode']; ?><br>
                                        </div>
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