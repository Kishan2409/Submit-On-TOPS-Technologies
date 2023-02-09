<?php
if (!isset($_SESSION["a_id"])) {
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
            Manage Hospital
        </h3>
        <hr>
        <div style="overflow: auto;" class="col-md-12">
            <table class="table" id="example">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Hospital Name</th>
                        <th>Number</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($showhospital as $row) {
                        ?>
                        <tr>
                            <th>
                                <?php echo $row['h_id']; ?>
                            </th>
                            <td>
                                <?php echo $row['h_nm']; ?>
                            </td>
                            <td>
                                <?php echo $row['h_phone']; ?>
                            </td>
                            <td>
                                <?php echo $row['h_add']; ?>
                            </td>
                            <td>
                                <a href="<?php echo $mainurl; ?>updatehospital?updatehospital=<?php echo $row['h_id'];?>"><i class="bi bi-pen"></i></a> | <a
                                    href="<?php echo $mainurl;?>hospital?deletehospital=<?php echo $row['h_id'] ?>" onclick="return confirm('Are you sure to Delete data ?')"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
        <hr>
        <hr>
        <h3>Add Hospital Details Here</h3>
        <form method="post">
            <div class="form-group m-2">
                <input type="text" name="hnm" class="form-control" placeholder="Enter Hospital Name" required>
            </div>
            <div class="form-group m-2">
                <input type="text" name="number" class="form-control" placeholder="Hospital Number" required>
            </div>
            <div class="form-group m-2">
                <!-- <input type="text" name="add" class="form-control" placeholder="Hospital Address" required> -->
                <textarea name="add" class="form-control" placeholder="Hospital Address" required></textarea>
            </div>
            <div class="form-group m-2">
                <input type="submit" name="adhospital" class="bt-red" value="Add Hospital">
            </div>
        </form>
    </div>
</div>
