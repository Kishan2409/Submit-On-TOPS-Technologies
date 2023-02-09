<?php 
if(!isset($_SESSION["a_id"]))
{
  echo "<script>
    window.location='./';
  </script>";
}
?>
<!-- main screen -->
<div class="row mt-2">
    <div class="col-md-12 main">
        <br>
        <h3>
           Manage User's
        </h3>
        <hr>
        <br>
        <div class="col-md-12" style="overflow: auto;">
            <table id="example" class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Profile</th>
                        <th>Full Name</th>
                        <th>User Name</th>
                        <th>Date Of Birth</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Blood Group</th>
                        <th>Mobile Number</th>
                        <th>City</th>
                        <th>Pincode</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($showuser as $row) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['u_id']; ?>
                            </td>
                            <td>
                                <img style="height: 100px; width: 120px;" class="img-fluid" src="../<?php echo $row['photo']; ?>">
                            </td>
                            <td>
                                <?php echo $row['fnm']; ?>
                            </td>
                            <td>
                                <?php echo $row['unm']; ?>
                            </td>
                            <td>
                                <?php echo $row['dob']; ?>
                            </td>
                            <td>
                                <?php echo $row['gender']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['pass']; ?>
                            </td>
                            <td>
                                <?php echo $row['bloodgroup']; ?>
                            </td>
                            <td>
                                <?php echo $row['mobile']; ?>
                            </td>
                            <td>
                                <?php echo $row['c_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['pincode']; ?>
                            </td>
                            <td>
                                <?php echo $row['address']; ?>
                            </td>
                            <td>
                            <a href="<?php echo $mainurl; ?>userupdateprofile?updateprofile=<?php echo $row['u_id'];?>"><i class="bi bi-pen"></i></a> | <a
                                    href="<?php echo $mainurl; ?>user?deleteuser=<?php echo $row['u_id'];?>" onclick="return confirm('Are you sure to Delete data ?')"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>