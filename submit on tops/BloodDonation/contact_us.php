<?php
if(!isset($_SESSION['u_id'])){
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
                    <h3>Contact Us</h3>
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
                <br>
                <form method="post">
                    <div class="row m-2">
                        <!-- <div class="col-md-6  form-group">
                            <input type="text" name="un" class="m-2 form-control" placeholder="Enter user name" required>
                        </div>
                        <div class="col-md-6  form-group ">
                            <input type="text" name="email" class="m-2 form-control" placeholder="Enter email" required>
                        </div> -->
                        <div class=" col-md-12 form-group ">
                            <input type="text" name="sube" class="m-2 form-control" placeholder="Enter Subject"
                                required>
                        </div>
                        <div class="col-md-12  form-group ">
                            <textarea type="text" name="message" class="m-2 form-control"
                                placeholder="Enter Your Message..." required></textarea>
                        </div>
                        <div class="col-md-12  form-group ">
                            <input type="submit" name="messagesend" class="bt-red m-2" value="Send Message">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>